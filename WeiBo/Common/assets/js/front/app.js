function initApp() {

	// pjax
	$(document).pjax('[data-pjax]', '#main_container');
	$(document).on('pjax:start', function () {
		$('.emoji_btn').remove();
	});
	$(document).on('submit', 'form[data-pjax]', function (e) {
		$.pjax.submit(e, '#main_container');
	});

	$('#register').click(function () {
		$('#login_modal').modal('hide');
	});

	//topbar
	var navbar = $('#navbar');
	navbar.find('li').on('click', function () {
		navbar.find('li').removeClass('active');
		$(this).addClass('active');
	});
	// mark the current tab
	navbar.find('a').each(function () {
		// add a slash to exclude similar pathname
		if ((location.pathname + '/').indexOf($(this).attr('href') + '/') != -1) {
			navbar.find('li').removeClass('active');
			$(this).parent().addClass('active');
		}
	});

	initLogin();
	initRegister();

}

function initPost() {
	var form = $('#post_form');
	var post = $('#post');
	var num = $('#number');
	// initForm(null, form, null, '发表成功', '发表失败');
	//输入内容计算字数
	post.focus(function () {
		$(this).emoji({
			icons: [{
				name: "QQ表情",
				path: "/vendor/img/qq/",
				maxNum: 91,
				excludeNums: [41, 45, 54],
				file: ".gif",
				placeholder: "#qq_{alias}#"
			}, {
				name: "贴吧表情",
				path: "/vendor/img/tieba/",
				maxNum: 50,
				file: ".jpg",
				placeholder: "#tieba_{alias}#"
			}]
		});
		var emojiTotal = $(this).find('img').length;
		var total = 280;
		var len = $(this).text().length;
		num.html(total - len - emojiTotal);
		if (num.html() < 0) {
			alert('超出范围');
		}
		$('#post_content').val($(this).html());
	});
	post.on('keyup click', function () {
		var emojiTotal = $(this).find('img').length;
		var total = 280;
		var len = $(this).text().length;
		num.html(total - len - emojiTotal);
		if (num.html() < 0) {
			alert('超出范围');
		}
		$('#post_content').val($(this).html());
	});

	$('.img').click(function () {
		$(this).hide();
		$(this).next().show();
	});

	$('.img-zoom').click(function () {
		$(this).hide();
		$(this).prev().show();
	});

}

function loadMore() {
	$loadMoreBtn = $('#load_more');
	window.scrollFlag = true;
	$load = function () {
		if (window.scrollFlag && $(document).scrollTop() > $loadMoreBtn.offset().top - 500) {
			if($('#load_more')){
				setTimeout(function () {
					$loadMoreBtn.attr('data-page', Number($loadMoreBtn.attr('data-page')) + 1);
					$.ajax({
						url: '/posts?page=' + $loadMoreBtn.attr('data-page'),
						type: 'GET',
						data: {},
						success: function (data) {
							if (data['status'] != false) {
								$('.media').last().append(data['data'])
							} else {
								$loadMoreBtn.html('没有更多了');
								window.scrollFlag = false;
							}
						}
					});
					window.scrollFlag = true;
				}, 1000);
			}
			window.scrollFlag = false;
		}
	};
	$(window).scroll($load);
}

function emailAutoComplete() {
	var arrs = [];
	var emails = [
		"qq.com",
		"163.com",
		"gmail.com",
		"129.com",
		"yahoo.com"
	];
	var email = $("#register_email");
	var inputVal = email.val();
	$.each(emails, function (index, info) {
		if (inputVal.indexOf("@") == -1) {
			//没有输入@
			arrs[index] = inputVal + "@" + info;
		} else {
			//输入@
			arrs[index] = inputVal.substring(0, inputVal.indexOf("@")) + "@" + info;
		}
	});
	email.autocomplete({
		source: arrs,
		autoFocus: true
	});
	//下面这行针对bootstrap浮层的input,解决无法显示的问题
	email.autocomplete("option", "appendTo", "#register_form");
}

function initLogin() {
	initForm(null, $('#login_form'), $('#login_modal'), '登录成功', '登录失败');
}

function initRegister() {
	$registerRules = {
		username: {
			remote: {
				url: '/check-username',
				type: 'POST',
				beforeSend: function () {
					$('#username-status').addClass('fa fa-refresh');
				},
				complete: function (jqXHR) {
					if (jqXHR.responseText == true) {
						$('#username-status').addClass('fa-check').removeClass('fa-refresh');
					} else {
						$('#username-status').removeClass('fa-refresh fa-check')
					}
				}
			}
		},
		email: {
			remote: {
				url: '/check-email',
				type: 'POST',
				beforeSend: function () {
					$('#email-status').addClass('fa fa-refresh');
				},
				complete: function (jqXHR) {
					if (jqXHR.responseText == true) {
						$('#email-status').removeClass('fa-refresh').addClass('fa-check');
					} else {
						$('#email-status').removeClass('fa-refresh fa-check')
					}
				}
			}
		}
	};
	initForm($registerRules, $('#register_form'), $('#register_modal'), '注册成功', '注册失败');
}

function initForm($rules, $form, $modal, success, fail) {
	//jquery validation
	var options = {
		rules: $rules,

		ignore: ".ignore",
		highlight: function (el) {
			$(el).closest('.form-group').addClass('has-error');
			$(el).closest('.form-group').find('.help-block').addClass('hidden');
			// remove the error message from the server
			// $(el).parent().find('i').html('&nbsp;').removeClass('fa fa-check');
		},
		unhighlight: function (el) {
			$(el).closest('.form-group').removeClass('has-error');
			// remove the error message from the server
			$(el).closest('.form-group').find('.help-block').addClass('hidden');
			// $(el).parent().find('i').html('&nbsp;').addClass('fa fa-check');
		},
		errorPlacement: function (error, element) {
			if (element.parent('.input-group').length) {
				error.insertAfter(element.parent());
			} else {
				error.insertAfter(element);
			}
		},
		submitHandler: function (form) {
			$.ajax({
				url: $(form).prop('action'),
				type: 'POST',
				data: $(form).serializeArray()
			}).done(function (data) {
				if (data == 'success') {
					swal(success, '', 'success');
					if ($modal) {
						$modal.modal('hide');
					}
					location.reload();
				} else {
					swal(fail, data, 'error');
				}
			});
		}
	};

	$form.validate(options);
}
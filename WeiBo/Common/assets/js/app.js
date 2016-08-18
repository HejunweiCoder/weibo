function initApp() {

	// pjax
	// $(document).pjax('a', '#main');
	// $.pjax.reload('#main');

	$('#register').click(function () {
		$('#login-modal').modal('hide');
	});

	initLogin();
	initRegister();
}

function initLogin() {
	initForm(null, $('#login-form'), $('#login-modal'), '登录成功', '登录失败');
}

function initRegister() {
	$registerRules = {
		username: {
			remote: {
				url: '/checkUsername',
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
				url: '/checkEmail',
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
	initForm($registerRules, $('#register-form'), $('#register-modal'), '注册成功', '注册失败');
}

function initSiteNavLeft() {
	var $navWrap = $('.list-group');
	// mark current item
	$navWrap.on('click', null, function () {
		if ($navWrap.find('a').attr('class').indexOf('list-group-item-header') != -1) {
			$navWrap.find('a').removeClass('active');
			$(this).addClass('active');
		}
	});
	// mark the current tab
	$navWrap.find('a').each(function () {
		if ((location.pathname + '/') == $(this).attr('href') + '/') {
			// add a slash to exclude similar pathname
			$navWrap.find('a').removeClass('active');
			$(this).addClass('active');
		}
	});

	var $member = $('.member');

	if ($member.attr('class').indexOf('active') != -1) {
		$member.parent().addClass('in');
	}

	var $weibo = $('.weibo');

	if ($weibo.attr('class').indexOf('active') != -1) {
		$weibo.parent().addClass('in');
	}
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
					$modal.modal('hide');
					location.reload();
				} else {
					swal(fail, data, 'error');
				}
			});
		}
	};

	$form.validate(options);
}
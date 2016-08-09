(function () {
	$(function () {
		$('#register').click(function () {
			$('#login-modal').modal('hide');
		});

		initForm($('#login-form'),$('#login-modal'),'登录成功','用户名或密码错误');
		initForm($('#register-form'),$('#register-modal'),'注册成功','注册失败');
	});

	function initForm($form,$modal,success,fail) {
		//jquery validation
		var options = {
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
					url:$(form).prop('action'),
					type: 'POST',
					data: $(form).serializeArray()
				}).done(function (data) {
					if(data == 'success'){
						swal(success,'','success');
						$modal.modal('hide');
						location.reload();
					}else{
						swal(fail,data,'error');
					}
				});
			}
		};

		$form.validate(options);
	}
})();
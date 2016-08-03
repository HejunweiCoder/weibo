$(function () {
	$('#register').click(function () {
		$('#loginModal').modal('hide');
	});

	//jquery validation
	var options = {
		ignore: ".ignore",
		highlight: function (el) {
			$(el).closest('.form-group').addClass('has-error');
			// remove the error message from the server
			$(el).closest('.form-group').find('.help-block').addClass('hidden');
		},
		unhighlight: function (el) {
			$(el).closest('.form-group').removeClass('has-error');
			// remove the error message from the server
			$(el).closest('.form-group').find('.help-block').addClass('hidden');
		},
		errorPlacement: function (error, element) {
			if (element.parent('.input-group').length) {
				error.insertAfter(element.parent());
			} else {
				error.insertAfter(element);
			}
		},
		// submitHandler: function (form) {
		// 	// there might be 2 submission buttons
		// 	$('#main_sidebar_container .btn-submit').prop('disabled', true).html('<i class="fa fa-spinner fa-spin"></i>正在提交...');
		// 	return true;
		// }
	};
	$('form').each(function () {
		$(this).validate(options);
	});
});
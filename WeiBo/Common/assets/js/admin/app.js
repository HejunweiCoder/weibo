/**
 * Created by He on 2016/8/17.
 */
$(function () {
	$(document).pjax('a', '#main_container');
	$(document).on('pjax:send', function () {
		topbar.show();
	}).on('pjax:complete', function () {
		topbar.hide();
	});

	//左侧导航
	var sideBar = $('#site_nav_left_wrap');
	sideBar.find('a').each(function () {
		if ($(this).attr('class').indexOf('list-group-item-header') == -1) {
			$(this).on('click', function () {
				sideBar.find('a').removeClass('active');
				$(this).addClass('active');
			})
		}
	})
});

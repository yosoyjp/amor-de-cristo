$(function(){
	var width = $(window).width(),
		menu = $('#menu > ul'),
		btn = $('#menu-btn'),
		icon = $('#menu-btn > i.icon');

	if(width <= 910){
		menu.hide();
		icon.addClass('icon-menu');
	}

	btn.on('click', function(e){
		menu.slideToggle();
		icon.toggleClass('icon-menu');
		icon.toggleClass('icon-chevron-up');
	});

	$(window).on('resize', function(){
		if($(this).width() > 910){
			menu.show();
			icon.addClass('icon-chevron-up');
			icon.removeClass('icon-menu');
		}else{
			menu.hide();
			icon.addClass('icon-menu');
			icon.removeClass('icon-chevron-up');
		}
	});

	$('#menu > ul > li').on('click', function(e){
		menu.slideToggle();
		icon.toggleClass('icon-menu');
		icon.toggleClass('icon-chevron-up');
	});
})
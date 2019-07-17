$(document).ready(function(){
	var heightWindow = $(window).height();
	// var heightfooter = $("footer").height();
	$("#elements").css('margin-top', heightWindow);
	// $("#sections").css('margin-bottom', heightfooter);


	$(document).ready(function () {
		$('.gmaps').gmaps();
	});
})
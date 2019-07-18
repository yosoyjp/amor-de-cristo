$(document).ready(function(){
	var heightHeader = $('header').height();
	$('#elements').css('margin-top', heightHeader);

    var widthElement = document.getElementById("list-team-area");
    widthElement = widthElement.scrollWidth;
    var widthSeeUser = $('#list-team-area').width();
    if(widthElement > widthSeeUser){
        $('#team-area > i').addClass('activ');
    }
});
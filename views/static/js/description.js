$(document).ready(function(){
	var heightHeader = $('header').height();
	$('#elements').css('margin-top', heightHeader);

    var widthElement = document.getElementById("list-team-area");
    widthElement = widthElement.scrollWidth;
    var widthSeeUser = $('#list-team-area').width();
    if(widthElement <= widthSeeUser){
        $('#team-area > i').hide();
    }

    $('#team-area > i.icon-chevron-right').click(function(e){               
        $('#list-team-area').animate({scrollLeft:'+=560'}, 500, "swing");
    });
    $('#team-area > i.icon-chevron-left').click(function(e){               
        $('#list-team-area').animate({scrollLeft:'-=560'}, 500, "swing");
    });
});
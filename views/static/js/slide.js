$(document).ready(function(){
	$('i.icon-chevron-right').click(function(e){               
        $('#list-events').animate({scrollLeft:'+=560'}, 500, "swing");
    });
    $('i.icon-chevron-left').click(function(e){               
        $('#list-events').animate({scrollLeft:'-=560'}, 500, "swing");
    });

    var widthElement = document.getElementById("list-events");
    widthElement = widthElement.scrollWidth;
    var widthSeeUser = $('#list-events').width();
    if(widthElement <= widthSeeUser){
        $('i.icon-chevron-right').hide();
        $('i.icon-chevron-left').hide();
    }
});
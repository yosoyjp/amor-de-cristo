$(document).ready(function(){
	$('i.icon-chevron-right').click(function(e){               
        $('#list-events').animate({scrollLeft:'+=560'}, 500, "swing");
    });
    $('i.icon-chevron-left').click(function(e){               
        $('#list-events').animate({scrollLeft:'-=560'}, 500, "swing");
    });

    var events = $(".event").toArray().length;
	var	widthContainer = events*280;
	$('#list-events').scroll(function(){
		if($('#list-events').width() + $('#list-events').scrollLeft() == widthContainer){
			$('i.icon-chevron-right').removeClass('activ');
		}else if($('#list-events').scrollLeft() == 0){
			$('i.icon-chevron-left').removeClass('activ');
		}else{
			$('i.icon-chevron-right').addClass('activ');
			$('i.icon-chevron-left').addClass('activ');
		}
	});
});
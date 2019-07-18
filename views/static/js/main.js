$(document).ready(function(){
	var heightWindow = $(window).height();
	$("#elements").css('margin-top', heightWindow);
    
    //Animacion para scroll hasta ancla
    $('a.anchor').click(function(e){               
        e.preventDefault();
        var strAncla=$(this).attr('href');
            $('body,html').stop(true,true).animate({                
                scrollTop: $(strAncla).offset().top
            },1000); 
    });

    document.onmousemove = function(e) {
        var x = e.clientX - 200;
        $('#areas').scrollLeft(x);
    };
});
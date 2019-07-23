$(document).ready(function(){
    var width = $(window).width();
    if(width > 767){
        var heightWindow = $(window).height();
        $("#elements").css('margin-top', heightWindow);
    }else{
        var heightHeader = $('#logo > a#img-logo > img').height();
        $("#elements").css('margin-top', heightHeader + 10);
    }

    $(window).on('resize', function(){
        var width = $(window).width();
        if(width > 767){
            var heightWindow = $(window).height();
            $("#elements").css('margin-top', heightWindow);
        }else{
            var heightHeader = $('#logo > a#img-logo > img').height();
            $("#elements").css('margin-top', heightHeader + 10);
        }
    });
    
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

    $('#see > i').click(function(e){
        if($('#list-leaders').height() == 220){
            $('#list-leaders').css({
                height: 'auto'
                });
        }else{
            $('#list-leaders').css({'height': '220px'});
        }
    });
});
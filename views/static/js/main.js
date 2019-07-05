$(document).ready(function(){
	var heightWindow = $(window).height();
	// var heightfooter = $("footer").height();
	$("#elements").css('margin-top', heightWindow);
	// $("#sections").css('margin-bottom', heightfooter);

    //Funcion reduccion de header por scoll
    var scroll;
    $(window).scroll(function(){
        scroll = $(window).scrollTop();
        var action = parseFloat($(window).height())-parseFloat('20px')
        if(scroll < action){
            $('#logo').css({'height': '110px', 'margin': '15px 0px', 'width': '40%'});
            $("#menu").fadeIn(100);
            $("header").css({'background': 'rgba(255, 255, 255, 0.4)', 'border-bottom': 'none'});
        }else{
            $('#menu').fadeOut(100);
            $('#logo').css({'height': '70px', 'margin': '5px 0px', 'width': '28%'});
            $("header").css({'background': 'white', 'border-bottom': 'solid 2px rgb(199, 199, 199)'});
        }
    });

	//Funcion para salir de modal
	$(document).keyup(function(e){
        if(e.which==27) {
            hideSuper();
        }
    });
    // $("#super").click(function(){
    //     hideSuper();
    // });

    //margen de altura de seccion superior del footer
    var heightfup = parseFloat($('#fup').height()/2);
    $('#fup').css({'margin-top': '-' + heightfup +'px'});
    $('#fmedium').css({'padding-top': parseFloat(heightfup + 40) +'px'})
})

function hideSuper(){
    $('#super').hide();
    $('#super').removeClass("visible");
    $('#super').addClass("hidden");
    $('html, body').css({
        'overflow': 'auto',
        'height': 'auto'
    });
}

function login(){
    $('#super').hide();
    $('#super').removeClass("hidden");
    $('#super').addClass("visible");
    $('#super').show();
    $('html, body').css({
        'overflow': 'hidden',
        'height': '100%'
    });
}
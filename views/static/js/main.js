$(document).ready(function(){
	var heightWindow = $(window).height();
	$("#elements").css('margin-top', heightWindow);
    
    //margen de altura de seccion superior del footer
    var heightfup = parseFloat($('#fup').height()/2);
    $('#fup').css({'margin-top': '-' + heightfup +'px'});
    $('#fmedium').css({'padding-top': parseFloat(heightfup + 40) +'px'});

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

    var visible=false;
    $('.remember-see').click(function(){
        visible = remember_see(visible);
    });

    $('#send').click(function(){
        if($(this).attr('class') == 'remember-see'){
            visible = remember_see(visible);
            hideSuper();
            Swal.fire({
                position: 'center',
                type: 'success',
                title: 'Hemos enviado un mensaje a tu correo',
                showConfirmButton: false,
                timer: 1500
            })
        }
    });

    //Funcion para salir de modal
    $(document).keyup(function(e){
        if(e.which==27) {
            hideSuper();
            setTimeout(
                function(){
                    $('#container-login input').val("");
                }
            ,200);
            if(visible==true){
                visible = remember_see(visible);
            }
        }
    });
});

$('#image-map').ready(function(){
    var padre = $('area').parent();
    $(padre).addClass('padre');

    $('area').mouseover(function(){
        $(padre).addClass('padreover');
    });

    $('area').mouseout(function(){
        $(padre).removeClass('padreover');
        $(padre).addClass('padre');
    });
});

// Funcion para recuperar cuenta
function remember_see(v){
    if(v == false){
        $('#password').slideUp();
        $('#title-login').animate({'margin-top': '-8rem'}, function(){
            $('#back-login').css({'visibility': 'visible'});
            $('#title-login').text("");
            $('#title-login').append('&nbsp;&nbsp;Recuperar Cuenta');
            $('#back-login').animate({'margin-top': '0rem'});
            $('#title-login').animate({'margin-top': '0rem'});
        });
        $('#send').text("Enviar");
        $('#send').addClass("remember-see");
        $('#remember-text').hide();
        $('#remember-text').text("Ingresa tu nombre de usuario y enviaremos una clave temporal a tu correo.");
        $('#remember-text').slideDown();
        $('#remember').slideUp();
        v = true;
    }else{
        $('#password').slideDown();
        $('#title-login').animate({'margin-top': '-8rem'}, function(){
            $('#back-login').css({'visibility': 'hidden'});
            $('#title-login').text("");
            $('#title-login').append('Iniciar Sesión');
            $('#title-login').animate({'margin-top': '0rem'});
        });
        $('#send').text("Entrar");
        $('#send').removeClass("remember-see");
        $('#remember-text').slideDown();
        $('#remember-text').text("");
        $('#remember').slideDown();
        $('#container-login input').val("");
        v = false;
    }
    return v;
}

function hideSuper(){
    $('#super').fadeOut(200);
    setTimeout(
        function(){
            $('#super').removeClass("visible");
            $('#super').addClass("hidden");
            $('html, body').css({
                'overflow': 'auto',
                'height': 'auto'
            });
        }
    ,200);
}

function login(){
    $('#super').hide();
    $('#super').removeClass("hidden");
    $('#super').addClass("visible");
    $('#super').fadeIn(200);
    $('html, body').css({
        'overflow': 'hidden',
        'height': '100%'
    });
}

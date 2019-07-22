$(document).ready(function(){
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

    $('#login > i.icon-cross').click(function(){
        visible = remember_see(visible);
        hideSuper();
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

// Funcion para recuperar cuenta
function remember_see(v){
    if(v == false){
        $('#password').slideUp();
        $('#title-login').animate({'margin-top': '-8rem'}, function(){
            $('#back-login').css({'display': 'block'});
            $('#title-login').text("");
            $('#title-login').css({'display': 'inline-flex'});
            $('#title-login').append('&nbsp;&nbsp;Recuperar Cuenta');
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
            $('#back-login').css({'display': 'none'});
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
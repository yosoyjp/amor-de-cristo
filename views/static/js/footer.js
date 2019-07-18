$(document).ready(function(){
    //margen de altura de seccion superior del footer
    var heightfup = parseFloat($('#fup').height()/2);
    $('#fup').css({'margin-top': '-' + heightfup +'px'});
    $('#fmedium').css({'padding-top': parseFloat(heightfup + 40) +'px'});
});
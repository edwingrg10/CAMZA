if ($('input[name="usuario"]').val().length === 0){
    $('input[name="usuario"]').addClass('warning');
    $('input[name="usuario"]').attr("placeholder","Campo requerido");
     erros = 1;
 }
 else {
 $('input[name="usuario"]').removeClass('warning');
 }

if ($('input[name="pass"]').val().length === 0) {
  $('input[name="pass"]').addClass('warning');
  $('input[name="pass"]').attr("placeholder","Introduzca una contraseña");
  erros = 1;
}
else if($('input[name="pass"]').val().length < 8) {
    $('input[name="pass"]').addClass('warning');
    $('input[name="pass"]').attr("placeholder","Introduzca una contraseña mayor a 8 caracteres");
    $('input[name="pass"]').val('');
    erros = 1;      
      }
else {$('input[name="pass"]').removeClass('warning');}//fim

//repetir password
var passwordcheckval = $("#pass-check").val();
  if (passval != passwordcheckval) {
    $('input[name="cpass"]').addClass('warning');
    $('input[name="cpass"]').attr("placeholder","Las contraseñas no coinciden");
    $('input[name="pass"]').addClass('warning');
    $('input[name="cpass"]').val('');
  erros = 1;
  }
  else if ( passwordcheckval === 0 ){
  $('input[name="cpass"]').addClass('warning');
    erros =1;
  } 
  else {$('input[name="cpass"]').removeClass('warning');}//fim da pass


  $(".submit").click(function(){
    var captchadesafio = Recaptcha.get_challenge();
    var captcharesposta= Recaptcha.get_response();
   
   $.ajax({  
              type: "POST",
              url: '/php/verifycaptcha.php',
              data: { 'desafio=': captchadesafio, 'resposta=': captcharesposta }  
          }).done(function( msg ) {
      alert( "Data Saved: " + msg );
    });
  
  });
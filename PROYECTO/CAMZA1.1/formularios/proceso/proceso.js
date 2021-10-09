function showRecaptcha(element) {
           Recaptcha.create("6LdvEO8SAAAAACHjXu1Z6D2HIF9OcqMPW2yw8KOf", element, {
             theme: "clean",
             lang: "pt",
             callback: Recaptcha.focus_response_field});
         }


//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches
var fieldsetn = 1;
var emailantigo;
var passval;
    
//click
$(".next").click(function(){
  var erros = 0;
	//verificação de erros no primeiro fieldset
  if (fieldsetn == 1) {
 
  }//fim do fieldset numero 1

  //fieldset numero 3
  
  else if ( fieldsetn == 3) { //fieldset numero 3
   
  
  }//fim do fieldset numero 3
  

  
    
   if (fieldsetn == 4){

    }//fim do fieldset numero 4
      
      
  if (erros === 0){//inicio da animação
    if(animating) return false;
	  animating = true;
	  fieldsetn = fieldsetn +1;
	  current_fs = $(this).parent();
	  next_fs = $(this).parent().next();  
      
	  //activate next step on progressbar using the index of next_fs
	  $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
	
    	//show the next fieldset
	  next_fs.show(); 
	  //hide the current fieldset with style
	  current_fs.animate({opacity: 0}, {
	  	step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale current_fs down to 80%
	  		scale = 1 - (1 - now) * 0.2;
			//2. bring next_fs from the right(50%)
		  	left = (now * 50)+"%";
		  	//3. increase opacity of next_fs to 1 as it moves in
			  opacity = 1 - now;
		  	current_fs.css({'transform': 'scale('+scale+')'});
		  	next_fs.css({'left': left, 'opacity': opacity});
		  }, 
		  duration: 800, 
		  complete: function(){
			  current_fs.hide();
			  animating = false;
		  }, 
		  //this comes from the custom easing plugin
		  easing: 'easeInOutBack'
	  });
  }//fim da animação  
});//fim do click

$(".previous").click(function(){
	if(animating) return false;
	animating = true;
  fieldsetn = fieldsetn - 1;
	
	current_fs = $(this).parent();
	previous_fs = $(this).parent().prev();
	
	//de-activate current step on progressbar
	$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
	
	//show the previous fieldset
	previous_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale previous_fs from 80% to 100%
			scale = 0.8 + (1 - now) * 0.2;
			//2. take current_fs to the right(50%) - from 0%
			left = ((1-now) * 50)+"%";
			//3. increase opacity of previous_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'left': left});
			previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});




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

//funcion para mostrar input de Todos


function MostrarInput(){
	var valImpulso = $("#otroImpulso").val();
	
	if(valImpulso == 8){
	  $("#otroImpulso").css("display","block");
	}
	else{
	  $("#otroImpulso").css("display","none");
	}
  }

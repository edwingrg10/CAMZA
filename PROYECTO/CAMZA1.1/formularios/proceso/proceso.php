<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Registro Proceso-CAMZA</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="proceso.css">
     <link rel="shortcut icon" href="../../images/logos/nav.png">	
    


  </head>
  <body>
<!-- multistep form -->
<form id="msform" action="../../php/registroproceso.php" method="POST">
	<!-- progressbar -->
	<ul id="progressbar">
		<li class="active">Tu proceso</li>
		<li>Descubrir</li>
		<li>Caja de sueños</li>
        <li>Finalizar</li>
	</ul>
	<!-- fieldsets -->
	<fieldset>
		<h2 class="fs-title">Tu proceso</h2>
    <h3 class="fs-titlesub">Permitenos conocerte mejor</h3>
		 <select name="droga">
       <option disabled selected value = "0">Seleciona la droga que consumes</option>
       <option value="Alcohol">Alcohol</option>
       <option value="Anfetamina (Speed, Pep)">Anfetamina (Speed, Pep)</option>
       <option value="Antidepresivos tricíclicos (TCA)">Antidepresivos tricíclicos (TCA)</option>
       <option value="Barbitúricos (Barbs, Barbis, Downers)">Barbitúricos (Barbs, Barbis, Downers)</option>
       <option value="Bupremorfina">Bupremorfina</option>
       <option value="Benzodiacepina (Benzos, Rophys, Dias)">Benzodiacepina (Benzos, Rophys, Dias)</option>
       <option value="Cannabis (Marihuana, Porro, Hierba)">Cannabis (Marihuana, Porro, Hierba)</option>
       <option value="Cocaína (Perico, Nieve)">Cocaína (Perico, Nieve)</option>
       <option value="Cotinina">Cotinina</option>
       <option value="EDDP (Metabolitos-Metadona)">EDDP (Metabolitos-Metadona)</option>
       <option value="Éxtasis (XTC, Droga del amor, Adam)">Éxtasis (XTC, Droga del amor, Adam)</option>
       <option value="Fenciclidina (Polvo de ángel, Píldora de la paz)">Fenciclidina (Polvo de ángel, Píldora de la paz)</option>
       <option value="Fentalino (Fentora, Cina White)">Fentalino (Fentora, Cina White)</option>
       <option value="Ketamina (Spezial K, Ket, Lady K, Kitty)">Ketamina (Spezial K, Ket, Lady K, Kitty)</option>
       <option value="LSD (Acid)">LSD (Acid)</option>
       <option value="MDA (Hug drug)">MDA (Hug drug)</option>
       <option value="Metanfetamina (Crystal, Ice)">Metanfetamina (Crystal, Ice)</option>
       <option value="Metadona (Meta)">Metadona (Meta)</option>
       <option value="Metacualona (Seven-one-fours, Seventeen, Lemmon714)">Metacualona (Seven-one-fours, Seventeen, Lemmon714)</option>
       <option value="Opiáceos (Stoff, Sugar H, White Stuf)">Opiáceos (Stoff, Sugar H, White Stuf)</option>
       <option value="Oxicodona">Oxicodona</option>
       <option value="Paracetamol (PCM)">Paracetamol (PCM)</option>
       <option value="Propoxifeno (Darvon)">Propoxifeno (Darvon)</option>
       <option value="Spice/K2 (Marihuena sintética, Fuego de Yuncatán, Llamarada solar)">Spice/K2 (Marihuena sintética, Fuego de Yuncatán, Llamarada solar)</option>
       <option value="Tramadol (Tramal)">Tramadol (Tramal)</option>
       <option value="Zolpidem">Zolpidem</option>
    </select> 
		<select id = "dosis" name ="dosis">
       <option disabled selected value ="0">¿Cuántas dosis consumes al día?</option>
       <option value="1">1</option>
       <option value="2">2</option>
       <option value="3">3</option>
       <option value="4">4</option>
       <option value="5">5</option>
       <option value="6">6</option>
       <option value="7">7</option>
       <option value="8">8</option>
       <option value="9">9</option>
       <option value="10">10</option>
       <option value="mas">Más</option>
    </select>     
    <input id="precio" type="text" name="precio" placeholder="¿Cuánto te cuesta cada dosis?" />
	<input id="fecha_consumo" type="text" name="fecha_consumo" placeholder="Fecha aproximada en la que comenzaste a consumir" onclick="ocultarError();" onfocus="(this.type='date')" onblur="(this.type='text')">
    <select id = "causa" name ="causa">
      <option disabled selected value ="0">Las drogas llegaron a tu vida por:</option>
     <option value="Gusto y experimentación">Gusto y experimentación</option>
     <option value="Simplemente por estar a la moda">Simplemente por estar a la moda</option>
     <option value="Solución fácil a mis problemas">Solución fácil a mis problemas</option>
    </select>
    <input id="razon" type="text" name="razon" placeholder="¿Cuál fue la razón que te impulso a entrar al consumo?" />
    <select name="persona"  id="persona"  >
      <option disabled selected value ="0">¿Quién te impulso a consumir?</option>
      <option value="Nadie, lo hice por decisión propia">Nadie, lo hice por decisión propia</option>
      <option value="Mis amigos">Mis amigos</option>
      <option value="Mis compañeros de clase">Mis compañeros de clase</option>
      <option value="Mis compañeros de trabajo">Mis compañeros de trabajo</option>
      <option value="Mi familia">Mi familia</option>
      <option value="Mis vecinos">Mis vecinos</option>
      <option value="La sociedad">La sociedad</option>
      <option value="8">Otros</option>    
    </select> 
    <input id="otroImpulso" type="text" name="persona_otro" placeholder="Otro" />
    
		<input type="button" name="next" class="next action-button" value="Siguiente" />
  </fieldset>

  <fieldset>    
		<h2 class="fs-title">Descubrir</h2>
    <h3 class="fs-titlesub">Para ayudarte de la mejor manera</h3>
    <!-- <input id="actividad" type="text" name="actividad" placeholder="¿Qué actividad te calma la ansiedad de consumir?" /> -->
    <div class="ayuda"><p>¿Has buscado ayuda?</p></div>
    <div class="caja1"> <div class="caja3"><input id="ayuda" type="radio" name="ayuda" value="si" /></div><div class="texto1">Si</div>
    <div class="caja2"><input id="ayuda" type="radio" name="ayuda" value="no"/></div><div class="texto2">No</p></div></div>
    <input id="payuda" type="text" name="payuda" placeholder="¿A quién acudiste?" />
    <div class="ayuda"><p>¿En qué etapa del consumo te encuentras?</p></div>
    <input type="radio" value="Etapa Experimental" name="etapa">Etapa Experimental
    <input type="radio" value="Etapa Abuso-Social" name="etapa">Etapa Abuso-Social
    <input type="radio" value="Etapa Dependiente" name="etapa">Etapa Dependiente
    <input type="radio" value="Etapa Disfuncional" name="etapa">Etapa Disfuncional
  </div>     
    </div>

		<input type="button" name="previous" class="previous action-button" value="Anterior" />
		<input type="button" name="next" class="next action-button" value="Siguiente" />
	</fieldset>

	<fieldset>
		<h2 class="fs-title">Caja de sueños</h2>
    <h3 class="fs-titlesub">Transmite aquí lo que siente tu corazón</h3>
    <textarea id="sueño" name="sueño" placeholder="¿Qué te motiva a salir del consumo?" cols="40" rows="6"></textarea>
    <input id="inspiracion" type="text" name="inspiracion" placeholder="¿Quién o quiénes te inspira al cambio?" cols="40" rows="6" />
    <textarea id="cambio" type="text" name="cambio" placeholder="¿Cuál es tu sueño más profundo al cambiar?" cols="40" rows="6"></textarea>
       
		<input type="button" name="previous" class="previous action-button" value="Anterior" />
		<input type="button" name="Next" class="next action-button" value="Siguiente" />
	</fieldset>

  <fieldset>
		<h2 class="fs-title">Finalizar</h2>
    <h3 class="fs-titlesub">¡FELICIDADES POR DAR ESTE PRIMER PASO!</h3>
    <h4 class="">Asume este reto con mucha valentía, recuerda que estás luchando para alcanzar</h4>
    <h3 class="fs-titlesub" style="color: #fcac8f;">LA MEJOR VERSIÓN DE TI</h3>
    <div><img src="../../images/formulario/form.png" style="height: 300px; width: 320px; margin-top: -70px;"></div>

		<input type="button" name="previous" class="previous action-button" value="Anterior" />
    <input type="submit"  class="submit action-button" value="Registar" /></form>
	</fieldset>
</form>
<!-- ?php
		if(isset($_POST['droga']) && isset($_POST['dosis']) && isset($_POST['precio']) && isset($_POST['fecha_consumo']) && isset($_POST['causa']) && isset($_POST['razon']) && isset($_POST['persona'])&& isset($_POST['ayuda']) && isset($_POST['payuda']) && isset($_POST['etapa']) && isset($_POST['sueño']) && isset($_POST['inspiracion']) && isset($_POST['cambio'])){
			require_once "../../php/conexion.php";
			require_once "../../php/registroproceso.php";
		}
	?> -->
  
<script src="http://thecodeplayer.com/uploads/js/jquery-1.9.1.min.js" type="text/javascript"></script>


<script src="proceso.js" type="text/javascript"></script>
<!-- jQuery easing plugin -->
<script src="http://thecodeplayer.com/uploads/js/jquery.easing.min.js" type="text/javascript"></script>

</body>
</html>
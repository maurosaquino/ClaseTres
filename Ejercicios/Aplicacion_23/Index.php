<!DOCTYPE html>
<html>
<head>
	<title>Programacion III - Aplicacion XXIII - Mauro Aquino</title>
	    <script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
        <link rel="stylesheet" href="css/style.css">

</head>
<body>

<div id="pricing-table" class="clear">
    <div class="plan">
        <h3><span>ROJO</span></h3>
        <form>
        <select name = "valor">
  		<option value="1">#FF0000</option>
  		<option value="2">#990000</option>
  		<option value="3">#CC0000</option>
		</select>     
        <input type= "submit" class="signup" value="Cambiar color" name="rojo">  
    	</form>
    </div>
    <div class="plan" id="clear">
        <h3><span>NEGRO</span></h3>
        <form>
        <select name = "valor">
  		<option value="1">#000000</option>
  		<option value="2">#202020</option>
  		<option value="3">#404040</option>
		</select>     
        <input type= "submit" class="signup" value="Cambiar color" name="negro">  
    	</form>    
    </div>
    <div class="plan">
        <h3><span>BLANCO</span></h3>
        <form>
        <select name = "valor">
  		<option value="1">#FFFFFF</option>
  		<option value="2">#E0E0E0</option>
  		<option value="3">#C0C0C0</option>
		</select>     
        <input type= "submit" class="signup" value="Cambiar color" name="blanco">  
    	</form>
    </div>
    <div class="plan">
        <h3><span>NARANJA</span></h3>
        <form>
        <select name = "valor">
  		<option value="1">#FF8000</option>
  		<option value="2">#FF9933</option>
  		<option value="3">#FFB266</option>
		</select>     
        <input type= "submit" class="signup" value="Cambiar color" name="naranja">  
    	</form>
    </div>
    <div class="plan">
        <h3><span>VERDE</span></h3>
        <form>
        <select name = "valor">
  		<option value="1">#009900</option>
  		<option value="2">#00FF00</option>
  		<option value="3">#00CC00</option>
		</select>     
        <input type= "submit" class="signup" value="Cambiar color" name="verde">  
    	</form>
    </div> 	
   <div class="plan">
        <h3><span>AZUL</span></h3>
        <form>
        <select name = "valor">
  		<option value="1">#0000CC</option>
  		<option value="2">#000099</option>
  		<option value="3">#0000FF</option>
		</select>     
        <input type= "submit" class="signup" value="Cambiar color" name="azul">  
    	</form>
    </div> 	
</div>
    
        <script src="js/index.js"></script>



</body>
</html>

<?php

/*
Realizar una página que posea sólo un control <select> (lista de opciones), con seis nombres de colores como opciones (y su correspondiente código RGB como valor asociado), y un control <input> (type=”button”) con la leyenda “Cambiar Color”. 
La funcionalidad de la aplicación es sencilla, se selecciona un color del combo, se pulsa el botón y el color de fondo de la página cambia a dicho color. 
*/


if(isset($_REQUEST['rojo'])){

	switch($_REQUEST['valor']){
	
	case 1:
	echo '<body bgcolor="#FF0000">';	
	unset($_REQUEST['rojo']);
	unset($_REQUEST['valor']);

	case 2:

	echo '<body bgcolor="#990000">';	
	unset($_REQUEST['rojo']);
	unset($_REQUEST['valor']);

	case 3:
	
	echo '<body bgcolor="#CC0000">';	
	unset($_REQUEST['rojo']);
	unset($_REQUEST['valor']);
	
	}
	
}

if(isset($_REQUEST['negro'])){
		
	switch($_REQUEST['valor']){
	
	case 1:
	echo '<body bgcolor="#000000">';	
	unset($_REQUEST['negro']);
	unset($_REQUEST['valor']);

	case 2:

	echo '<body bgcolor="#202020">';	
	unset($_REQUEST['negro']);
	unset($_REQUEST['valor']);

	case 3:
	
	echo '<body bgcolor="#404040">';	
	unset($_REQUEST['negro']);
	unset($_REQUEST['valor']);
	
	}
	
}

if(isset($_REQUEST['blanco'])){
		
	switch($_REQUEST['valor']){
	
	case 1:
	echo '<body bgcolor="#FFFFFF">';	
	unset($_REQUEST['blanco']);
	unset($_REQUEST['valor']);

	case 2:

	echo '<body bgcolor="#E0E0E0">';	
	unset($_REQUEST['blanco']);
	unset($_REQUEST['valor']);

	case 3:
	
	echo '<body bgcolor="#C0C0C0">';	
	unset($_REQUEST['blanco']);
	unset($_REQUEST['valor']);
	
	}
	
}


if(isset($_REQUEST['naranja'])){
		
	switch($_REQUEST['valor']){
	
	case 1:
	echo '<body bgcolor="#FF8000">';	
	unset($_REQUEST['naranja']);
	unset($_REQUEST['valor']);

	case 2:

	echo '<body bgcolor="#FF9933">';	
	unset($_REQUEST['naranja']);
	unset($_REQUEST['valor']);

	case 3:
	
	echo '<body bgcolor="#FFB266">';	
	unset($_REQUEST['naranja']);
	unset($_REQUEST['valor']);
	
	}
	
}


if(isset($_REQUEST['verde'])){
		
	switch($_REQUEST['valor']){
	
	case 1:
	echo '<body bgcolor="#009900">';	
	unset($_REQUEST['verde']);
	unset($_REQUEST['valor']);

	case 2:

	echo '<body bgcolor="#00FF00">';	
	unset($_REQUEST['verde']);
	unset($_REQUEST['valor']);

	case 3:
	
	echo '<body bgcolor="#00CC00">';	
	unset($_REQUEST['verde']);
	unset($_REQUEST['valor']);
	
	}
	
}

if(isset($_REQUEST['azul'])){
		
	switch($_REQUEST['valor']){
	
	case 1:
	echo '<body bgcolor="#000099">';	
	unset($_REQUEST['azul']);
	unset($_REQUEST['valor']);

	case 2:

	echo '<body bgcolor="#0000FF">';	
	unset($_REQUEST['azul']);
	unset($_REQUEST['valor']);

	case 3:
	
	echo '<body bgcolor="#0000CC">';	
	unset($_REQUEST['azul']);
	unset($_REQUEST['valor']);
	
	}
	
}







?>
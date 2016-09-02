<!DOCTYPE html>
<html>
<head>
	<title>Programacion III - Aplicacion XXX - Mauro Aquino</title>
	<link rel="stylesheet" type = "text/css" href="style.css">
</head>
<body>

<div class="login-block">
<h1>SELECCIONAR DESTINO</h1>

<form>
<select id="a" name="valor">
  <option name="valor" value="rio">Rio de Janeiro</option>
  <option name="valor" value="pde">Punta del Este</option>
  <option name="valor" value="lh">La Habana</option>
  <option name="valor" value="miami">Miami</option>
  <option name="valor" value="ibiza">Ibiza</option>
</select><BR>
<button id="boton" type="submit" name="boton" value="mostrar">MOSTRAR</button>
</form>
</div>


</body>
</html>


<?php 

/*
Aplicación Nº 29 (Empresa de turismo) 
Una empresa de turismo ofrece cinco destinos: Río de Janeiro, Punta del Este, La Habana, Miami e Ibiza. Se pide hacer una página que posea un <select> con los cinco destinos y un botón que le permita al usuario ver el valor del viaje. 
Los valores de los viajes son: €900, €550, €1000, €1250 y €1500 respectivamente. 
*/

if (isset($_REQUEST['boton'])){

	switch($_REQUEST['valor']){

		case 'rio':
		echo '<br> <br> <div class="login-block"><h1>PRECIO<br><br>€900</h1></div><br>';
		unset($_REQUEST['valor']);
		break;

		case 'pde':
		echo '<br> <br> <div class="login-block"><h1>PRECIO<br><br>€550</h1></div><br>';
		unset($_REQUEST['valor']);
		break;

		case 'lh':
		echo '<br> <br> <div class="login-block"><h1>PRECIO<br><br>€1000</h1></div><br>';
		unset($_REQUEST['valor']);
		break;

		case 'miami':
		echo '<br> <br> <div class="login-block"><h1>PRECIO<br><br>€1250</h1></div><br>';
		unset($_REQUEST['valor']);
		break;

		case 'ibiza':
		echo '<br> <br> <div class="login-block"><h1>PRECIO<br><br>€1500</h1></div><br>';
		unset($_REQUEST['valor']);
		break;
	}


}





?>
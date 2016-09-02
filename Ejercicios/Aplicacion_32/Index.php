<!DOCTYPE html>
<html>
<head>
	<title>Programacion III - Aplicacion XXXII - Mauro Aquino</title>
	<link rel="stylesheet" type = "text/css" href="style.css">
</head>
<body>

<div class="login-block">
<h1>INGRESAR IMPORTE TOTAL DE LA CONSUMICIÓN</h1>

<form method="post">
<input id="a" type="text" name="cuenta"><br>

<?php

	if (isset($_REQUEST['cuenta']) && isset($_REQUEST['boton'])){

	if(is_numeric($_REQUEST['cuenta'])){

		if (floatval($_REQUEST['cuenta']) >=300 && floatval($_REQUEST['cuenta'])<=550){

			echo '<h1 id="lat">IMPORTE: '.$_REQUEST['cuenta'].'<br><br>DESCUENTO: 10% <br> <br>TOTAL A PAGAR: $'.round(floatval($_REQUEST['cuenta']) - (floatval($_REQUEST['cuenta'])*0.10),2);
		
			}elseif(floatval($_REQUEST['cuenta'])>=550){

			echo '<h1 id="lat">IMPORTE: '.$_REQUEST['cuenta'].'<br><br>DESCUENTO: 20% <br> <br>TOTAL A PAGAR: $'.round(floatval($_REQUEST['cuenta']) - (floatval($_REQUEST['cuenta'])*0.20),2);
			}else{

			echo '<h1 id="lat">IMPORTE: '.$_REQUEST['cuenta'].'<br><br>DESCUENTO: 0% <br> <br>TOTAL A PAGAR: $'.round(floatval($_REQUEST['cuenta']),2);

		}
	}else{

		echo '<h1> EL VALOR DEL IMPORTE DEBE SER NUMERICO';


	}
	echo '</h1>';
	}


?>

<button id="boton" type="submit" name="boton" value="mostrar">CALCULAR IMPORTE A PAGAR</button>
</form>
</div>


</body>
</html>


<?php 

/*Aplicación Nº 32 (Descuento por Compra) 
Un restaurante ofrece un descuento del 10% para consumos entre $ 300 y $ 550 y un descuento del 20% para consumos mayores a $ 550. Para todos los demás casos no se aplica ningún tipo de descuento. 
Elaborar una aplicación web que permita determinar el importe a pagar por el consumidor. */

?>
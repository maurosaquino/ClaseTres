<!DOCTYPE html>
<html>
<head>
	<title>Programacion III - Aplicacion XXIX - Mauro Aquino</title>
	<link rel="stylesheet" type = "text/css" href="style.css">
</head>
<body>

<div class="login-block">
<h1>SELECCIONAR DESTINO (PROMOCION)</h1>

<form method="post">
<select id="a" name="des">
  <option value="rio">Rio de Janeiro</option>
  <option value="pde">Punta del Este</option>
  <option value="lh">La Habana</option>
  <option value="miami">Miami</option>
  <option value="ibiza">Ibiza</option>
</select><BR>
<h1> CANTIDAD DE PASAJES </h1>
<select id="a" name="cantp">
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
</select><BR>
  <div id="a">
  <input type="radio" name="mpag" value="eft" checked> EFECTIVO
  <input type="radio" name="mpag" value="trj"> TARJETA<br>
  </div><br>
  <button id="boton" type="submit" name="boton" value="mostrar">MOSTRAR</button>
</form>
</div>


</body>
</html>


<?php 

/*
Aplicación Nº 30 (Empresa de turismo con promociones) 
Modificar la aplicación anterior para que la empresa pueda ofrecer una promoción de acuerdo al modo de pago y la cantidad de pasajes a comprar. 
Si el pago es en efectivo se realizará un descuento del 12% del valor del pasaje. Si es por medio de tarjetas de crédito o débito el descuento será del 7%. 
Independientemente de la forma de pago, si la cantidad de pasajes es superior a 2 cada pasaje extra se abonará el 35% menos. 
Los valores de los viajes son: €900, €550, €1000, €1250 y €1500 respectivamente. 
*/

if (isset($_REQUEST['boton']) && isset($_REQUEST['mpag']) && isset($_REQUEST['cantp']) && isset($_REQUEST['des'])){

function pago($cantp,$mpag,$des){

	//verifica el metodo de pago
	if($mpag=='eft'){ 
	
		$desmpag = 0.12;
	
		}else{ 
	
		$desmpag = 0.07;
	}

	//verifica cantidad de pasajes extra
	if($cantp>2){

		$cantpe = $cantp-2;
		$decpe=0.35;
		
		}else{

		$decpp=0;
	}

	//verifica el destino
	switch ($des){

				case 'rio':
				
				$vpas = 900;
				break;

				case 'pde':
				
				$vpas = 550;
				break;

				case 'lh':
				
				$vpas = 1000;
				break;

				case 'miami':

				$vpas = 1250;
				break;

				case 'ibiza':

				$vpas = 1500;
				break;
	}

	$decce = ($vpas*$cantpe) *$decpe;
	$desmpag = ($vpas*$cantp) * $desmpag;

	$preciototal = ($vpas*$cantp) - $decpe - $desmpag;

	return $preciototal;
}

echo '<br> <br> <div class="login-block"><h1>PRECIO TOTAL<br><br>€'.pago($_REQUEST['cantp'],$_REQUEST['mpag'],$_REQUEST['des']).'</h1></div><br>';
unset($_REQUEST['des']);
unset($_REQUEST['mpag']);
unset($_REQUEST['cantp']);
}



?>
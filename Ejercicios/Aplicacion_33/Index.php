<!DOCTYPE html>
<html>
<head>
	<title>Programacion  III - Aplicacion XXXIII - Mauro Aquino</title>
	<link  rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="table-title">
<h3 id="fill">INGRESE EL NUMERO A CALCULAR</h3>
<form>
<input type="text" name="numero" id="texto"><BR><BR>
<button type="sumbit" name="boton" value="calcular">CALCULAR</button>
</form>
</div>

</body>
</html>


<?php

/*

Aplicación Nº 33 (Información del Número) 
Construya una aplicación que permita el ingreso de un número entero y muestre en pantalla la siguiente información: 
1) Cantidad de cifras que posee.
2) Suma de cifras impares del número.
3) Suma de cifras pares del número.
4) Suma total de todas las cifras del número. 
5) Todos los divisores de dicho número. 
Mostrar los anteriores datos en una tabla convenientemente diseñada.

*/

if(isset($_REQUEST['boton']) && isset($_REQUEST['numero'])){

	//validar que es un numero
	$var = $_REQUEST['numero'];
	$vaux = 0;
	$vaimp = 0;
	$vap = 0;	
	$sumtot = 0;
	$divisoresstr = ' ';
	$divisores=array();
	$array = array();

	if(is_numeric($var)){

				
				$array = str_split($var);
				//DESCARTA EL VALOR FLOAT
				$var=intval($var);

				
				
				//CANTIDAD DE CARACTERES
				$cantc=strlen($var);

				foreach($array as $vaux){

					echo intval($vaux);

					if (intval($vaux) % 2 == 0){

						//SUMA DE LOS IMPARES
						$vaimp = $vaimp+intval($vaux);

					}else{

						//SUMA DE LOS PARES
						$vap = $vap + intval($vaux);

					}

					//SUMA TOTAL DE TODAS LAS CIFRAS DEL NUMERO
					$sumtot = $sumtot + intval($vaux);

				}

				//TODOS LOS DIVISORES DEL NUMERO

				for($x=1;$x<=$var;$x++){

					if($var % $x == 0)
					{

						$divisores[] = $x;

					}

				}

				foreach($divisores as $aux){

				$divisoresstr = $divisoresstr . ", " .$aux; 

				}


			}else{

				echo '<div class=table-title><h3 id=fill>EL VALOR DEBE SER NUMERICO</h3></div>';
				unset($_REQUEST['numero']);
	}


	echo '	<table class="table-fill">
		  	<thead>
		  	<tr>
			<th class="text-left">Numero</th>
			<th class="text-left">Cantidad de Cifras</th>
			<th class="text-left">Suma de Impares</th>
			<th class="text-left">Suma de Pares</th>
			<th class="text-left">Suma total</th>
			<th class="text-left">Divisores</th>
			</tr>
			</thead>
			<tbody class="table-hover">
			<tr>
			<td class="text-left">'.$var.'</td>
			<td class="text-left">'.$cantc.'</td>
			<td class="text-left">'.$vap.'</td>
			<td class="text-left">'.$vaimp.'</td>
			<td class="text-left">'.$sumtot.'</td>
			<td class="text-left">'.$divisoresstr.'</td>
			</tr>
			</tbody>
			</table>';

}



?>
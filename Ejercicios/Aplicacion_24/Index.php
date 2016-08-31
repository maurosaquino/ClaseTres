<!DOCTYPE html>
<html>
<head>
	<title>Programación III - Aplicación XIV - Mauro Aquino</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/reset.css">
	<link rel='stylesheet prefetch' href='http://www.carlcalderon.com/pen/base.css'>




</head>
<body>

<body>

  <section id="content">
    <h1>Generación  de Tablas<br><br></h1>
    <form>
	<div class="table-title"><h3>Filas</h3>
	<select class="styled-select" name = "fila">
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
  	</select>
  	</div>
  	<div class="table-title"><h3>Columnas</h3>
	<select class="styled-select" name = "columna">
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
	</select>
	</div>
	<br><br>
	<input class="MiBotonUTN" type= "submit" value="Generar Tabla" name="aceptar">  
    </form>
  </section>

</body>
</html>


<?php


/*
Aplicación Nº 24 (Generar Tabla III) 
Utilizando tags de Html (<table>, <tr> y <td>) se pide generar en forma dinámica una tabla. Dicha tabla se formará a partir de los valores de dos controles de tipo <select>. Cada uno de estos controles contendrá valores desde el 1 hasta el 50. 
Al pulsar el control <input> (type=”button”) con la leyenda “Generar Tabla”, se invocará a un procedimiento que creará la tabla a partir de la cantidad seleccionada de filas y columnas. 
*/

if (isset($_REQUEST['aceptar'])){

echo '<section  id="content2"><br>
<div>
<h1>Tabla Generada</h1>
</div><br>
<div class="table-title">
<h3>Data Table</h3>
</div>
<table class="table-fill">';
for ($y=0; $y<(int)$_REQUEST['fila']; $y++){

if($y==0){

	echo '<thead>';

	} elseif($y==1){

	echo '<tbody class="table-hover">';

	}

	echo '<tr class="text-left">';
	echo '<td class="text-left">Fila</td>';
	
for ($x=0;$x<((int)$_REQUEST['columna']-1);$x++){

	echo '<td class="text-left">Columna</td>';

}		

echo '</tr>';

if($y==0){

echo '</thead>';

}


}

echo '</tbody> </table> </section>';

}


?>


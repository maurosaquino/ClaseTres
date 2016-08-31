<?php

/*
Aplicación Nº 24 (Generar Tabla III) 
Utilizando tags de Html (<table>, <tr> y <td>) se pide generar en forma dinámica una tabla. Dicha tabla se formará a partir de los valores de dos controles de tipo <select>. Cada uno de estos controles contendrá valores desde el 1 hasta el 50. 
Al pulsar el control <input> (type=”button”) con la leyenda “Generar Tabla”, se invocará a un procedimiento que creará la tabla a partir de la cantidad seleccionada de filas y columnas. 
*/

if (isset($_REQUEST['aceptar'])){

echo '
<div>
<h1>Tabla Generada</h1>
</div><br>
<div class="table-title">
<h3>Data Table</h3>
</div>
<table class="table-fill">
<thead>
<tr>
<th class="text-left">Month</th>
<th class="text-left">Sales</th>
</tr>
</thead>
<tbody class="table-hover">
<tr>
<td class="text-left">January</td>
<td class="text-left">$ 50,000.00</td>
</tr>
<tr>
<td class="text-left">February</td>
<td class="text-left">$ 10,000.00</td>
</tr>
<tr>
<td class="text-left">March</td>
<td class="text-left">$ 85,000.00</td>
</tr>
<tr>
<td class="text-left">April</td>
<td class="text-left">$ 56,000.00</td>
</tr>
<tr>
<td class="text-left">May</td>
<td class="text-left">$ 98,000.00</td>
</tr>
</tbody>
</table>';
}

var_dump($_REQUEST);


?>
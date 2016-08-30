<html>

<head>
	<title>Programacion III - Clase III - Mauro Aquino</title>
</head>

<body>

<form method="post" action="destino.php">
	<input type="text" name="mensaje">
	<input type="submit">
</form>
</body>


</html>


<?php

//Variable superglobal $_REQUEST en mayus, son dinamicas $_REQUEST (toma todo) | $_GET | $_POST 
//(Cuando se utiliza post no se cargan mas los datos en base a la direccion)

echo "<br> Voy a mostrar la variable REQUEST <br>";

var_dump($_REQUEST);

echo "<br> Voy a mostrar la variable GET <br>";


var_dump($_GET);


echo " <br> Voy a mostrar la variable POST <br>";

var_dump($_POST);

//isset() es la funcion para validar que la variable superglobal este inicializada

if(isset($_POST['mensaje'])){

echo " <br>". $_POST['mensaje']. "<br>";

}

?>


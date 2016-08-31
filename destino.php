<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link rel="stylesheet" type="text/css" href="animacion.css">
</head>
<body>

</body>
</html>

<?php

//Include inserta el codigo del archivo en la pagina actual, se pueden sumar varios pedazos de codigo en uno

if (strlen($_REQUEST['mensaje'])<5){


	include "menoracinco.php";

	} else{

		echo '<div class="MiBotonUTN">';

		include "mayoracinco.php";

		echo '</div>';
}


?>


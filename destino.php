<?php

//Include inserta el codigo del archivo en la pagina actual, se pueden sumar varios pedazos de codigo en uno

if (strlen($_REQUEST['mensaje'])<5){

	include "menoracinco.php";

	} else{

		include "mayoracinco.php";

}


?>
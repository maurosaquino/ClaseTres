<?php

//Include manda a la pagina

if (strlen($_REQUEST['mensaje'])<5){

	include "menoracinco.html";

	} else{

		include "mayoracinco.html";

}


?>
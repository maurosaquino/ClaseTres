<!DOCTYPE html>
<html>
<head>
	<title>Programación III - Aplicación XXVIII - Mauro Aquino</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<h1>SELECCIONAR QUE MOSTRAR</h1>
<form>
   <br><h1>DIA 
  	<div class="roundedOne">  
      <input type="checkbox" value="dia" id="roundedOne" name="valoruno" />
      <label for="roundedOne"></label>
    </div>	
     MES 
  	<div class="roundedOne">  
      <input type="checkbox" value="mes" id="roundedTwo" name="valordos" />
      <label for="roundedTwo"></label>
    </div>	
    AÑO
  	<div class="roundedOne">  
      <input type="checkbox" value="año" id="roundedThree" name="valortres" />
      <label for="roundedThree"></label>
    </div>	
    </h1>
 	<div class="login-block">
    <button id="boton" type="submit" name="Mostrar" value="mostrar">
    MOSTRAR
    </button>
    </div>
</form>


</body>
</html>


<?php

/*
Aplicación Nº 28 (Mostrar fecha) 
Realizar una página que permita mostrar el día, mes o año actual, según lo elija el usuario. Para esto debe utilizar controles de tipo <input> (type=”checkBox”) y un <input> (type=”button”) para enviar la solicitud al servidor. Mostrar la fecha en la misma página.
*/

if (isset($_REQUEST['Mostrar'])){

	echo '<div class="login-block">';
	if(isset($_REQUEST['valoruno'])){

		echo '<h1> '.date("d"). '</h1>';
		unset($_REQUEST['valoruno']);

	}

	if (isset($_REQUEST['valordos'])){

		echo '<h1> '.date("m"). '</h1>';
		unset($_REQUEST['valordos']);		

	}

	if (isset($_REQUEST['valortres'])){

		echo '<h1> '.date("Y"). '</h1>';
		unset($_REQUEST['valortres']);
	}
	echo '</div>';

}



?>
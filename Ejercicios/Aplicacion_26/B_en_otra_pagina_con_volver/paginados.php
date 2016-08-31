<html>
<head>
	<title>Programacion III - Aplicaciòn XXVI - Mauro Aquino</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
    


<?php

 if (isset($_REQUEST['calculo'])){
   
    if ($_REQUEST['calculo'] == 'superficie'){
        
        echo '<div class="login-card">';
        echo '<h1>Superficie</h1>';
  
         if (isset($_REQUEST['alto']) && isset($_REQUEST['ancho'])) {
 
            echo $_REQUEST['alto'] * $_REQUEST['ancho'];
 
        }
 
        echo '</div>';
     } else {
    
        echo '<div class="login-card">';
        echo '<h1>Area</h1>';
  
        if (isset($_REQUEST['alto']) && isset($_REQUEST['ancho'])) {
 
            echo (2*$_REQUEST['alto'] + 2*$_REQUEST['ancho']);
        }

        echo '</div>';

        } 
  }
?>

  <div class="login-card">
	<form action="Index.html">
	<br>
	<input class="login-submit" type="submit" value="Volver">
	</form>

  </div>


</body>
</html>


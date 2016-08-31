<html>
<head>
	<title></title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-card">
    <h1>SUPERFICIE</h1><br>

    
  <div class="login-help">

	<?php


	if (isset($_REQUEST['alto']) && isset($_REQUEST['ancho'])) {

	echo $_REQUEST['alto'] * $_REQUEST['ancho'];

	}


	?>

	<form action="Index.php">
	<br>
	<input class="login-submit" type="submit" value="Volver">
	</form>

  </div>


</body>
</html>


<!DOCTYPE html>
<html>
<head>
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<meta charset="UTF-8">

<title>Programacion III - Aplicaciòn XXV - Mauro Aquino</title>
<style>
body {
    background: url('http://i.imgur.com/Eor57Ae.jpg') no-repeat fixed center center;
    background-size: cover;
    font-family: Montserrat;
}

.logo {
    width: 213px;
    height: 36px;
    background: url('http://i.imgur.com/fd8Lcso.png') no-repeat;
    margin: 30px auto;
}

.login-block {
    width: 320px;
    padding: 20px;
    background: #fff;
    border-radius: 5px;
    border-top: 5px solid #ff656c;
    margin: 0 auto;
}

.login-block h1 {
    text-align: center;
    color: #000;
    font-size: 18px;
    text-transform: uppercase;
    margin-top: 0;
    margin-bottom: 20px;
}

.login-block input {
    width: 100%;
    height: 42px;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #ccc;
    margin-bottom: 20px;
    font-size: 14px;
    font-family: Montserrat;
    padding: 0 20px 0 50px;
    outline: none;
}

.login-block input#username {
    background-size: 16px 80px;
    background-color: white;
}

.login-block input#username:focus {
    background-size: 16px 80px;
    background-color: white;
}

.login-block input#password {
    background-size: 16px 80px;
    background-color: white;
}

.login-block input#password:focus {
    background-size: 16px 80px;
    background-color: white;
}

.login-block input#radio{
    width: 100%;
    height: 20px;
    background: #ff656c;
    box-sizing: content-box;
    border-radius: 5px;
    border: 1px solid #e15960;
    color: #fff;
    font-weight: bold;
    text-transform: uppercase;
    font-size: 14px;
    font-family: Montserrat;
    outline: none;
    cursor: pointer;
}

.login-block input#boton{
    width: 100%;
    height: 40px;
    background: #ff656c;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #e15960;
    color: #fff;
    font-weight: bold;
    text-transform: uppercase;
    font-size: 14px;
    font-family: Montserrat;
    outline: none;
    cursor: pointer;




}


</style>
</head>

<body>


<div class="login-block">
    <h1>Indique los datos del rectangulo</h1>
    <form>
    <input  type="text" value="" placeholder="Alto del Rectangulo" id="username" name = "alto" />
    <input  type="text" value="" placeholder="Ancho del Rectangulo" id="password"  name = "ancho"/>
    <h1>Calcular superficie</h1>
    <input  type="radio" id= "radio" name="calculo" value="superficie" checked>
    <h1>Calcular area</h1>
    <input  type="radio" id= "radio" name="calculo" value="srea">
    <input  class="login-block" type="submit" value="Calcular" id="boton">
	</form>
</div>





</body>

</html>

<?php

 if (isset($_REQUEST['calculo'])){
   
    if ($_REQUEST['calculo'] == 'superficie'){
        
        echo '<div class="login-block">';
        echo '<h1>Superficie</h1>';
  
         if (isset($_REQUEST['alto']) && isset($_REQUEST['ancho'])) {
 
            echo $_REQUEST['alto'] * $_REQUEST['ancho'];
 
        }
 
        echo '</div>';
     } else {
    
        echo '<div class="login-block">';
        echo '<h1>Area</h1>';
  
        if (isset($_REQUEST['alto']) && isset($_REQUEST['ancho'])) {
 
            echo (2*$_REQUEST['alto'] + 2*$_REQUEST['ancho']);
        }

        echo '</div>';

        } 
  }
?>
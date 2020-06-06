<?php
//Declara las variables que se recibiran del formulario
$RFC = $_POST['RFC'];
$name= strtoupper($_POST['Nombre']);
$AptPat= strtoupper($_POST['apPaterno']);
$AptMat= strtoupper($_POST['apMaterno']);
$Date= $_POST['nacimiento'];
//Declarar en una variable la letra del arreglo que se necesite para poder validar el RFC
$LetraName= $name[0];
$LetraAptPat1= $AptPat[0];
$LetraAptPat2= $AptPat[1];
$letraAptMat= $AptMat[0];
$Anio1 = $Date [2];
$Anio2 = $Date [3];
$Mes1 = $Date [5];
$Mes2 = $Date [6];
$Dia1 = $Date [8];
$Dia2 = $Date [9];
//Declarar las varibles que se van a comparar del RFC que se recibio para compararlos con el nombre y fecha de nacimiento
$RFC1 = $RFC[0];
$RFC2 = $RFC[1];
$RFC3 = $RFC[2];
$RFC4 = $RFC[3];
$RFC5 = $RFC[4];
$RFC6 = $RFC[5];
$RFC7 = $RFC[6];
$RFC8 = $RFC[7];
$RFC9 = $RFC[8];
$RFC10 = $RFC[9];
//Declarar las varibales que tendran los valores de los arrys concatenados
$Verifica = $LetraAptPat1.$LetraAptPat2.$letraAptMat.$LetraName.$Anio1.$Anio2.$Mes1.$Mes2.$Dia1.$Dia2;
$RFCform = $RFC1.$RFC2.$RFC3.$RFC4.$RFC5.$RFC6.$RFC7.$RFC8.$RFC9.$RFC10;
//Si el RFC dado es igual al que se obtienene del nombre y la fecha de nacimiento entrara al if
if ($Verifica == $RFCform){
  //Recibira la contraseña dada por el usuario
  $pass = $_POST['pass'];
  //Validara que la contrseña sea segura utilizando un preg_match
  if(preg_match('/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=!\?]{8,20}$/', $pass)) {
    //Imprimira que la contraseña es segura
    echo "La contraseña es segura<br>";
    //Imprimira un mensaje de bienvenido
    echo"Bienvenido";
  }
  else{
    //Imprimira que la contraseña no es segura
    echo "La contraseña $pass no es segura (Una contraseña segura tiene una longitud entre 8 y 25 caracteres, tiene almenos una letra mayúscula o minúscula, un dígito, o los símbolos @ # \ - _ $ % ^ & + = ! \ ?)<br>";
    //Imprimira un link para regresar al formulario
    echo "<a href='../Templates/Actividad7.2.html'>Regresar al formulario</a>";
  }
}
//Si no entro al if hara el else
else{
  //Recibira la contraseña dada por el usuario
  $pass = $_POST['pass'];
  //Validara que la contrseña sea segura utilizando un preg_match
  if(preg_match('/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=!\?]{8,20}$/', $pass)) {
    //Imprimira que el RFC dado es un dato invalido pero que la contraseña es segura
    echo "La contraseña es segura pero ".$RFC." es un dato invalido<br>";
    //Imprimira un link que te redireccionara al formulario
    echo "<a href='../Templates/Actividad7.2.html'>Regresar al formulario</a>";
  }
  else{
    //Imprimira que la contrseña no es segura y que el RFC es un dato invalido
    echo $RFC." es un dato invalido y la contraseña $pass no es segura (Una contraseña segura tiene una longitud entre 8 y 25 caracteres, tiene almenos una letra mayúscula o minúscula, un dígito, o los símbolos @ # \ - _ $ % ^ & + = ! \ ?)<br>";
    //Imprimira un link que te redireccionara al formulario
    echo "<a href='../Templates/Actividad7.2.html'>Regresar al formulario</a>";
  }
}
 ?>

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
    //Imprimira un mensaje de bienvenido
    echo"Bienvenido";
  }
  //Si no entro al if hara el else
  else{
    //Imprimira que el RFC dado es un dato invalido
    echo $RFC." es un dato invalido<br>";
    //Imprimira un link el cual te regresara al inicio
    echo "<a href= '../Templetes/Actividad7.1.html'>Regresar al formulario</a>";
  }
?>

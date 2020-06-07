<?php
  //Declarar las variables recibidas
  $mensaje = $_POST['texto'];
  $llave = $_POST['key'];
  //Declarar una variable con las letras del abecedario
  $ABC = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"];
  //Que a la llave se le aumente un 1
  $llave += 1;
  //Para almacebar el nuevo abecedario con base a los movimientos que se hagan
  $NuevoABC = "";
  //Recorrer mientras i sea menor al contador de ABC, i va a ir aumentando
  for ($i=0; $i < count($ABC); $i++) {
    //Si la llave mas i es mayor que contador de ABC hara el if
    if($i+$llave > count($ABC)) {
      //Desclarar variable que va a ser i mas llave menos contador de ABC
      $dif = $i+$llave - count($ABC);
      //Decalarar un nuevo array que sera el valor de la varible ABC array de i
      $NuevoABC[$dif] = $ABC[$i];
    }
    //Si no hace el if hara el else
    else {
      //El nuevo ABC seria la varible i mas la llave igual a varible ABC del array del i
      $NuevoABC[$i+$llave] = $ABC[$i];
    }
  }
  //El nuevo array tendra un remplazo para comas y espacios
  $NuevoABC = str_ireplace(" ", "", $NuevoABC);
  //Recorrer mientras i sea menor a 26, i va ir aumentando
  for ($i=0; $i < 26; $i++) {
  //La varible mensaje sera el remplzo de ABC, del nuevoABC y de mensaje
  $mensaje = str_ireplace($ABC[$i], $NuevoABC[$i], $mensaje);
  }
  //Imprimira el mensaje cifrado
  echo "Su mensaje codificado es: ".strtoupper($mensaje);
?>

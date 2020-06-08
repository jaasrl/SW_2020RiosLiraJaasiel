<?php
//Declara las variables recibidas
$Peticion=$_POST['Peticion'];
$Mensaje=$_POST['text'];
//Si la peticion es igual a la cadena cifrar entrara al if
if($Peticion == "Cifrar"){
//Declara la funcion que encriptara
  function encriptar($text, $key) {
    //Declarar la variable result que tomara los valores del return
    $result ='';
      //recorrer hasta que i sea mayor a strlen($text), sino i va a aumentar
      for($i=0; $i<strlen($text); $i++) {
        //Para substraer un caracter en especifico  de $text
        $char = substr($text, $i, 1);
        //Para substarer un caracter en especifico  de $key
        $keychar = substr($key, ($i % strlen($key))-1, 1);
        //Devolver los caracteres ASCII y ordenar $char mas $keychar
        $char = chr(ord($char)+ord($keychar));
        //Obtener los carcateres ASCII
        $result.=$char;
      }
    //Regresar el resultado en base 64
    return base64_encode($result);
  }
  //Usar la funcion encriptar para cifrar el mensaje con la llave que se ocupara
  $cadena_encriptada = encriptar("$Mensaje","128");
  //Imprimir la cadena encriptada
  echo"Mensaje cifrado: ".$cadena_encriptada;
  //Un link que te regresara a Formulario.html
  echo "<br><a href='../Templates/Formulario.html'>Regresar</a>";
}
else{
  //Declarra la funcion de desencriptar
  function desencriptar($text, $key) {
    //Declarar la variable result que tomara los valores del return
    $result = '';
    //Quitar la base 64
    $text = base64_decode($text);
    //recorrer hasta que i sea mayor a strlen($text), sino i va a aumentar
    for($i=0; $i<strlen($text); $i++) {
      //Para substraer un caracter en especifico  de $text
      $char = substr($text, $i, 1);
      //Para substarer un caracter en especifico  de $key
      $keychar = substr($key, ($i % strlen($key))-1, 1);
      //Devolver los caracteres ASCII y ordenar $char menos $keychar
      $char = chr(ord($char)-ord($keychar));
      //Obtener los carcateres ASCII
      $result.=$char;
    }
    //Regresar $result
    return $result;
  }
  //Usar la funcion cifrar con $Mensaje y la llave que se ocupo para encriptar
  $cadena_desencriptada = desencriptar("$Mensaje","128");
  //Imprimir la cadena desencriptada
  echo "Mensaje descifrado: ".$cadena_desencriptada;
  //Un link que te regresara a Formulario.html
  echo "<br><a href='../Templates/Formulario.html'>Regresar</a>";
}
?>

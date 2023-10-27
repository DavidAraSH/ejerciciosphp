<?php 
//. Mapas (arrays asociativos)

$capitales = [

    "España" => "Madrid", 

    "UK" => "Londres", 

    "Francia" => "París"

];

//. Recorrer ArrayAsociativo

foreach ($capiales as $clave => $valor) {

    echo "La capital de $clave es $valor.";

};

array_push($array, "valor"):

//Añade “valor” en la última posición de $array.

. array_pop($array):

//Elimina el último elemento de $array y lo devuelve.

. array_shift($array):

//Igual que array_pop pero con el primer elemento.

. array_unshift($array, "elemento"):

//Añade “elemento” al principio de $array.

. sort($array):

//Ordena $array SE COME LAS CLAVES.

. asort($array):

//Ordena $array sin comerse las claves.

. rsort($array):

//Ordena $array descendentemente. SE COME LAS CLAVES.

. arsort($array);

//Ordena $array descendentemente sin comerse las claves.

. ksort($array);

//Ordena $array según las claves.

. include “archivo.php”;

//Ejecuta archivo.php e incorpora sus variables.

. require “archivo.php”;

//Ejecuta archivo.php pero si hay un error se para la ejecución.
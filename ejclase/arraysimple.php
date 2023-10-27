<?php

echo "<h1>Arrays</h1>";
$array = array(6,"perro",9.8,true,false);
var_dump($array);
echo "<br>";
print_r($array);
echo"Numero elementos de un arrray: " . count($array);

echo "<h3>Acceder a elementos</h3>";

for($i=0;$i<count($array);$i++){
    echo "<br>Elemento vale: ". $array[$i];
};

echo "<br><br>";

foreach($array as $elemento){
    echo "<br>elem: ".$elemento;
}
//Añadir elemento
$array[]="otro";

echo "<br><br>";

foreach($array as $elemento){
    echo "<br>elem: ".$elemento;
}
echo "<br><br>";
$array[22] = "ultimo";
print_r($array);
echo "<br>Num elementos: ".count($array);
echo "<br>El sexto elemento es: ".$array[22];
//Se añade despues del ultimo indice
echo "<br><br>";
$array[] = "el bueno";
print_r($array);
echo "<br>Num elementos: ".count($array);
echo "<br>El sexto elemento es: ".$array[22];

echo "<br><br>";
//quitar huecos vaios array
$array = array_values($array);
print_r($array);

//saber si un elemento esta en array
echo "<br>está el 6? ".in_array(6,$array);
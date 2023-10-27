<?php

echo "<h1>Utilizar ficheros</h1>";
echo "<h2>Lectura ficheros</h2>";
$nombre = "mifichero.txt";
$fp = fopen($nombre,"r");
while(!feof($fp)){
    //linea a linea
    /*$linea = fgets($fp);
    echo $linea . "<br>"; */

    //caracter a caracter
    $caracter = fgetc($fp);
    
    if($caracter == "\n"){
        $caracter = "<br>";
    }
    echo $caracter;
}

fclose($fp);//cierra fichero

echo "<h2>Escritura ficheros</h2>";
$fp = fopen($nombre,"a");//para añadir a lo existente, sobreescribir con "w"
if(!$fp){
    die("No se puede abrir el fichero");//finaliza la ejecucion del script
}else{
    
    fwrite($fp, "Soy otra cadena ".PHP_EOL);//Sin PHP_EOL lo escribiria seguido(Hace salto de linea)
    fwrite($fp, "Cadena escrita en ".time().PHP_EOL);
   
    fclose($fp);//cierra fichero
}

function versesion(){
    session_start();
}

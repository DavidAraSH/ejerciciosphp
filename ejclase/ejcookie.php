<?php

$animales=["mamifero"=> "perro", 
            "oviparo" => "pato",
            "reptil"=> "serpiente"];

$animalesencoded= json_encode($animales);//sino da error al meterlo en la cookie


//setcookie("datos","23",time()+7200*24,"/");//antes de enviar nada x pantalla, sumamos 1 dias y 2h para caducida de cookie
if(!isset($_COOKIE["datos"])){
    setcookie("datos",$animalesencoded,time()+7200*24,"/");
}else{
    
    $animaldecoded=json_decode($_COOKIE["datos"]);
    echo "<br> El valor de cookie es ".$animaldecoded->{'mamifero'};//coge solo el valor para la clave mamifero, se usa como objeto
    $animaldecoded2=json_decode($_COOKIE["datos"],true);
    echo "<br> El valor de cookie es ".$animaldecoded2["reptil"];//coge solo el valor para la clave mamifero, se usa como array
}

//echo "Trabajando cookies";
//sleep(15);
/*setcookie("datos","23",time()-9200*24,"/");//caduco la cookie con una fecha >= a la que le hemos umado antes

echo "borrando cookies";*/
//echo "El valor de la cookie es: ".$_COOKIE["datos"];//Solo funciona al recargar, para hacer 2 peticiones y recoger su valor


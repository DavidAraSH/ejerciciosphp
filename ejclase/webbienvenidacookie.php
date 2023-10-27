<?php

if(!isset($_COOKIE["idioma"])){

    if (isset($_POST["idioma"]) && !empty($_POST["idioma"])){
        $idiomas = $_POST["idioma"];
            
            foreach ($idiomas as $idioma) {
                //echo "<br>idioma seleccionado: $idioma";
                setcookie("idioma",json_encode($idioma),time()+7200*24,"/");//antes de enviar nada x pantalla, sumamos 1 dias y 2h para caducida de cookie
            }
        if($idiomas[0]=="Español"){
            echo "<br> Hola, bienvenido a la pagina en español";
        }else if($idiomas[0]=="Ingles"){
            echo "<br> Hello, welcome to the page in english";
        }
    }
    //setcookie("idioma",$animalesencoded,time()+7200*24,"/");
}else{
    
    $idiomadecoded=json_decode($_COOKIE["idioma"],true);
    if($idiomadecoded == "Español"){
        echo "<br> Hola, bienvenido a la pagina en español";
    }else if($idiomadecoded == "Ingles"){
        echo "<br> Hello, welcome to the page in english";
    }
    
    
}


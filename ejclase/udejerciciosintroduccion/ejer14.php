<?php

    function esPalindromo($micadena){
        $micadena = str_replace(' ','',strtolower($micadena));
        $cadreves = strrev($micadena);//da la vuelta a la cadena
        
        if(strcmp($micadena,$cadreves) == 0){
            echo "Es palindromo";
        }else{
            echo "No es palindromo";
        }
        return;//Hay que volver si o si de la funcion
    }
    $cadena = "Ana lava Lana";
    esPalindromo($cadena);

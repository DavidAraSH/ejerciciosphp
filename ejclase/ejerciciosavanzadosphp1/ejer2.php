<?php

echo "<h2>Resultado suma </h2>";
if (isset($_POST["ienviar"]) && !empty($_POST["ienviar"])) {
    if (isset($_POST["lnum"]) && !empty($_POST["lnum"])) {
        $num = $_POST["lnum"];
        $num2 = $_POST["lnum2"];
        if($num2==0){
            echo "<h4> No se puede dividi por 0 animal</h4>";
        }else
            echo "<h4> La division da:".$num/$num2."</h4>";
    }

    
}
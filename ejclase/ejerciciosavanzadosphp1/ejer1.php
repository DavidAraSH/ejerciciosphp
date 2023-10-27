<?php

echo "<h2>Resultado suma </h2>";
if (isset($_POST["ienviar"]) && !empty($_POST["ienviar"])) {
    if (isset($_POST["lnum"]) && !empty($_POST["lnum"])) {
        $num = $_POST["lnum"];
        $num2 = $_POST["lnum2"];
        echo "<h4> La suma de los valores es:".$num+$num2."</h4>";
    }

    
}
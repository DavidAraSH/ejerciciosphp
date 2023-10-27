<?php

echo "<h2>Resultado areas </h2>";
if (isset($_POST["ienviar"]) && !empty($_POST["ienviar"])) {
    if (isset($_POST["larea"]) && !empty($_POST["larea"])) {
        $area = $_POST["larea"];
        if($area=="triangle"){
            echo"<h4>Su área es b*h/2</h4>";
        }else if($area=="circle"){
            echo"<h4>Su área es pi*r²</h4>";
        }else if($area=="square"){
            echo"<h4>Su área es b*h</h4>";
        }
    }
}
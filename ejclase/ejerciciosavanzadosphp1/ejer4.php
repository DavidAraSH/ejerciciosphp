<?php

echo "<h2>Resultado encuestas </h2>";
if (isset($_POST["ienviar"]) && !empty($_POST["ienviar"])) {

    //lista multiple de menu
    if (isset($_POST["sdeporte"]) && !empty($_POST["sdeporte"])) {
        $deportes = $_POST["sdeporte"];
        foreach ($deportes as $deporte) {
            echo "<br>Deporte favorito: $deporte";
        }
    }
}
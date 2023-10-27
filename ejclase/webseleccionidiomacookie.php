<?php



echo "<h3>Menu favorito</h3>
<form name=\"fencuesta\" action=\"webbienvenidacookie.php\" method=\"post\">
<select name=\"idioma[]\" required>
    <option value=\"Español\">Español</option>
    <option value=\"Ingles\">Ingles</option>

    <input type=\"submit\" name=\"ienviar\" value=\"Enviar\">

    <form>";

    if (isset($_POST["idioma"]) && !empty($_POST["idioma"])) {
        $idiomas = $_POST["idioma"];

        foreach ($idiomas as $idioma) {
            //echo "<br>idioma seleccionado: $idioma";
        }
        
    }else{

    }
    
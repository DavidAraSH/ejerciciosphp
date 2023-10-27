<?php

echo"<h2>Informacion sobre el fichero subido<h2>";
echo "<p>Nombre fichero</p>" .$_FILES['myfile']['name'];
echo "<p>Tipo/extension fichero</p> ".$_FILES['myfile']['type'];
echo "<p>Tamaño fichero</p> ".$_FILES['myfile']['size'];
echo "<p>Nombre temporal del fichero subido en el servidor fichero </p>".$_FILES['myfile']['tmp_name'];

//subo fichero al servidor
$res=move_uploaded_file($_FILES['myfile']['tmp_name'], "../uploads/".$_FILES['myfile']['name']);
if($res){
    echo "<h4>Fichero subido correctamente</h4>";
}else{
    echo "<h4>Error al subir el fichero!</h4>";
}
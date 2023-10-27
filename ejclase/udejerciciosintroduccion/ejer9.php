<?php
//Opcion1
$array = array();
$array[]="Antetokounmpo";
$array[]="Tatum";
$array[]="Embiid";
$array[]="Gilgeus-Alexander";
$array[]="Doncic";
//Opcion2
/*array_push($array,"Antetokoumpo");
array_push($array,"Tatum","Embiid","Gilgeus-Alexander","Doncic");*/

foreach($array as $elemento){
    echo "<br><p>nombre: ".$elemento ."</p>";
}

echo "<br><br>";

for($i=0;$i<count($array);$i++){
    echo "<br><p>nombre: ".$elemento .", índice: $i</p>";
};
print_r($array);
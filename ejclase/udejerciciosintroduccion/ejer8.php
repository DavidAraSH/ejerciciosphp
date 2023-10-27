<?php
$array = array("Antetokounmpo","Tatum","Embiid","Gilgeus-Alexander","Doncic");

foreach($array as $elemento){
    echo "<br><p>nombre: ".$elemento ."</p>";
}

echo "<br><br>";

/*foreach($array as $elemento){
    echo "<br><p>nombre: ".$elemento .", índice: "."</p>";
}*/

for($i=0;$i<count($array);$i++){
    echo "<br><p>nombre: ".$elemento .", índice: $i</p>";
};
print_r($array);
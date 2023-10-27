<?php

$arrayasociativo=[
    "España" => ["moneda"=>"Euro","numhab"=>40000000],
    "Estados Unidos"=>["moneda"=>"Dolar","numhab"=>"Un monton"],
    "Francia"=>["moneda"=>"Franco","numhab"=>"Otro monton"],
    "Marruecos"=>["moneda"=>"hachis","numhab"=>12345667],
    "Alemania"=>["moneda"=>"India","numhab"=>99999999999]
];
foreach($arrayasociativo as $pais => $vpais){
    echo "<br>Pais: ".$pais;
    echo " Con moneda: ". $vpais["moneda"];
    echo " Con num habs: ". $vpais["numhab"];
}

echo "<br><br><br>";

print_r($arrayasociativo);
<?php

echo "<h1>CHECK VAR: isset, empty, is_null</h1>";
$numero =9;
$cero =0;
$vacia="";
$varnula=null;

var_dump($numero);
echo "<h3>Numero (entero)</h3>";
// echo, print, print r, var_dump (valor y tipo)
echo " establecida ? <br>".  var_dump(isset($numero));//vardump te devuelve eltipo de valor mostrandola x pantalla
echo "vacia ? <br>".  var_dump(empty($numero));
echo "nula ? <br>" . var_dump(is_null($numero));

echo "<h3>Cero</h3><br>";
echo "establecida ? <br>".  var_dump(isset($cero));
echo " vacia ? <br>".  var_dump(empty($cero));
echo "nula ? " . var_dump(is_null($cero));

echo "<h3>vacia</h3><br>";
echo "establecida ? <br>".  var_dump(isset($vacia));
echo " vacia ? <br>".  var_dump(empty($vacia));
echo "nula ? " . var_dump(is_null($vacia));

echo "<h3>Nulo</h3><br>";
echo "establecida ? <br>".  var_dump(isset($varnula));
echo " vacia ? <br>".  var_dump(empty($varnula));
echo "nula ? " . var_dump(is_null($varnula));

echo "<h3>Variable inexistente</h3><br>";
echo "establecida ? <br>".  var_dump(isset($inexistente));
echo " vacia ? <br>".  var_dump(empty($inexistente));
echo "nula ? " . var_dump(is_null($inexistente));//Da un warning
<?php

//las comillas dobles interpretan variables, las simples no lo hacen

echo "<h1>VARIABLES</h1>";
$saludo = "hola"; //case sensitive, pero las funciones no
echo "Una saludo: $saludo";//tiene que ir porque esta en mayusculas

echo "<h3>Concatenar variables</h3>";
$despedida=" y adios";
$numero=20;
$despedida.=$saludo;//las cadenas se concatenan con .
$numero += 3;//suma
echo "<br>$despedida con numero $numero \"$despedida\"";//\"$despedida\" excluye la variable para poder tener texto textual

echo "<br>" .$numero++;//deja valor 24 como valor final  (++numero directamente imprimiria 24)

echo "<h3>Valor y referencia</h3>";
$var=100;
$var2=&$var;//esto es una referencia a var
$var3=$var;//esto es una copia de var
echo "<br> var es: ",$var;
echo "<br> var2 es: ",$var2;
echo "<br> var3 es: ",$var3;

$var=333;//la referencia también es al reves, es decir, si cambio var2 cambio tambien var

echo "<br> var finalmente es: ",$var;
echo "<br> var2 finalmente es: ",$var2;
echo "<br> var3 finalmente es: ",$var3;

echo "<h3>Valoriables de variables/h3>";

$vehiculo="coche";
$$vehiculo="audi";//$vehiculo=coche ; $coche=audi

echo "<br> El $vehiculo es de marca $coche";
echo "<br> El $vehiculo es de marca ".${$vehiculo};

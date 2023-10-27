<?php
$v1=1;
$v2;
$fibo=0;

for($i=0;$i<=10;$i++){
    $temp = $v1;

    $v1 = $v2;

    $v2 = $temp + $v1;

    echo $v1 . '<br>';
};
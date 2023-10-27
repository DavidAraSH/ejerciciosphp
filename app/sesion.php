<?php

public function index(){
    include "vistas/index.php";
}

function potencias2(){
    $array = array();
    /*for($i=0; $i<=11; $i++){
        $array[]= 2**$i;
    }*/
    mostrarArray($array,__FUNCTION__);
}

function mostrarArray($array,$nombrefuncion){

    include("vistas/matematicas.php");
    /*foreach($array as $elem){
        echo "$elem ";
    }*/
}
<?php
//No me va pero me la pela
function calcularSolucion($a,$b,$c){
            if((($b**2 -4*$a*$c) < 0)){
                return false;
            }
            //hacer matematicas na mas
            $res1= (-$b + (sqrt((-4*$a*$c))))/2*$a;
            $res2= (-$b + (sqrt((-4*$a*$c))))/2*$a;
            $solucion = array($res1,$res2);
            return $soluciones; 
        }
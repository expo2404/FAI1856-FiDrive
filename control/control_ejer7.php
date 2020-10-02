<?php


 
class control_ejer7 {
    public function validarInfo($date) {
        $numero1=$date["numero1"];
        $numero2=$date["numero2"];
        $opcion=$date["selector"];
        if($opcion=="Suma"){
            $resultado=$numero1+$numero2;
            $text="la operacion elegida es :".$opcion." los operandos son ".$numero1."y".$numero2." y el resultado es".$resultado;
        }elseif($opcion=="Resta"){
            $resultado=$numero1-$numero2;
            $text="la operacion elegida es :".$opcion." los operandos son ".$numero1."y".$numero2." y el resultado es".$resultado;
        }elseif ($opcion=="Multiplicacion") {
            $resultado=$numero1*$numero2;
            $text="la operacion elegida es :".$opcion." los operandos son ".$numero1."y".$numero2." y el resultado es".$resultado;
        }
        return $text;
    }
    
}

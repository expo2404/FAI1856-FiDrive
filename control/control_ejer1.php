<?php

class control_ejer1 {
    public function validarInfo($date) {
        $numero=$date["numero"];
        if($numero>0){
            $text="el numero ingresado es positivo";
        }elseif($numero==0){
            $text="el numero ingresado es 0";
        }elseif($numero<0){
            $text="el numero ingresado es negativo";
        }
        return $text;
    }
}

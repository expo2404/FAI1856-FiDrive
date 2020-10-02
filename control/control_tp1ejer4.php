<?php


class control_tp1ejer4 {
    public function validarInfo($date) {
        $nombre=$date["nombre"];
        $apellido=$date["apellido"];
        $edad=$date["edad"];
        $direccion=$date["direccion"];
        if($edad>=18){
        $text="Hola, yo soy ".$nombre.", ".$apellido." tengo ".$edad." años y soy mayor de edad, vivo en ".$direccion;
        }elseif ($edad<18) {
            $text="Hola, yo soy ".$nombre.", ".$apellido." tengo ".$edad." años y soy menor de edad, vivo en ".$direccion;
        }
    return $text;
        
    }
}

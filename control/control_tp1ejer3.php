<?php

class control_tp1ejer3 {
    public function validarInfo($date) {
        $nombre=$date["nombre"];
        $apellido=$date["apellido"];
        $edad=$date["edad"];
        $direccion=$date["direccion"];
        $text="Hola, yo soy ".$nombre.", ".$apellido." tengo ".$edad." años y vivo en ".$direccion;
    return $text;
        
    }
    
}

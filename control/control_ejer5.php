<?php

class control_ejer5 {
    public function validarInfo($date) {
        $nombre=$date["nombre"];
        $apellido=$date["apellido"];
        $edad=$date["edad"];
        $direccion=$date["direccion"];
        $sex=$date["sexo"];
        $estudio=$date["estudio"];
        $text="Hola, yo soy ".$nombre.", ".$apellido." tengo ".$edad." años y vivo en ".$direccion.",estudios ".$estudio." sexo ".$sex;
    return $text;
        
    }
}
?>
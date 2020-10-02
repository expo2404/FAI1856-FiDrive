<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of control_ejer6
 *
 * @author fabii
 */
class control_ejer6 {
    public function validarDatos($datos)
    {
        $nombre = $datos["nombre"];
        $apellido = $datos["apellido"];
        $edad = $datos["edad"];
        $direccion = $datos["direccion"];
        $estudio = $datos["estudio"];
        $sexo = $datos["sexo"];
        $res = "<b> Hola, yo soy " . $nombre . " " . $apellido . "<br>Tengo " . $edad . " años<br>Sexo " . $sexo .
            "<br>Estudio " . $estudio . "<br>Soy ";
        if ($edad >= 18) {
            $res = $res . "mayor";
        } else {
            $res = $res . "menor";
        }
        $contar = 0;
        if (!empty($datos['deportes'])) {
            $juego = "";
            // Bucle para almacenar y mostrar los valores de la casilla de verificación comprobación individual.
            foreach ($datos['deportes'] as $juega) {
                $juego .= $juega . ", ";
                $contar++;
            }
            $res = $res . " de edad y vivo en " . $direccion . "<br>Ademas juego a " . $juego;
        }
        if ($contar != 0) {
            $res = $res . "realizo " . $contar . " deporte/s";
        } else {
            $res = $res . "<br>No realizo deportes";
        }
        return $res . "</b>";
    }
}

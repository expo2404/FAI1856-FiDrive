<?php

class control_Ejer4 {
    public function verificarDatos($date) {
        $titulo=$date["titulo"];
        $actor=$date["actores"];
        $anio=$date["anio"];
        $director=$date["director"];
        $guion=$date["guion"];
        $produccion=$date["produccion"];
        $nacionalidad=$date["nacionalidad"];
        $duracion=$date["duracion"];
        $edad=$date["edad"];
        
        $genero=$date["genero"];
        $text="Titulo: ".$titulo."<br>Actores: ".$actor."<br>Director: ".$director."<br>Guion: ".$guion."<br>Produccion: ".$produccion."<br>Año: ".$anio."<br>Nacionalidad: ".$nacionalidad."<br>Genero: ".$genero."<br>Duracion: ".$duracion."<br>Restricciones de Edad: ".$edad;
        return $text;
    }
}

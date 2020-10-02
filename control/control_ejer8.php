
<?php


class control_ejer8 {
    public function valorEntrada($date) {
        $edad=$date["edad"];
        $opcion=$date["selector"];
        if($edad<12 && $opcion=="estudiante"){
            $precio=160;
        }elseif($edad>=12 && $opcion=="estudiante"){
            $precio=180;
        }elseif($opcion=="no estudiante"){
            $precio=300;
        }
        $texto="su valor a pagar $".$precio;
        return $texto;
    }
    
}

<?php


class control_Ejer3 {
    public function verificarDatos($date) {
        $arreglosDatos[0]=["usuario"=>"expo2404","contrasena"=>"faby1004"];
        $arreglosDatos[1]=["usuario"=>"fabii2404","contrasena"=>"faby2020"];
        $arreglosDatos[2]=["usuario"=>"expo1006","contrasena"=>"expo"];
        $res=true;
        $i=0;
        while($i<count($arreglosDatos) && $res){
            if($date["usuario"]==$arreglosDatos[$i]["usuario"] && $date["contrasena"]==$arreglosDatos[$i]["contrasena"]){
                $text="hola bienvenido ".$date["usuario"];
                $res=false;
            }else{
                $text="el usuario no se ha encontrado";
                
            }
           $i++;
            
        }
        return $text;
    }
}

<?php

class control_amarchivo {

    public function alta($param) {
        $colDatos = ["idarchivocargado" => 1, "acnombre" => $param["nombrearchivo"], "acdescripcion" => $param["editor"], "acicono" => $param["tipo"], "idusuario" => $param["usuario"], "aclinkacceso" => "patricio", "accantidaddescarga" => 0, "accantidadusada" => 0, "acfechainiciocompartir" => "000-00-00 00:00:00", "acefechafincompartir" => "0000-00-00 00:00:00", "acprotegidoclave" => "no"];
        $archivoCargado = new control_archivocargado();
        if (($id=$archivoCargado->alta($colDatos))==false) {
            echo "no se ingreso archivocragdoestado";
            
        }else{
            
            $archivocargadoestado = new control_archivocargadoestado();
            $colCargarEstado = ["idarchivocargadoestado" => 1,"idestadotipos" => 1,"acedescripcion" => "", "idusuario" => $colDatos["idusuario"], "acefechaingreso" => "0000-00-00 00:00:00", "acefechafin" => "0000-00-00", "idarchivocargado" => $id];
            if ($archivocargadoestado->alta($colCargarEstado) > 0) {
                echo "archivocargadoestado exitoso";
            } else {
                
            }
        }
    }
    
    public function modificacion($param) {
        $res=false;
        $archivoCargado=new control_archivocargado();
        $datos["idarchivocargado"]=$param["id"];
        $registros=$archivoCargado->buscar($datos);
        
        $colDatos = ["idarchivocargado" => $registros[0]->getIdarchivocargado(), "acnombre" => $param["nombrearchivo"], "acdescripcion" => $param["editor"], "acicono" => $param["tipo"], "idusuario" => $param["usuario"], "aclinkacceso" => "patricio", "accantidaddescarga" => 0, "accantidadusada" => 0, "acfechainiciocompartir" => "000-00-00 00:00:00", "acefechafincompartir" => "0000-00-00 00:00:00", "acprotegidoclave" => "no"];
        if($archivoCargado->modificacion($colDatos)){
            $res=true;
        }
        return $res;
    }

}

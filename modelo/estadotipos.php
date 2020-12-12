<?php

class estadotipos {
    private $idestadotipos;
    private $etdescripcion;
    private $etactivo;
    private $coleccionAcEstado;
    function __construct() {
        $this->idestadotipos = null;
        $this->etdescripcion = "";
        $this->etactivo = "";
        $this->coleccionAcEstado=array();
    }
    
    function getIdestadotipos() {
        return $this->idestadotipos;
    }

    function getEtdescripcion() {
        return $this->etdescripcion;
    }

    function getEtactivo() {
        return $this->etactivo;
    }

    function setIdestadotipos($idestadotipos) {
        $this->idestadotipos = $idestadotipos;
    }

    function setEtdescripcion($etdescripcion) {
        $this->etdescripcion = $etdescripcion;
    }

    function setEtactivo($etactivo){
        $this->etactivo = $etactivo;
    }
    
    
    
    function getColeccionAcEstado() {
        $acestado=new archivocargadoestado();
        $id="idestadotipos=$this->getIdestadotipos()";
        $colAcEstado=$acestado->listar($id);
        $this->setColeccionAcEstado($colAcEstado);
        return $this->coleccionAcEstado;
    }

    function setColeccionAcEstado($coleccionAcEstado) {
        $this->coleccionAcEstado = $coleccionAcEstado;
    }

    
    public function setear($idestadotipos,$etdescripcion, $etactivo)    {
        $this->setIdestadotipos($idestadotipos);
        $this->setEtdescripcion($etdescripcion);
        $this->setEtactivo($etactivo);
        
        
    }
    
    
    
    
    
    public function cargar(){
        $resp = false;
        $base=new BaseDatos();
        $sql="SELECT * FROM estadotipos WHERE idestadotipos=".$this->getIdestadotipos();
        if ($base->Iniciar()) {
            $res = $base->Ejecutar($sql);
            
            if($res>-1){
                if($res>0){
                    $row = $base->Registro();
                    $this->setear($row['idestadotipos'],$row['etdescripcion'], $row['etactivo']);
                    
                }
            }
        } else {
            $this->setmensajeoperacion("estadotipos->listar: ".$base->getError());
        }
        return $resp;    
    }
    
    
    public function insertar(){
        $resp = false;
        $base=new BaseDatos();
        $sql="INSERT INTO estadotipos(etdescripcion,etactivo) VALUES('".$this->getEtdescripcion()."',".$this->getEtactivo()."'";
        if ($base->Iniciar()) {
            if ($elid = $base->Ejecutar($sql)) {
                echo $this->setIdarchivocargado($elid);
                $resp = true;
            } else {
                $this->setmensajeoperacion("archivocargado->insertar: ".$base->getError());
            }
        } else {
            $this->setmensajeoperacion("archivocargado->insertar: ".$base->getError());
        }
        return $resp;
    }
    
    
    public function modificar(){
        $resp = false;
        $base=new BaseDatos();
        $sql="UPDATE estadotipos SET etdescripcion='".$this->getEtdescripcion()."',etactivo='".$this->getEtactivo()."' WHERE idestadotipos='".$this->getIdestadotipos()."'";
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                $resp = true;
            } else {
                $this->setmensajeoperacion("estadotipos->modificar: ".$base->getError());
            }
        } else {
            $this->setmensajeoperacion("estadotipos->modificar: ".$base->getError());
        }
        return $resp;
    }
    
    
    public function eliminar(){
        $resp = false;
        $base=new BaseDatos();
        $sql="DELETE FROM estadotipos WHERE idestadotipos=".$this->getIdestadotipos();
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                return true;
            } else {
                $this->setmensajeoperacion("estadotipos->eliminar: ".$base->getError());
            }
        } else {
            $this->setmensajeoperacion("estadotipos->eliminar: ".$base->getError());
        }
        return $resp;
    }
    
    public static function listar($parametro=""){
        $arreglo = array();
        $base=new BaseDatos();
        $sql="SELECT * FROM estadotipos ";
        if ($parametro!="") {
            $sql.='WHERE '.$parametro;
            
        }
        $res = $base->Ejecutar($sql);
        
        if($res>-1){
            if($res>0){
                
                while ($row = $base->Registro()){
                    $obj= new estadotipos();
                        $obj->setear($row['idestadotipos'], $row['etdescripcion'],$row['etactivo']);
                    array_push($arreglo, $obj);
                }
               
            }
            
        } else {
            $this->setmensajeoperacion("estadotipos->listar: ".$base->getError());
        }
        
        return $arreglo;
    }

}

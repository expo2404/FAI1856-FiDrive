<?php


class archivocargadoestado {
    private $idarchivocargadoestado;
    private $objestadotipos;
    private $acedescripcion;
    private $objusuario;
    private $acefechaingreso;
    private $acefechafin;
    private $objarchivocargado;
    private $mensajeoperacion;
    
    function __construct() {
        $this->idarchivocargadoestado = null;
        $this->objestadotipos = "";
        $this->acedescripcion = "";
        $this->objusuario = "";
        $this->acefechaingreso ="";
        $this->acefechafin = "";
        $this->objarchivocargado = "";
    }
    function getmensajeoperacion() {
        return $this->mensajeoperacion;
    }

    function setmensajeoperacion($mensajeoperacion) {
        $this->mensajeoperacion = $mensajeoperacion;
    }

        function getIdarchivocargadoestado() {
        return $this->idarchivocargadoestado;
    }

    function getObjestadotipos() {
        return $this->objestadotipos;
    }

    function getAcedescripcion() {
        return $this->acedescripcion;
    }

    function getObjusuario() {
        return $this->objusuario;
    }

    function getAcefechaingreso() {
        return $this->acefechaingreso;
    }

    function getAcefechafin() {
        return $this->acefechafin;
    }

    function getObjarchivocargado() {
        return $this->objarchivocargado;
    }

    function setIdarchivocargadoestado($idarchivocargadoestado) {
        $this->idarchivocargadoestado = $idarchivocargadoestado;
    }

    function setObjestadotipos($objestadotipos) {
        $this->objestadotipos = $objestadotipos;
    }

    function setAcedescripcion($acedescripcion) {
        $this->acedescripcion = $acedescripcion;
    }

    function setObjusuario($objusuario){
        $this->objusuario = $objusuario;
    }

    function setAcefechaingreso($acefechaingreso) {
        $this->acefechaingreso = $acefechaingreso;
    }

    function setAcefechafin($acefechafin) {
        $this->acefechafin = $acefechafin;
    }

    function setObjarchivocargado($objarchivocargado) {
        $this->objarchivocargado = $objarchivocargado;
    }
    
    public function setear($idacestado,$objestado,$acdescrip,$objusuario,$acefechaIn,$acefechaFin,$objarchivocargado)    {
        $this->setIdarchivocargadoestado($idacestado);
        $this->setObjestadotipos($objestado);
        $this->setAcedescripcion($acdescrip);
        $this->setObjusuario($objusuario);
        $this->setAcefechaingreso($acefechaIn);
        $this->setAcefechafin($acefechaFin);
        $this->setObjarchivocargado($objarchivocargado);
          
    }
    
    
    public function cargar(){
        $resp = false;
        $base=new BaseDatos();
        $sql="SELECT * FROM archivocargadoestado WHERE idarchivocargadoestado =".$this->getIdarchivocargadoestado();
       
        if ($base->Iniciar()) {
            $res = $base->Ejecutar($sql);
            echo $res;
            if($res>-1){
                if($res>0){
                    $row = $base->Registro();
                    $usuario=new usuario();
                    $usuario->setIdusuario($row["idusuario"]);
                    $objUs=$usuario->cargar();
                    if($objUs==true){
                        echo " se cargo";
                    }else{
                        echo "no se cargo";
                    }
                    $archivocargado=new archivocargado();
                    $objAc=$archivocargado->cargar();
                    $estadotipos=new estadotipos();
                    $objEt=$estadotipos->cargar();
                    $this->setear($row['idarchivocargadoestado'],$objEt, $row['acedescripcion'],$objUs,$row['acefechaingreso'],$row['acefechafin'],$objAc);
                    
                }
            }
        } else {
            $this->setmensajeoperacion("archivocargadoestado->listar: ".$base->getError());
        }
        return $resp;    
    }
    
    
    public function insertar(){
        $resp = false;
        $base=new BaseDatos();
        $sql="INSERT INTO archivocargadoestado(idestadotipos,acedescripcion,idusuario,acefechaingreso,acefechafin,idarchivocargado) VALUES('".$this->getObjestadotipos()->getIdestadotipos()."','".$this->getAcedescripcion()."','".$this->getObjusuario()->getIdusuario()."','".$this->getAcefechaingreso()."','".$this->getAcefechafin()."','".$this->getObjarchivocargado()->getIdarchivocargado()."')";
        if ($base->Iniciar()) {
            if ($elid = $base->Ejecutar($sql)) {
                echo $this->setIdarchivocargadoestado($elid);
                $resp = true;
            } else {
                $this->setmensajeoperacion("archivocargadoestado->insertar: ".$base->getError());
            }
        } else {
            $this->setmensajeoperacion("archivocargadoestado->insertar: ".$base->getError());
        }
        return $resp;
    }
    
    
    public function modificar(){
        $resp = false;
        $base=new BaseDatos();
        $sql="UPDATE archivocargadoestado SET idestadotipos='".$this->getObjestadotipos()->getIdestadotipos()."',acedescripcion='".$this->getAcedescripcion()."',idusuario='".$this->getObjusuario()->getIdusuario()."',acefechaingreso='".$this->getAcefechaingreso()."',acefechafin='".$this->getAcefechafin()."',idarchivocargado='".$this->getObjarchivocargado()->getIdarchivocargado()."' WHERE idarchivocargadoestado='".$this->getIdarchivocargadoestado()."'";
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                $resp = true;
            } else {
                $this->setmensajeoperacion("archivocargadoestado->modificar: ".$base->getError());
            }
        } else {
            $this->setmensajeoperacion("archivocargadoestado->modificar: ".$base->getError());
        }
        return $resp;
    }
    
    
    public function eliminar(){
        $resp = false;
        $base=new BaseDatos();
        $sql="DELETE FROM archivocargadoestado WHERE idarchivocargadoestado=".$this->getIdarchivocargadoestado();
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                return true;
            } else {
                $this->setmensajeoperacion("archivocargadoestado->eliminar: ".$base->getError());
            }
        } else {
            $this->setmensajeoperacion("archivocargadoestado->eliminar: ".$base->getError());
        }
        return $resp;
    }
    
    public static function listar($parametro=""){
        $arreglo = array();
        $base=new BaseDatos();
        
        $sql="SELECT * FROM archivocargadoestado ";
        if ($parametro!="") {
            $sql.='WHERE '.$parametro;
            
        }
        $res = $base->Ejecutar($sql);
        
        if($res>-1){
            if($res>0){
                
                while ($row = $base->Registro()){
                    $obj= new archivocargadoestado();
                    
                    $usuario=new usuario();
                    $usuario->setIdusuario($row["idusuario"]);
                    $usuario->cargar();
                    
                    
                    $archivocargado=new archivocargado();
                    $archivocargado->setIdarchivocargado($row["idarchivocargado"]);
                    $archivocargado->cargar();
                    
                    
                    $estadotipos=new estadotipos();
                    $estadotipos->setIdestadotipos($row["idestadotipos"]);
                    $estadotipos->cargar();
                    
                    
                    $obj->setear($row['idarchivocargadoestado'],$estadotipos, $row['acedescripcion'],$usuario,$row['acefechaingreso'],$row['acefechafin'],$archivocargado);
                        
                    array_push($arreglo, $obj);
                }
               
            }
            
        } else {
            $this->setmensajeoperacion("archivocargadoestado->listar: ".$base->getError());
        }
        
        return $arreglo;
    }


}

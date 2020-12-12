<?php


class archivocargado {
    private $idarchivocargado;
    private $acnombre;
    private $acdescripcion;
    private $acicono;
    private $objusuario;
    private $aclinkacceso;
    private $accantidaddescarga;
    private $accantidadusada;
    private $acfechainiciocompartir;
    private $acefechafincompartir;
    private $acprotegidoclave;
    private $mensajeoperacion;
    
    function __construct() {
        $this->idarchivocargado = null;
        $this->acnombre = "";
        $this->acdescripcion = "";
        $this->acicono = "";
        $this->objusuario = "";
        $this->aclinkacceso = "";
        $this->accantidaddescarga = "";
        $this->accantidadusada = "";
        $this->acfechainiciocompartir = "";
        $this->acefechafincompartir = "";
        $this->acprotegidoclave = "";
    }
    
    function getIdarchivocargado() {
        return $this->idarchivocargado;
    }

    function getAcnombre() {
        return $this->acnombre;
    }

    function getAcdescripcion() {
        return $this->acdescripcion;
    }

    function getAcicono() {
        return $this->acicono;
    }

    function getObjusuario() {
        return $this->objusuario;
    }

    function getAclinkacceso() {
        return $this->aclinkacceso;
    }

    function getAccantidaddescarga() {
        return $this->accantidaddescarga;
    }

    function getAccantidadusada() {
        return $this->accantidadusada;
    }

    function getAcfechainiciocompartir() {
        return $this->acfechainiciocompartir;
    }

    function getAcefechafincompartir() {
        return $this->acefechafincompartir;
    }

    function getAcprotegidoclave() {
        return $this->acprotegidoclave;
    }

    function setIdarchivocargado($idarchivocargado) {
        $this->idarchivocargado = $idarchivocargado;
    }

    function setAcnombre($acnombre){
        $this->acnombre = $acnombre;
    }

    function setAcdescripcion($acdescripcion) {
        $this->acdescripcion = $acdescripcion;
    }

    function setAcicono($acicono) {
        $this->acicono = $acicono;
    }

    function setObjusuario($nuevoObj){
        $this->objusuario = $nuevoObj;
    }

    function setAclinkacceso($aclinkacceso) {
        $this->aclinkacceso = $aclinkacceso;
    }

    function setAccantidaddescarga($accantidaddescarga) {
        $this->accantidaddescarga = $accantidaddescarga;
    }

    function setAccantidadusada($accantidadusada) {
        $this->accantidadusada = $accantidadusada;
    }

    function setAcfechainiciocompartir($acfechainiciocompartir) {
        $this->acfechainiciocompartir = $acfechainiciocompartir;
    }

    function setAcefechafincompartir($acefechafincompartir) {
        $this->acefechafincompartir = $acefechafincompartir;
    }

    function setAcprotegidoclave($acprotegidoclave) {
        $this->acprotegidoclave = $acprotegidoclave;
    }
    
    function getmensajeoperacion() {
        return $this->mensajeoperacion;
    }

    function setmensajeoperacion($mensajeoperacion) {
        $this->mensajeoperacion = $mensajeoperacion;
    }

    
     public function setear($idarchivo,$acnombre, $acdescripcion,$acicono,$objUsuario,$aclinkacceso,$accantidaddescarga,$accantidadusada,$acfechainiciocompartir,$acefechafincompartir,$acprotegidoclave)    {
         $this->setIdarchivocargado($idarchivo);
         $this->setAcnombre($acnombre);
         $this->setAcdescripcion($acdescripcion);
         $this->setAcicono($acicono);
         $this->setObjusuario($objUsuario);
         $this->setAclinkacceso($aclinkacceso);
         $this->setAccantidaddescarga($accantidaddescarga);
         $this->setAccantidadusada($accantidadusada);
         $this->setAcfechainiciocompartir($acfechainiciocompartir);
         $this->setAcefechafincompartir($acefechafincompartir);
         $this->setAcprotegidoclave($acprotegidoclave);
    }
     
    
    public function cargar(){
        $resp = false;
        $base=new BaseDatos();
        $sql="SELECT * FROM archivocargado WHERE idarchivocargado =".$this->getIdarchivocargado();
        
        if ($base->Iniciar()) {
            $res = $base->Ejecutar($sql);
            
            if($res>-1){
                if($res>0){
                    $row = $base->Registro();
                   
                    $usuario=new usuario();
                    $usuario->setear($row["idusuario"],null,null,null,null,null);
                    $objUs=$usuario->cargar();
                    
                    $this->setear($row['idarchivocargado'],$row['acnombre'], $row['acdescripcion'],$row['acicono'],$objUs,$row['aclinkacceso'],$row['accantidaddescarga'],$row['accantidadusada'],$row['acfechainiciocompartir'],$row['acefechafincompartir'],$row['acprotegidoclave']);
                    
                }
            }
        } else {
            $this->setmensajeoperacion("archivocargado->listar: ".$base->getError());
        }
        return $resp;    
    }
    
    
    public function insertar(){
        $resp = false;
        $base=new BaseDatos();
        $sql="INSERT INTO archivocargado(acnombre,acdescripcion,acicono,idusuario,aclinkacceso,accantidaddescarga,accantidadusada,acfechainiciocompartir,acefechafincompartir,acprotegidoclave) VALUES('".$this->getAcnombre()."','".$this->getAcdescripcion()."','".$this->getAcicono()."','".$this->getObjusuario()->getIdusuario()."','".$this->getAclinkacceso()."','".$this->getAccantidaddescarga()."','".$this->getAccantidadusada()."','".$this->getAcfechainiciocompartir()."','".$this->getAcefechafincompartir()."','".$this->getAcprotegidoclave()."');";
        if ($base->Iniciar()) {
            if ($elid = $base->Ejecutar($sql)) {
                 $this->setIdarchivocargado($elid);
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
        $sql="UPDATE archivocargado SET acnombre='".$this->getAcnombre()."',acdescripcion='".$this->getAcdescripcion()."',acicono='".$this->getAcicono()."',idusuario='".$this->getObjusuario()->getIdusuario()."',aclinkacceso='".$this->getAclinkacceso()."',accantidaddescarga='".$this->getAccantidaddescarga()."',accantidadusada='".$this->getAccantidadusada()."',acfechainiciocompartir='".$this->getAcfechainiciocompartir()."',acefechafincompartir='".$this->getAcefechafincompartir()."',acprotegidoclave='".$this->getAcprotegidoclave()."' WHERE idarchivocargado='".$this->getIdarchivocargado()."'";
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                $resp = true;
            } else {
                $this->setmensajeoperacion("archivocargado->modificar: ".$base->getError());
            }
        } else {
            $this->setmensajeoperacion("archivocargado->modificar: ".$base->getError());
        }
        return $resp;
    }
    
    public function eliminar(){
        $resp = false;
        $base=new BaseDatos();
        $sql="DELETE FROM archivocargado WHERE idarchivocargado=".$this->getIdarchivocargado();
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                return true;
            } else {
                $this->setmensajeoperacion("archivocargado->eliminar: ".$base->getError());
            }
        } else {
            $this->setmensajeoperacion("archivocargado->eliminar: ".$base->getError());
        }
        return $resp;
    }
    
    public static function listar($parametro=""){
        $arreglo = array();
        $base=new BaseDatos();
        $sql="SELECT * FROM archivocargado ";
        if ($parametro!="") {
            $sql.='WHERE '.$parametro;
            
        }
        $res = $base->Ejecutar($sql);
        
        if($res>-1){
            if($res>0){
                
                while ($row = $base->Registro()){
                    $obj= new archivocargado();
                    $usuario=new usuario();
                    $usuario->setIdusuario($row["idusuario"]);
                    $usuario->cargar();
                        $obj->setear($row['idarchivocargado'],$row['acnombre'], $row['acdescripcion'],$row['acicono'],$usuario,$row['aclinkacceso'],$row['accantidaddescarga'],$row['accantidadusada'],$row['acfechainiciocompartir'],$row['acefechafincompartir'],$row['acprotegidoclave']);
                    array_push($arreglo, $obj);
                }
               
            }
            
        } else {
            $this->setmensajeoperacion("archivocargado->listar: ".$base->getError());
        }
        
        return $arreglo;
    }
}

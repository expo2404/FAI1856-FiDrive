<?php


class usuario {
    private $idusuario;
    private $usnombre;
    private $usapellido;
    private $uslogin;
    private $usclave;
    private $usactivo;
    private $ColeccionArchivosCargados;
    function __construct() {
        $this->idusuario = null;
        $this->usnombre = "";
        $this->usapellido = "";
        $this->uslogin = "";
        $this->usclave = "";
        $this->ColeccionArchivosCargados = array();
    }
    
    function getIdusuario() {
        return $this->idusuario;
    }

    function getUsnombre() {
        return $this->usnombre;
    }

    function getUsapellido() {
        return $this->usapellido;
    }

    function getUslogin() {
        return $this->uslogin;
    }

    function getUsclave() {
        return $this->usclave;
    }

    function getColeccionArchivosCargados() {
        return $this->ColeccionArchivosCargados;
    }

    function setIdusuario($idusuario) {
        $this->idusuario = $idusuario;
    }

    function setUsnombre($usnombre) {
        $this->usnombre = $usnombre;
    }

    function setUsapellido($usapellido) {
        $this->usapellido = $usapellido;
    }

    function setUslogin($uslogin) {
        $this->uslogin = $uslogin;
    }

    function setUsclave($usclave) {
        $this->usclave = $usclave;
    }
    
    function getUsactivo() {
        return $this->usactivo;
    }

    function setUsactivo($usactivo): void {
        $this->usactivo = $usactivo;
    }

    
    function setColeccionArchivosCargados($ColeccionArchivosCargados) {
        $this->ColeccionArchivosCargados = $ColeccionArchivosCargados;
    }
    
    public function setear($idusuario,$nombre, $apellido,$login,$clave,$activo)    {
        $this->setIdusuario($idusuario);
        $this->setUsnombre($nombre);
        $this->setUsapellido($apellido);
        $this->setUslogin($login);
        $this->setUsclave($clave);
        $this->setUsactivo($activo);
        
    }
    
    public function cargar(){
        $resp = false;
        $base=new BaseDatos();
        $sql="SELECT * FROM usuario WHERE idusuario=".$this->getIdusuario();
        
        if ($base->Iniciar()) {
            $res = $base->Ejecutar($sql);
            
            if($res>-1){
                if($res>0){
                    $row = $base->Registro();
                    
                    $this->setear($row['idusuario'],$row['usnombre'], $row['usapellido'],$row['uslogin'],$row['usclave'],$row['usactivo']);
                    
                }
            }
        } else {
            $this->setmensajeoperacion("usuario->listar: ".$base->getError());
        }
        
        return $resp;    
    }
    
    
    public function insertar(){
        $resp = false;
        $base=new BaseDatos();
        $sql="INSERT INTO usuario(usnombre,usapellido,uslogin,usclave,usactivo) VALUES('".$this->getUsnombre()."','".$this->getUsapellido()."','".$this->getUslogin()."','".$this->getUsclave()."','".$this->getUsactivo()."');";
        if ($base->Iniciar()) {
            if ($elid = $base->Ejecutar($sql)) {
                echo $this->setIdusuario($elid);
                $resp = true;
            } else {
                $this->setmensajeoperacion("Usuario->insertar: ".$base->getError());
            }
        } else {
            $this->setmensajeoperacion("Usuario->insertar: ".$base->getError());
        }
        return $resp;
    }
    
    
    
    
    public function modificar(){
        $resp = false;
        $base=new BaseDatos();
        $sql="UPDATE usuario SET usnombre='".$this->getUsnombre()."',usapellido='".$this->getUsapellido()."',uslogin='".$this->getUslogin()."',usclave='".$this->getUsclave()."',usactivo='".$this->getUsactivo()."' WHERE idusuario='".$this->getIdusuario()."'";
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                $resp = true;
            } else {
                $this->setmensajeoperacion("Usuario->modificar: ".$base->getError());
            }
        } else {
            $this->setmensajeoperacion("Usuario>modificar: ".$base->getError());
        }
        return $resp;
    }
    
    
    
    public function eliminar(){
        $resp = false;
        $base=new BaseDatos();
        
        $sql="DELETE FROM usuario WHERE idusuario=".$this->getIdusuario();
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                return true;
            } else {
                $this->setmensajeoperacion("Usuario->eliminar: ".$base->getError());
            }
        } else {
            $this->setmensajeoperacion("Usuario->eliminar: ".$base->getError());
        }
        return $resp;
    }
    
    public static function listar($parametro=""){
        $arreglo = array();
        $base=new BaseDatos();
        $sql="SELECT * FROM usuario ";
        if ($parametro!="") {
            $sql.='WHERE '.$parametro;
            
        }
        $res = $base->Ejecutar($sql);
        
        if($res>-1){
            if($res>0){
                
                while ($row = $base->Registro()){
                    $obj= new usuario();
                        $obj->setear($row['idusuario'], $row['usnombre'],$row['usapellido'],$row['uslogin'],$row['usclave'],$row['usactivo']);
                    array_push($arreglo, $obj);
                }
               
            }
            
        } else {
            $this->setmensajeoperacion("usuario->listar: ".$base->getError());
        }
        
        return $arreglo;
    }
    




}

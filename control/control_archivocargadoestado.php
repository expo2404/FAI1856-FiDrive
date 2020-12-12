<?php


class control_archivocargadoestado {
    private function cargarObjeto($param){
        $obj = null;
         
        if( array_key_exists('idarchivocargadoestado',$param) and array_key_exists('idestadotipos',$param) and array_key_exists('acedescripcion',$param) and array_key_exists('idusuario',$param) and array_key_exists('acefechaingreso',$param) and array_key_exists('acefechafin',$param) and array_key_exists('idarchivocargado',$param)){
            $obj = new archivocargadoestado();
            
            $usuario=new usuario();
            $usuario->setIdusuario($param["idusuario"]);
            $usuario->cargar();
            
            $estadotipos=new estadotipos();
            $estadotipos->setIdestadotipos($param["idestadotipos"]);
            $estadotipos->cargar();
            
            $archivocargado=new archivocargado();
            $archivocargado->setIdarchivocargado($param["idarchivocargado"]);
            $archivocargado->cargar();
            $obj->setear($param["idarchivocargadoestado"], $estadotipos, $param["acedescripcion"],$usuario, $param["acefechaingreso"], $param["acefechafin"], $archivocargado);
        }
        
        return $obj;
    }
    
    public function alta($param){
        $resp = false;
        
        $elObjtAcEstado = $this->cargarObjeto($param);
        
//        verEstructura($elObjtTabla);
        if ($elObjtAcEstado!=null and $elObjtAcEstado->insertar()){
            $resp = true;
        }
        return $resp;
        
    }
    
    private function seteadosCamposClaves($param){
        $resp = false;
        
        if (isset($param['idarchivocargadoestado']))
            $resp = true;
        return $resp;
    }
    
    public function modificacion($param){
        //echo "Estoy en modificacion";
       
        $resp = false;
        if ($this->seteadosCamposClaves($param)){
            $elObjtAcEstado = $this->cargarObjeto($param);
            if($elObjtAcEstado!=null and $elObjtAcEstado->modificar()){
                $resp = true;
            }
        }
        return $resp;
    }
    
    private function cargarObjetoConClave($param){
        $obj = null;
        
        if( isset($param['idarchivocargadoestado']) ){
            $obj = new archivocargadoestado();
            $obj->setear($param['idarchivocargadoestado'], null, null, null, null, null,null);
        }
        return $obj;
    }
    
    /**
     * permite eliminar un objeto 
     * @param array $param
     * @return boolean
     */
    public function baja($param){
        $resp = false;
        if ($this->seteadosCamposClaves($param)){
            $elObjtAcEstado = $this->cargarObjetoConClave($param);
            if ($elObjtAcEstado!=null and $elObjtAcEstado->eliminar()){
                $resp = true;
            }
        }
        
        return $resp;
    }
    
    public function buscar($param){
        $where = " true ";
        if ($param<>NULL){
            if  (isset($param['idarchivocargadoestado'])){
                $where.=" and idarchivocargadoestado= ".$param['idarchivocargadoestado'];
            }
            if  (isset($param['idestadotipos'])){
                 $where.=" and idestadotipos ='".$param['idestadotipos']."'";
            }
            if  (isset($param['acedescripcion'])){
                 $where.=" and acedescripcion ='".$param['acedescripcion']."'";
            }
            if  (isset($param['idusuario '])){
                 $where.=" and idusuario ='".$param['idusuario']."'";
            }
            if  (isset($param['acefechaingreso'])){
                 $where.=" and acefechaingreso ='".$param['acefechaingreso']."'";
            }
            if  (isset($param['acefechafin'])){
                 $where.=" and acefechafin ='".$param['acefechafin']."'";
            }
            if  (isset($param['idarchivocargado'])){
                 $where.=" and idarchivocargado ='".$param['idarchivocargado']."'";
            }
            
        }
        $arreglo = archivocargadoestado::listar($where);  
        return $arreglo;
            
            
      
        
    }
}

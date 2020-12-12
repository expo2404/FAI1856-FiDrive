<?php


class control_archivocargado {
    
    private function cargarObjeto($param){
        $obj = null;
           
        if( array_key_exists('idarchivocargado',$param) and array_key_exists('acnombre',$param) and array_key_exists('acdescripcion',$param) and array_key_exists('acicono',$param) and array_key_exists('idusuario',$param) and array_key_exists('aclinkacceso',$param) and array_key_exists('accantidaddescarga',$param) and array_key_exists('accantidadusada',$param) and array_key_exists('acfechainiciocompartir',$param) and array_key_exists('acefechafincompartir',$param) and array_key_exists('acprotegidoclave',$param)){
            $obj = new archivocargado();
            $objusuario=new usuario();
            $objusuario->setIdusuario($param["idusuario"]);
            $objusuario->cargar();
            $obj->setear($param["idarchivocargado"], $param["acnombre"], $param["acdescripcion"], $param["acicono"], $objusuario, $param["aclinkacceso"], $param["accantidaddescarga"], $param["accantidadusada"], $param["acfechainiciocompartir"], $param["acefechafincompartir"], $param["acprotegidoclave"]);
        }
        return $obj;
    }
    
    public function alta($param){
        $res=false;
        
        $elObjtArchivoCargado = $this->cargarObjeto($param);
//        verEstructura($elObjtTabla);
        if ($elObjtArchivoCargado!=null and $elObjtArchivoCargado->insertar()){
            
            $resp =$elObjtArchivoCargado->getIdarchivocargado();
        }
       
        return $resp;
        
    }
    
    private function seteadosCamposClaves($param){
        $resp = false;
        
        if (isset($param['idarchivocargado']))
            $resp = true;
        return $resp;
    }
    
    public function modificacion($param){
        //echo "Estoy en modificacion";
        $resp = false;
        
        if ($this->seteadosCamposClaves($param)){
            $elObjtArchivocargado = $this->cargarObjeto($param);
            if($elObjtArchivocargado!=null and $elObjtArchivocargado->modificar()){
                $resp = true;
            }
        }
        return $resp;
    }
    
    private function cargarObjetoConClave($param){
        $obj = null;
        
        if( isset($param['idarchivocargado']) ){
            $obj = new archivocargado();
            $obj->setear($param['idarchivocargado'], null, null, null, null, null,null,null,null,null,null);
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
            $elObjtArchivocargado = $this->cargarObjetoConClave($param);
            if ($elObjtArchivocargado!=null and $elObjtArchivocargado->eliminar()){
                $resp = true;
            }
        }
        
        return $resp;
    }
    
    public function buscar($param){
        $where = " true ";
        if ($param<>NULL){
            if  (isset($param['idarchivocargado'])){
                $where.=" and idarchivocargado ='".$param['idarchivocargado']."'";
            }
            if  (isset($param['acnombre'])){
                 $where.=" and acnombre ='".$param['acnombre']."'";
            }
            if  (isset($param['acdescripcion'])){
                 $where.=" and acdescripcion ='".$param['acdescripcion']."'";
            }
            if  (isset($param['acicono'])){
                 $where.=" and acicono ='".$param['acicono']."'";
            }
            if  (isset($param['idusuario'])){
                 $where.=" and idusuario ='".$param['idusuario']."'";
            }
            if  (isset($param['aclinkacesso'])){
                 $where.=" and aclinkacceso ='".$param['aclinkacceso']."'";
            }
            if  (isset($param['accantidaddescarga'])){
                 $where.=" and accantidaddescarga ='".$param['accantidaddescarga']."'";
            }
            if  (isset($param['accantidadusada'])){
                 $where.=" and accantidadusada ='".$param['accantidadusada']."'";
            }
            if  (isset($param['acfechainiciocompartir'])){
                 $where.=" and acfechainiciocompartir ='".$param['acfechainiciocompartir']."'";
            }
            if  (isset($param['acfechafincompartir'])){
                 $where.=" and acfechafincompartir ='".$param['acfechafincompartir']."'";
            }
            if  (isset($param['acprotegidoclave'])){
                 $where.=" and acprotegidoclave ='".$param['acprotegidoclave']."'";
            }
        }
        $arreglo = archivocargado::listar($where);  
        return $arreglo;
            
            
      
        
    }
}

<?php


class control_usuario {
    private function cargarObjetoUsuario($param){
        $obj = null;
           
        if( array_key_exists('idusuario',$param) and array_key_exists('usnombre',$param) and array_key_exists('usapellido',$param) and array_key_exists('uslogin',$param) and array_key_exists('usclave',$param) and array_key_exists('usactivo',$param)){
            $obj = new usuario();
            $obj->setear($param["idusuario"], $param["usnombre"], $param["usapellido"], $param["uslogin"], $param["usclave"], $param["usactivo"]);
        }
        return $obj;
    }
    
    public function altaUsuario($param){
        $resp = false;
        
        $elObjtUsuario = $this->cargarObjetoUsuario($param);
//        verEstructura($elObjtTabla);
        if ($elObjtUsuario!=null and $elObjtUsuario->insertar()){
            $resp = true;
        }
        return $resp;
        
    }
    
    private function seteadosCamposClavesUsuario($param){
        $resp = false;
        
        if (isset($param['idusuario']))
            $resp = true;
        return $resp;
    }
    
    public function modificacionUsuario($param){
        //echo "Estoy en modificacion";
        $resp = false;
        
        if ($this->seteadosCamposClavesUsuario($param)){
            $elObjtUsuario = $this->cargarObjetoUsuario($param);
            if($elObjtUsuario!=null and $elObjtUsuario->modificar()){
                $resp = true;
            }
        }
        return $resp;
    }
    
    private function cargarObjetoConClaveUsuario($param){
        $obj = null;
        
        if( isset($param['idusuario']) ){
            $obj = new usuario();
            $obj->setear($param['idusuario'], null, null, null, null, null);
        }
        return $obj;
    }
    
    /**
     * permite eliminar un objeto 
     * @param array $param
     * @return boolean
     */
    public function bajaUsuario($param){
        $resp = false;
        if ($this->seteadosCamposClavesUsuario($param)){
            $elObjtUsuario = $this->cargarObjetoConClaveUsuario($param);
            if ($elObjtUsuario!=null and $elObjtUsuario->eliminar()){
                $resp = true;
            }
        }
        
        return $resp;
    }
    
    public function buscar($param){
        $where = " true ";
        if ($param<>NULL){
            if  (isset($param['idusuario'])){
                $where.=" and idusuario ='".$param['idusuario']."'";
            }
            if  (isset($param['usnombre'])){
                 $where.=" and usnombre ='".$param['usnombre']."'";
            }
            if  (isset($param['usapellido'])){
                 $where.=" and usapellido ='".$param['usapellido']."'";
            }
            if  (isset($param['uslogin '])){
                 $where.=" and uslogin ='".$param['uslogin']."'";
            }
            if  (isset($param['usclave'])){
                 $where.=" and usclave ='".$param['usclave']."'";
            }
            if  (isset($param['usactivo'])){
                 $where.=" and usactivo ='".$param['usactivo']."'";
            }
            
        }
        $arreglo = usuario::listar($where);  
        return $arreglo;
            
            
      
        
    }
}

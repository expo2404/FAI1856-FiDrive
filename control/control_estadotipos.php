<?php


class control_estadotipos {
    private function cargarObjetoEstados($param){
        $obj = null;
           
        if( array_key_exists('idestadotipos',$param) and array_key_exists('etdescripcion',$param) and array_key_exists('etactivo',$param)){
            $obj = new estadotipos();
            $obj->setear($param["idestadotipos"], $param["etdescripcion"], $param["etactivo"]);
        }
        return $obj;
    }
    
    public function altaEstadotipos($param){
        $resp = false;
        
        $elObjtEstados = $this->cargarObjetoEstados($param);
//        verEstructura($elObjtTabla);
        if ($elObjtEstados!=null and $elObjtEstados->insertar()){
            $resp = true;
        }
        return $resp;
        
    }
    
    private function seteadosCamposClavesEstados($param){
        $resp = false;
        
        if (isset($param['idestadotipos']))
            $resp = true;
        return $resp;
    }
    
    public function modificacionEstados($param){
        //echo "Estoy en modificacion";
        $resp = false;
        
        if ($this->seteadosCamposClavesEstados($param)){
            $elObjtEstados = $this->cargarObjetoEstados($param);
            if($elObjtEstados!=null and $elObjtEstados->modificar()){
                $resp = true;
            }
        }
        return $resp;
    }
    
    private function cargarObjetoConClaveEstados($param){
        $obj = null;
        
        if( isset($param['idestadotipos']) ){
            $obj = new estadotipos();
            $obj->setear($param['idestadotipos'], null, null);
        }
        return $obj;
    }
    
    /**
     * permite eliminar un objeto 
     * @param array $param
     * @return boolean
     */
    public function bajaEstados($param){
        $resp = false;
        if ($this->seteadosCamposClavesEstados($param)){
            $elObjtEstados = $this->cargarObjetoConClaveEstados($param);
            if ($elObjtEstados!=null and $elObjtEstados->eliminar()){
                $resp = true;
            }
        }
        
        return $resp;
    }
    
    public function buscar($param){
        $where = " true ";
        if ($param<>NULL){
            if  (isset($param['idestadotipos'])){
                $where.=" and idesatdotipos ='".$param['idesatdotipos']."'";
            }
            if  (isset($param['etdescripcion'])){
                 $where.=" and etdescripcion ='".$param['etdescripcion']."'";
            }
            if  (isset($param['etactivo'])){
                 $where.=" and etactivo ='".$param['etactivo']."'";
            }
            
        }
        $arreglo = estadotipos::listar($where);  
        return $arreglo;
            
            
      
        
    }
}

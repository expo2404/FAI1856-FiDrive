<?php


class Control_Contenido {
    public function obtenerArchivos() {
        $directorio="../../archivos/";
        $archivos= scandir($directorio,1); // scandir: Enumera los ficheros y directorios ubicados en la ruta especificada
        $res=array();
        for($i=0;$i<count($archivos);$i++){
            if($archivos[$i]==".." || $archivos[$i]=="."){
                
            }else{
                array_push($res,$archivos[$i]);
                $directorioFiles=$directorio.$res[$i];
                if(is_file($directorioFiles)){
                    $files=$res;
                }
            }
        }
        return $files;
    }
    public function creacion($date) {
        $nombreC=$date['nombreCarpeta'];
            
        if(file_exists("../../archivos/$nombreC")){ //file_exists: Comprueba si existe un fichero o carpeta
            echo "el nombre de la carpeta o archivo ya existe";
        }else{
        mkdir("../../archivos/$nombreC",0700);// mkdir: Crea una carpeta
        echo "carpeta creada con exito";
        }
    }
    public function subirArchivo() {
        $directorio="../../archivos/";
        $nombreArchivo=$_FILES['archivo']['name'];
		$error="";
        $todoOK=true;

        if ($_FILES["archivo"]["error"] <= 0) {
            $todoOK=true;
            $error="";
        }
        else {
            $todoOK=false;
            $error= "ERROR: no se pudo cargar el archivo. No se pudo acceder al archivo Temporal";
        }
      
        if ($todoOK && $_FILES['archivo']["size"] / 1000 >300)
        {
            $error= "ERROR: El archivo ".$nombreArchivo." supera los 300 KB.";
            $todoOK=false;
        }


        if ($todoOK && !copy($_FILES['archivo']['tmp_name'], $directorio.$_FILES['archivo']['name']))
        {
            $texto= "ERROR: no se pudo cargar el archivo ";
            $todoOK=false;
        }
        
        return $todoOK;
    }
    public function eliminar($param) {
        $archivoestado=new control_archivocargadoestado();
        $res=false;
        $idarchivo["idarchivocargado"]=$param["id"];
        $arreglo=$archivoestado->buscar($idarchivo);
//        echo "idarchivoestado".$arreglo[0]->getIdarchivocargadoestado();
//        echo "descrip".$arreglo[0]->getAcedescripcion();
//        echo "idusuario".$arreglo[0]->getObjusuario()->getIdusuario();
//        echo "idcargado".$arreglo[0]->getObjarchivocargado()->getIdarchivocargado();
        $colestado=["idarchivocargadoestado"=>$arreglo[0]->getIdarchivocargadoestado(),"idestadotipos"=>4,"acedescripcion"=>$arreglo[0]->getAcedescripcion(),"idusuario"=>$arreglo[0]->getObjusuario()->getIdusuario(),"acefechaingreso"=>$arreglo[0]->getAcefechaingreso(),"acefechafin"=>"2018-12-09 00:44:20","idarchivocargado"=>$arreglo[0]->getObjarchivocargado()->getIdarchivocargado()];
        if($archivoestado->alta($colestado)){
            $res=true;
        }
        return $res;
        
    }
    
    public function compartir($param) {
        
        $archivoCargado=new control_archivocargado();
        $archivoCargadoestado=new control_archivocargadoestado();
        $archivos=$archivoCargado->buscar($param["id"]);
        $colDatos = ["idarchivocargado" =>$param["id"], "acnombre" => $param["nombreC"], "acdescripcion" => $archivos[0]->getAcdescripcion(), "acicono" =>$archivos[0]->getAcicono(), "idusuario" => $param["user"], "aclinkacceso" => "patricio", "accantidaddescarga" =>$param["descarga"], "accantidadusada" =>$param["dia"], "acfechainiciocompartir" => "2020-11-14 00:34:00", "acefechafincompartir" => "0000-00-00 00:00:00", "acprotegidoclave" => "no"];
        $id["idarchivocargado"]=$param["id"];
        $archivos2=$archivoCargadoestado->buscar($id);
        $colDatos_1=["idarchivocargadoestado"=>$archivos2[0]->getIdarchivocargadoestado(),"idestadotipos"=>2,"acedescripcion"=>"","idusuario"=>$param["user"],"acefechaingreso"=> date('Y-m-d H:i:s'),"acefechafin"=>"0000-00-00 00:00:00","idarchivocargado"=>$archivos2[0]->getObjarchivocargado()->getIdarchivocargado()];
        if($archivoCargado->modificacion($colDatos)){
             ECHO "MODIFICADO EXITO";
            if($archivoCargadoestado->alta($colDatos_1)){
                echo "ARCHIVO INSERTADO";
                
            }
        }
        
        
        
       
    }
    
}

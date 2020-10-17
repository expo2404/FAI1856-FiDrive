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
        if ($todoOK){
            $texto="El archivo se ha ingresado correctamente!";
        }
        else{
            $texto=$error;
        }
        return $texto;
    }
}


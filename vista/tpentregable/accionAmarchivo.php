<?php
include_once '../estructura/cabecera.php';
?>


<?php
$obj = new Control_Contenido();
$datos = data_submitted();
$amarchivo=new control_amarchivo();

if($datos["clave"]==0){    
    if($obj->subirArchivo()){
        if($amarchivo->alta($datos)){
       
       echo "archivocargado con exito<br>";
      
        } 
     }
   
}else{ 
    if($amarchivo->modificacion($datos)){
        echo "se logro modificar";
    }
}



?>

<a href="contenido.php">Volver pagina anterior</a>



</div>
</div>
</div>
</div>
<?php
include_once '../estructura/pie.php';
?>



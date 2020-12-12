<?php
include_once '../estructura/cabecera.php';
?>
<?php
$obj = new control_archivocargadoestado();
$archivos = $obj->buscar(null);
?>
<div class="col-lg-6 container mt-5">
    
    <!--    <form action="contenido.php" method="post">-->
    <?php
    $directorio="../../archivos/";
    foreach ($archivos as $archivo) {
        
        if($archivo->getObjidestadotipos()->getIdestadotipos()==3){
        $nombre=$archivos[$i]->getObjarchivocargado()->getAcnombre();
        $id=$archivos[$i]->getObjarchivocargado()->getIdarchivocargado();
        echo "
            <div class='row'>
                <div class='col-lg-3'>
                    <input class='bg-warning mt-1' type='button' id='$nombre' name='$nombre' value='$nombre' onclick='mostrarOpcionesCompartidos(\"$nombre\",$id)'>     
                </div>
                
            </div>
            ";
        }
        }
      
    ?>
    <div class="form-group" id="mostrarElemento" style="display:none">
        
                
                <div class='col-lg-2 mt-3'>
                    <form method='get' action='eliminararchivocompartido.php'>
                    <input type="hidden" id="archivodejarcompartir" name="archivonocompartido" value="">
                <input  type='submit' value='dejarcompartir'>
                </form>
                </div>
                
    </div>
    <!--</form>-->
</div>


<?php
include_once '../estructura/pie.php';
?>


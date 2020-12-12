<?php
include_once '../estructura/cabecera.php';
?>
<?php
$obj = new control_archivocargadoestado();
$archivos = $obj->buscar(null);
?>
<div class="col-lg-6 container mt-5">
    <div class="form-group">
        <form action="accionContenido.php" method="post" novalidate class="needs-validation">
            <input pattern="^[a-zA-Z0-9]+$" type="text" name="nombreCarpeta" id="nombreCarpeta" required>
            
            <input type="submit"  class="btn btn-primary" value="crearCarpeta">
            
        </form>
        <div class="form-group">
            <a class="btn btn-danger" href="amarchivo.php?clave=0">cargar nuevo archivo</a>
                </div>
    </div>
    <!--    <form action="contenido.php" method="post">-->
    <?php
    $directorio="../../archivos/";
    
    for ($i=0;$i<count($archivos);$i++) {
        $idarchivocargado=$archivos[$i]->getObjarchivocargado()->getIdarchivocargado();
        $param["idarchivocargado"]=$idarchivocargado;
        
        $superArreglo=$obj->buscar($param["idarchivocargado"]);
        
        $nombre=$archivos[$i]->getObjarchivocargado()->getAcnombre();
        $id=$archivos[$i]->getObjarchivocargado()->getIdarchivocargado();
        echo "
            <div class='row'>
                <div class='col-lg-3'>
                    <input class='bg-warning mt-1' type='button' id='$nombre' name='$nombre' value='$nombre' onclick='mostrarOpciones(\"$nombre\",$id)'>     
                </div>
                
            </div>
            ";
        }
    } 
    ?>
    <div class="form-group" id="mostrarElemento" style="display:none">
        <div class='col-lg-2 mt-5'>
            <form method='get' action='amarchivo.php'>
                        <input type="hidden" id="archivomodificar" name="archivomodificar" value="">
                        <input type="hidden" id="clave" name="clave" value="1">
                        <input type="hidden" id="idmodificar" name="id" value="">
                <input  type='submit' value='modificar'>
                </form>
                </div>
                <div class='col-lg-2'>
                    <form method='get' action='eliminararchivo.php'>
                        <input type="hidden" id="archivonombre" name="archivoeliminar" value="">
                        <input type="hidden" id="ideliminar" name="id" value="">
                <input  type='submit' value='eliminar'>
                </form>
                </div>
                <div class='col-lg-2'>
                <form method='get' action='compartirarchivo.php'>
                    <input type="hidden" id="archivocompartir" name="archivocompartir" value="">
                    <input type="hidden" id="idcompartir" name="id" value="">
                <input  type='submit' value='compartir'>
                </form>
                </div>
                
    </div>
    <!--</form>-->
</div>


<?php
include_once '../estructura/pie.php';
?>


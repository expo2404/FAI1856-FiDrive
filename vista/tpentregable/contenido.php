<?php
include_once '../estructura/cabecera.php';
?>
<?php
$obj = new Control_Contenido();
$archivos = $obj->obtenerArchivos();
?>
<div class="col-lg-6 container mt-5">
    <div class="form-group">
        <form action="accionContenido.php" method="post" novalidate class="needs-validation">
            <input pattern="^[a-zA-Z0-9]+$" type="text" name="nombreCarpeta" id="nombreCarpeta" required>
            
            <input type="submit"  class="btn btn-primary" value="crearCarpeta">
            
        </form>
        <div class="form-group">
                <form method='post' action='amarchivo.php'>
                    <input name='cargar$archivo' class="btn btn-danger" type='submit' value='cargar nuevo archivo'>
                </form>
                </div>
    </div>
    <!--    <form action="contenido.php" method="post">-->
    <?php
    $directorio="../../archivos/";
    foreach ($archivos as $archivo) {
        
        if(is_file($directorio.$archivo)){
        echo "
            <div class='row'>
                <div class='col-lg-3'>
                    <input class='bg-warning mt-1' type='button' id='click' name='click' value='$archivo' onclick='mostrarOpciones()'>     
                </div>
                
            </div>
            ";
        }else{
            echo "
            <div class='row'>
                <div class='col-lg-3'>
                    <input class='bg-dark mt-1 text-light' type='button' id='click2' name='click2' value='$archivo' >     
                </div>
                
            </div>
            ";
        }
        }
    
    ?>
    <div class="form-group" id="mostrarElemento" style="display:none">
        <div class='col-lg-2 mt-5'>
                <form method='post' action='eliminararchivo.php'>
                <input name='eliminar$archivo' type='submit' value='eliminar'>
                </form>
                </div>
                <div class='col-lg-2'>
                <form method='post' action='amarchivo.php'>
                <input name='modificar$archivo' type='submit' value='modificar'>
                </form>
                </div>
                <div class='col-lg-2'>
                <form method='post' action='compartirarchivo.php'>
                <input name='compartir$archivo' type='submit' value='compartir'>
                </form>
                </div>
                <div class='col-lg-2'>
                <form method='post' action='eliminararchivocompartido.php'>
                <input name='nocompartir$archivo' type='submit' value='dejar compartir'>
                    </form>
                </div>
    </div>
    <!--</form>-->
</div>


<?php
include_once '../estructura/pie.php';
?>


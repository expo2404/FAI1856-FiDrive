<?php
include_once '../estructura/cabecera.php';
?>

<?php

$datos = data_submitted();
$obj = new Control_Contenido();
if($obj->eliminar($datos)){
    echo "se ha eliminado el archivo";
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


<?php
include_once '../estructura/cabecera.php';
?>


<?php
$obj = new Control_Contenido();
$datos = data_submitted();
$obj->compartir($datos);

?>

<a href="contenido.php">Volver pagina anterior</a>



</div>
</div>
</div>
</div>
<?php
include_once '../estructura/pie.php';
?>


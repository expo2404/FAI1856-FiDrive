<?php
include_once '../estructura/cabecera.php';
?>
<?php
// ejercicio numero 3 tp1
$datos = data_submitted();
$obj = new control_ejer6($datos);
$respuesta = $obj->validarDatos($datos);
?>

<p>
<b>Respuesta: </b> 
<?php echo $respuesta ?>
</p>
<a class="text-warning ml-1" href="indexEjer3.php">volver pagina anterior</a>
</div>

<?php
include_once '../estructura/pie.php';
?>
</body>
</html>


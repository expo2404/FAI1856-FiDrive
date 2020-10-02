<?php
include_once '../estructura/cabecera.php';
?>
<?php
// ejercicio numero 1 tp1
$datos = data_submitted();
$obj = new control_ejer2($datos);
$respuesta = $obj->validarInfo($datos);
?>

<p>
<b>Respuesta: </b> 
<?php echo $respuesta ?>
</p>
<a class="text-warning ml-5" href="index.php">volver pagina anterior</a>
</div>

<?php
include_once '../estructura/pie.php';
?>
</body>
</html>


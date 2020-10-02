<?php
include_once '../estructura/cabecera.php';
?>
<?php
// ejercicio numero 8 tp1
$datos = data_submitted();
$obj = new control_ejer8($datos);
$respuesta = $obj->valorEntrada($datos);
?>

<p class="mt-5">
<b>Respuesta: </b> 
<?php echo $respuesta ?>
</p>
<a class="text-warning ml-5 mt-5" href="indexEjer8.php">volver pagina anterior</a>
</div>

<?php
include_once '../estructura/pie.php';
?>
</body>
</html>


<?php
include_once '../estructura/cabecera.php';
?>
<?php
// ejercicio numero 8 tp1
$datos = data_submitted();
$obj = new control_ejer5($datos);
$respuesta = $obj->validarInfo($datos);
?>

<p class="mt-5 col-md-5 ">
<b>Respuesta: </b> 
<?php echo $respuesta ?>
<a class="text-warning ml-5 mt-5 btn btn-primary" href="indexEjer5.php">volver pagina anterior</a>
</p>

</div>

<?php
include_once '../estructura/pie.php';
?>
</body>
</html>


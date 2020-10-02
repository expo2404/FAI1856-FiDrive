<?php
include_once '../estructura/cabecera.php';
?>
<?php
// ejercicio numero 8 tp1
$datos = data_submitted();
$obj = new control_Ejer3($datos);
$respuesta = $obj->verificarDatos($datos);
?>

<p class="mt-5">
<b>Respuesta: </b> 
<?php echo $respuesta ?>
</p>
<a class="text-warning ml-5 mt-5" href="../tp2/indexEjer3.php">volver pagina anterior</a>
</div>

<?php
include_once '../estructura/pie.php';
?>
</body>
</html>



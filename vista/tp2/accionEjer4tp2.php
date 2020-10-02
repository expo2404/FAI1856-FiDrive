<?php
include_once '../estructura/cabecera.php';
?>
<?php
// ejercicio numero 8 tp1
$datos = data_submitted();
$obj = new control_Ejer4($datos);
$respuesta = $obj->verificarDatos($datos);
?>

<p class="mt-5">
<b>Respuesta: </b> 

</p>
<a class="text-warning ml-5 mt-5" href="../tp2/indexEjer3.php">volver pagina anterior</a>
<div class="container bg-success col-lg-5">
    <h2>La pelicula introducida es:</h2>
    <div class="text-left text-dark">
       <?php echo $respuesta ?> 
    </div>
</div>
</div>

<?php
include_once '../estructura/pie.php';
?>
</body>
</html>


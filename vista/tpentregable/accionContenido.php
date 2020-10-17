<?php
include_once '../estructura/cabecera.php';
?>


<?php

$datos = data_submitted();
$obj = new Control_Contenido();
//$respuestas=$obj->subirArchivo();
$respuesta = $obj->creacion($datos);
?>
<?php
echo $respuesta;
//echo $respuestas;
?>
<a href="contenido.php">Volver pagina anterior</a>



</div>
</div>
</div>
</div>
<?php
include_once '../estructura/pie.php';
?>

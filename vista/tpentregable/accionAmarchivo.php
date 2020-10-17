<?php
include_once '../estructura/cabecera.php';
?>


<?php


$obj = new Control_Contenido();
$respuestas=$obj->subirArchivo();

?>
<?php

echo $respuestas;
?>
<a href="contenido.php">Volver pagina anterior</a>



</div>
</div>
</div>
</div>
<?php
include_once '../estructura/pie.php';
?>



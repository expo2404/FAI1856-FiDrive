<?php
include_once '../estructura/cabecera.php';
?>


<?php

$datos = data_submitted();
$obj = new Control_Contenido($datos);
$respuesta = $obj->obtenerNombre($datos);
?>


<!--Creamos el archivo eliminararchivo.php para eliminar un Archivo. Este archivo debe incluir los archivos: cabedera.php, pie.php y menu.php

Etiqueta que muestra nombre del archivo compartido (Colocar valor por defecto 1234.png)

Motivo de Eliminación

Usuario que lo carga (Seleccionar desde un Combo, los usuarios posibles son: admin, visitante, y usted)-->





<div class="container col-lg-6">
    <form action="acciones1" method="post" class="form-horizontal mt-4 needs-validation" novalidate>
        <div class="form-group ">
            <label class="label">Nombre del Archivo Compartido:</label>
            <input type="text" pattern="^[a-zA-Z]+$" class="form-control" id="nombreC" name="nombreC" placeholder="1234.png" required> 
        </div>
        
        <div class="form-group">
            <label class="label">Motivo de Eliminacion:</label>
            <input type="text" class="form-control" id="descarga" name="descarga" placeholder=""> 
        </div>
        <div class="form-group">
            <label>Usuario que lo carga:</label>
            <select class="custom-select" name="user" id="user" required>
                <option value="">---</option>
                <option value="admin">Admin</option>
                <option value="visitante">Visitante</option>
                <option value="yo">Yo</option>               
            </select>
        </div>
        
        <div class="form-group float-left">

            <input type="submit" class="btn btn-primary"  value="enviar">       
        </div>
        <div class="form-group float-right">

            <input type="reset" class="btn btn-danger"  value="limpiar">       
        </div>

    </form>


</div>
</div>
</div>
</div>
<?php
include_once '../estructura/pie.php';
?>
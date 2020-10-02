<?php
include_once '../estructura/cabecera.php';
?>

<!-- Creamos el archivo amarchivo.php para alta o modificación de un Archivo. Este archivo debe incluir los archivos: cabecera.php, pie.php y menu.php

Nombre del Archivo (Colocar valor por defecto 1234.png)

Descripción del Archivo

 Usuario que lo carga (Seleccionar desde un Combo, los usuarios posibles son: admin, visitante, y usted)

 Seleccionar Icono que se va a utilizar (Imagen, Zip, Doc, PDF, XLS). Usar CheckBox.

Clave del Archivo a modificar. (Este debe ser un campo Oculto. -->

<div class="container col-lg-8">
    <form action="acciones1" method="post" class="form-horizontal mt-4" novalidate>
        <div class="form-group ">
            <label class="label">Nombre del Archivo:</label>
            <input type="text" class="form-control" placeholder="1234.png"> 
        </div>
        <div class="form-group ">
            <label class="label">Descripcion:</label>
            <input type="text" class="form-control" placeholder=""> 
        </div>
        <div class="form-group">
            <label>Usuario:</label>
            <select class="custom-select" name="usuario" id="genero" required>
                <option value="">---</option>
                <option value="admin">Admin</option>
                <option value="visitante">Visitante</option>
                <option value="yo">Yo</option>               
            </select>
        </div>
        <div class="form-group">
                    <div class="row">
                        <div class="ml-2">
                            <input type="radio" class="custom-control-inline" id="elijo" name="elijo" value="imagen" required>
                        <label class="control-label" for="customControlValidation3">Imagen</label>
                        </div>
                        <div class="ml-2">
                            <input type="radio" class="custom-control-inline" id="elijo" name="elijo" value="zip" required>
                        <label class="control-label" for="customControlValidation3">Zip</label>
                        </div>
                        <div class="ml-2">
                            <input type="radio" class="custom-control-inline" id="elijo" name="elijo" value="doc" required>
                        <label class="control-label" for="customControlValidation3">Doc</label>
                        </div>
                        <div class="ml-2">
                            <input type="radio" class="custom-control-inline" id="elijo" name="elijo" value="xls" required>
                        <label class="control-label" for="customControlValidation3">XLS</label>
                        </div>
                        <div class="ml-2">
                            <input type="radio" class="custom-control-inline" id="elijo" name="elijo" value="pdf" required>
                        <label class="control-label" for="customControlValidation3">Pdf</label>
                        </div>
                        
                        
                    </div>
                </div>
        <div class="form-group">
                            <label class="label">Clave:</label>
                            <input type="password" class="form-control" id="clave" name="clave" required>       
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
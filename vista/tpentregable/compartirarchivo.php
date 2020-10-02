<?php
include_once '../estructura/cabecera.php';
?>


<!--Creamos el archivo compartirarchivo.php para compartir un archivos. Este archivo debe incluir los archivos: cabecera.php, pie.php y menu.php

Etiqueta que muestra nombre del archivo compartido (Colocar valor por defecto 1234.png)

Ingresar cantidad de días que se comparte (Si queda vació quiere decir que no expira) 

Ingresar cantidad de descargar posibles (Si queda vació quiere decir que no hay limites) 

Usuario que lo carga (Seleccionar desde un Combo, los usuarios posibles son: admin, visitante, y usted)

CheckBox para seleccionar que se debe proteger con contraseña

Un Campo para cargar la contraseña en caso que se seleccione esta opción. 

Etiqueta para mostrar el link de compartir generado

Botón que permite generar un hash que sera el acceso para compartir el archivo-->


<div class="container col-lg-8">
    <form action="acciones1" method="post" class="form-horizontal mt-4 needs-validation" novalidate>
        <div class="form-group ">
            <label class="label">Nombre del Archivo Compartido:</label>
            <input type="text" pattern="^[a-zA-Z]+$" class="form-control" id="nombreC" name="nombreC" placeholder="1234.png" required> 
        </div>
        <div class="form-group ">
            <label class="label">Ingresar cantidad de días que se comparte:</label>
            <input type="text" class="form-control" id="dia" name="dia" placeholder=""> 
        </div>
        <div class="form-group">
            <label class="label">Ingresar cantidad de descargar posibles:</label>
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
        <div class="form-group">
            <input type="checkbox" name="opcion" id="opcion" onchange="mostrar()"/>
            <label class="label" for="customCheck1">proteger con contraseña</label>
        </div>
        <div class="form-group" id="clave" style="display: none">
            <label class="label">Clave:</label>
            <input type="password" class="form-control" id="contrasena" name="contrasena" required>       
        </div>
        <div class="form-group">
            <button type="button" name="opcion" id="opcion" class="btn btn-success">HASH</button>
            
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
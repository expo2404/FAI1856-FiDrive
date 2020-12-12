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
    <form action="accionCompartir.php" method="get"  class="form-horizontal mt-4 needs-validation" novalidate>
        <input type="hidden" id="idemodificar" name="id" value="<?php echo $_GET["id"];?>">
        <div class="form-group ">
            <label class="label">Nombre del Archivo Compartido:</label>
            <input type="text" pattern="^[a-zA-Z.-_]+(\.?)[a-zA-z]+$" class="form-control" id="nombreC" name="nombreC" value="<?php echo $_GET['archivocompartir'];?>" required> 
        </div>
        <div class="form-group ">
            <label class="label">Ingresar cantidad de días que se comparte:</label>
            <input pattern="^[0-9]+$" type="text" class="form-control" id="dia" name="dia" placeholder=""> 
        </div>
        <div class="form-group">
            <label class="label">Ingresar cantidad de descargar posibles:</label>
            <input pattern="^[0-9]+$" type="text" class="form-control" id="descarga" name="descarga" placeholder=""> 
        </div>
        <div class="form-group">
            <label>Usuario que lo carga:</label>
            <select class="custom-select" name="user" id="user" required>
                <option value="">---</option>
                <option value="1">Admin</option>
                <option value="2">Visitante</option>
                               
            </select>
        </div>
        <div class="form-group">
            <input type="checkbox" name="opcion" id="opcion" onchange="mostrar()"/>
            <label class="label" for="customCheck1">proteger con contraseña</label>
        </div>
        <div class="form-group" id="clave" style="display: none">
            <label class="label">Clave:</label>
            <input type="password" class="form-control" id="contrasena" name="contrasena" oninput="fortaleza()" >
            <p class="text"id="pantalla">
            </p>
        </div>
        
        <div class="form-group">
            <button type="button" name="opcion" id="opcion" class="btn btn-warning">generar hash</button>
            
        </div>
        <div class="form-group float-left">

            <input type="submit" class="btn btn-primary"  value="enviar">       
        </div>
        <div class="form-group float-right">

            <input type="reset" class="btn btn-danger"  value="limpiar">       
        </div>

    </form>
<a href="contenido.php">Volver pagina anterior</a>

</div>
</div>
</div>
</div>
<?php
include_once '../estructura/pie.php';
?>
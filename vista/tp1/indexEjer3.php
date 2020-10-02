<?php
include_once '../estructura/cabecera.php';
?>

<div class="col-md-8 ml-sm-auto">
    <h2>Este es el contenido principal</h2>
    <p class="text-warning">Ejercicio 3:
Crear una página php que contenga un formulario HTML como el que se indica en la
imagen (darle formato con CSS), enviar estos datos por el método Post a otra página php
que los reciba y muestre por pantalla un mensaje como el siguiente: “Hola, yo soy
nombre , apellido tengo edad años y vivo en dirección”, usando la información recibida.
Cambiar el método Post por Get y analizar las diferencias
            </p>
    <form id="tp1ejer3" method="post" class="form-horizontal mt-4" action="accion3.php" data-toggle="validator">
       <div class="form-group">

            <label class="col-md-3 control-label">Nombre</label>

            <div class="col-md-7">

                <input type="text" class="form-control"  name="nombre" placeholder="ingrese Nombre"/>

            </div>

        </div>
        <div class="form-group">

            <label class="col-md-3 control-label">Apellido</label>

            <div class="col-md-7">

                <input type="text" class="form-control"  name="apellido" placeholder="ingrese apellido"/>

            </div>

        </div>
        <div class="form-group">

            <label class="col-md-3 control-label">Edad</label>

            <div class="col-md-7">

                <input type="text" class="form-control"  name="edad" placeholder="ingrese su edad"/>

            </div>

        </div>
        <div class="form-group">

            <label class="col-md-3 control-label">Direccion</label>

            <div class="col-md-7">

                <input type="text" class="form-control"  name="direccion" placeholder="ingrese una direccion"/>

            </div>

        </div>
        
        <div class="form-group">

            <div class="col-md-5 col-md-offset-3">

                <button type="submit" class="btn btn-danger">Login</button>

            </div>

        </div>
        

    </form>
</div>
</div>
</div>
<?php
include_once '../estructura/pie.php';
?>



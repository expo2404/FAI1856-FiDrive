<?php
include_once '../estructura/cabecera.php';
?>

<div class="col-md-8 ml-sm-auto">
    <h2>Este es el contenido principal</h2>
    <p class="text-warning">Ejercicio 4:
Modificar el formulario del ejercicio anterior para que usando la edad solicitada, enviar
esos datos a otra página en donde se muestren mensajes distintos dependiendo si la
persona es mayor de edad o no; (si la edad es mayor o igual a 18).
Enviar los datos usando el método GET y luego probar de modificar los datos
directamente en la url para ver los dos posibles mensajes.
            </p>
    <form id="tp1ejer3" method="post" class="form-horizontal mt-4" action="accion4.php" data-toggle="validator">
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





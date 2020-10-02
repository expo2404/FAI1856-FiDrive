<?php
include_once '../estructura/cabecera.php';
?>

<div class="col-md-8 ml-sm-auto">
    <h2>Este es el contenido principal</h2>
    <p class="text-warning">Ejercicio 1:
Confeccionar un formulario que solicite un número. Al pulsar el botón de enviar debe
llamar a un script –vernumero.php- y visualizar un mensaje que indique si el número
enviado fue: positivo, cero o negativo. Añadir un link, a la página que visualiza la
respuesta, que permita volver a la página anterior.
            </p>
    <form id="loginForm" method="post" class="form-horizontal mt-4" action="accion.php" data-toggle="validator">

        <div class="form-group">

            <label class="col-md-3 control-label">Numero</label>

            <div class="col-md-7">

                <input type="text" class="form-control"  name="numero" placeholder="ingrese un numero"/>

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

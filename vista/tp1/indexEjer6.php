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
    <form id="tp1ejer6" method="post" class="form-horizontal mt-4 needs-validation" action="accion6.php"  novalidate>
        <div class="form-group mt-5">
            <h5>Datos</h5>
        </div>
        <div class="form-group">

            <label class="col-md-3 control-label">Nombre</label>

            <div class="col-md-7">

                <input type="text" pattern="^[a-zA-Z]+$" class="form-control"  name="nombre" placeholder="ingrese Nombre" required/>
                <div class="valid-feedback">
                    <i class="fa fa-check"></i> genial
                </div>
                <div class="invalid-feedback">
                     <i class="far fa-times-circle"></i> ingrese un nombre valido
                </div>
            </div>

        </div>
        <div class="form-group">

            <label class="col-md-3 control-label">Apellido</label>

            <div class="col-md-7">

                <input type="text" class="form-control"  name="apellido" placeholder="ingrese apellido" required/>
                <div class="valid-feedback">
                    <i class="fa fa-check"></i> genial
                </div>
                <div class="invalid-feedback">
                     <i class="far fa-times-circle"></i> ingrese un apellido valido
                </div>
            </div>

        </div>
        <div class="form-group">

            <label class="col-md-3 control-label">Edad</label>

            <div class="col-md-7">

                <input type="text" class="form-control"  pattern="^[0-9]+$" name="edad" placeholder="ingrese su edad" required/>
                <div class="valid-feedback">
                    <i class="fa fa-check"></i> genial
                </div>
                <div class="invalid-feedback">
                    <i class="far fa-times-circle"></i> ingrese una edad valida
                </div>
            </div>

        </div>
        <div class="form-group">

            <label class="col-md-3 control-label">Direccion</label>

            <div class="col-md-7">

                <input type="text"  class="form-control"  name="direccion" placeholder="ingrese una direccion" required/>
                <div class="valid-feedback">
                    <i class="fa fa-check"></i> genial
                </div>
                <div class="invalid-feedback">
                    <i class="far fa-times-circle"></i> ingrese una direccion valida
                </div>

            </div>


        </div>
        <!-- RADIOS BUTTON SELECCION DE Estudios-->
        <div class="form-group mt-5">
            <h5>Estudios</h5>
        </div>
        <div class="invalid-feedback">
                     <i class="far fa-times-circle"></i> ingrese una direccion valida
                </div>
        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="estudio" id="estudio" value="no tiene estudio" >
                <label class="form-check-label" for="exampleRadios1">
                    no tiene estudio
                </label>
            </div>
        </div>
        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="estudio" id="estudio" value="primario"  required>
                
                <label class="form-check-label" for="exampleRadios1">
                    Primario
                </label>
                
                
            </div>
        </div>
        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="estudio" id="estudio" value="secundario"  >
                <label class="form-check-label" for="exampleRadios1">
                    secundario
                </label>
            </div>
        </div>
        <!-- RADIOS BUTTON SELECCION DE SEXO-->
        <div class="form-group mt-5">
            <h5>Sexo</h5>
        </div>
        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sexo" id="sexo" value="masculino" required>
                <label class="form-check-label" for="exampleRadios1">
                    Masculino
                </label>
            </div>
        </div>
        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sexo" id="sexo" value="femenino"  >
                <label class="form-check-label" for="exampleRadios1">
                    Femenino
                </label>
            </div>
        </div>
        <!-- seccion deportes-->
        <div class="form-group mt-5">
            <h5>Deportes</h5>
        </div>
        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="deportes[]" value="futbol">
                <label class="form-check-label" for="futbol">futbol</label>
            </div>
            <div class="form-check ">
                <input class="form-check-input" type="checkbox" name="deportes[]" value="basket">
                <label class="form-check-label" for="basket">basket</label>
            </div>
            <div class="form-check ">
                <input class="form-check-input" type="checkbox" name="deportes[]" value="tennis">
                <label class="form-check-label" for="tennis">tennis</label>
            </div>
            <div class="form-check ">
                <input class="form-check-input" type="checkbox" name="deportes[]" value="voley">
                <label class="form-check-label" for="voley">voley</label>
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


<?php
include_once '../estructura/cabecera.php';
?>

<div class="col-md-8 ml-sm-auto">
    <h2>Este es el contenido principal</h2>
    <p class="text-warning">Ejercicio 5:
        Modificar el formulario del ejercicio 4  solicitando, tal que usando componentes
        “radios buttons” se ingrese el nivel de estudio de la persona: 1-no tiene estudios, 2-
        estudios primarios, 3-estudios secundarios. Agregar el componente que crea más
        apropiado para solicitar el sexo. En la página que procesa el formulario mostrar además
        un mensaje que indique el tipo de estudios que posee y su sexo.
    </p>
    <form id="tp1ejer5" method="post" class="form-horizontal mt-4 need-validated" action="accion5.php" data-toggle="validator">
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
        <!-- RADIOS BUTTON SELECCION DE estudios-->
        <div class="form-group mt-5">
            <h5 name="deportes">Estudios</h5>
        </div>
        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="estudio" id="estudio" value="no tiene estudio" >
                <label class="form-check-label" for="exampleRadios1">
                    No tiene estudios
                </label>
            </div>
        </div>
        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="estudio" id="estudio" value="primario"  >
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
                <input class="form-check-input" type="radio" name="sexo" id="sexo" value="masculino" >
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






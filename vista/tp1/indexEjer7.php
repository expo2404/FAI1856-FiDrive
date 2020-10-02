<?php
include_once '../estructura/cabecera.php';
?>

<div class="col-md-8 ml-sm-auto">
    <h2>Este es el contenido principal</h2>
    <p class="text-warning">Ejercicio 7:
Crear una página con un formulario que contenga dos input de tipo text y un select. En
los inputs se ingresarán números y el select debe dar la opción de una operación
matemática que podrá resolverse usando los números ingresados. En la página que
procesa la información se debe mostrar por pantalla la operación seleccionada, cada
uno de los operandos y el resultado obtenido de resolver la operación. Ejemplo del
formulario:

            </p>
    <div class="col-12">
    <form id="tp1ejer7" method="post" class="form-horizontal mt-4" action="accion7.php" data-toggle="validator">
        
        <div class="col-md-4 mb-3 form-group">
            <label for="validationCustom01">numero1</label>
            <input type="text" class="form-control" id="validationCustom01" value="" name="numero1" placeholder="ingrese numero aqui">
        </div>
        <div class="col-md-4 mb-3 form-group">
            <label for="validationCustom01">numero2</label>
            <input type="text" class="form-control" id="validationCustom01" value="" name="numero2" placeholder="ingrese numero aqui">
        </div>
        <div class="form-group ml-3">
        <select id="selector" name="selector" class="custom-select col-lg-2 w-25">
            <option>Suma</option>
            <option>Resta</option>
            <option>Multiplicacion</option>
        </select>
        </div>
        <div class="form-group ml-3">
        <input type="submit"  class="btn btn-primary " value="enviar">
        </div>
        </div>

    </form>
</div>
</div>
</div>
<?php
include_once '../estructura/pie.php';
?>



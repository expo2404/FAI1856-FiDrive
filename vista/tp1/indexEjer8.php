<?php
include_once '../estructura/cabecera.php';
?>

<div class="col-md-8 ml-sm-auto">
    <h2>Este es el contenido principal</h2>
    <p class="text-warning">Ejercicio 8:
        La empresa de Cine Cinem@s tiene establecidas diferentes tarifas para las entradas, en
        función de la edad y de la condición de estudiante del cliente. Desea que sean los propios
        clientes los que puedan calcular el valor de sus entradas a través de una página web. Si
        es estudiante o menor de 12 años el precio es de $160, si es estudiante y mayor o igual
        de 12 años el precio es de $180, en cualquier otro caso el precio es de $300. Diseñar un
        formulario que solicite la edad y permita ingresar si se trata de un estudiante o no. Con
        un botón enviar los datos a un script encargado de realizar el cálculo y visualizarlo.
        Agregar un botón para limpiar el formulario y volver a consultar.
    </p>
    <form id="tp1ejer8" method="post" class="form-horizontal mt-4" action="accion8.php" data-toggle="validator">
        <div class="form-group col-lg-2">
            <label>Edad</label>
            <input type="text" id="edad" name="edad" placeholder="ingrese su edad">
        </div>
        <div class="form-group col-lg-2">
            <select id="selector" name="selector">
                <option>estudiante</option>
                <option>no estudiante</option>
            </select>
        </div>
        <div class="form-group">
            <input type="submit" value="enviar" class="btn btn-danger ml-3">
        </div>
        <div class="form-group">
            <input type="reset" value="limpiar" class="btn btn-danger ml-3">
        </div>
    </form>
</div>
</div>
</div>
<?php
include_once '../estructura/pie.php';
?>



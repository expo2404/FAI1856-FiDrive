<?php
include_once '../estructura/cabecera.php';
?>

<div class="col-md-8 ml-sm-auto">
    <h2>Este es el contenido principal</h2>
    <p class="text-warning">tp2 Ejercicio 4:
        Diseñar un formulario que permita cargar las películas de la empresa Cinem@s. La lista géneros
        tiene los siguientes datos: Comedia, Drama, Terror, Románticas, Suspenso, Otras.
        Aplicar Bootstrap y validar los siguiente:
        - El año debe ser un campo que debe permitir ingresar como máximo 4 caracteres y solo
        aceptar números.
        - El campo duración debe permitir un máximo de 3 números.
        - Todos los datos son obligatorios
        - Al hacer click en el botón “Enviar”, se deberán mostrar todos los datos ingresados en el
        formulario.
        - El botón “Borrar” debe limpiar el formulario. 

    </p>
    <div class="container bg-light text-dark">
        <div class="row"><h2 class="text-primary">Cinem@as</h2></div>

        <form method="post" action="accionEjer4tp2.php" class="needs-validation" novalidate >
            <div class="row">
                <div class="control-group col-lg-6">
                    <label class="label">Titulo</label>
                    <input pattern="^[a-zA-Z]+\s[a-zA-Z]+$" class="form-control" type="text" id="titulo" name="titulo" required>
                    <div class="valid-feedback">
                        genial
                    </div>
                    <div class="invalid-feedback">
                        el valor del campo es incorrecto
                        o se encuentra vacio
                    </div>
                </div>
                
                <div class="control-group col-lg-6 col-xs-3">
                    <label class="label">Actores</label>
                    <input pattern="^[a-zA-Z]+\s[a-zA-Z]+$" class="form-control" type="text" id="actores" name="actores" required>
                    <div class="valid-feedback">
                        genial
                    </div>
                    <div class="invalid-feedback">
                        el valor del campo es incorrecto
                        o se encuentra vacio
                    </div>
                </div>
                
            </div>
            
            <div class="row">
                <div class="control-group col-lg-6">
                    <label class="label">Director</label>
                    <input  pattern="^[a-zA-Z]+\s[a-zA-Z]+$" class="form-control" type="text" id="director" name="director" required>
                    <div class="valid-feedback">
                        genial
                    </div>
                    <div class="invalid-feedback">
                        el valor del campo es incorrecto
                        o se encuentra vacio
                    </div>
                </div>
                
                <div class="control-group col-lg-6 col-xs-3">
                    <label class="label">Guion</label>
                    <input class="form-control" type="text" id="guion" name="guion" required>
                    <div class="valid-feedback">
                        genial
                    </div>
                    <div class="invalid-feedback">
                        el valor del campo es incorrecto
                        o se encuentra vacio
                    </div>
                </div>
                
            </div>
            
            <div class="row">
                <div class="control-group col-lg-6">
                    <label class="label">Produccion</label>
                    <input pattern="^[a-zA-Z]+$" class="form-control" type="text" id="produccion" name="produccion" required>
                    <div class="valid-feedback">
                        genial
                    </div>
                    <div class="invalid-feedback">
                        el valor del campo es incorrecto
                        o se encuentra vacio
                    </div>
                </div>
                
                <div class="control-group col-lg-2 col-xs-3">
                    <label class="label">Año</label>
                    <input pattern="^[0-9]{4}$" class="form-control" type="text" id="anio" name="anio" required>
                    <div class="valid-feedback">
                        genial
                    </div>
                    <div class="invalid-feedback">
                        el valor del campo es incorrecto
                        o se encuentra vacio
                    </div>
                </div>
                
            </div>
            
            <div class="row">
                <div class="control-group col-lg-6">
                    <label class="label">Nacionalidad</label>
                    <input pattern="^[a-zA-Z]+$" class="form-control" type="text" id="nacionalidad" name="nacionalidad" required>
                    <div class="valid-feedback">
                        genial
                    </div>
                    <div class="invalid-feedback">
                        el valor del campo es incorrecto
                        o se encuentra vacio
                    </div>
                </div>
                
                <div class="control-group col-lg-3 col-xs-3">
                    <label>Genero</label>
                    <select class="custom-select" name="genero" id="genero" required>
                    <option value="">----</option>
                        <option value="drama">Drama</option>
                        <option value="suspenso">Suspenso</option>
                        <option value="comedia">Comedia</option>
                        <option value="terror">Terror</option>
                        <option value="romanticas">Romanticas</option>
                        <option value="otras">Otras</option>
                        
                    </select>
                    <div class="valid-feedback">
                        genial
                    </div>
                    <div class="invalid-feedback">
                        el valor del campo es incorrecto
                        o se encuentra vacio
                    </div>
                </div>
                
            </div>
            
            <div class="row">
                <div class="control-group col-lg-6">
                    <label class="label">Duracion</label>
                    <input pattern="^[0-9]{2,3}$" class="form-control w-25" type="text" id="duracion" name="duracion" required>
                    <div class="valid-feedback">
                        genial
                    </div>
                    <div class="invalid-feedback">
                        el valor del campo es incorrecto
                        o se encuentra vacio
                    </div>
                </div>
                
                <div class="control-group col-lg-6 col-xs-3">
                    <label class="label">Restricciones de Edad</label>
                    <div class="row">
                        <div class="col-lg-4">
                            <input type="radio" class="custom-control-inline" id="edad" name="edad" value="Todos los publicos" required>
                        <label class="control-label" for="customControlValidation3">Todos los publicos</label>
                        </div>
                        <div class="col-lg-4">
                            <input type="radio" class="custom-control-inline" id="edad" name="edad" value="Mayores de 7 años" required>
                        <label class="control-label" for="customControlValidation3">Mayores de 7 años</label>
                        </div>
                        <div class="col-lg-4">
                            <input type="radio" class="custom-control-inline" id="edad" name="edad" value="Mayores de 18 años" required>
                        <label class="control-label" for="customControlValidation3">Mayores de 18 años</label>
                        </div>
                    </div>
                </div>
                
            </div>
            
            <div class="form-group">
                
                <label for="validationTextarea">Sinopsis</label>
                <textarea class="form-control is-invalid" type="text" name="texta" id="texta"   placeholder="escribir aqui" value="escribir aqui" required>
                    
                </textarea>
                <div class="valid-feedback">
                        genial
                    </div>
                
                
            </div>
            <div class="row">
            <div class="form-group  col-lg-6 mt-3 col-xs-3">
                
            </div>
                <div class="form-group  col-lg-6 mt-3 col-xs-3">
                    
                    <input  type="reset" class="btn btn-light text-dark shadow float-right" value="borrar" >
                    <input  type="submit" class="btn btn-primary text-dark float-right" value="enviar" >
            </div>
            </div>
        </form>
    </div>
</div>
</div>
</div>
<?php
include_once '../estructura/pie.php';
?>




<?php
include_once '../estructura/cabecera.php';
?>

<div class="col-md-8 ml-sm-auto">
    <h2>Este es el contenido principal</h2>
    <p class="text-warning">tp2 Ejercicio 3:
        a) Crear una nueva página php con un formulario HTML de login en la que solicitan el usuario
        y la password para loguearse. Los datos del formulario son enviados a un script
        verificaPass.php en el que contienen un arreglo asociativo por cada usuario del sistema. El
        arreglo asociativo tiene como claves: “usuario” y “clave”. El script debe visualizar un mensaje
        de bienvenida si los datos ingresados coinciden con alguno de los almacenados en el arreglo
        y en caso contrario un mensaje de error.
        b) Realizar la validación de este formulario. Chequear no solo que se hayan cargado el
        usuario y la contraseña antes de ser enviados al servidor sino que también debe
        realizar un control de contraseña segura (La contraseña debe tener como mínimo 8
        caracteres, no puede ser igual que el nombre de usuario ingresado y debe contener
        letras y números). 

    </p>
    <div class="container align-center text-dark ">
        <div class="modal-content bg-light  w-50">
            <div class="form-group text-center">
                <h2 class="mt-3">Member Login</h2>
            </div>
            <div class="form-group ml-5 mr-5 " >
                <form id="tp2Ejer3" method="post" class="form-horizontal mt-5" action="verificarPass.php" data-toggle="validator">
                    <div class="form-group">
                        <input class="form-control" type="text" name="usuario" id="usuario" placeholder="Nombre usuario">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="contrasena" id="contrasena" placeholder="Contraseña">
                    </div>
                    <div class="form-group">
                        <button class="form-control bg-primary text-light" type="submit">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<?php
include_once '../estructura/pie.php';
?>


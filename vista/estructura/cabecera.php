<!doctype html>
<html lang="es">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../css/bootstrap.min.css" >
        <link rel="stylesheet" href="../css/bootstrapValidator.min.css" >
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <!-- CONTENIDO ENRIQUECIDO-->
        <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
        <script type="text/javascript">
      
            
            
            
            
            function sugerirExtension() {
                
                var archivo = document.getElementById('archivo').value;
//    var nombre = document.getElementById('nombre');
//    nombre.value = (archivo.split('\\').pop()).split('.', 1);
                var extension = archivo.split('.').pop();
                switch (extension) {
                    case ('jpg'):
                        document.getElementById('img').checked = true;
                        break;
                    case ('png'):
                        document.getElementById('img').checked = true;
                        break;
                    case ('gif'):
                        document.getElementById('img').checked = true;
                        break;
                    case ('txt'):
                        document.getElementById('doc').checked = true;
                        break;
                    case ('doc'):
                        document.getElementById('doc').checked = true;
                        break;
                    case ('docx'):
                        document.getElementById('doc').checked = true;
                        break;
                    case ('zip'):
                        document.getElementById('zip').checked = true;
                        break;
                    case ('rar'):
                        document.getElementById('zip').checked = true;
                        break;
                    case ('pdf'):
                        document.getElementById('pdf').checked = true;
                        break;
                    case ('xls'):
                        document.getElementById('xls').checked = true;
                        break;
                    case ('xlsx'):
                        document.getElementById('xls').checked = true;
                        break;
                    default:
                        setRadioOff();
                }
            };
            function mostrarOpciones(){
    var elemento;
    
    elemento=document.getElementById("mostrarElemento").style.display="block";
    
    
}

        </script>
        <title><?php $Titulo ?></title>
    </head>
    <body class="bg-success text-dark">
        <?php
        include_once("../../configuracion.php");
        ?>
        <nav class=" navbar-dark  bg-warning  p-2 ">
            <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">Esta es la cabecera</a>

        </nav>
        <div class="container-fluid ">
            <div class="row">
                <nav class="navbar col-sm-5 col-lg-3 col-md-4 bg-primary  wm-100">
                    <h2>Este es el menu</h2>
                    <div class="dropright mb-3">
                        <div class="col-sm-12">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                trabajo practico N°1
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="../tp1/index.php">ejercicio1</a>
                                <a class="dropdown-item" href="../tp1/indexEjer2.php">ejercicio2</a>
                                <a class="dropdown-item" href="../tp1/indexEjer3.php">ejercicio3</a>
                                <a class="dropdown-item" href="../tp1/indexEjer4.php">ejercicio4</a>
                                <a class="dropdown-item" href="../tp1/indexEjer5.php">ejercicio5</a>
                                <a class="dropdown-item" href="../tp1/indexEjer6.php">ejercicio6</a>
                                <a class="dropdown-item" href="../tp1/indexEjer7.php">ejercicio7</a>
                                <a class="dropdown-item" href="../tp1/indexEjer8.php">ejercicio8</a>
                            </div>
                        </div>
                    </div>

                    <div class="dropright  mb-3">
                        <div class="col-sm-12">
                            <button class="btn btn-secondary dropdown-toggle bg-" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                trabajo practico N°2
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="../tp2/indexEjer3.php">ejercicio3</a>
                                <a class="dropdown-item" href="../tp2/indexEjer4.php">ejercicio4</a>                       
                            </div>
                        </div>
                    </div>
                    <div class="dropright  mb-3">
                        <div class="col-sm-12">
                            <button class="btn btn-secondary dropdown-toggle bg-" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                trabajo practico entregable
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="../tpentregable/contenido.php">contenido</a> 
                                <a class="dropdown-item" href="../tpentregable/amarchivo.php">amarchivo</a>
                                <a class="dropdown-item" href="../tpentregable/compartirarchivo.php">compartir archivo</a>
                                <a class="dropdown-item" href="../tpentregable/eliminararchivocompartido.php">eliminar archivo compartido</a>
                                <a class="dropdown-item" href="../tpentregable/eliminararchivo.php">eliminar archivo </a>
                                <a class="dropdown-item" href="../tpentregable/contenido.php">contenido</a> 
                            </div>
                        </div>
                    </div>
                </nav>








function mostrar(){
    
    var clave,opcion;
    clave=document.getElementById("clave");
    opcion=document.getElementById("opcion");
    if(opcion.checked){
        clave.style.display="block";
    }else{
        clave.style.display="none";
    }
    
};
function fortaleza() {
    
    var contra = document.getElementById('contrasena');
    
    if(contra.value==""){
        document.getElementById('pantalla').innerText = 'campo vacio por favor ingresar contraseña';
    }
    if (contra.value.length < 6 && (/^[a-zA-Z\s]+$/.test(contra.value) || /^[\d\s]+$/.test(contra.value))) {
        contra.style.border = '1px solid red';
        document.getElementById('pantalla').innerText = 'Debil';
    }  else if (contra.value.length >= 6 && contra.value.length <= 8  && /^[A-Za-z0-9\s]+$/.test(contra.value)) {
        contra.style.border = '1px solid yellow';
        document.getElementById('pantalla').innerText = 'Normal';
    } else if ((contra.value.length >8  && /^[A-Za-z0-9\s]+$/.test(contra.value))){
        contra.style.border = '1px solid green';
        document.getElementById('pantalla').innerText = 'Fuerte';
    }
};

function mostrarOpcionesCompartidos(param){
    var elemento;
    
    elemento=document.getElementById("mostrarElemento").style.display="block";
    var mostrarNombre=document.getElementById("archivodejarcompartir");
    mostrarNombre.value=param;
}

function sugerirExtension() {
                
                
                var archivo = document.getElementById('archivo').value;
                var nombreCompleto=archivo.split("\\").pop();
                var nombreA=document.getElementById("nombrearchivo");
                nombreA.value=nombreCompleto;
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
                    case ('jpeg'):
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
            
            function mostrarOpciones(param,param2){
                
              
              var mostrarNombre=document.getElementById("archivonombre");
              var mostrarcompartir=document.getElementById("archivocompartir");
              var mostrarModificar=document.getElementById("archivomodificar");
              
              var mostrarIde=document.getElementById("ideliminar");
              var mostrarIdm=document.getElementById("idmodificar");
              var mostrarIdc=document.getElementById("idcompartir");
              
              
            mostrarNombre.value=param;
            mostrarcompartir.value=param;
            mostrarModificar.value=param;
            
            mostrarIde.value=param2;
            mostrarIdm.value=param2;
            mostrarIdc.value=param2;
            
              
    var elemento;
    
    elemento=document.getElementById("mostrarElemento").style.display="block";
    
    
}



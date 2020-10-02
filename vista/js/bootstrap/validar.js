function mostrar(){
    var clave,opcion;
    clave=document.getElementById("clave");
    opcion=document.getElementById("opcion");
    if(opcion.checked){
        clave.style.display="block";
    }else{
        clave.style.display="none";
    }
}


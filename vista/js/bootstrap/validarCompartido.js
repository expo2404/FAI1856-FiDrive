var clave,mostrar;

clave=document.getElementById("contrasena");
mostrar=document.getElementById("pantalla");
clave.addEventListener('input', function (event) {
	if(!clave.validity.valueMissing){
		//let reDebil = /([a-zA-Z]{1,6}|\d{1,6})/;
		let reFuerte= /[^a-zA-Z0-9]/;

		if(clave.value.length>6){
			console.log("entre en longitud");
			if(reFuerte.test(clave.value)){
				mostrar.textContent = 'La clave ingresada es fuerte';
				mostrar.className = 'tipo_clave tipo_clave_fuerte active';
			} else {
				mostrar.textContent = 'La clave ingresada es normal';
				mostrar.className = 'tipo_clave tipo_clave_normal active';

			}
		} else {
			mostrar.textContent = 'La clave ingresada es debil';
			mostrar.className = 'tipo_clave tipo_clave_debil active';
		}

	} else {
		mostrar.textContent = 'Debe ingresar una clave';
		mostrar.className = 'error active';
	}
});


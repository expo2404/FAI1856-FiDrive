// ejercicio 1
$('#loginForm').bootstrapValidator({

    message: 'Este valor no es valido',

    feedbackIcons: {

        valid: 'fa fa-check',

        invalid: 'fa fa-hand-paper',

        validating: 'fa fa-circle'

    },

    fields: {

        numero: {

            validators: {
                regexp:{
                    regexp:/^[0-9]+$/,
                    message:"el valor ingresado no coincide"
                },
                notEmpty: {

                    message: 'por favor ingrese un numero'

                }

            }

        }
        

    }
});     
// ejercicio 3
$('#tp1ejer3').bootstrapValidator({

    message: 'Este valor no es valido',

    feedbackIcons: {

        valid: 'fa fa-check',

        invalid: 'fa fa-hand-paper',

        validating: 'fa fa-circle'

    },

    fields: {

        nombre: {

            validators: {
                regexp:{
                    regexp:/^[a-zA-Z]+$/,
                    message:"el valor ingresado no concide por favor ingresar caracteres"
                },
                notEmpty: {

                    message: 'complete el campo'

                }

            }

        },
        apellido: {

            validators: {
                regexp:{
                    regexp:/^[a-zA-Z]+$/,
                    message:"el valor ingresado no concide por favor ingresar caracteres"
                },
                notEmpty: {

                    message: 'complete el campo'

                }

            }

        },
        edad: {

            validators: {
                regexp:{
                    regexp:/^[0-9]+$/,
                    message:"el valor ingresado no concide por favor ingresar numeros"
                },
                notEmpty: {

                    message: 'complete el campo'

                }

            }

        },
        direccion: {

            validators: {
                regexp:{
                    regexp:/^[A-Za-z]+\s[a-zA-Z]+\s[0-9]+$/,
                    message:"ingrese calle y altura"
                },
                notEmpty: {

                    message: 'complete el campo'

                }

            }

        }
        

    }
});     


// validacion ejercicio 5
$('#tp1ejer5').bootstrapValidator({

    message: 'Este valor no es valido',

    feedbackIcons: {

        valid: 'fa fa-check',

        invalid: 'fa fa-hand-paper',

        validating: 'fa fa-circle'
        
    },

    fields: {

        nombre: {

            validators: {
                regexp:{
                    regexp:/^[a-zA-Z]+$/,
                    message:"el valor ingresado no concide por favor ingresar caracteres"
                },
                notEmpty: {

                    message: 'complete el campo'

                }

            }

        },
        apellido: {

            validators: {
                regexp:{
                    regexp:/^[a-zA-Z]+$/,
                    message:"el valor ingresado no concide por favor ingresar caracteres"
                },
                notEmpty: {

                    message: 'complete el campo'

                }

            }

        },
        edad: {

            validators: {
                regexp:{
                    regexp:/^[0-9]+$/,
                    message:"el valor ingresado no concide por favor ingresar numeros"
                },
                notEmpty: {

                    message: 'complete el campo'

                }

            }

        }
        
      
        
        

    }
}); 
// ejercicio 7
$('#tp1ejer7').bootstrapValidator({

    message: 'Este valor no es valido',

    feedbackIcons: {

        valid: 'fa fa-check',

        invalid: 'fa fa-hand-paper',

        validating: 'fa fa-circle'

    },

    fields: {

        numero1: {

            validators: {
                regexp:{
                    regexp:/^[0-9]+$/,
                    message:"el valor ingresado no coincide"
                },
                notEmpty: {

                    message: 'por favor ingrese un numero'

                }

            }

        },
         numero2: {

            validators: {
                regexp:{
                    regexp:/^[0-9]+$/,
                    message:"el valor ingresado no coincide"
                },
                notEmpty: {

                    message: 'por favor ingrese un numero'

                }

            }

        }
        

    }
});     
// ejercicio 8
$('#tp1ejer8').bootstrapValidator({

    message: 'Este valor no es valido',

    feedbackIcons: {

        valid: 'fa fa-check',

        invalid: 'fa fa-hand-paper',

        validating: 'fa fa-circle'

    },

    fields: {

        edad: {

            validators: {
                regexp:{
                    regexp:/^[0-9]+$/,
                    message:"el valor ingresado no coincide"
                },
                notEmpty: {

                    message: 'por favor ingrese un numero'

                }

            }

        }
        

    }
});     
// ejercicio 3 tp2
$('#tp2Ejer3').bootstrapValidator({

    message: 'Este valor no es valido',

    feedbackIcons: {

        valid: 'fa fa-check',

        invalid: 'fa fa-hand-paper',

        validating: 'fa fa-circle'

    },

    fields: {

        usuario: {

            validators: {
                regexp:{
                    regexp:/^[a-zA-Z0-9]+$/,
                    message:"el valor ingresado no coincide"
                },
                notEmpty: {

                    message: 'completar campo'

                }
                
                

            }

        },
        contrasena: {

            validators: {
                regexp:{
                    regexp:/^[a-zA-Z0-9]{8,}$/,
                    message:"minimo 8 caracteres "
                },
                notEmpty: {

                    message: 'completar campo'

                }
                
                
                
            }

        }
        
        

    }
}); 

// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
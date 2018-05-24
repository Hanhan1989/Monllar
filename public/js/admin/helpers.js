function quitarLaFuncionalidadEnviarDelBotonEliminar() {

    var forms =  document.querySelectorAll('table form');
    forms.forEach(function(form){
        form.addEventListener('click', function(event){

            var respuesta = confirm('estás seguro ???');

            if(!respuesta){
                event.preventDefault();
            }
        }, false);
    });

}
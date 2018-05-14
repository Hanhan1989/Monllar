var validator = new FormValidator('example_form', [{
    name: 'req',
    display: 'required',
    rules: 'required'
}], function(errors, event) {
    if (errors.length > 0) {

        // imprimir error justo por debajo del campo
        document.getElementById('error_campo_email').innerHTML = '*** Campo obligatorio';
    }
});
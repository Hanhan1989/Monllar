var validator = new FormValidator('example_form', [ {
    name: 'email',
    //display: 'required',
    rules: 'required|valid_email'
}], function (errors, event) {
    if (errors.length > 0) {
        var errorString = '';
        var errorEmail = '';


        for (var i = 0, errorLength = errors.length; i < errorLength; i++) {
            errorString += errors[i].message + '<br />';

                errorEmail += errors[i].message;

        }
        document.getElementById('error_campo_email').innerHTML = errorEmail;

    }
});
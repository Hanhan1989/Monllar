var validator = new FormValidator('example_form', [ {
    name: 'email',
    //display: 'required',
    rules: 'required|valid_email'
},{
    name: 'password',
    //display :'required',
    rules: 'required'
}], function (errors, event) {
    if (errors.length > 0) {
        var errorString = '';
        var errorEmail = '';
        var errorPassword = '';

        for (var i = 0, errorLength = errors.length; i < errorLength; i++) {
            errorString += errors[i].message + '<br />';

            if (errorString.includes("email")) {
                errorEmail += errors[i].message;
            }else if (errorString.includes("password")){
                errorPassword += errors[i].message;
            }
        }
        document.getElementById('error_campo_email').innerHTML = errorEmail;
        document.getElementById('error_campo_pass').innerHTML = errorPassword;
    }
});
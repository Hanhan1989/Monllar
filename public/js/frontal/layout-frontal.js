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

// buscador ajax con Jquery

function getSearchData(callback) {
    var searchInput = document.getElementById('search');
    searchInput.addEventListener('keyup', function (input) {
        callback(input.srcElement.value);
    }, false);
}

getSearchData(function (searchValue) {
    var divBuscador = document.getElementById('productosBuscador');
    divBuscador.style.height = '450px';

    if(searchValue.length >= 2){
        $.getJSON( "/producto/json/" + searchValue, function( productos ){

            var html = '';
            productos.forEach(function (producto) {
                html += '<div class="row searchProductBlock" >';
                html += '<div class="col-sm-12 searchProduct">';
                html += '<a href="/producto/' + producto.id + '">' +
                    '<img class="searchProductImage" src="'+window.location.origin+'/media/images/' + producto.path_imagen_1 + '">' +'<br>' +
                    '<p class="searchProductName">' + producto.nombre + '</p>'+
                    '<p class="searchProductPrice">'+producto.precio+' €' + '</p>' +
                    '</a>';
                html += '</div>';
                html += '</div>';
            });
            divBuscador.innerHTML = html;
        });
    }else{
        divBuscador.innerHTML = '';
    }

});



$( '.container' ).on('click',function () {
    var divBuscador = document.getElementById('productosBuscador');
    divBuscador.style.height = '0px';
    divBuscador.innerHTML = '';
});
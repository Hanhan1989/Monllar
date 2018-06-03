// Photo upload
$(document).ready(function () {
    uploadHBR.init({
        "target": "#uploads",
        "max": 3,
        "textNew": "AGREGAR",
        "textTitle": "Haga clic aquí o arrastre para cargar una imagen",
        "textTitleRemove": "Haga clic aquí para eliminar la imagen"
    });
    $('#reset').click(function () {
        uploadHBR.reset('#uploads');
    });
});

// CKEDITOR
window.onload = function() {
    CKEDITOR.replace( 'editor1' );
    CKEDITOR.replace( 'editor2' );
};


// select de las categorias

function seleccionarCategoria(id_catalogo){
    // Pillar el id del catálogo
    var id_catalogo = parseInt(id_catalogo);
// Pillar el objeto categorias;
    var categorias = {}
    for(var i = 0; i< catalogos.length; i++){
        if(catalogos[i].id === id_catalogo){
            categorias = catalogos[i].categorias;
        }
    }

// ELimiar el select
    var seccionListaCategorias = document.getElementById("seccionCategorias");
    seccionListaCategorias.innerHTML = '';


// construir el select html de categorias

    var selectList = document.createElement("select");
    selectList.className = "form-control";
    selectList.name = "id_categoria";
    selectList.id = "listaCategorias";
    selectList.style = "height:30px";
    selectList.required = true;

    var option = document.createElement('option');
    var text = document.createTextNode('Seleccionar opción ...');
    option.appendChild(text);
    option.value = '';
    selectList.appendChild(option);

    for(var i = 0; i < categorias.length; i++){
        option = document.createElement('option');
        option.value = categorias[i].id;
        text = document.createTextNode(categorias[i].nombre);
        option.appendChild(text);
        if(categorias[i].id === parseInt(id_categoria)){
            option.selected = true;
        }
        selectList.appendChild(option);
    }

    var label = document.createElement("label");
    var textoLabel = document.createTextNode("Categoria");
    label.appendChild(textoLabel);


    seccionListaCategorias.appendChild(label);
    seccionListaCategorias.appendChild(selectList);
}

function readURL(input) {

    console.log(input.files);

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#blah' + input.id)
                .attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
    }
}


$(document).ready(function () {

    var selectCatalogo = document.getElementById('listaCatalogos');

    setTimeout(function () {
        var id_catalogo = selectCatalogo.value;
        seleccionarCategoria(id_catalogo);
    }, 500);


    selectCatalogo.addEventListener('change', function(catalogo){

        var id_catalogo = parseFloat(catalogo.srcElement.value);
        seleccionarCategoria(id_catalogo);

    }, false);
});


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

document.getElementById('listaCatalogos').addEventListener('change', function(catalogo){

    // Pillar el id del catálogo
    var id_catalogo = parseFloat(catalogo.srcElement.value);

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
        selectList.appendChild(option);
    }

    var label = document.createElement("label");
    var textoLabel = document.createTextNode("Categoria");
    label.appendChild(textoLabel);


    seccionListaCategorias.appendChild(label);
    seccionListaCategorias.appendChild(selectList);

}, false);
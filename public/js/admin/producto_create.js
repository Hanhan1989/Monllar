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

var catalogos = JSON.parse('[{"id":1,"nombre":"mujer","created_at":"2018-05-19 06:31:25","updated_at":"2018-05-19 06:31:25","categorias":[{"id":1,"id_catalogo":1,"nombre":"abrigos","created_at":"2018-05-19 06:31:25","updated_at":"2018-05-19 06:31:25"},{"id":2,"id_catalogo":1,"nombre":"cazadoras","created_at":"2018-05-19 06:31:25","updated_at":"2018-05-19 06:31:25"},{"id":3,"id_catalogo":1,"nombre":"blazers","created_at":"2018-05-19 06:31:25","updated_at":"2018-05-19 06:31:25"},{"id":4,"id_catalogo":1,"nombre":"vestidos","created_at":"2018-05-19 06:31:25","updated_at":"2018-05-19 06:31:25"},{"id":5,"id_catalogo":1,"nombre":"bolsos","created_at":"2018-05-19 06:31:25","updated_at":"2018-05-19 06:31:25"}]},{"id":2,"nombre":"hombre","created_at":"2018-05-19 06:31:25","updated_at":"2018-05-19 06:31:25","categorias":[{"id":6,"id_catalogo":2,"nombre":"trajes","created_at":"2018-05-19 06:31:25","updated_at":"2018-05-19 06:31:25"},{"id":7,"id_catalogo":2,"nombre":"polos","created_at":"2018-05-19 06:31:25","updated_at":"2018-05-19 06:31:25"},{"id":8,"id_catalogo":2,"nombre":"sudaderas","created_at":"2018-05-19 06:31:25","updated_at":"2018-05-19 06:31:25"},{"id":9,"id_catalogo":2,"nombre":"punto","created_at":"2018-05-19 06:31:25","updated_at":"2018-05-19 06:31:25"},{"id":10,"id_catalogo":2,"nombre":"pantalones","created_at":"2018-05-19 06:31:25","updated_at":"2018-05-19 06:31:25"}]},{"id":3,"nombre":"niños","created_at":"2018-05-19 06:31:25","updated_at":"2018-05-19 06:31:25","categorias":[{"id":11,"id_catalogo":3,"nombre":"niña 5-14 años","created_at":"2018-05-19 06:31:25","updated_at":"2018-05-19 06:31:25"},{"id":12,"id_catalogo":3,"nombre":"niño 5-14 años","created_at":"2018-05-19 06:31:25","updated_at":"2018-05-19 06:31:25"},{"id":13,"id_catalogo":3,"nombre":"accesorios","created_at":"2018-05-19 06:31:25","updated_at":"2018-05-19 06:31:25"}]},{"id":4,"nombre":"bebés","created_at":"2018-05-19 06:31:25","updated_at":"2018-05-19 06:31:25","categorias":[{"id":14,"id_catalogo":4,"nombre":"bebé niña 3 meses - 4 años","created_at":"2018-05-19 06:31:25","updated_at":"2018-05-19 06:31:25"},{"id":15,"id_catalogo":4,"nombre":"bebé niño 3 mesees - 4 ñiños","created_at":"2018-05-19 06:31:25","updated_at":"2018-05-19 06:31:25"},{"id":16,"id_catalogo":4,"nombre":"bebé accesorios","created_at":"2018-05-19 06:31:25","updated_at":"2018-05-19 06:31:25"}]}]');


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
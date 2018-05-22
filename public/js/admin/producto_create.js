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
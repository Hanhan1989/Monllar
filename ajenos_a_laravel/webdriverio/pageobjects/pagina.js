class Pagina {
    constructor(){
        this.titulo = "Monllar";
    }

    abrir(ruta){
        browser.url(ruta);
    }
}

export default Pagina;
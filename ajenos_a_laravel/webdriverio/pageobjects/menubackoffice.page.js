import Pagina from './pagina';

class MenubackofficePage extends Pagina{

    get enlaceLogout() { return browser.element('#navbarSupportedContent li:last-child > a'); }

}

export default new MenubackofficePage();
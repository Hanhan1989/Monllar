import Pagina from './pagina';
import Url from '../test-data/url-data';


class LoginPage extends Pagina{

    get campoEmailDelUsuario() { return browser.element('#email'); }
    get campoPassword() { return browser.element('#password');}
    get botonEnviar(){ return browser.element('button[type=submit]');}

    abrir(){
        super.abrir(Url.frontend.login);
    }

    ponerEmail(){
        this.campoEmailDelUsuario.setValue('monllar@monllar.com');
    }

    ponerPassword(){
        this.campoPassword.setValue('monllar');
    }

    clicarElBotonEnviar(){
        this.botonEnviar.click();
    }

}

export default new LoginPage();
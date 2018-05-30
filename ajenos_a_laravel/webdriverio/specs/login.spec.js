import LoginPage from '../pageobjects/login.page';
import MenubackofficePage from '../pageobjects/menubackoffice.page';

describe('Página del Formulario de Autenticación Backoffice', function () {

    it('Se debería poder autenticarse', function () {

        LoginPage.abrir();
        LoginPage.ponerEmail();
        LoginPage.ponerPassword();
        LoginPage.clicarElBotonEnviar();

        expect(MenubackofficePage.enlaceLogout.getText()).to.equal('Logout');
        //expect(MenubackofficePage.enlaceLogout.getText()).to.equal('Logout');
    });

});

# Selenium Webdriverio

## Requerimientos
-npm version 6.0.0

-node version 8.11.0


## Ejecutar los tests funcionales

Para este proyecto, lo he instalado de forma local

````
 "scripts": {
        "selenium-standalone": "selenium-standalone",
        "test": "wdio"
    }
````
o sea para inicializar el servicio Selenium usaremos

````
// Descargar el chromedriver 
npm run selenium install --drivers.chrome.version=2.17 --drivers.chrome.baseURL=https://chromedriver.storage.googleapis.com

// Iniciar el servicio selenium 
npm run selenium start

//Para ejecutar los test
npm run test
````
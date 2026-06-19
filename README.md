# ExpectException
Es un método de PHPUnit que le dice a la prueba: "Espero que durante la ejecución se lance una excepción de este tipo". Si la excepción no se lanza, la prueba falla.
 Pruebas Unitarias de Software - Semana 11 
 Instrucciones para Clonar y Ejecutar el Proyecto

Sigue estos pasos detallados para configurar y ejecutar el proyecto en tu entorno local:

 1. Clonar el repositorio
Abre tu terminal o consola de comandos y ejecuta el siguiente comando para clonar el proyecto:
```bash
git clone [https://github.com/cirilo9/ExpectException.git](https://github.com/cirilo9/ExpectException.git)

2. Acceder al directorio del proyecto
Cambia de carpeta al directorio que se acaba de crear:

Bash
cd ExpectException
3. Instalar las dependencias con Composer
Asegúrate de tener instalado Composer. Instala PHPUnit y genera el autocargador ejecutando:

Bash
composer install
(Si realizas modificaciones en el archivo composer.json, recuerda ejecutar composer dump-autoload para actualizar el mapeo de clases).

4. Ejecutar las pruebas unitarias
Para comprobar que todas las pruebas (incluidos los ejercicios adicionales) pasan correctamente, ejecuta el siguiente comando:

Ejecución estándar:

Bash
vendor/bin/phpunit tests
Ejecución con formato descriptivo (--testdox):

Bash
vendor/bin/phpunit tests --testdox
 Estructura del Proyecto
El proyecto está organizado de la siguiente manera:

src/ - Contiene la lógica de negocio.

Calculadora.php (Métodos: dividir, raizCuadrada y factorial).

Validador.php (Métodos: validarEdad, validarEmail y validarPassword).

tests/ - Contiene las clases de pruebas unitarias.

CalculadoraTest.php

ValidadorTest.php

composer.json - Configuración de dependencias y auto-carga PSR-4.

phpunit.xml - Configuración del entorno de pruebas PHPUnit.




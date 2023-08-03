# WELCOME

# Docker
La imagen y la configuracion que utilizo para construir el contenedor apache con PHP para ejecutar la aplicacion web esta dentro del archivo Dockerfile.
El comando para construir el contenedor es 'docker build -t php:apache .', esto desde el directorio donde se encuentra el archivo Dockerfile (PROYECTO/web).

Para construir los contenedores y ejecutarlos todos a la vez uso el documento docker-compose.yml, el comando es 'sudo docker-compose up -d' (y tambien debe ser ejecutado en su directorio).

Consideraciones:
- Recuerden que el uso de sudo depende de si tienen o no permisos root.

- Recuerden construir la imagen php:apache primero para que tenga las configuraciones del Dockerfile.

Una vez seguidos los pasos, el proyecto principal se ejecutará en localhost, puerto 80 como indica el docker-compose. Sin embargo, es solo la carpeta public la que tiene permisos para acceder desde navegador. Por lo tanto, la ruta es: 'localhost/public'

La base de datos funcionara en db:5432;

Tambien podemos manejar un manejador de base de datos básico que se llama Adminer, en el puerto 2000 del localhost.

# PROYECTO
Estaremos trabajando con el patron MVC por lo tanto, trataremos de maximizar los recursos que se compartan entre carpetas.

En primera. El proyecto esta dentro de la carpeta PROYECTO y esta contiene dos folders importantes: WEB y DB. DB es la carpeta que arma docker-compose segun la configuracion para almacenar los datos y hacerlos permanentes.

Mientras tanto, WEB es la carpeta que contiene toda la lógica del sitio WEB, donde trabajaremos. Fuera de esto, tenemos los archivos README, .gitignore y docker-compose.yml que son solo rescursos para ustedes, mis compañeros de equipo.

## WEB
Al arbrir WEB notaremos dos carpetas, una llamada PUBLIC y otra APP. El archivo Dockerfile esta dentro de web puesto que es la configuracion de la imagen para el servidor web.

Recordemos que web es la carpeta que contiene todo el "source" de nuestra aplicación web.

### Public
Public es la carpeta que contiene informacion libre al público, es decir todo que por defecto es visto por el usuario, tal como el archivo INDEX.php, la carpeta ASSETS, el ROBOTS.TEXT y el .htaccess. Estos recursos que el usuario comun podria toparse, pero que nunca podrá modificar.

- INDEX.php es la puerta a todas las vistas del sitio web, gracias al controlador y el enrutamiento.

- Robots.txt es un archivo de texto estandar para mantener la seguridad del sitio web en comunicacion con los usuarios del sitio. Practicas que el usuario comun deberia desactivar.

- .htaccess, archivo que modifica el comportamiento del servidor apache y permite la logica de enrutamiento por cambios en la url.

La carpeta ASSETS:
#### Assets
Carpeta contenedora de scripts, estilos y recursos varios para que funcione o se muestre la pagina web. Contiene:

- IMG, carpeta destinada a almacenar las imagenes a mostrar.

- CSS, carpeta destinada a guardar todos los estilos .css que se vayan a usar en el proyecto.

- JS, carpeta destinada a guardar scripts de diversos usos.

### APP

La logica MVC esta montada sobre esta carpeta, siendo la carpeta controllers la encargada de hacer que la logica de la aplicacion funcione. Desde qué vista debería mostrar el enrutamiento, hasta funcionalidades basicas como hacer las peticiones a los modelos para extraer información de la base de datos y.

Esta carpeta contiene, pues, toda la APLICACION como tal. Su lógica.

- VIEWS, la carpeta views es la encargada de mostrar vistas al usuario (y las carpetas dentro de esta deberian indicar las subrutas de las rutas padres; ejemplo: dashboard (la pagina principal) - dashboard/reportes-diarios (subruta de dashboard)).

- Core, es sin duda alguna el sistema nervioso del sitio web. El núcleo. El inicio del procesado empieza en esta carpeta, indicando el cómo el sitio se comportará de buenas a primeras. Siendo init.php la encargada de activar todas las funcionalidades dentro de core, y config.php de definir todas las variables globales del sistema. App, Controller, Database y Model contienen la lógica para mantener el patrón MVC del programa, y functions contendrá las funciones que se podrían repetir en su uso en varias de los procesos.

- Model, carpeta que se encarga de ejecutar bajo las reglas de las tablas y de los usos controlados las peticiones a la DB. Por tabla debería realizarse un modelo.

- Controllers, esta es la carpeta de controladores. Controla los métodos a ejecutar de cada vista y cómo va a interactuar con TODA la aplicación el usuario. Se encarga de regular qué se ve, por qué se ve, cómo se ve, cuándo se ve, qué se pide, por qué se pide, cómo se pide, etc.


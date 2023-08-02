# WELCOME

# Docker
La imagen y la configuracion que utilizo para construir el contenedor apache con PHP para ejecutar la aplicacion web esta dentro del archivo Dockerfile.
El comando para construir el contenedor es 'docker build -cosas que no recuerdo y debo buscar nuevamente-'.

Para construir los contenedores y ejecutarlos todos a la vez uso el documento docker-compose.yml, el comando es 'sudo docker-compose up -d' (recuerden que el uso de sudo depende de si tienes o no permisos de root).

Recuerden construir la imagen php:apache primero para que tenga las configuraciones del Dockerfile.

Una vez seguidos los pasos, el proyecto principal se ejecutará en localhost, puerto 80 como indica el docker-compose. Sin embargo, es solo la carpeta public la que tiene permisos para acceder desde navegador. Por lo tanto, la ruta es: 'localhost/public'

La base de datos funcionara en db:5432;

Tambien podemos manejar un manejador de base de datos básico que se llama Adminer, en el puerto 2000 del localhost.

# PROYECTO
Estaremos trabajando con el patron MVC por lo tanto, trataremos de maximizar los recursos que se compartan entre carpetas.

En primera. El proyecto esta dentro de la carpeta PROYECTO y esta contiene dos folders importantes: WEB y DB. DB es la carpeta que arma docker-compose segun la configuracion para almacenar los datos y hacerlos permanentes.

Mientras tanto, WEB es la carpeta que contiene toda la lógica del sitio WEB, donde trabajaremos. Fuera de esto, tenemos los archivos README, .gitignore y docker-compose.yml que son solo rescursos para ustedes, mis compañeros de equipo.

## WEB
Al arbrir WEB notaremos dos carpetas, una llamada PUBLIC y otra APP. El archivo Dockerfile esta dentro de web puesto que es la configuracion de la imagen para el servidor web

### Public
Public es la carpeta que contiene informacion libre, que puede ser vista y ejecutada por el usuario, recursos que el usuario comun podria toparse, pero que nunca deberia modificar. INDEX es la puerta a todas las vistas del sitio web, gracias al controlador y el enrutamiento.

Robots.txt es un archivo de texto estandar para mantener la seguridad del sitio web en comunicacion con los usuarios del sitio. Practicas que el usuario comun deberia desactivar.

.htaccess es el archivo que permite la logica de enrutamiento por el cambio de url.

#### Assets
Carpeta que contiene los scripts, estilos y recursos varios para que funcione o se muestre la pagina web.

### APP



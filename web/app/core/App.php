<?php

// La lógica que sigue la página, rudimentariamente.
class App
{
    // Por defecto, llama al controlador de Home.
    private $controller = 'dashboard';
    // Por defecto, llama al método index.
    private $method     = 'index';

    // Metodo para cortar la url, depurarla y retornar el fragmento de URL que se necesita para saber adonde enrutar.
    private function splitURL()
    {
        $URL = $_GET['url'] ?? 'dashboard';
        $URL = htmlspecialchars(trim($URL), ENT_QUOTES, 'UTF-8');
        $URL = explode("/", $URL);
        return $URL;
    }

    // Cargamos el controlador de la vista correspondiente.
    public function loadController()
    {

        $URL = $this->splitURL();
        $main = is_array($URL) ? array_shift($URL) : $URL;
        $params = trim(implode('/', $URL), '/') ?? null;

        // Comprobamos si existe el controlador, primeramente.
        $filename = "../app/controllers/" . ucfirst($main) . ".php";
        if (file_exists($filename)) {
            // Cargamos el controlador.
            if (!isset($_SESSION['session'])) {
                $main = 'login';
                require "../app/controllers/" . ucfirst($main) . ".php";
                $this->controller = ucfirst('login');
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $this->method = 'login';
                }
            } else {
                require $filename;
                // Asignamos el controlador por defecto, al controlador de la coincidencia del archivo.
                $this->controller = ucfirst($main);
                if ($this->controller == 'Logout') {
                    $this->method = 'logout';
                }
            }
        } else {

            $filename = "../app/controllers/_404.php";
            require $filename;
            $this->controller = '_404';
        }
        // Llamamos al controlador con la clase de la coincidencia, como el método de los controladores solo existe el index para extraer las vistas, no hay lógica para cambiar de método.
        $controller = new $this->controller;
        // Llamamos a la clase de la coincidencia, con el método de "coincidencia", con los parámetros extraídos, por ahora, de la URL
        call_user_func_array([$controller, $this->method], [$main, $params]);
    }
}

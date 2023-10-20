<?php
class App
{
    private $controller = 'dashboard';
    private $method = 'index';

    private function splitURL()
    {
        $main = isset($_SESSION['session']) ? 'dashboard' : 'login';
        $url = $_GET['url'] ?? $main;
        $url = htmlspecialchars(trim($url), ENT_QUOTES, 'UTF-8');
        $url = explode("/", $url);
        return $url;
    }

    public function loadController()
    {
        $url = $this->splitURL();
        $main = is_array($url) ? array_shift($url) : $url;
        $params = trim(implode('/', $url), '/') ?? null;
        $controllerName = ucfirst($main);
        $controllerFileName = "../app/controllers/{$controllerName}.php";

        if (file_exists($controllerFileName)) {
            require $controllerFileName;
            $this->controller = $controllerName;
        } else {
            require "../app/controllers/_404.php";
            $this->controller = '_404';
        }
        if ($_SERVER['REQUEST_METHOD'] == 'PUT') {
            switch ($this->controller) {

                case 'Signup':
                    $this->method = 'signup';
                    break;
            }
        }
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            switch ($this->controller) {
                case 'Login':
                    $this->method = 'login';
                    break;

                default:
                    $this->method = 'index';
                    break;
            }
        }
        if (ucfirst($main) === 'Logout') {
            $this->method = 'logout';
        }

        $controllerInstance = new $this->controller;
        call_user_func_array([$controllerInstance, $this->method], [$main, $params]);
    }
}

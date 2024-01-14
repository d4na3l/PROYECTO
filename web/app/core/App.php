<?php
class App
{
    public function routing()
    {
        $objController = $this->loadController();
        $method = $this->loadMethod($objController);

        $controller = $objController['controller'];
        $main = $objController['main'] ?? null;
        $params = $objController['params'] ?? null;

        $controller = new $controller;

        call_user_func_array([$controller, $method], [$main, $params]);
    }

    private function splitURL()
    {
        $main = isset($_SESSION['session']) ? 'dashboard' : 'login';
        $url = $_GET['url'] ?? $main;
        $url = htmlspecialchars(trim($url), ENT_QUOTES, 'UTF-8');
        $url = explode("/", $url);
        return $url;
    }

    private function loadController()
    {
        $url = $this->splitURL();
        $main = is_array($url) ? array_shift($url) : $url;
        $params = trim(implode('/', $url), '/') ?? null;
        $controller = ucfirst($main);
        $controllerFileName = "../app/controllers/{$controller}.php";

        if (!file_exists($controllerFileName)) {
            require "../app/controllers/_404.php";
            $controller = '_404';
        } else {
            require $controllerFileName;
        }
        $obj = ['controller' => $controller, 'main' => $main, 'params' => $params];
        return $obj;
    }

    private function loadMethod($obj)
    {
        $main = $obj['main'];
        $params = $obj['params'];
        $controller = $obj['controller'];

        $methodMapping = [
            '_404' => [
                'GET' => 'index'
            ],
            'Dashboard' => [
                'GET' => 'index'
            ],
            'Login' => [
                'POST' => 'login',
                'GET' => 'index'
            ],
            'Logout' => [
                'GET' => 'logout'
            ],
            'Signup' => [
                'PUT' => 'signup',
                'GET' => 'index'
            ],
            'Management' => [
                'GET' => 'index'
            ]
        ];

        $request = $_SERVER['REQUEST_METHOD'];
        $method = $methodMapping[$controller][$request];

        return $method;
    }
}

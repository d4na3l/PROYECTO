<?php
class App
{

    private $controller = 'Home';
    private $method     = 'index';

    private function splitURL()
    {
        $URL = $_GET['url'] ?? 'home';
        $URL = $URL ?? 'home';
        $URL = htmlspecialchars(trim($URL), ENT_QUOTES, 'UTF-8');
        $URL = explode("/", $URL);
        return $URL;
    }

    public function loadController()
    {
        $URL = $this->splitURL();


        $filename = "../app/controllers/" . ucfirst($URL[0]) . ".php";
        if (file_exists($filename)) {
            require $filename;
            $this->controller = ucfirst($URL[0]);
        } else {

            $filename = "../app/controllers/_404.php";
            require $filename;
            $this->controller = '_404';
        }

        $controller = new $this->controller;
        $param = $URL[1] ?? null;
        call_user_func_array([$controller, $this->method], [$URL[0], $param]);
    }
}

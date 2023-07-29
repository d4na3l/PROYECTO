<?php

class Controller
{
    public function view($name)
    {

        $filename = "../app/views/" . $name . ".view.php";
        if (file_exists($filename)) {
            ob_start();
            require $filename;
        } else {
            $filename = "../app/views/404.view.php";
            require $filename;
        }
    }
}

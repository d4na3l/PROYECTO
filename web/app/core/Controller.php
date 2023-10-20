<?php

// Clase controller, el núcleo de esta clase por ahora es cargar vistas.
class Controller
{
    public function view($name)
    {
        $role = isset($_SESSION['role']) ? $_SESSION['role'] : null;
        $filename = $this->getViewFilename($name, $role);

        if (file_exists($filename)) {
            require $filename;
        } else {
            $this->load404View();
        }
    }

    private function getViewFilename($name, $role)
    {
        if (isset($_SESSION['session'])) {
            $filename = "../app/views/{$role}/{$name}.view.php";
        } else {
            $filename = "../app/views/{$name}.view.php";
        }
        return $filename;
    }

    private function load404View()
    {
        $filename = "../app/views/404.view.php";
        require $filename;
    }
}

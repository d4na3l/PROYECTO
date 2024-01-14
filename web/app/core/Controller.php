<?php

// Clase controller, el núcleo de esta clase por ahora es cargar vistas.
class Controller
{
    public function view($name)
    {
        $role = isset($_SESSION['role']) ? $_SESSION['role'] : null;
        $status = isset($_SESSION['role']) ? $_SESSION['status'] : null;
        $filename = $this->getViewFilename($name, $role, $status);


        if (file_exists($filename)) {
            require $filename;
        } else {
            $this->load404View();
        }
    }

    private function getViewFilename($name, $role, $status)
    {
        if (isset($_SESSION['session'])) {
            switch ($status) {
                case 'active':
                    $filename = "../app/views/{$role}/{$name}.view.php";
                    break;
                default:
                    $this->load404View();
                    break;
            }
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

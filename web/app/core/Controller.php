<?php

// Clase controller, el núcleo de esta clase por ahora es cargar vistas.
class Controller
{
    // Método para cargar las vistas.
    public function view($name)
    {
        // Comprobamos si existe la vsita
        $filename = "../app/views/" . $name . ".view.php";
        if (file_exists($filename)) {
            ob_start();
            require $filename;
        } else {
            // Si no existe la vista, por defecto dirige a 404 error.
            $filename = "../app/views/404.view.php";
            require $filename;
        }
    }
}

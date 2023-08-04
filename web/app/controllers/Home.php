<?php
// Controlador para acceder a las vistas pertenecientes al home. Aunque esta vista me parece innecesaria.
class Home extends Controller
{
    // Método para cargar la vista de coincidencia
    public function index($section)
    {
        // Depuracion de los caracteres que se le pasan a la url.
        $section = preg_replace('/[^a-zA-Z0-9\/_-]/', '', $section);
        $viewPath = $section;

        // Llamado al método view para cargar la vista, de la clase controller.
        $this->view($viewPath);
    }
}

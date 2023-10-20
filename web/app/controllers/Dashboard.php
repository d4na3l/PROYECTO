<?php
// Controlador para acceder a las vistas pertenecientes al dashboard
class Dashboard extends Controller
{
    private function isAuthenticated()
    {
        return isset($_SESSION['session']);
    }

    public function index($section, $param)
    {
        if (!$this->isAuthenticated()) {
            location('login');
        }
        if (empty($_GET['url'])) {
            location('dashboard');
        }
        // Section vendría siendo la primera parte de la URL, es decir la ruta principal.
        $section = preg_replace('/[^a-zA-Z0-9\/_-]/', '', $section);

        $viewPath = $section;
        // Comprobamos que existan parámetros de la vista.
        if ($param) {
            //Añadimos los parámetros de la vista y acomodamos el viewpath a conveniencia.
            $param = preg_replace('/[^a-zA-Z0-9\/_-]/', '', $param);
            $viewPath .= '/' . $param;
        }

        // Llamamos al método view de la clase Controller
        $this->view($viewPath);
    }
}

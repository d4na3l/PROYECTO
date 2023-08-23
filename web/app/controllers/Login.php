<?php
// Controlador para acceder a las vistas pertenecientes al dashboard
class Login extends Controller
{
    // Metodo para seleccinar la vista enseñarla.
    public function index($section)
    {

        if (empty($_GET['url']) || $_GET['url'] != 'login') {
            location('login');
        } elseif (isset($_SESSION['session'])) {
            location('dashboard');
        }
        // Section vendría siendo la primera parte de la URL, es decir la ruta principal.
        $section = preg_replace('/[^a-zA-Z0-9\/_-]/', '', $section);
        $viewPath = $section;

        // Llamamos al método view de la clase Controller
        $this->view($viewPath);
    }

    public function login()
    {
        $auth = new Auth;
        $login = $auth->auth($_POST);
        if ($login['session']) {
            $_SESSION['session'] = $login['session'];
            $_SESSION['user'] = $login['user'];
            $_SESSION['role'] = $login['role'];
            $this->view('dashboard');
        }
    }
}

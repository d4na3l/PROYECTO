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
        $section =
        $viewPath = $section;

        // Llamamos al método view de la clase Controller
        $this->view($viewPath);
    }

    public function login()
    {
        $auth = new Auth;
        $login = $auth->login($_POST);
        show($login);

        if (!$login['session']) {
            if ($login['status'] == 'pending') {
                return $this->view('signup');
            } else {
                return $this->view('login');
            }
        } else {
            $_SESSION = $login;
            return $this->view('dashboard');
        }
    }
}

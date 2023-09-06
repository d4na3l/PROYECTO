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
        $viewPath = $section;

        // Llamamos al método view de la clase Controller
        $this->view($viewPath);
    }

    public function login()
    {
        $auth = new Auth;
        $login = $auth->login($_POST);

        if (!$login['session']) {
            if ($login['status'] == 'pending') {
                location('signup');
            } else {
                header('Content-Type: application/json');
                echo json_encode($login);
                exit;
                $this->view('login');
            }
        } else {
            $_SESSION = $login;
            $this->view('dashboard');
        }
    }
}

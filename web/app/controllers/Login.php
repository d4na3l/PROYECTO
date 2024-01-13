<?php
class Login extends Controller
{
    private function isAuthenticated()
    {
        return isset($_SESSION['session']);
    }

    public function index($section, $param)
    {
        if ($this->isAuthenticated()) {
            location('dashboard');
        }
        if (empty($_GET['url']) || $_GET['url'] != 'login') {
            location('login');
        }
        $viewPath = $section;

        // Comprobamos que existan parámetros de la vista.
        if ($param) {
            //Añadimos los parámetros de la vista y acomodamos el viewpath a conveniencia.
            $param = preg_replace('/[^a-zA-Z0-9\/_-]/', '', $param);
            $viewPath .= '/' . $param;
        }
        $this->view($viewPath);
    }

    public function login()
    {
        $auth = new Auth;
        $login = $auth->login($_POST);

        if (!$login['session']) {
            if ($login['status'] == 'pending') {
                response($login, 'signup');
            } else {
                response($login, 'login');
            }
        } else {
            $_SESSION = $login;
            response($login, 'dashboard');
        }
    }
}

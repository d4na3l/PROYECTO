<?php
class Login extends Controller
{
    private function isAuthenticated()
    {
        return isset($_SESSION['session']);
    }

    public function index($section)
    {
        if ($this->isAuthenticated()) {
            location('dashboard');
        }
        if (empty($_GET['url']) || $_GET['url'] != 'login') {
            location('login');
        }
        $viewPath = $section;
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
        // show($login); // Descomenta esto solo para propósitos de depuración
    }
}

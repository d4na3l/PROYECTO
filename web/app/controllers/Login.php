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
        header('Content-Type: application/json');
        echo json_encode($login);
        exit;
        if (!$login['session']) {
            if ($login['status'] == 'pending') {
                location('signup');
            } else {
                $this->view('login');
            }
        } else {
            $_SESSION = $login;
            location('dashboard');
        }
        // show($login); // Descomenta esto solo para propósitos de depuración
    }
}

<?php

class Signup extends Controller
{
    public function index()
    {
        if (isset($_SESSION['session'])) {
            location('dashboard');
        }
        $this->view('signup');
    }

    public function signup($post)
    {
        $auth = new Auth;
        $login = $auth->signup($_POST);
        show($login);

        $this->view('signup');
    }
}

<?php

class Signup extends Controller
{
    public function index()
    {
        $prueba = preg_replace('/[^a-zA-Z0-9\/_-]/', '', 'Christian123%');
        show($prueba);
        if (isset($_SESSION['session'])) {
            location('dashboard');
        }
        $this->view('signup');
    }

    public function signup($post)
    {
        $auth = new Auth;
        $login = $auth->auth($_POST);
        show($login);

        $arr['first_name'] = preg_replace('/[^a-zA-Z0-9\/_-]/', '', $post['first_name']);
        $arr['last_name'] = preg_replace('/[^a-zA-Z0-9\/_-]/', '', $post['last_name']);
        $arr['email'] = preg_replace('/[^a-zA-Z0-9\/_-]/', '', $post['email']);
    }
}

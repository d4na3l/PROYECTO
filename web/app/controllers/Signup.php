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
        $signup = $auth->signup($_POST);
        // show($signup);

        if (!$signup['register']) {
            if($signup['status'] == 'active'){
                location('login');
            }
            $this->view('signup');
        }
    }
}

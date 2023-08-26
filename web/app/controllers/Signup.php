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
}

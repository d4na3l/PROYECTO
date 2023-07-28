<?php

class Home extends Controller
{
    public function index($main, $param)
    {
        $this->view($main);
    }
}

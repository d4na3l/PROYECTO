<?php

class Dashboard extends Controller
{
    public function index($main, $param)
    {
        if ($param) {
            $this->view($main . '/' . $param);
        }else {
            $this->view($main);
        }
    }
}

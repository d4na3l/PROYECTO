<?php

class Home extends Controller
{
    public function index($section)
    {
        $section = preg_replace('/[^a-zA-Z0-9\/_-]/', '', $section);
        $viewPath = $section;
        $this->view($viewPath);
    }
}

<?php

class _404 extends Controller
{
    public function index($section, $param)
    {
        $section = preg_replace('/[^a-zA-Z0-9\/_-]/', '', $section);
        $viewPath = $section;

        $this->view($viewPath);
    }
}

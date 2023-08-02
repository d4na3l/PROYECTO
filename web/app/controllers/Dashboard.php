<?php

class Dashboard extends Controller
{
    public function index($section, $param)
    {

        $section = preg_replace('/[^a-zA-Z0-9\/_-]/', '', $section);

        $viewPath = $section;
        if ($param) {
            $param = preg_replace('/[^a-zA-Z0-9\/_-]/', '', $param);
            $viewPath .= '/' . $param;
        }

        $this->view($viewPath);
    }
}

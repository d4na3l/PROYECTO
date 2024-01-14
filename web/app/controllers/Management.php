<?php

class Management extends Controller
{
    private function isAuthenticated()
    {
        return isset($_SESSION['session']);
    }

    public function index($section, $param)
    {
        if (!$this->isAuthenticated()) {
            location('login');
        }
        $viewPath = $section;

        // Comprobamos que existan parámetros de la vista.
        if ($param) {
            //Añadimos los parámetros de la vista y acomodamos el viewpath a conveniencia.
            $param = preg_replace('/[^a-zA-Z0-9\/_-]/', '', $param);
            $viewPath .= '/' . $param;
        }

        $this->view($viewPath);
    }
}

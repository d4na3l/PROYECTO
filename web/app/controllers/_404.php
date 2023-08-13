<?php
// Controlador para las vistas no existentes.
class _404 extends Controller
{
    // Metodo para seleccinar la vista enseñarla. Como solo hay una, debería reducir la cantidad de código en el controlador.
<<<<<<< HEAD
    public function index($section, $param)
    {
        $section = preg_replace('/[^a-zA-Z0-9\/_-]/', '', $section);
        $viewPath = $section;

        $this->view($viewPath);
=======
    public function index()
    {
        $this->view('404');
>>>>>>> chris
    }
}

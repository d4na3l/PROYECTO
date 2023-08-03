<?php
// Controlador para las vistas no existentes.
class _404 extends Controller
{
    // Metodo para seleccinar la vista enseñarla. Como solo hay una, debería reducir la cantidad de código en el controlador.
    public function index()
    {
        $this->view('404');
    }
}

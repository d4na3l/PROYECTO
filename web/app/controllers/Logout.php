<?php
class Logout
{
    function logout()
    {
        $_SESSION = array();
        session_destroy();

        // Redirigir a la página de inicio de sesión u otra página
        location('login');
    }
}

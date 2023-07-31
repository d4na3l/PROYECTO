<?php   

/*----------------------------------------------
    
[[FUNCIONALIDAD]]

    Si tiene una sesion iniciada, 
        -> enviar al dashboard
    Sino, 
        -> enviar al login */

/*-------------------------------------------------

Mientras no cumpla la funcion, redirige al login */

header("Location: login/login.php")
?>
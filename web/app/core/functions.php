<?php

// Aqui deberia colocar las funciones a las que debería llamar.
function show($stuff)
{
    echo "<pre>";
    print_r($stuff);
    echo "</pre>";
}

function location($path)
{
    header('Location: ' . ROOT . '/' . $path);
    exit;
}

function response($res){
    // code
}

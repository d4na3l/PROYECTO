<?php

// Aqui deberia colocar las funciones a las que debería llamar.
function show($stuff)
{
    echo "<pre>";
    print_r($stuff);
    echo "</pre>";
}
function showError($stuff)
{
    // code
}

function location($path)
{
    header('Location: ' . ROOT . '/' . $path);
}

function response($res, $redirect)
{
    try {
        header('Content-Type: application/json');
        echo json_encode($res);
        exit;
    } catch (\Throwable $th) {
        location($redirect);
    }

}

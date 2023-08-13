<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/navbar.css">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/<?php echo ucwords($_GET['url']) ?>.css">
    <link rel="icon" href="<?= ROOT ?>/assets/img/logo.png">
    <title>CM Chacao - <?php echo ucwords($_GET['url']) ?></title>
</head>

<body>
    <nav class="navbar">
        <div class="navbar__section">
            <div class="navbar__backgrond-button">
                <button href="." class="navbar__brand-button">
                    <img src="<?= ROOT ?>/assets/img/menu.png" alt="Logo" class="navbar__menu">
                </button>
                <div href="." class="navbar__brand">
                    <img src="<?= ROOT ?>/assets/img/logo.png" alt="Logo" class="navbar__logo">
                    <h3 class="navbar__title">CM Chacao</h3>
                </div>
            </div>
            <div class="navbar__user">
                <img src="<? ROOT ?>/public/assets/img/logo-usuario.png" class="navbar__img-user" alt="Logo usuario">
            </div>
        </div>
    </nav>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/style.css">
    <link rel="icon" href="<?= ROOT ?>/assets/img/logo.png">
    <title>CM Chacao</title>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar">
        <div class="navbar__section">
            <div class="navbar__backgrond-button">
                <button href="." class="navbar__brand-button" id="boton-menu-navbar">
                    <img src="<?= ROOT ?>/assets/svg/menu.svg" alt="Logo" class="navbar__menu">
                </button>
                <div href="." class="navbar__brand">
                    <img src="<?= ROOT ?>/assets/img/logo.png" alt="Logo" class="navbar__logo">
                    <h3 class="navbar__title">CM Chacao</h3>
                </div>
            </div>
            <div class="navbar__user">
                <img src="<? ROOT ?>/public/assets/svg/user-circle.svg" class="navbar__img-user" alt="Logo usuario">
            </div>
        </div>
        <div class="sidebar__background sidebar__hidden" id="side">
            <div class="sidebar">
                <div class="side__logo-name">
                    <div class="navbar__backgrond-button">
                        <button href="." class="navbar__brand-button" id="boton-menu-sidebar">
                            <img src="<?= ROOT ?>/assets/svg/menu.svg" alt="Logo" class="navbar__menu">
                        </button>
                        <div href="." class="navbar__brand">
                            <img src="<?= ROOT ?>/assets/img/logo.png" alt="Logo" class="navbar__logo">
                            <h3 class="navbar__title">CM Chacao</h3>
                        </div>
                    </div>
                    <ul class="list">
                        <li class="list__item">
                            <a href="<?= ROOT ?>" class="list__button">
                                <img src="<?= ROOT ?>/assets/svg/home.svg" alt="boton home" class="list__img">
                                <span class="side__link">Inicio</span>
                            </a>
                        </li>
                        <li class="list__item list__item--click">
                            <div class="list__button list__button--click">
                                <img src="<?= ROOT ?>/assets/svg/user.svg" alt="" class="list__img">
                                <span class="side__link">Mantenimiento</span>
                                <img src="<?= ROOT ?>/assets/svg/arrow-left.svg" alt="" class="list__arrow">
                            </div>
                            <ul class="list__show">
                                <li class="list__inside">
                                    <a href="<?= ROOT ?>/management/users" class="side__link">Usuarios</a>
                                </li>
                            </ul>
                        </li>
                        <li class="list__item list__item--click">
                            <div class="list__button list__button--click">
                                <img src="<?= ROOT ?>/assets/svg/bank.svg" alt="boton home" class="list__img">
                                <span class="side__link">Estados Financieros</span>
                                <img src="<?= ROOT ?>/assets/svg/arrow-left.svg" alt="" class="list__arrow">
                            </div>
                            <ul class="list__show">
                                <li class="list__inside">
                                    <a href="<?= ROOT ?>/financial/incomes" class="side__link">Ingresos</a>
                                </li>
                                <li class="list__inside">
                                    <a href="<?= ROOT ?>/financial/expenses" class="side__link">Egresos</a>
                                </li>
                            </ul>
                        </li>
                        <li class="list__item log-out">
                            <a href="<?= ROOT ?>/logout" class="list__button">
                                <img src="<?= ROOT ?>/assets/svg/log-out.svg" alt="" class="list__img">
                                <span class="side__link">Cerrar Sesíón</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

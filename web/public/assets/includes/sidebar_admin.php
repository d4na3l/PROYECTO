<?php include("header.php") ?>

<body onload="myFunction()">
    <nav class="navbar">
    <div class="navbar__section">
            <div class="navbar__backgrond-button">
                <button href="." class="navbar__brand-button" id="boton-menu-navbar-left">
                    <img src="<?= ROOT ?>/assets/svg/menu.svg" alt="Logo" class="navbar__menu">
                </button>
                <div href="." class="navbar__brand">
                    <img src="<?= ROOT ?>/assets/img/logo.png" alt="Logo" class="navbar__logo">
                    <h3 class="navbar__title">CM Chacao</h3>
                </div>
            </div>
            <button href="." class="navbar__brand-button" id="boton-menu-navbar-right">
                <img src="<? ROOT ?>/public/assets/svg/user-circle.svg" class="navbar__img-user" alt="Logo usuario">
            </button>
        </div>
        <!-- <div class="sidebar_profile_background sidebar_profile_hidden navbar__user" id="sider">
            <div class="sidebar_profile">
                <div class="side__logo-name">
                    <div class="navbar__backgrond-button">
                        <button href="." class="navbar__brand-button" id="boton-menu-sidebar-right">
                            <img src="<? ROOT ?>/public/assets/svg/user-circle.svg" class="navbar__img-user" alt="Logo usuario">
                        </button>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="sidebar__background sidebar__hidden" id="sidel">
            <div class="sidebar">
                <div class="side__logo-name">
                    <div class="navbar__backgrond-button">
                        <button href="." class="navbar__brand-button" id="boton-menu-sidebar-left">
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
                        <!-- <li class="list__item">
                            <a href="<?= ROOT ?>/dashboard/management" class="list__button">
                                <img src="<?= ROOT ?>/assets/svg/user.svg" alt="boton gestion de usuario" class="list__img">
                                <span class="side__link">Gestion de Usuarios</span>
                            </a>
                        </li> -->
                        <li class="list__item list__item--click">
                            <div class="list__button list__button--click">
                                <img src="<?= ROOT ?>/assets/svg/user.svg" alt="" class="list__img">
                                <span class="side__link">Registros</span>
                                <img src="<?= ROOT ?>/assets/svg/arrow-left.svg" class="list__arrow">
                            </div>
                            <ul class="list__show">
                                <li class="list__inside">
                                    <a href="<?= ROOT ?>/dashboard/registro_usuario" class="side__link">Usuarios</a>
                                </li>
                                <li class="list__inside">
                                    <a href="<?= ROOT ?>/dashboard/registro_cliente" class="side__link">Clientes</a>
                                </li>
                                <li class="list__inside">
                                    <a href="<?= ROOT ?>/dashboard/registro_estado_financiero" class="side__link">Transacciones</a>
                                </li>
                            </ul>
                        </li>
                        <!-- <li class="list__item">
                            <a href="<?= ROOT ?>" class="list__button">
                                <img src="<?= ROOT ?>/assets/svg/ingresos.svg" alt="boton home" class="list__img">
                                <span class="side__link">Ingresos</span>
                            </a>
                        </li>
                        <li class="list__item">
                            <a href="<?= ROOT ?>" class="list__button">
                                <img src="<?= ROOT ?>/assets/svg/egresos.svg" alt="boton home" class="list__img">
                                <span class="side__link">Egresos</span>
                            </a>
                        </li> -->
                        <li class="list__item">
                            <a href="<?= ROOT ?>/dashboard/estados_financieros" class="list__button">
                                <img src="<?= ROOT ?>/assets/svg/bank.svg" alt="boton home" class="list__img">
                                <span class="side__link">Estados Financieros</span>
                            </a>
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
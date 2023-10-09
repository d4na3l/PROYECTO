<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/login.css">
    <link rel=" icon" href="<?= ROOT ?>/assets/img/logo.png">
    <title>CM Chacao - Login</title>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
</head>

<body>
    <div class="section">
        <div class="container container-hidden animation-left">
            <img class="logo" src="<?= ROOT ?>/assets/img/logo.png" alt="Logo institucional">
        </div>
        <?php if (!empty($error)) : ?>
            <div class="error-message"><?= $error ?></div>
        <?php endif; ?>
        <div class="container animation-right">
            <h1 class="section__title animation-right">Login</h1>
            <form id="loginForm" method="POST" autocomplete='off'>
                <div class="usuario">
                    <input class="form animation-right-input" name='ci' type="text" placeholder="Cédula">
                    <div class="showPass animation-right-input">
                        <input class="form" name='password' type="password" placeholder="Contraseña" id="password" onchange="ocultarOjo()">
                        <div class="div-checkbox">
                            <input class="none" type="checkbox" name="checkbox" id="checkbox" onchange="ocultarPassword()">
                            <label id="" for="checkbox"></label>
                        </div>
                    </div>
                </div>
                <input id='loginInput' type="submit" class="boton animation-right-input" value="Ingresar">
            </form>
            <a class="a" href="<?= ROOT ?>/signup">Registrarse</a>
            <a class="a" href="#">Recuperar contraseña</a>
        </div>
    </div>
    <script src="<?= ROOT ?>/assets/js/login.js"></script>
</body>

</html>

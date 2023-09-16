<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/login.css">
    <link rel=" icon" href="<?= ROOT ?>/assets/img/logo.png">
    <title>CM Chacao - Sign Up</title>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
</head>

<body>
    <div class="section">
        <div class="container animation-right">
            <h1 class="section__title animation-right">Sign Up</h1>
            <form id="loginForm" method="POST" autocomplete='off'>
                <div class="usuario">
                    <input class="form animation-right-input" name='ci' type="text" placeholder="Cédula de identidad">
                    <input class="form animation-right-input" name='last_name' type="text" placeholder="Primer nombre">
                    <input class="form animation-right-input" name='last_name' type="text" placeholder="Primer apellido">
                    <input class="form animation-right-input" name='password' type="password" placeholder="Contraseña">
                    <input class="form animation-right-input" name='verify_password' type="password" placeholder="Repetir contraseña">
                    <input class="form animation-right-input" name='email' type="email" placeholder="Correo electrónico">
                </div>
                <input id='loginInput' type="submit" class="boton animation-right-input" value="Registrar">
            </form>
            <a class="a" href="<?= ROOT ?>/login">Volver</a>
        </div>
    </div>
    <script src="<?= ROOT ?>/assets/js/login.js"></script>
</body>

</html>

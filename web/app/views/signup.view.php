<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/login.css">
    <link rel=" icon" href="<?= ROOT ?>/assets/img/logo.png">
    <title>CM Chacao - Sign Up</title>
</head>

<body>
    <div class="section">
        <div class="container animation-right">
            <h1 class="section__title animation-right">Sign Up</h1>
            <form id="signupForm" method="PUT" autocomplete='off'>
                <div class="usuario">
                    <input class="form animation-right-input" name='ci' type="text" placeholder="Cédula de identidad">
                    <input class="form animation-right-input" name='password' type="password" placeholder="Contraseña">
                    <input class="form animation-right-input" name='verify_password' type="password" placeholder="Repetir contraseña">
                </div>
                <input id='signupInput' type="submit" class="boton animation-right-input" value="Enviar">
            </form>
            <a class="a" href="<?= ROOT ?>/login">Volver</a>
        </div>
        <script src="<?= ROOT ?>/assets/js/signup.js" type="module"></script>
    </div>
</body>

</html>

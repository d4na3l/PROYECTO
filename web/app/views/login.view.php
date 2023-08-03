<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/login.css">
    <link rel=" icon" href="<?= ROOT ?>/assets/img/logo.png">
    <title>Login</title>
</head>

<body>
    <div class="section">
        <div class="container container-hidden animation-left">
            <img class="logo" src="<?= ROOT ?>/assets/img/logo.png" alt="Logo institucional">
        </div>
        <div class="container animation-right">
            <h1 class="section__title animation-right">Login</h1>
            <form method="POST" action="#">
                <div class="usuario">
                    <input class="form animation-right-input" type="text" placeholder="Usuario">
                    <input class="form animation-right-input" type="password" placeholder="Contraseña">
                </div>
                <input type="submit" class="boton animation-right-input" value="Ingresar">
            </form>
        </div>
    </div>
</body>

</html>

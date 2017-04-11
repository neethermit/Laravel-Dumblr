<!DOCTYPE html>
<html>
    <head>
        <title>PRUEBA - <?php echo $__env->yieldContent('title'); ?></title>
        <script src="<?php echo e(asset('js/jquery-3.1.1.js')); ?>"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/general.css')); ?>">
    </head>
    <body class="background">
        <?php $__env->startSection('login'); ?>
        <div class="login">
            <h1>¡Bienvenido al juego del piedra papel o tijera!</h1>
            <div class="p50">
                <form class="login" action="/game/servlets/dologin.php" method="POST">
                    <input class="text" name="username" type="text" alt="Nombre de usuario" placeholder="Por favor, escriba su nombre de usuario">
                    <input class="text" name="password" type="password" alt="Contraseña" placeholder="Por favor, escriba su contraseña">
                    <input class="text button" type="submit" alt="Ingresar" value="Ingresar">
                </form>
                <a href="/game/signup.php">Registrarse</a>
            </div>
        </div>
        <?php echo $__env->yieldSection(); ?>
        
    </body>
    <script>
    //alert(navigator.userAgent);
    </script>
    
</html>
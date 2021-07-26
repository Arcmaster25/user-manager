<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>User Manager</title>
    <link rel="stylesheet" href="">
</head>
<body>
    <?php if($message != 'El usuario fue creado de forma satisfactoria'){ ?>
    <?php if($message == ''){}else{ ?>
        <div class='alert alert-danger text-center'>
            <?php $message ?>
        </div>
    <?php } ?>
<?php }else{ ?>
    <div class='alert alert-success text-center'>
        <?php $message ?>
    </div>
    <?php header('Location: index.php?controller=User&action=login'); ?>
<?php } ?>
<div class='container my-5'>
    <div class='card text-center'>
        <div class='card-header'>
            <h2 class='card-title'>Registrarse</h2>
        </div>
        <div class='card-body'>
            <form action='index.php?controller=User&action=store' method='POST'>
                <div class='form-group'>
                    <label for='name'>Nombre</label>
                    <input type='text' class='form-control text-center' name='name'>
                </div>
                <div class='form-group'>
                    <label for='password'>Contrasena</label>
                    <input type='password' class='form-control text-center' name='password'>
                </div>
                <div class='form-group'>
                    <button type='success' class='btn btn-primary'>Registrar</button>
                    <a href="index.php?controller=User&action=login">Si ya estas registrado ingresa</a>
                </div>
            </form>
        </div>
    </div>
</div>
<!--<script src="dist/bundle.js"></script>-->
</body>
</html>
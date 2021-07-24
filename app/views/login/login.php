<!DOCTYPE>
<html>
<head LANG='en'>
    <meta charset='UFT-8'>
    <link rel='stylesheet' href='public/css/main.css'>
    <title>User Manager</title>
</head>
<body>
    <?php if($message != ''){ ?>
        <div class='alert alert-danger text-center m-2'>
            <?php echo $message; ?>
        </div>
    <?php } ?>
        <div class='container mt-5'>
            <div class='card text-center'>
                <div class='card-header'>
                    <h2 class='card-title'>Login</h2>
                </div>
                <div class='card-body'>
                    <form action='index.php?controller=User&action=login' method='POST'>
                        <div class='form-group'>
                            <label for='usr'>Nombre</label>
                            <input type='text' class='form-control text-center' name='name'>
                        </div>
                        <div class='form-group'>
                            <label for='pss'>Contrasena</label>
                            <input type='password' class='form-control text-center' name='password'>
                        </div>
                        <div class='form-group'>
                            <button type='success' class='btn btn-primary'>Login</button>
                            <a href='index.php?controller=User&action=store' class='btn btn-link'>Registry</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="dist/bundle.js"></script>
</body>
</html>
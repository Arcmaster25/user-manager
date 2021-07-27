<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <?php 
            if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){
        ?>
            <a class="navbar-brand" href="index.php?controller=Client&action=index">User Manager</a>
        <?php 
            }else{
        ?>
            <a class="navbar-brand" href="index.php">User Manager</a>
        <?php 
            }
        ?>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <?php 
                    if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){
                ?>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php?controller=Client&action=store">Agregar cliente</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?controller=Client&action=index">Lista de clientes</a>
                    </li>
                    <?php 
                        if(isset($_SESSION['user_type']) && $_SESSION['user_type'] == 'root'){
                    ?>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?controller=User&action=store">Registrar Usuario</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?controller=User&action=index" disabled>Ver usuarios</a>
                        </li>
                    <?php 
                        }
                    ?>
                <?php 
                    }else{
                ?>
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-current="page" href="index.php?controller=&action=">Agregar cliente</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="index.php?controller=&action=">Lista de clientes</a>
                    </li>
                <?php 
                    }
                ?>
            </ul>
            <div class="d-flex">
                <?php 
                    if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){
                ?>
                    <div class="dropdown">
                        <a class=" dropdown-toggle text-white text-decoration-none" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php 
                                echo $_SESSION['user_name'];
                            ?>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="index.php?controller=User&action=show" disabled>Perfil</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="index.php?controller=User&action=logout">Cerrar Sesión</a></li>
                        </ul>
                    </div>
                <?php 
                    }else{
                ?>
                    <a href="index.php?controller=User&action=login" class="text-white text-decoration-none">Iniciar Sesión</a>
                <?php 
                    }
                ?>
            </div>
        </div>
    </div>
</nav>
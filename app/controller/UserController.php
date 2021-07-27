<?php 
	class UserController{
		//Method's

		//Create User
		public function store(){

			require('app/models/User.php');

			$message = '';

            if(isset($_POST['name']) && isset($_POST['password'])){

            	$user = $_POST['name'];

            	$password = $_POST['password'];;

            	$user_model = new User();

                $create_user = $user_model->store($user, $password);

                if($create_user != -1){

                    $message = 'El usuario fue creado de forma satisfactoria';

                    header('Location: index.php?controller=Client&action=index');

                }else{

                    $message = 'Lo sentimos, hubo un error al crear su usuario';

                }

            }

			require('app/views/login/registry.php');
		}

		public function login(){

			require('app/models/User.php');

                //session_start();

                $message = '';

                if(isset($_POST['name']) && isset($_POST['password'])){

                    $user = $_POST['name'];

                    $password = $_POST['password'];

                    $user_model = new User();

                    $get_user = $user_model->get_by_name($user);

                    if($get_user['nombre'] == NULL){

                        $message = 'Este nombre de usuario no existe';

                    }else{

                        //$password_db = $get_user['contrasena'];

                        //$password_validate = password_verify($password, $password_db);

                        if($get_user['nombre'] == $user && $get_user['contrasena'] == $password){

                            $userId = $get_user['id'];

                            $userData = $user_model->get($userId);

                            $_SESSION['user_name'] = $userData['nombre'];

                            $_SESSION['user_id'] = $userData['id'];

                            $_SESSION['user_type'] = $userData['tipo'];

                            header('Location: index.php?controller=Client&action=index');

                        }else{

                            $message = 'Verifique que la contrasena o nombre de usuario sean correctos';

                        }
                    }

                }

            require('app/views/login/login.php');

		}

        public function show(){
            require('app/models/User.php');
            session_start();
            $user = '';
            $message = '';
            $user_id = '';
                if(isset($_SESSION['user_id'])){
                    $user_id = $_SESSION['user_id'];
                }
            require('app/views/profile.php');
        }

        public function logout(){
            session_start();
            session_unset();
            session_destroy();
            header('Location: index.php');
        }
	}

	if(isset($_GET['action']) && !empty($_GET['action'])){
        $action = $_GET['action'];
        $user_class = new UserController();
        $user_class->$action();
    }
?>
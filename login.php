<?php session_start();

/******************************** 
	 DATABASE & FUNCTIONS 
********************************/
require('config/config.php');
require('model/functions.fn.php');


/********************************
			PROCESS
********************************/

if(isset($_POST['email']) && isset($_POST['password'])){
	if(!empty($_POST['email']) && !empty($_POST['password'])){

		$email = htmlspecialchars($_POST['email']);
		$password = sha1($_POST['password']);

		$req = $db->prepare('SELECT id, username FROM users WHERE email LIKE :email AND password LIKE :password');
		$req->execute(
			array(
				'email' => $email,
				'password' => $password
				)

			);

		$users = $req->fetchALL();
                if(sizeof($users) > 0){

                    $id_member = $users[0]["id"];
                    $_SESSION["id"] = $id_member;
                    $_SESSION["username"] = $users[0]["username"];

                    header('Location:dashboard.php');
                }
                else {
                    echo '<div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="alert alert-danger"><strong>Pseudo ou Mot de passe incorrect !</strong> Veuillez réessayer</div>
                        </div>
                    </div>';
                }

	}
}

/******************************** 
			VIEW 
********************************/
include 'view/_header.php';
include 'view/login.php';
include 'view/_footer.php';
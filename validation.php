<?php
require('config/config.php');
require('model/functions.fn.php');
session_start();

if(isset($_POST['email']) && isset($_POST['username']) && isset($_POST['password'])){
	if(!empty($_POST['email']) && !empty($_POST['username']) && !empty($_POST['password'])){

	$email = htmlspecialchars($_POST['email']);
	$username = htmlspecialchars($_POST['username']);
	$password = sha1($_POST['password']);

	$req = $db->prepare("INSERT INTO users (email, username, password) VALUES (:email, :username, :password)");

	$req->execute (
		array(
			'email' => $email,
			'username' => $username,
			'password' => $password
		)
	);

	header('Location: login.php');

	}else{
		echo '<div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="alert alert-danger"><strong>Champs manquants</strong> Veuillez remplir tous les champs</div>
                        </div>
                    </div>';
        header('Location: register.php');
	}
}

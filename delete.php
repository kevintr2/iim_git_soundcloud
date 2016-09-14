<?php
session_start();

require('config/config.php');
require('model/functions.fn.php');

/*===============================
	Delete
===============================*/

if(isset($_GET) && !empty($_GET)){
	$delete = deleteMusic($db, $_GET['id'], $_SESSION['id']);
	if($delete == true){



		$request = $db->prepare("DELETE FROM musics WHERE id = :id AND user_id = :user_id");

        $request->execute(["id" => $_GET["id"],
        					"user_id" => $_SESSION["id"]
        					]);

		header('Location: mymusic.php');
	}
	else{
		echo 'Aucune musique selectionnée, veuillez réessayer';
	}

}

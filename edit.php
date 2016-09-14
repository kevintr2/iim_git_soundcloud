<?php

session_start();

require('config/config.php');
require('model/functions.fn.php');

/*===============================
	Edit
===============================*/
$user_id = $_SESSION['id'];
$music_id = $_GET['id'];
$music = selectMusic($db, $music_id);

if(isset($_POST) && !empty($_POST)){
	if(!empty($_POST['title'])){
		$edit = updateMusic($db, $_GET['id'], $_POST['title'], $_SESSION['id']);
		if($edit == true){

			$title = $_POST['title'];
			$comment = $_POST['comment'];

			$req = $db->prepare("UPDATE musics SET title = :title, comment = :comment WHERE id = :id AND user_id = :user_id");

			$req->execute([
				'title' => $title,
				'comment' => $comment,
				'id' => $music_id,
				'user_id' => $user_id
				]);

			header('Location: mymusic.php');
		}
		else{
			$error = 'La musique ne vous appartient pas!';
		}
	}
	else{
		$error = 'Formulaire incomplet';
	}
}

include 'view/_header.php';
include 'view/edit.php';
include 'view/_footer.php';
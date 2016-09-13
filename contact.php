<!doctype html>

<html lang="fr">
<?php
include 'view/_header.php';
include 'view/dashboard.php';
?>
<head>
	<meta charset="utf-8">

<form id="contact_form" action="#" method="POST" enctype="multipart/form-data">
	<div id="contactform" class="row">
		<label for="name">Your name:</label><br />
		<input id="name" class="input" name="name" type="text" value="" size="30" /><br />
	</div>
	<div id="contactform" class="row">
		<label for="email">Your email:</label><br />
		<input id="email" class="input" name="email" type="text" value="" size="30" /><br />
	</div>
	<div id="contactform" class="row">
		<label for="message">Your message:</label><br />
		<textarea id="message" class="input" name="message" rows="7" cols="30"></textarea><br />
	</div>
	<input id="contactform" id="submit_button" type="submit" value="Send email" />
</form>	
</head>
<?php 
include 'view/_footer.php';
?>
<!doctype html>

<html lang="fr">
<meta charset="utf-8">
<body>

<?php
session_start();
include 'view/_header.php';
include 'view/_topbar.php';
?>

	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div id="musicfeed">
					<h1><i class="fa fa-clock-o"></i> Top des musiques du moment</h1>
						<div class="music animated fadeInDown">
							<div class="row">
								<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
								   <img src="https://i.ytimg.com/vi/9bBx_6Ih5B0/maxresdefault.jpg" class="retoucheimage">
								       Ivan B - Lights On Me (Prod. Tido Vegas)

<?php 
include 'view/_footer.php';
?>
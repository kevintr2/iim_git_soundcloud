<body>
	<?php include '_topbar.php'; ?>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div id="musicfeed">
					<h1><i class="fa fa-pencil"></i> Editer votre image de profil</h1>
					<div class="block animated fadeInDown">
						<div class="row">
							<div class="col-xs-2 col-sm-2 col-md-1 col-lg-1">
								<div class="author">
									<?php
									if(isset($_SESSION['image']) && !empty($_SESSION['image'])){
										echo '<a href="edit_image.php"><img src="'.$_SESSION['image'].'" alt=""></a>';
									}
									else{
										echo '<a href="edit_image.php"><img src="view/profil_pic/undefined.jpg" alt=""></a>';
									}
									?>
								</div>
							</div>
							<div class="col-xs-10 col-sm-10 col-md-11 col-lg-11">

								<?php
								if(isset($error) && !empty($error)){
									echo '<div class="alert alert-danger alert-dismissable">';
									  echo '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
									 echo  $error;
									echo '</div>';
								}
								?>

								<b class="username"><?php echo $_SESSION['username']; ?></b>
								<p>
									<br>
									Extensions autorisées : .jpg, .png et .gif
								</p>
								<form action="edit_image.php" method="POST" enctype="multipart/form-data">
									<input type="file" name="image">
									<p class="clearfix"><button type="submit" class="valid pull-right"><i class="fa fa-check"></i> Valider</button></p>
								</form>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div id="musicfeed">
						<div class="music animated fadeInDown">
							<div class="row">															      
<footer>
  <p class="footerme">Coded with<img src="https://freeiconshop.com/files/edd/heart-compact-solid.png" id="fbicon">                          by : Tran Kevin and Scalabrin Fabien</p>

  <p class="footerme">Email Adress: <a href="mailto:someone@example.com">
  soundcloud@gmail.com</a>.</p>
  <a href="https://www.facebook.com/SoundCloud/?fref=ts"><img src="http://lh5.googleusercontent.com/-0MlsUFgr9nc/AAAAAAAAAAI/AAAAAAAAAFQ/A1IXqZeR9CQ/s512-c/photo.jpg" class="footerme" id="fbicon"> </a>
  <a href="https://twitter.com/SoundCloud"><img src="https://freeiconshop.com/files/edd/twitter-solid.png" class="footerme" id="kicon"> </a>
  
</footer>
</div>
</div>
</div>
</div>
</div>
</div>
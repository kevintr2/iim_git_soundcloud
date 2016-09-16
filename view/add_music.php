<body>
	<?php include '_topbar.php'; ?>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div id="musicfeed">
					<h1><i class="fa fa-plus"></i> Ajouter une musique</h1>
					<div class="block animated fadeInDown">
						<div class="row">
							<div class="col-xs-10 col-sm-10 col-md-11 col-lg-11">
								<?php
								if(isset($error) && !empty($error)){
									echo '
									<div class="alert alert-danger alert-dismissable">
										<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
										'.$error.'
									</div>';
								}
								?>
								<form action="add_music.php" method="POST" enctype="multipart/form-data">
									<div class="form-group">
										<label for="title">Titre</label>
										<input type="text" name="title" class="form-control">
									</div>
									<div class="form-group">
										<label for="comment">Commentaire</label>
										<textarea class="form-control" name="comment" placeholder="Qu'en pensez vous?"></textarea>
									</div>
									<div class="form-group">
										<label for="file">Musique</label>
										<input type="file" name="music">
										<p>
											Extensions autorisées : .mp3, .ogg
										</p>
									</div>
									<p class="clearfix"><button type="submit" class="valid pull-right"><i class="fa fa-check"></i>Envoyer</button></p>
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
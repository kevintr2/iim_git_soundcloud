<body>
	<?php include '_topbar.php'; ?>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div id="musicfeed">
					<h1><i class="fa fa-music"></i> Mes Musiques</h1>
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

                    $req = $db->prepare("SELECT * FROM musics WHERE user_id = :user_id");

                    $req->execute([
                    	'user_id' => $_SESSION['id']
                    ]);

                    while ($data = $req->fetch()){
                ?>

                <h3><?php echo $data["title"]; ?></h3>
                <h5><a style="text-decoration:none; color:red;" href="delete.php?id=<?php echo $data["id"] ; ?>"><i class="fa fa-times" aria-hidden="true"></i> Supprimer </a> <span style="color:#95a5a6;"> | </span><a style="text-decoration:none;" href="edit.php?id=<?php echo $data["id"] ; ?>"> <i class="fa fa-pencil" aria-hidden="true"></i> Modifier</a></h5>
                <hr>

                <?php } ?>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php
include '_footer.php';
?>
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



                    $req = $db->prepare("SELECT title FROM musics WHERE user_id = :user_id");

                    $req->execute(array(
                    	'user_id' => $id
                    		)
                   	 	);

                    while ($data = $req->fetch()){
                ?>

                <h2>•<?php echo $data["title"]; ?></h2>

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
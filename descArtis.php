<?php 
	try{
		$bdd = new PDO('mysql:host=localhost;dbname=met_fey','root','fasil');
	}catch(Exception $e){
		die("Erreur Index ".$e->getMessage());
	}

	$req_artisans = $bdd->query("SELECT * FROM artisans")->fetchAll();
	$req_artistes = $bdd->query("SELECT * FROM artiste")->fetchAll();
?>
<!DOCTYPE html>
<html lang="en" class=" js csstransforms3d js csstransforms3d js csstransforms3d">
	<head>
			<meta charset="UTF-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
			<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
			<title>Manman Doudou</title>
			<meta name="description" content="Multi-Level Push Menu: Off-screen navigation with multiple levels">
			<meta name="keywords" content="multi-level, menu, navigation, off-canvas, off-screen, mobile, levels, nested, transform">
			<meta name="author" content="Codrops">
			<link rel="shortcut icon" href="../favicon.ico">
			<link rel="stylesheet" type="text/css" href="css/normalize.css">
			<link rel="stylesheet" type="text/css" href="css/demo.css">
			<link rel="stylesheet" type="text/css" href="css/icons.css">
			<link rel="stylesheet" type="text/css" href="css/component.css">
			<link rel="stylesheet" type="text/css" href="css/vetStyle.css">
			<link rel="stylesheet" type="text/css" href="css/persoStyle.css">
			<script src="js/modernizr.custom.js"></script>
		
			<style id="style-1-cropbar-clipper">
				.en-markup-crop-options {
				    top: 18px !important;
				    left: 50% !important;
				    margin-left: -100px !important;
				    width: 200px !important;
				    border: 2px rgba(255,255,255,.38) solid !important;
				    border-radius: 4px !important;
				}

				.en-markup-crop-options div div:first-of-type {
				    margin-left: 0px !important;
				}
			</style>
	</head>
	<body>
		<div class="container">
			<!-- Push Wrapper -->
			<div class="mp-pusher" id="mp-pusher" style="transform: translate3d(0px, 0px, 0px);">

				<!-- mp-menu -->
				<nav id="mp-menu" class="mp-menu mp-overlap">
					<div class="mp-level the_level" data-level="1">
						<h2 class="icon icon-world">Galeries</h2>
						<ul>
							<li class="icon icon-arrow-left">
								<a class="icon icon-display" href="#">Artisans</a>
								<div class="mp-level the_level" data-level="2">
									<h2 class="icon icon-display">Artisans</h2>
									<ul>
										<?php 
											foreach ($req_artisans as $val) {
												
											
										?>
										<li class="icon icon-arrow-left">
											<a class="icon icon-phone" href="#"><?php echo $val ['activity'];?></a>
											<div class="mp-level the_level" data-level="3" style="">
												<h2><?php echo $val ['activity'];?></h2>
												<ul>
													<?php 
														foreach ($req_artistes as $arts) {
															if($arts['artType']===$val['id']){
													?>
													<li><a href="./descArtis.php?art_id=<?php echo $arts['id'];?>"><?php echo $arts['prenom']." ".$arts['nom'];?></a></li>
													<?php 
															}
														}
													?>
												</ul>
											</div>
										</li>
										<?php 
											}
										?>
									</ul>
								</div>
							</li>
							<li class="icon icon-arrow-left">
								<a class="icon icon-video" href="#">Kita Nago</a>
								<div class="mp-level the_level" data-level="2" style="transform: translate3d(-100%, 0px, 0px) translate3d(-80px, 0px, 0px);">
									<h2 class="icon icon-news">Kita Nago</h2>
									<ul>
										<li><a href="#">Images</a></li>
										<li><a href="#">Videos</a></li>
										<li><a href="#">Articles</a></li>
									</ul>
								</div>
							</li>
							<li class="icon icon-arrow-left">
								<a class="icon icon-shop" href="#">Marche</a>
								<div class="mp-level the_level" data-level="2" style="transform: translate3d(-100%, 0px, 0px) translate3d(-80px, 0px, 0px);">
									<h2 class="icon icon-shop">Marche</h2>
									<ul>
										<li class="icon icon-arrow-left">
											<a class="icon icon-t-shirt" href="#">Habits</a>
											<div class="mp-level the_level" data-level="3" style="transform: translate3d(-100%, 0px, 0px) translate3d(-80px, 0px, 0px);">
												<h2 class="icon icon-t-shirt">Habits</h2>
												<ul>
													<li class="icon icon-arrow-left">
														<a class="icon icon-female" href="#">Femmes</a>
														<div class="mp-level the_level" data-level="4" style="transform: translate3d(-100%, 0px, 0px) translate3d(-80px, 0px, 0px);">
															<h2>Femmes</h2>
															<ul>
																<li><a href="#">Corsages</a></li>
																<li><a href="#">Robes</a></li>
																<li><a href="#">Bourses</a></li>
																<li><a href="#">Souliers</a></li>
																<li><a href="#">Sandales</a></li>
															</ul>
														</div>
													</li>
													<li class="icon icon-arrow-left">
														<a class="icon icon-male" href="#">Hommes</a>
														<div class="mp-level the_level" data-level="4" style="transform: translate3d(-100%, 0px, 0px) translate3d(-80px, 0px, 0px);">
															<h2>Hommes</h2>
															<ul>
																<li><a href="#">Maillots</a></li>
																<li><a href="#">Chemises</a></li>
																<li><a href="#">Souliers</a></li>
															</ul>
														</div>
													</li>
												</ul>
											</div>
										</li>
										<li>
											<a class="icon icon-diamond" href="#">Bijoux</a>
										</li>	
									</ul>
								</div>
							</li>
						</ul>
					</div>
				</nav>
				<!-- /mp-menu -->

				<div class="scroller"><!-- this is for emulating position fixed of the nav -->
					<div class="scroller-inner">
						<!-- Top Navigation -->
						
						<header class="codrops-header">
							  <p style="float: left;">
									<a href="#" id="trigger" class="menu-trigger"><strong>Menu</strong></a>
							  </p>

 						<div class="tetVet">
							<h1>Manman Doudou Marche</h1>
							<p>Un marche pour nos produits locaux</p>
						</div>
						</header>
						<!--Description Artiste-->
						<div class="row23">
							<div class="col-md-12">
                            <div class="x_panel">
                                <div class="x_title">
                                	<?php
                                		if(isset($_GET['art_id'])){
                                			foreach ($req_artistes as $atis) {
                                				if($_GET['art_id']==$atis['id']){
                                	?>
                                    <h2><?php echo $atis['prenom']."  ",$atis['nom']?><small> Gallerie  </small></h2>
                                    <?php
                                    			}
                                    		}
                                    	}
                                    ?>
                                    
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">

                                    <div class="row23">

                                    	<?php
	                                		if(isset($_GET['art_id'])){
	                                			foreach ($req_artistes as $atis) {
	                                				if($_GET['art_id']==$atis['id']){
                                		?>
                                        <p><?php echo $atis['texte']?></p>
                                        <?php
	                                    			}
	                                    		}
	                                    	}
	                                    ?>
	                                    <?php
	                                    	//Requete pour les articles
	                                    	if(isset($_GET['art_id'])){
	                                    		$req_photos = $bdd->query("SELECT * FROM articles WHERE to_artiste=".$_GET['art_id']."")->fetchAll();
	                                    		if(isset($req_photos)){
	                                    			foreach ($req_photos as $photos) {
	                                    ?>
                                        <div class="col-md-55">
                                            <div class="thumbnail">
                                                <div class="image view view-first">
                                                    <img style="width: 100%; display: block;" src="img/<?php echo $photos['url'];?>" alt="image">
                                                </div>
                                                <div class="caption">
                                                    <p><strong><?php echo $photos['article_name'];?></strong> <?php $photos['description']; ?> <em><?php echo $photos['prix'];?></em></p>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                        			}
                                        		}else{
                                        			echo "<p>Erreur !Il n'y a pas d'articles pour cette personnes</p>";	
                                        		}
                                        	}else{
                                        		echo "<p>Erreur ! Contacter l'administrateur du site</p>";
                                        	}
                                        ?>
                                    </div>

                                </div>
                            </div>
                        </div>
                        </div>
						<!--Description Artiste-->

						<footer class="pied">
							<p>Met Fey Vet 2015</p>
						</footer>
						
					</div><!-- /scroller-inner -->
				</div><!-- /scroller -->

			</div><!-- /pusher -->
		</div><!-- /container -->
		<script src="js/classie.js"></script>
		<script src="js/mlpushmenu.js"></script>
		<script>
			new mlPushMenu( document.getElementById( 'mp-menu' ), document.getElementById( 'trigger' ) );
		</script>
	
</body>
</html>
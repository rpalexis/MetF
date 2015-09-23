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
			<title>BiLa</title>
			<meta name="description" content="Multi-Level Push Menu: Off-screen navigation with multiple levels">
			<meta name="keywords" content="multi-level, menu, navigation, off-canvas, off-screen, mobile, levels, nested, transform">
			<meta name="author" content="Codrops">
			<link rel="shortcut icon" href="../favicon.ico">
			<link rel="stylesheet" type="text/css" href="css/normalize.css">
			<link rel="stylesheet" type="text/css" href="css/demo.css">
			<link rel="stylesheet" type="text/css" href="css/icons.css">
			<link rel="stylesheet" type="text/css" href="css/component.css">
			<link rel="stylesheet" type="text/css" href="css/vetStyle.css">
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
							<h1>BiLa</h1>
							<p>Bitasyon Lakay</p>
						</div>
						</header>
						<h1 style="margin:auto;">A Propos</h1>
						<section class="block block-40 txt">
							<div class="content clearfix ">
									<p>
										Lè koze Kita Nago sa a te koumanse pale nan mwa Sektanm 2012 la, gen anpil moun ki te panse li pa tap rive fèt. Poutan, nan 27 jou nou te rive travèse peyi a, soti Lèziwa rive Wanament. Nou mache 738 kilomèt apye. Sou wout la, plis pase twa milyon (3 000 000) konpatriyòt te rive mete men nan men, kole zepòl ak zepòl, pote gwo pyès bwa 500 kilo a: Kita Nago. Plis pase yon milyon kat san mil (1 400 000) moun te suiv Kita Nago sou planèt tè a, pandan tout pakou a sou fesbouk ak lòt rezo sosyal yo.
									</p>
									<p>
										Apre Kita Nago te rive Wanament, anpil moun ap poze tèt yo kesyon: ki sa Kita Nago ka itil peyi a? 27 Janvye 2013 se te premye etap la. Kita Nago rafrechi memwa nou, li fè nou sonje, nou se yon pèp vanyan ki deja make listwa limanite nan bon sans. Gran jou sa nan Wanament fè nou wè: lè nou mete tèt ansanm nou kapab fè bèl mèvèy sou latè beni. Kita Nago se yon modèl viv ansanm ki bay deviz nou an plis jarèt: <strong>MEN ANPIL CHAY PA LOU</strong>. Modèl sa kapab aplike nan tout domèn lavi sosyal la..
									</p>
							</div>
						</section>

						<section class="block block-60 vetImg txt">
							<br /><br /><br /><br />
							<img src="img/vet.jpg" /><br />

							<p>
								Jodi a, nap prezante nou BiLa Bitasyon Lakay,  yon espas kap pèmèt Ayisyen sou planèt tè a rive fè Kita Nago itil tout bon vre, lè nap patisipe ak konsyans nou, ak lanmou nou pou peyi nou nan rive fè pa Kita pa Nago, nan achte chak ane pwodui ki fèt lakay pou pi piti twa san 300.00 dola ameriken ki vo kenz mil goud 15 000.00.  Sa se wòch pa nou nan konstriksyon peyi nou Ayiti cheri nou tout reve a.
							</p>
							<p>
								Depi lontan, anpil Ayisyen ki deyò peyi a ap chache kouman yo kapab itil li pi byen toujou. Yo travay di san pran souf, yo rive voye plis depase 2 milya dola vèt nan peyi a chak ane. Montan lajan Ayiti poko janmen jwenn prete, alewè se ta don, nan men peyi ni bank sou latè nan yon lane. Gwo magogo sa a, pase tankou lafimen nan peyi a. Pi fò depanse nan achte manje, rad, ale lopital, peye lekòl, lwaye kay, fè maryaj, kominyon, antèman… Se prèske sou fòm sa tranzaksyon sa yo toujou fèt, pafwa tou, yon ti kraze monnen ka ale nan fè jaden oswa konsome kèk pwodui lokal. Fanmiy lòt bò dlo yo, ankouraje, toujou kontinye sipòte lòt yo nan peyi a jan nou kapab.
							</p>
							<p>
								Sipò dyaspora a itil anpil, men lajan sa yo poko jwenn bon jan chimen ki pèmèt sipòte ekonomi an. Sa vle di malgre tout bon volonte nap swen djondjon pou lagon, nou gen lontan se tankou nap charye dlo nan panyen banbou.  Nap ankouraje nou fwa sa a, fè yon lòt aksyon, achte pwodui lakay pou w sèvi pandan w deyò peyi a. Fanm kon gason achte: sandal, valiz (gason, fiy), soulye, sentiwon, bous, rad (bwode, penti), chemiz (bwode, penti), pantalon, nap bwode, dra bwode, sak zorye bwode, soupla, pòt kle, pòch linèt, pòch telefòn, bijou…
							</p>
							<p>
								Rale chèz ba w chita, fè yon ti kalkil tou kout epi senp. Achte pandan yon ane, pou pi piti twa san (300.00) dola ameriken ki vo kenz mil goud (15 000.00), depi nou chak dakò pou depanse lajan sa a chak ane nan achte bagay ki fèt an Ayiti epi yon milyon rive fè sa, se twa san (300 000 000.00) milyon dola vèt ki se kenz milya (15 000 000 000.00) goud kap rive antre nan ekonomi peyi a. Konsa, nap mete anvalè metye kap disparèt yo. Lajan sa a ap antre dirèk dirèk nan pòch pwodiktè yo.
							</p>
						</section>

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
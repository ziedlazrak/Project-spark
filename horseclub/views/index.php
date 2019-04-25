"<?PHP
require "../config.php";
require "../core/lib-rating.php";
$rate = new Ratings();
?>	

	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Les Ecuries de Mornag PHP</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 

		 <link href="css/theme.css" rel="stylesheet">
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">					
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">	
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/main.css">

		</head>
		<body>
			  <header id="header" id="home">
			    <div class="container">
			    	<div class="row header-top align-items-center">
			    		<div class="col-lg-4 col-sm-4 menu-top-left">
			    			<a href="mailto:info@horseclub.com"><span class="lnr lnr-location"></span></a>
			    			<a class="tel" href="mailto:info@horseclub.com">Lesecuriesdemornag@gmail.com</a>
			    		</div>
			    		<div class="col-lg-4 menu-top-middle justify-content-center d-flex">
							<a href="index.html">
								<img class="img-fluid" style="height: 100px;border-radius: 50%;" src="img/club.jpg" alt="">	
							</a>			    			
			    		</div>
			    		<div class="col-lg-4 col-sm-4 menu-top-right">
			    			<a class="tel" href="tel:+880 123 12 658 439">56 141 812</a>
			    			<a href="tel:+880 123 12 658 439"><span class="lnr lnr-phone-handset"></span></a>
			    		</div>
			    	</div>
			    </div>	
			    	<hr>
			    <div class="container">	
			    	<div class="row align-items-center justify-content-center d-flex">
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="menu-active"><a href="index.html">Home</a></li>
				          <li><a href="about.html">A Propos</a></li>
				          <li><a href="service.html">Service</a></li>				          
				          <li><a href="training.html">entraînement</a></li>
				          <li><a href="events.html">événements</a></li>
				          <li><a href="pricing.html">Abonnements</a></li>
				          <li class="menu-has-children"><a href="">Evenements</a>
				            <ul>
				              <li><a href="blog-home.html">Brunch</a></li>
				              <li><a href="blog-single.html">sorties organisées</a></li>
				            </ul>
				          </li>
				          <li><a href="contact.html">Contact</a></li>
				          <!--<li><a href="elements.html">Elements</a></li>-->
				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header><!-- #header -->

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row fullscreen d-flex align-items-center justify-content-start">
						<div class="banner-content col-lg-12">
							<h6>Notre rêve notre histoire</h6>
							<span class="bar"></span>
							<h1 class="text-white">
								Inter relation <br>
								Entre cheval et cavalier
							</h1>
							<a href="../../views/login.php" class="genric-btn">S'inscrire</a>
						</div>
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

			<!-- Start about-video Area -->
			<section class="about-video-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 about-video-left">
							<h6 class="text-uppercase">LES ÉCURIES DE MORNAG</h6>
							<h1>
								Notre rêve notre histoire <br>
							</h1>
							<p>
								<span>Les écuries de Mornag est un club équestre en pleine <br>
								nature des vergers de Mornag </span>
							</p>
							<p>
								Il est situé à quelques kilomètres de la banlieue Sud.
							</p>
							<p>
								Nous ouvrons nos portes pour toute personne voulant pratiquer cette passion…. Le sport équestre !!!!
							</p>
								
							<p>
								Soyez les bienvenus
							</p>						
							<a class="primary-btn" href="#">Commencer</a>
						</div>
						<div class="col-lg-6 about-video-right justify-content-center align-items-center d-flex">
							<a class="play-btn" href="https://www.youtube.com/watch?v=ARA0AxrnHdM"><img class="img-fluid mx-auto" src="img/play.png" alt=""></a>
						</div>
					</div>
				</div>	
			</section>
			<!-- End about-video Area -->
			
			<!-- Start feature Area -->
			<section class="feature-area relative pt-100 pb-20">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row align-items-center justify-content-center">
						<div class="col-lg-4 col-md-6">
							<div class="single-feature">
								<a href="#"><h4 class="text-white">Sports équestres</h4></a>
								<p>
									Les sports équestres regroupent toutes les disciplines équestres sportives . Certaines, généralement gérées par la fédération équestre internationale, ont une portée internationale et sont représentées aux Jeux olympiques et aux Jeux équestres mondiaux.
								</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-feature">
								<a href="#"><h4 class="text-white">Disciplines</h4></a>
								<p>
									Les Jeux olympiques comptent actuellement trois disciplines, le saut d'obstacles, le dressage et le concours complet. La voltige en cercle a été représentée en 1920.
								</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-feature">
								<a href="#"><h4 class="text-white">Saut d'obstacles</h4></a>
								<p>
									En saut d'obstacles, le cavalier et sa monture sautent des obstacles construits avec des barres mobiles. Ses aspects ludiques et spectaculaires ainsi que la simplicité de ses règles rendent ce sport attrayant, et expliquent en grande partie son succès. Le saut d'obstacles est le sport équestre le plus pratiqué dans le monde.
								</p>
							</div>
						</div>	
						<div class="col-lg-4 col-md-6">
							<div class="single-feature">
								<a href="#"><h4 class="text-white">Dressage</h4></a>
								<p>
									Le dressage est théoriquement l'aboutissement du mythe du centaure, ne faire qu'un avec sa monture. Le cavalier doit y rechercher l'harmonie avec son cheval, le but premier étant de rendre les chevaux agréables dans leur spécialité.
								</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-feature">
								<a href="#"><h4 class="text-white">Le Concours Complet</h4></a>
								<p>
									Le concours complet, ou CCE, ne se pratique qu'en concours. Avant 2004, il regroupait toujours une épreuve de dressage, un routier, un steeple-chase, un cross et un hippique, épreuve de saut d'obstacles spécifique au complet.
								</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-feature">
								<a href="#"><h4 class="text-white">L'endurance</h4></a>
								<p>
									L'endurance vise à tester l'endurance du cheval sur de longues distances, jusqu'à 160 km, sans limitation de vitesse. Le cavalier doit gérer l'effort demandé à la monture sur toute la distance.
								</p>
							</div>
						</div>																		
					</div>
				</div>	
			</section>
			<!-- End feature Area -->
			
			<!-- Start home-about Area -->
			<section class="home-about-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 home-about-left">
							<img class="mx-auto d-block img-fluid" src="img/about-img.png" alt="">
						</div>
						<div class="col-lg-6 home-about-right">
							<h6 class="text-uppercase">LES ÉCURIES DE MORNAG</h6>
							<br>
							<br>
							<h1>Le Cavalier du mois</h1>
							<p>
								<span>We are here to listen from you deliver exellence</span>
							</p>
							<p>
								Le cavalier professionnel vit de sa passion pour les chevaux de différentes manières : il peut être sportif professionnel, dresseur et montreur, professeur d’équitation, jockey ou animateur touristique.
								on a l'habitude de choisir le cavalier du mois vis a vis aux evaluations du coach,sa relation avec ses coequipiers et son comportement.
							</p>
							<a class="primary-btn" href="#">Decouvrez le cavalier du mois</a>
						</div>
					</div>
				</div>	
			</section>
			<!-- End home-about Area -->

		
			<!-- Start price Area -->
			<section class="price-area section-gap">
				<div class="container">

					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Choisissez le meilleur plan qui vous convient</h1>
							</div>
						</div>
					</div>	

					<div class="row">


		<?PHP
		include "../core/abonnementC.php";
		$abonnement1C=new abonnementC();
		$listeabonnements=$abonnement1C->afficherabonnements();
		foreach($listeabonnements as $row){
	?>
<div class="col-lg-3 col-md-6">

							<div class="single-price">

								<div class="top-part">

									<h1 class="package-no"></h1>

									<h4><?PHP echo $row['duree']." Mois"; ?></h4>
									
								</div>

								<div class="package-list">
									<ul>
										<li><?PHP echo $row['descr']; ?></li>

									</ul>
								</div>

								<div class="bottom-part">
									<h1><?PHP echo $row['prix']."DT"; ?></h1>

									<a class="price-btn text-uppercase" href="#">Purchase</a>
								</div>								
							</div>
						</div>
	<?PHP
}
	?>


																
					</div>
				</div>	
			</section>
			<!-- End price Area -->
<br>
<br>
<br>	
			<!-- Start gallery Area -->
			<section class="gallery-area">
				<div class="container-fluid">
					<div class="row no-padding">
						<div class="active-gallery">
							<div class="item single-gallery">
							    <div class="thumb">
							        <img src="img/g1.jpg" alt="">
							        <div class="align-items-center justify-content-center d-flex">
							        </div>
							    </div>
							</div>	
							<div class="item single-gallery">
							    <div class="thumb">
							        <img src="img/g2.jpg" alt="">
							        <div class="align-items-center justify-content-center d-flex">
							        </div>
							    </div>
							</div>	
							<div class="item single-gallery">
							    <div class="thumb">
							        <img src="img/g3.jpg" alt="">
							        <div class="align-items-center justify-content-center d-flex">
							        </div>
							    </div>
							</div>	
							<div class="item single-gallery">
							    <div class="thumb">
							        <img src="img/g4.jpg" alt="">
							        <div class="align-items-center justify-content-center d-flex">
							        </div>
							    </div>
							</div>	
							<div class="item single-gallery">
							    <div class="thumb">
							        <img src="img/g5.jpg" alt="">
							        <div class="align-items-center justify-content-center d-flex">
							        </div>
							    </div>
							</div>	
							<div class="item single-gallery">
							    <div class="thumb">
							        <img src="img/g6.jpg" alt="">
							        <div class="align-items-center justify-content-center d-flex">
							        </div>
							    </div>
							</div>								

						</div>
					</div>
				</div>	
			</section>
			<!-- End gallery Area -->
<br>
<br>
<br>
			<!-- Start booking Area -->
			<section class="booking-area section-gap relative" id="consultancy">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row justify-content-between align-items-center">
						<div class="col-lg-6 col-md-6 booking-left">
							<div class="active-review-carusel">





		<?PHP
		include "../core/ratingC.php";
		$rating1C=new ratingC();
		$listeratings=$rating1C->afficherratings();
		foreach($listeratings as $row){
	?>
<div class='single-carusel'>
									<img src='img/r1.png' alt=''>
									<div class='title justify-content-start d-flex'>
										<h6 style="color: #fff;"><?PHP echo $row['categorie']?></h6>
										<h4><?PHP echo $row['mail']; ?></h4>
	
										<?PHP
										if ($row['rate']==1) {
										printf("<div class='star'>
											<span class='fa fa-star checked'></span>
											<span class='fa fa-star'></span>
											<span class='fa fa-star'></span>
											<span class='fa fa-star'></span>
											<span class='fa fa-star'></span>
												</div>");
										}
										else if ($row['rate']==2) {
										printf("<div class='star'>
											<span class='fa fa-star checked'></span>
											<span class='fa fa-star checked '></span>
											<span class='fa fa-star '></span>
											<span class='fa fa-star'></span>
											<span class='fa fa-star'></span>
												</div>");
										}else if ($row['rate']==3) {
												printf("<div class='star'>
											<span class='fa fa-star checked'></span>
											<span class='fa fa-star checked '></span>
											<span class='fa fa-star checked '></span>
											<span class='fa fa-star'></span>
											<span class='fa fa-star'></span>
												</div>");
										}else if ($row['rate']==4) {
												printf("<div class='star'>
											<span class='fa fa-star checked'></span>
											<span class='fa fa-star checked '></span>
											<span class='fa fa-star checked '></span>
											<span class='fa fa-star checked'></span>
											<span class='fa fa-star'></span>
												</div>");
										}
										else if ($row['rate']==5) {
												printf("<div class='star'>
											<span class='fa fa-star checked'></span>
											<span class='fa fa-star checked '></span>
											<span class='fa fa-star checked '></span>
											<span class='fa fa-star checked'></span>
											<span class='fa fa-star checked'></span>
												</div>");
										}

										?>
									</div>
									<p><?PHP echo $row['message']; ?></p>
									<form method="POST" action="supprimerrating.php">
                    				<input style="background: none;color: #777777;border-radius: 5px;" type="submit" name="supprimer" value="supprimer" >
                    				<input type="hidden" value="<?PHP echo $row['id_rating']; ?>" name="id_rating">
                    				
                  </form>

									
</div>
	<?PHP
}
	?>

<!--

							<div class="single-price">

								<div class="top-part">

									<h1 class="package-no"></h1>

									<h4><?PHP echo $row['duree']." Mois"; ?></h4>
									
								</div>

								<div class="package-list">
									<ul>
										<li><?PHP echo $row['descr']; ?></li>

									</ul>
								</div>

								<div class="bottom-part">
									<h1><?PHP echo $row['prix']."DT"; ?></h1>

									<a class="price-btn text-uppercase" href="#">Purchase</a>
								</div>								
							</div>
						</div>
-->

							</div>
						</div>
						<div class="col-lg-4 col-md-6 booking-right">
								<h4 class="mb-20" style="text-align: center;">Donnez votre Avis</h4>

								<form method="POST" action="../back/cours.html">
									<input type="hidden" name="id_rating">
									
									<textarea rows="1" class="common-textarea form-control mt-5" id="mail" name="mail" placeholder="Adresse mail" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Adresse mail'"></textarea>

										<div class="input-group">
											  <select id="categorie" name="categorie" class="custom-select" id="inputGroupSelect04" aria-label="Example select with button addon" >
												    <option selected>Choisir...</option>
												    <option value="Cours">Cours</option>
												    <option value="Coach">Coach</option>
												    <option value="Sorties">Sorties</option>
												    <option value="Evenements">Evenements</option>
											  </select>

										</div>
										<br>

									
										
									<textarea rows="4" class="common-textarea form-control mt-10" id="message" name="message" placeholder="Message" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Message'"></textarea>
									<br>
										<div style="text-align: center;" id="rating">	


											      <?php
											      for ($i=0; $i<5; $i++) {
											        printf("<div class='stars' onmouseover='rating.highlight(%u)' onclick='rating.save(%u)'></div>", $i+1, $i+1);
											      }
											      ?>
										</div>
								</form>

						</div>
					</div>
				</div>	
			</section>
			<!-- End booking Area -->


<!--***********************************************************************************-->
			<!-- Start latest-blog Area 
			<section class="latest-blog-area section-gap" id="blog">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Latest News from our Blog</h1>
								<p>Who are in extremely love with eco friendly system.</p>
							</div>
						</div>
					</div>					
					<div class="row">
						<div class="col-lg-6 single-blog">
							<img class="img-fluid" src="img/b1.jpg" alt="">
							<ul class="tags">
								<li><a href="#">Travel</a></li>
								<li><a href="#">Life style</a></li>
							</ul>
							<a href="#"><h4>Portable latest Fashion for young women</h4></a>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore.
							</p>
							<p class="post-date">31st January, 2018</p>
						</div>
						<div class="col-lg-6 single-blog">
							<img class="img-fluid" src="img/b2.jpg" alt="">
							<ul class="tags">
								<li><a href="#">Travel</a></li>
								<li><a href="#">Life style</a></li>
							</ul>
							<a href="#"><h4>Portable latest Fashion for young women</h4></a>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore.
							</p>
							<p class="post-date">31st January, 2018</p>
						</div>						
					</div>
				</div>	
			</section>
			End latest-blog Area -->		
<!--***********************************************************************************-->


			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-3  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h4>A Propos</h4>
								<p>
									Nous ouvrons nos portes pour toute personne voulant pratiquer cette passion…. Le sport équestre !!!!
								</p>
							</div>
						</div>
						<div class="col-lg-4  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h4>Contactez Nous</h4>
								<p>
									vous pouvez nous contacter a travers réseaux sociaux 
									facebook.com/lesecuriesdemorneg/ 
								</p>
								<p class="number">
									56 141 812									
								</p>
							</div>
						</div>						
						<div class="col-lg-5  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h4>Newsletter</h4>
								<p>You can trust us. we only send  offers, not a single spam.</p>
								<div class="d-flex flex-row" id="mc_embed_signup">


									  <form class="navbar-form" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get">
									    <div class="input-group add-on align-items-center d-flex">
									      	<input class="form-control" name="EMAIL" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required="" type="email">
											<div style="position: absolute; left: -5000px;">
												<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
											</div>
									      <div class="input-group-btn">
									        <button class="genric-btn"><span class="lnr lnr-arrow-right"></span></button>
									      </div>
									    </div>
									      <div class="info mt-20"></div>									    
									  </form>
								</div>
							</div>
						</div>						
					</div>
					<div class="footer-bottom row">
						<p class="footer-text m-0 col-lg-6 col-md-12">

						</p>
						<div class="footer-social col-lg-6 col-md-12">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
			</footer>	
			<!-- End footer Area -->

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>			
			<script src="js/jquery.sticky.js"></script>
			<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>				
			<script src="js/jquery.nice-select.min.js"></script>			
			<script src="js/parallax.min.js"></script>	
			<script src="js/waypoints.min.js"></script>
			<script src="js/jquery.counterup.min.js"></script>			
			<script src="js/mail-script.js"></script>	
			<script src="js/rating.js"></script>
			<script src="js/main.js"></script>	
		</body>
	</html>




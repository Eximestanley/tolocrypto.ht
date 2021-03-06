<?php
// simple PHP start at the top of the page since i start a session
session_name('mysite_hit_counter');
session_start();

$store_file_data = 'total_save_domain_name_hits_counter.txt';
$live_hit_count = 0;
// here online read current hits
if (($live_hit_count = file_get_contents($store_file_data)) === false)
{
	$live_hit_count = 0;
}
// here simple write one more hit
if (!isset($_SESSION['page_visited_already']))
{
	if (($fp = @fopen($store_file_data, 'w')) !== false)
	{
		if (flock($fp, LOCK_EX))
		{
			$live_hit_count++;
			fwrite($fp, $live_hit_count, strlen($live_hit_count));
			flock($fp, LOCK_UN);
			$_SESSION['page_visited_already'] = 1;
		}
		fclose($fp);
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Cryptocurrency - Tolocrypto</title>
	<meta charset="UTF-8">
	<meta name="description" content="Cryptocurrency ToloCrypto is the best plateform.">
	<meta name="keywords" content="cryptocurrency, unica, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <meta http-equiv="content-type" content="text/html; charset=utf-8" />  
	<meta name="keywords" content="Slider, Hi Slider, Simple HTML5 Slideshow, Free js slider" />
	<meta name="description" content="Slider created with Hi Slider which enable you to publish responsive jQuery image slideshows, seamless WordPress slider plugins, amazing website sliding banners and fancy JavaScript slideshow presentation" />     
  

	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/themify-icons.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style.css"/>
 
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	 <style>
  	html,body{height:100%; margin:0px;}	
  </style> 

</head>
<body style="background-color:#dddddd;>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section clearfix">
		<div class="container-fluid">
			<a href="index.php" class="site-logo">
			<strong style='color:blue !important;'> TOLO</strong>
				<img src="img/logo.png" alt="">
			</a>
			<div class="responsive-bar"><i class="fa fa-bars"></i></div>
			<nav class="main-menu">
				<ul class="menu-list">
					<li><a href="index.php">Home</a></li>
					<li><a href="Exchange.html">Exchange</a></li>
					<li><a href="Topup.html">TopUp International</a></li>
					<li><a href="Transfert.html">Transfert</a></li>
					<li><a href="Contact.html">Contact</a></li>
				</ul>
			</nav>
		</div>
		
		
					<div style="height:40px; background-color: #FFFFFF; overflow:hidden; box-sizing: border-box; border: 1px solid #56667F; border-radius: 4px; text-align: right; line-height:14px; block-size:62px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #56667F;padding:1px;padding: 0px; margin: 0px; width: 100%;"><div style="height:40px; padding:0px; margin:0px; width: 100%;"><iframe src="https://widget.coinlib.io/widget?type=horizontal_v2&theme=light&pref_coin_id=1505&invert_hover=" width="100%" height="36px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe></div><div style="color: #FFFFFF; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;"><a href="https://coinlib.io" target="_blank" style="font-weight: 500; color: #FFFFFF; text-decoration:none; font-size:11px">Prix Criptomonnaie</a>&nbsp;par Tolocrypto</div></div>
	<p align="center">
					 	
							<a align="left" href="topup.html">
								<img alt="Qries" src="img/download.png" width="200&quot;" height="100">
		      		</a>	
					
						<a align="center" href="Exchange.html">
								<img alt="Qries" src="img/bit1.jpg" width="200&quot;" height="100">
								
			
	
		      		</a>	
					
 <a  ><img src="img/buyer2.webp" width="180&quot;" height="100"> </img></a>

							<a >ToloCrypto-P2P ACHETEURS: <span ><?=$live_hit_count;?></span> </a>
                    
	
</div>      
						
			    </p>
	
	</header>
	<!-- Header section end -->


	<!-- Hero section -->
	<section class="hero-section">
	
		
					

		<div class="container">
	
		 	
				
		
			<div class="row">
			
		
				
			
			
			
				<div class="col-md-6 hero-text">
				
			
				
      <!----end------Insert to your webpage where you want to display the slider-->
  
					
				</div>
				
				
				<div class="col-md-6">
				
       
					
					
      <!----end------Insert to your webpage where you want to display the slider-->
  
				
					
					
				
					
				</div>
			
			
			
			</div>
			
		</div>
				
	</section>
		
		
	<!-- Hero section end -->
</div>
			
 </div>
 <p><div style="clear:both;height:104px;width:300px"></div>
	<!----begin------Insert to your webpage where you want to display the slider-->
      <div id='hislider1' style=" max-width:1000px;  max-height:400px;height:100%; margin: 0 auto;">
        	
        	<noscript>The slider is powered by <strong>Hi Slider</strong>, a easy jQuery image slider from <a target="_blank" href="hislider.com">hislider.com</a>. Please enable JavaScript to view.</noscript><div class="hi-about-text" style="display:none">This jQuery slider was created with the free <a style="color:#FFF;" href="http://hislider.com" target="_blank">Hi Slider</a> for WordPress plugin,Joomla & Drupal Module from hislider.com.<br /><br /><a style="color:#FFF;" href="#" class="hi-about-ok">OK</a></div><div class="hi-slider-watermark"  style="display:none"><a href="http://hislider.com" target="_blank">hislider.com</a></div>
        </div></p>
	<!-- About section -->
	<section class="about-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-6 about-text">
					<h2>Qu'est-ce que le bitcoin</h2>
					<h5>Bitcoin est un r??seau de paiement innovant et un nouveau type de monnaie.</h5>
					<p>Le bitcoin est l'une des inventions les plus importantes de toute l'histoire de l'humanit??. Pour la toute premi??re fois, n'importe qui peut envoyer ou recevoir n'importe quelle somme d'argent avec n'importe qui d'autre, n'importe o?? sur la plan??te, facilement et sans restriction. C'est l'aube d'un monde meilleur et plus libre.</p>
					<a href="" class="site-btn sb-gradients sbg-line mt-5">Commencer</a>
				</div>
			</div>
			<div class="about-img">
				<img src="img/about-img.png" alt="">
			</div>
		</div>
	</section>
	<!-- About section end -->
	
	<div style="clear:both;height:20px;width:100%"></div>
	
					<script  type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>

<div class="thirds-row">
<script type="text/javascript">
new TradingView.widget({
	"container_id": 'technical-analysis',
	"width": 400,
	"height": 400,
  "symbol": "BITSTAMP:BTCUSD",
	"interval": "D",
	"timezone": "exchange",
	"theme": "White",
	"style": "1",
	"toolbar_bg": "#f1f3f6",
	"withdateranges": true,
	"hide_side_toolbar": false,
	"allow_symbol_change": true,
	"save_image": false,
	"hideideas": true,
	"studies": [ "ROC@tv-basicstudies",
	"StochasticRSI@tv-basicstudies",
	"MASimple@tv-basicstudies" ],
	"show_popup_button": true,
	"popup_width": "1000",
	"popup_height": "650"
});
</script>
</div>
	<!----begin------Insert to your webpage where you want to display the slider-->
        <div id='hislider1' style=" max-width:900px;  max-height:100px;height:100%; margin: 0 auto;">
        	        
        	<noscript>The slider is powered by <strong>Hi Slider</strong>, a easy jQuery image slider from <a target="_blank" href="hislider.com">hislider.com</a>. Please enable JavaScript to view.</noscript><div class="hi-about-text" style="display:none">This jQuery slider was created with the free <a style="color:#FFF;" href="http://hislider.com" target="_blank">Hi Slider</a> for WordPress plugin,Joomla & Drupal Module from hislider.com.<br /><br /><a style="color:#FFF;" href="#" class="hi-about-ok">OK</a></div><div class="hi-slider-watermark"  style="display:none"><a href="http://hislider.com" target="_blank">hislider.com</a></div>

		</div>
      <!----end------Insert to your webpage where you want to display the slider-->
  

	<!-- Features section -->
	<section class="features-section spad gradient-bg">
		<div class="container text-white">
			<div class="section-title text-center">
				<h2>Nos fonctionnalit??s</h2>
				<p>Bitcoin est le moyen le plus simple d'??changer de l'argent ?? tr??s faible co??t.</p>
			</div>
			<div class="row">
				<!-- feature -->
				<div class="col-md-6 col-lg-4 feature">
					<i class="ti-mobile"></i>
					<div class="feature-content">
						<h4>Application mobile</h4>
						<p>Une application mobile, plus commun??ment appel??e application, est un type de logiciel d'application con??u pour s'ex??cuter sur un appareil mobile, tel qu'un smartphone ou une tablette.. </p>
						<a href="" class="readmore">Lire la suite</a>
					</div>
				</div>
				<!-- feature -->
				<div class="col-md-6 col-lg-4 feature">
					<i class="ti-shield"></i>
					<div class="feature-content">
						<h4>Coffre-fort s??curis??</h4>
						<p>Coffre m??tallique destin?? ?? recevoir de l'argent, des objets pr??cieux... </p>
						<a href="" class="readmore">Lire la suite</a>
					</div>
				</div>
				<!-- feature -->
				<div class="col-md-6 col-lg-4 feature">
					<i class="ti-wallet"></i>
					<div class="feature-content">
						<h4>Wallet</h4>
						<p>Compte de portefeuille signifie et se r??f??re ?? un instrument de paiement pr??pay?? sous la forme d'un compte de coffre-fort ??lectronique cr???? par l'utilisateur via l'utilisation des services de Zipcash Card Services Private Limited. </p>
						<a href="" class="readmore">Lire la suite</a>
					</div>
				</div>
				<!-- feature -->
				<div class="col-md-6 col-lg-4 feature">
					<i class="ti-headphone-alt"></i>
					<div class="feature-content">
						<h4>Assistance d'experts</h4>
						<p>Notre entreprise, compos??e d'experts, vous propose ses conseils pour une assistance ?? expertise .  </p>
						<a href="" class="readmore">Lire la suite</a>
					</div>
				</div>
				<!-- feature -->
				<div class="col-md-6 col-lg-4 feature">
					<i class="ti-reload"></i>
					<div class="feature-content">
						<h4>??change instantan??</h4>
						<p>Nous chez Tolocrypto nous faisons des transferts Instantanement 24/7. </p>
						<a href="" class="readmore">Lire la suite</a>
					</div>
				</div>
				<!-- feature -->
				<div class="col-md-6 col-lg-4 feature">
					<i class="ti-panel"></i>
					<div class="feature-content">
						<h4>Achats r??currents</h4>
						<p>D??couvrez l'ensemble de nos ressources num??riques ?? Achats-recurrents ?? mises ?? disposition de la fonction publique. </p>
						<a href="" class="readmore">Lire la suite</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Features section end -->
		


	<!-- Process section -->
	<section class="process-section spad">
		<div class="container">
			<div class="section-title text-center">
				<h2>Commencez avec Bitcoin</h2>
				<p>Commencez ?? en apprendre davantage sur Bitcoin avec des didacticiels interactifs. C'est amusant, facile et ne prend que quelques minutes ! </p>
			</div>
			<div class="row">
				<div class="col-md-4 process">
					<div class="process-step">
						<figure class="process-icon">
							<img src="img/process-icons/1.png" alt="#">
						</figure>
						<h4>Cr??e votre Wallet</h4>
						<p>Wallet pour crypto-monnaie : les meilleurs portefeuilles Bitcoin. </p>
					</div>
				</div>
				<div class="col-md-4 process">
					<div class="process-step">
						<figure class="process-icon">
							<img src="img/process-icons/2.png" alt="#">
						</figure>
						<h4>Wallet pour crypto-monnaie : Coinbase , Tust wallet etc...</h4>
						<p>. </p>
					</div>
				</div>
				<div class="col-md-4 process">
					<div class="process-step">
						<figure class="process-icon">
							<img src="img/process-icons/3.png" alt="#">
						</figure>
						<h4>Cr??e votre Wallet avec Nous.</h4>
						<p>Wallet pour crypto-monnaie :Tolocrypto Wallet. </p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Process section end -->


	<!-- Fact section -->
	<section class="fact-section gradient-bg">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-6 col-lg-3">
					<div class="fact">
						<h2>50</h2>
						<p>Pays  <br> d'assistance</p>
						<i class="ti-basketball"></i>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-3">
					<div class="fact">
						<h2>9K</h2>
						<p>Transactions  <br> par heure</p>
						<i class="ti-panel"></i>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-3">
					<div class="fact">
						<h2>5B</h2>
						<p>Transactions <br>  les plus importantes</p>
						<i class="ti-stats-up"></i>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-3">
					<div class="fact">
						<h2>240</h2>
						<p>Des ann??es  <br> d'exp??rience</p>
						<i class="ti-user"></i>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Fact section end -->


	<!-- Team section -->
	<section class="team-section spad">
		<div class="container">
			<div class="section-title text-center">
				<h2>Rencontrez notre ??quipe</h2>
				<p>Nos experts dans le domaine de la crypto-monnaie peuvent toujours vous aider avec n'importe laquelle de vos questions !</p>
			</div>
		</div>
		<div class="team-members clearfix">
			<!-- Team member -->
			<div class="member">
				<div class="member-text">
					<div class="member-img set-bg" data-setbg="img/member/1.jpg"></div>
					<h2>EXIME STANLEY</h2>
					<span>D??veloppement des affaires</span>
				</div>
				<div class="member-social">
					<a href=""><i class="fa fa-facebook"></i></a>
					<a href=""><i class="fa fa-linkedin"></i></a>
					<a href=""><i class="fa fa-twitter"></i></a>
				</div>
				<div class="member-info">
					<div class="member-img mf set-bg" data-setbg="img/member/1.jpg"></div>
					<div class="member-meta">
						<h2>EXIME STANLEY</h2>
						<span>Directeur marketing</span>
					</div>
					<p>EXIME STANLEY est membre ?? temps plein du corps professoral de la division des sciences du marketing et du comportement de la Mister Matrix Groupe Hack. Il dirige le groupe d'entrepreneuriat, dans les programmes de premier cycle et des cycles sup??rieurs, enseignant activement dans ces deux programmes.</p>
				</div>
			</div>
			<!-- Team member -->
			<div class="member">
				<div class="member-text">
					<div class="member-img set-bg" data-setbg="img/member/2.jpg"></div>
					<h2>EXIME STANLEY</h2>
					<span>D??veloppement des affaires</span>
				</div>
				<div class="member-social">
					<a href=""><i class="fa fa-facebook"></i></a>
					<a href=""><i class="fa fa-linkedin"></i></a>
					<a href=""><i class="fa fa-twitter"></i></a>
				</div>
				<div class="member-info">
					<div class="member-img mf set-bg" data-setbg="img/member/2.jpg"></div>
					<div class="member-meta">
						<h2>EXIME STANLEY</h2>
						<span>Directeur marketing</span>
					</div>
					<p>EXIME STANLEY est membre ?? temps plein du corps professoral de la division des sciences du marketing et du comportement de la Mister Matrix Groupe Hack. Il dirige le groupe d'entrepreneuriat, dans les programmes de premier cycle et des cycles sup??rieurs, enseignant activement dans ces deux programmes.</p>
				</div>
			</div>
			<!-- Team member -->
			<div class="member">
				<div class="member-text">
					<div class="member-img set-bg" data-setbg="img/member/3.jpg"></div>
					<h2>EXIME STANLEY</h2>
					<span>D??veloppement des affaires</span>
				</div>
				<div class="member-social">
					<a href=""><i class="fa fa-facebook"></i></a>
					<a href=""><i class="fa fa-linkedin"></i></a>
					<a href=""><i class="fa fa-twitter"></i></a>
				</div>
				<div class="member-info">
					<div class="member-img mf set-bg" data-setbg="img/member/3.jpg"></div>
					<div class="member-meta">
						<h2>Chery Francisco</h2>
						<span>Ceo Bitcoin</span>
					</div>
					<p>Chery Francisco est membre ?? temps plein du corps professoral de la division des sciences du marketing et du comportement de la Mister Matrix Groupe Hack.</p>
				</div>
			</div>
			<!-- Team member -->
			<div class="member">
				<div class="member-text">
					<div class="member-img set-bg" data-setbg="img/member/4.jpg"></div>
					<h2>Thiophile Mackenley</h2>
					<span>Product Manager</span>
				</div>
				<div class="member-social">
					<a href=""><i class="fa fa-facebook"></i></a>
					<a href=""><i class="fa fa-linkedin"></i></a>
					<a href=""><i class="fa fa-twitter"></i></a>
				</div>
				<div class="member-info">
					<div class="member-img mf set-bg" data-setbg="img/member/4.jpg"></div>
					<div class="member-meta">
						<h2>Rose Frais</h2>
						<span>Chef de produit</span>
					</div>
					<p>Rose Frais est membre de Mister matrix Group Application.</p>
				</div>
			</div>
			<!-- Team member -->
			<div class="member">
				<div class="member-text">
					<div class="member-img set-bg" data-setbg="img/member/5.jpg"></div>
					<h2>Stanley Exime</h2>
					<span>Responsable de la conception</span>
				</div>
				<div class="member-social">
					<a href=""><i class="fa fa-facebook"></i></a>
					<a href=""><i class="fa fa-linkedin"></i></a>
					<a href=""><i class="fa fa-twitter"></i></a>
				</div>
				<div class="member-info">
					<div class="member-img mf set-bg" data-setbg="img/member/5.jpg"></div>
					<div class="member-meta">
						<h2>Vital Louisilia</h2>
						<span>Responsable de la conception</span>
					</div>
					<p>Vital Louisilia est membre de Mister matrix Group Application.</p>
				</div>
			</div>
		</div>
	</section>
	<!-- Team section -->


	<!-- Review section -->
	<section class="review-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 push-8">
					<img src="img/quote.png" alt="" class="quote mb-5">
					<div class="review-text-slider owl-carousel">
						<div class="review-text">
							<p>"Bitcoin is exciting because it shows how cheap it can be. Bitcoin is better than currency in that you don???t have to be physically in the same place and, of course, for large transactions, currency can get pretty inconvenient.???</p>
						</div>
						<div class="review-text">
							<p>"Bitcoin is exciting because it shows how cheap it can be. Bitcoin is better than currency in that you don???t have to be physically in the same place and, of course, for large transactions, currency can get pretty inconvenient.???</p>
						</div>
						<div class="review-text">
							<p>"Bitcoin is exciting because it shows how cheap it can be. Bitcoin is better than currency in that you don???t have to be physically in the same place and, of course, for large transactions, currency can get pretty inconvenient.???</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 pr-0 pull-3">
					<div class="review-meta-slider owl-carousel pt-5">
						<div class="author-meta">
							<div class="author-avatar set-bg" data-setbg="img/review/1.jpg"></div>
							<div class="author-name">
								<h4>Aaron Ballance</h4>
								<p>Ceo Bitcoin</p>
							</div>
						</div>
						<div class="author-meta">
							<div class="author-avatar set-bg" data-setbg="img/review/2.jpg"></div>
							<div class="author-name">
								<h4>Jackson Nash</h4>
								<p>Head of Design</p>
							</div>
						</div>
						<div class="author-meta">
							<div class="author-avatar set-bg" data-setbg="img/review/3.jpg"></div>
							<div class="author-name">
								<h4>Katy Abrams</h4>
								<p>Product Manager</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Review section end -->


	<!-- Newsletter section -->
	<section class="newsletter-section gradient-bg">
		<div class="container text-white">
			<div class="row">
				<div class="col-lg-7 newsletter-text">
					<h2>Subscribe to our Newsletter</h2>
					<p>Sign up for our weekly industry updates, insider perspectives and in-depth market analysis.</p>
				</div>
				<div class="col-lg-5 col-md-8 offset-lg-0 offset-md-2">
					<form class="newsletter-form">
						<input type="text" placeholder="Enter your email">
						<button>Get Started</button>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- Newsletter section end -->



	<!-- Blog section -->
	<section class="blog-section spad">
		<div class="container">
			<div class="section-title text-center">
				<h2>Latest News</h2>
				<p>Bitcoin is the simplest way to exchange money at very low cost.</p>
			</div>
			<div class="row">
				<!-- blog item -->
				<div class="col-md-4">
					<div class="blog-item">
						<figure class="blog-thumb">
							<img src="img/blog/1.jpg" alt="">
						</figure>
						<div class="blog-text">
							<div class="post-date">03 jan 2018</div>
							<h4 class="blog-title"><a href="">Coinbase to Reopen the GDAX Bitcoin Cash-Euro Order Book</a></h4>
							<div class="post-meta">
								<a href=""><span>by</span> Admin</a>
								<a href=""><i class="fa fa-heart-o"></i> 234 Likes</a>
								<a href=""><i class="fa fa-comments-o"></i> 08 comments</a>
							</div>
						</div>
					</div>
				</div>
				<!-- blog item -->
				<div class="col-md-4">
					<div class="blog-item">
						<figure class="blog-thumb">
							<img src="img/blog/2.jpg" alt="">
						</figure>
						<div class="blog-text">
							<div class="post-date">28 dec 2018</div>
							<h4 class="blog-title"><a href="">Blockchain Rolls Out Trading Feature for 22 States in the U.S</a></h4>
							<div class="post-meta">
								<a href=""><span>by</span> Admin</a>
								<a href=""><i class="fa fa-heart-o"></i> 234 Likes</a>
								<a href=""><i class="fa fa-comments-o"></i> 08 comments</a>
							</div>
						</div>
					</div>
				</div>
				<!-- blog item -->
				<div class="col-md-4">
					<div class="blog-item">
						<figure class="blog-thumb">
							<img src="img/blog/3.jpg" alt="">
						</figure>
						<div class="blog-text">
							<div class="post-date">28 aug 2018</div>
							<h4 class="blog-title"><a href="">This Week in Bitcoin: Up, Down and Sideways</a></h4>
							<div class="post-meta">
								<a href=""><span>by</span> Admin</a>
								<a href=""><i class="fa fa-heart-o"></i> 234 Likes</a>
								<a href=""><i class="fa fa-comments-o"></i> 08 comments</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Blog section end -->


	<!-- Footer section -->
	<footer class="footer-section">
		<div class="container">
			<div class="row spad">
				<div class="col-md-6 col-lg-3 footer-widget">
					<img src="img/logo.png" class="mb-4" alt="">
					<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia dese mollit anim id est laborum.</p>
					<span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
				</div>
				<div class="col-md-6 col-lg-2 offset-lg-1 footer-widget">
					<h5 class="widget-title">Resources</h5>
					<ul>
						<li><a href="#">How to Buy Coin</a></li>
						<li><a href="#">Coin Overview</a></li>
						<li><a href="#">Blog News</a></li>
						<li><a href="#">How to Sell Coin</a></li>
						<li><a href="#">Purchase Theme</a></li>
					</ul>
				</div>
				<div class="col-md-6 col-lg-2 offset-lg-1 footer-widget">
					<h5 class="widget-title">Quick Links</h5>
					<ul>
						<li><a href="#">Network Stats</a></li>
						<li><a href="#">Block Explorers</a></li>
						<li><a href="#">Governance</a></li>
						<li><a href="#">Exchange Markets</a></li>
						<li><a href="#">Get Theme</a></li>
					</ul>
				</div>
				<div class="col-md-6 col-lg-3 footer-widget pl-lg-5 pl-3">
					<h5 class="widget-title">Follow Us</h5>
					<div class="social">
						<a href="" class="facebook"><i class="fa fa-facebook"></i></a>
						<a href="" class="google"><i class="fa fa-google-plus"></i></a>
						<a href="" class="instagram"><i class="fa fa-instagram"></i></a>
						<a href="" class="twitter"><i class="fa fa-twitter"></i></a>
					</div>
				</div>
			</div>
			<div class="footer-bottom">
				<div class="row">
					<div class="col-lg-4 store-links text-center text-lg-left pb-3 pb-lg-0">
						<a href=""><img src="img/appstore.png" alt="" class="mr-2"></a>
						<a href=""><img src="img/playstore.png" alt=""></a>
					</div>
					<div class="col-lg-8 text-center text-lg-right">
						<ul class="footer-nav">
							<li><a href="">DPA</a></li>
							<li><a href="">Terms of Use</a></li>
							<li><a href="">Privacy Policy </a></li>
							<li><a href="">support@company.com</a></li>
							<li><a href="">(123) 456-7890</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>


	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/main.js"></script>
	 <script type="text/javascript" src="sliderengine/jquery.js"></script><script type="text/javascript" src="sliderengine/jquery.hislider.js"></script>
 
</body>
</html>

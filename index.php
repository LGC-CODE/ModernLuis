<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html lang="en" class="no-js">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Web Development by Luis Constante</title>
		<meta name="description" content="A Personal Portfolio Website" />
		<meta name="keywords" content="Web Development, web, cheap, affordable, modern, elegant, development, jquery, bootstrap, nodejs, angularjs, javascript, bay area, bay, area, oakland, san leandro, paginas, web, baratas, economicas, dolares, database, base, datos, luis, constante, lgc, code" />
		<meta name="author" content="Luis Constante" />
		<!-- Bootstrap -->
		<script src="js/modernizr.custom.js"></script>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/jquery.fancybox.css" rel="stylesheet">
		<link href="css/flickity.css" rel="stylesheet" >
		<link href="css/animate.css" rel="stylesheet">
		<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Nunito:400,300,700' rel='stylesheet' type='text/css'>
		<link href="css/styles.css" rel="stylesheet">
		<link href="css/queries.css" rel="stylesheet">
		<!-- Facebook and Twitter integration -->
		<meta property="og:title" content=""/>
		<meta property="og:image" content=""/>
		<meta property="og:url" content=""/>
		<meta property="og:site_name" content=""/>
		<meta property="og:description" content=""/>
		<meta name="twitter:title" content="" />
		<meta name="twitter:image" content="" />
		<meta name="twitter:url" content="" />
		<meta name="twitter:card" content="" />
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body ng-app="myApp">
		<!--[if lt IE 7]>
		<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->
		<!-- open/close -->
	<div ng-controller="navCtrl">
		<div class="row nav-wrapper">
			<div class="col-md-6 col-sm-6 col-xs-6 text-left">
				<a href="https://github.com/LGC-CODE">Github</a>
				<div id="google_translate_element"></div>
			</div>
			<div ng-click="navToggle()" class="col-md-6 col-sm-6 col-xs-6 text-right navicon">
				<p>MENU</p><a id="trigger-overlay" class="nav_slide_button nav-toggle"><span></span></a>
			</div>
		</div>
		<div class="overlay overlay-boxify">
			<nav ng-click="navToggle()">
				<ul>
					<li><a href="#/slider"><i class="fa fa-globe"></i>About</a></li>
					<li><a href="#/packs"><i class="fa fa-barcode"></i>Products</a></li>
				</ul>
				<ul>
					<li><a href="#/info"><i class="fa fa-exclamation-circle"></i>I'm Not Sure</a></li>
					<li><a href="#/home"><i class="fa fa-home"></i>Home</a></li>		
				</ul>
			</nav>
		</div>
	</div>
		<ui-view></ui-view>
	<script type="text/ng-template" id="/home.html">
		<header ng-click="soundStart()">
			<section class="hero">
				<div class="texture-overlay"></div>
				<div class="container">
					<div class="row hero-content">
						<div class="col-md-6">
							<h1 class="animated fadeInDown">Luis Constante</h1>
							<h3>Always Striving For Excellence</h3>
							<a href="#/packs" class="use-btn animated fadeInUp">View Packs</a> <a href="#/info" class="learn-btn animated fadeInUp">Learn More<i class="fa fa-arrow-down"></i></a>
						</div>
						<div class="col-md-6 col-lg-6 visible-md visible-lg">
							<img class="img-adjust animated fadeIn" width="50%" src="img/lgc-logo.png">
						</div>
					</div>
				</div>
			</section>
		</header>
	</script>
	<script type="text/ng-template" id="/slider.html">
		<section class="features-intro">
			<div ng-init="fxLogo()" class="container-fluid">
				<div class="row">
					<div class="col-md-12 nopadding features-intro-img">
						<div class="features-bg">
							<div class="texture-overlay"></div>
							<div class="features-img wp1">
								<img src="img/lgc-logo.png" alt="luis Logo">
							</div>
						</div>
					</div>
					<div class="col-md-12 nopadding" id="moreInfo">
						<div class="info-wrap">
							<div class="features-slider">
									<ul class="slides" id="featuresSlider">
										<li>
											<h1>Professional Front-End Development</h1>
											<p>Working with the best technologies to bring you the highest quality finish. Any website made by us contains the necessary accessories needed to attract the best customers!</p>
											<p><a href="#features" class="arrow-btn">Features ►</a></p>
										</li>
										<li>
											<h1>Inexpensive Services</h1>
											<p>Many Web Designers/Developers charge a ton of money for their services. Including custom layouts and Photoshop to HTML conversions. Here, we offer you products that are productive to your needs at a low rate! </p>
											<p><a href="#features" class="arrow-btn">Features ►</a></p>
										</li>
										<li>
											<h1>Web Page Maintenance</h1>
											<p>Do you have a WordPress Website or simply need to update information on your website? We Can Help! We can give you the best price for maintaining your website!</p>
											<p><a href="mailto:design@luisconstante.com?subject=lgc%20message" class="arrow-btn">Email Us!</a></p>
										</li>
									</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</script>
	<script type="text/ng-template" id="/packs.html">
		<section ng-init="loadPacks()" class="features-list" id="features">
		<div class="overlay-bg"></div>
		<div ng-click="hideAlertBox()" class="alertBox"><h2>For A Limited Time All Prices Are Negotiable!</h2><p class="text-center">Click to Close</p></div>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>Our Pack Selection</h1>
					</div>
					<div class="col-md-12">

						<div class="col-md-3 feature-1 wp2">
							<h1>Business Port</h1>
							<h1>$200.00</h1>

							<h3>Predetermined Layout</h3>
							<p>One Page Layout</p>
							<p>Simple Single Page Navigation</p>

							<h3>Contact Form</h3>
							<p>Simple Form With Multiple Destinations</p>

							<h3>Simple Map</h3>
							<p>A Link To Google Map</p>

							<h3>Gallery</h3>
							<p>8 Images of your Choice</p>
							<a href="mailto:design@luisconstante.com?subject=Business%20Port&body=I%20want%20buy%20the%20Business%20Port%20Package%20Please%20Get%20Back%20To%20Me%20ASAP"><button class="btn">I&rsquo;m Ready!</button></a>
							
						</div>
						<div class="col-md-3 feature-2 wp2 delay-05s">
							<h1>Business Modern</h1>
							<h1>$650.00</h1>

							<h3>Unlimited Pages</h3>
							<p>i.e. about, contact, gallery, etc.</p>
							<p>You must select a minimum of 3 pages upon purchase.</p>
							<p>No Worries, you can add more pages later at no cost.</p>

							<h3>One Predetermined Layout</h3>
							<p>You choose: </p>
							<p>The Color Scheme</p>
							<p>The Backgrounds</p>
							<p>And The Fonts</p>

							<h3>Google Maps</h3>
							<p>You can choose:</p> 
							<p>3 colors for the Map Theme</p>
							<p>And Map Terrain Style</p>

							<h3>Forms</h3>
							<p>A Customized Contact Form</p>
							<p>Request For Customer Info Form</p>
							<a href="mailto:design@luisconstante.com?subject=Business%20Modern&body=I%20want%20buy%20the%20Business%20Modern%20Package%20Please%20Get%20Back%20To%20Me%20ASAP"><button class="btn">I&rsquo;m Eagerly Ready!</button></a>

						</div>
						<div class="col-md-3 feature-3 wp2 delay-1s">
							<h1>Business Elegant</h1>
							<h1>$950.00</h1>

							<h3>Option 1</h3>
							<h2>Everything Included in Business Modern</h2>
							<p>Plus:</p>
							<p>A Fully Customized Layout</p>
							<p>Predetermined Layout Effects</p>
							<p>2 Month Maintenance at 45% off Original Rate</p>
							<br/>
							<h3>Option 2</h3>
							<h2>Includes Everything in Business Port</h2>
							<p>A Wordpress Blog</p>
							<p>Predetermined Layout</p>
							<p>Customized Colors</p>
							<p>Mini Google Map</p>
							<a href="mailto:design@luisconstante.com?subject=Business%20Elegant&body=I%20want%20buy%20the%20Business%20Elegant%20Package%20Please%20Get%20Back%20To%20Me%20ASAP"><button class="btn">I&rsquo;m Confidently Ready!!!</button></a>
							
						</div>
						<div class="col-md-3 feature-3 wp2 delay-1s">
							<h1>Business Scale</h1>
							<h1>$1500.00</h1>

							<h3>Fully Functional Website</h3>
							<p>Includes</p>
							<p>Packs</p>
							<p>Business Modern</p>
							<p>Business Elegant: Option 1</p>
							<p>A Database</p>
							<p>User Accounts</p>
							<p>News Feed</p>
							<p>Social Plugins</p>
							<p>• Comments</p>
							<p>• Like Button</p>
							<p>• Etc.. </p>	
							<a href="mailto:design@luisconstante.com?subject=Business%20Scale&body=I%20want%20buy%20the%20Business%20Scale%20Package%20Please%20Get%20Back%20To%20Me%20ASAP"><button class="btn">Start My Business!!!</button></a>					
						</div>

					</div>
				</div>
			</div>
		</section>
	</script>
	<script type="text/ng-template" id="/info.html">
		<section class="showcase">
			<div class="showcase-wrap">
				<div class="info-overlay"></div>
				<div class="container animated fadeIn">
					<div class="row">
						<div class="col-md-6">
							<h1>We Develop Webpages</h1>
							<h3>Big or Small</h3>
							<h1>Let Us Help You In Your Business</h1>
							<h2>Why Us?</h2>
							<h1 class="text-center">We Are:</h1>
							<h2 class="text-center">Reliable.</h2>
							<h1 class="text-center">Responsible.</h1>
							<h2 class="text-center">Accessible.</h2>
							<blockquote class="team-quote">
								<div class="avatar"><img width="100%" src="https://z-1-scontent-sjc2-1.xx.fbcdn.net/v/t1.0-9/13343058_1091248484266813_417742125151536370_n.jpg?oh=2811daa4f3edf24859086bba1b601515&oe=57E88375" alt="User Avatar"></div>
								<p>"Building the web is a passion I have chased repeatedly. To me, adding value to anyone in any way I can, is very satisfying. Always keeping the owner's business' success a priority!" - Luis Constante</p>
							</blockquote>
						</div>
						<div class="col-md-6">
							<h3>How much does it cost?</h3>
							<a href="#/packs"><h1>Click Here For A List Of prices</h1></a>
							<h3>How long does it take?</h3>
							<h1>On Average Projects that are small take about a week and a half maximum</h1>
						</div>
					</div>
				</div>
			</div>
		</section>
	</script>
	<script type="text/ng-template" id="/pictures.html">
		<section class="screenshots-intro">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>Packed Full of Powerful Features</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
						<p><a href="#screenshots" class="arrow-btn">See the screenshots! <i class="fa fa-long-arrow-right"></i></a></p>
					</div>
				</div>
			</div>
		</section>
		<section class="screenshots" id="screenshots">
			<div class="container-fluid">
				<div class="row">
					<ul class="grid">
						<li>
							<figure>
								<img src="img/01-screenshot.jpg" alt="Screenshot 01">
								<figcaption>
								<div class="caption-content">
									<a href="img/large/01.jpg" class="single_image">
										<i class="fa fa-search"></i><br>
										<p>Optimised For Design</p>
									</a>
								</div>
								</figcaption>
							</figure>
						</li>
						<li>
							<figure>
								<img src="img/02-screenshot.jpg" alt="Screenshot 01">
								<figcaption>
								<div class="caption-content">
									<a href="img/large/02.jpg" class="single_image">
										<i class="fa fa-search"></i><br>
										<p>User Centric Design</p>
									</a>
								</div>
								</figcaption>
							</figure>
						</li>
						<li>
							<figure>
								<img src="img/03-screenshot.jpg" alt="Screenshot 01">
								<figcaption>
								<div class="caption-content">
									<a href="img/large/03.jpg" class="single_image">
										<i class="fa fa-search"></i><br>
										<p>Responsive and Adaptive</p>
									</a>
								</div>
								</figcaption>
							</figure>
						</li>
						<li>
							<figure>
								<img src="img/04-screenshot.jpg" alt="Screenshot 01">
								<figcaption>
								<div class="caption-content">
									<a href="img/large/04.jpg" class="single_image">
										<i class="fa fa-search"></i><br>
										<p>Absolutely Free</p>
									</a>
								</div>
								</figcaption>
							</figure>
						</li>
					</ul>
				</div>
				<div class="row">
					<ul class="grid">
						<li>
							<figure>
								<img src="img/05-screenshot.jpg" alt="Screenshot 01">
								<figcaption>
								<div class="caption-content">
									<a href="img/large/05.jpg" class="single_image">
										<i class="fa fa-search"></i><br>
										<p>Multi-Purpose Design</p>
									</a>
								</div>
								</figcaption>
							</figure>
						</li>
						<li>
							<figure>
								<img src="img/06-screenshot.jpg" alt="Screenshot 01">
								<figcaption>
								<div class="caption-content">
									<a href="img/large/06.jpg" class="single_image">
										<i class="fa fa-search"></i><br>
										<p>Exclusive to Codrops</p>
									</a>
								</div>
								</figcaption>
							</figure>
						</li>
						<li>
							<figure>
								<img src="img/07-screenshot.jpg" alt="Screenshot 01">
								<figcaption>
								<div class="caption-content">
									<a href="img/large/07.jpg" class="single_image">
										<i class="fa fa-search"></i><br>
										<p>Made with Love</p>
									</a>
								</div>
								</figcaption>
							</figure>
						</li>
						<li>
							<figure>
								<img src="img/08-screenshot.jpg" alt="Screenshot 01">
								<figcaption>
								<div class="caption-content">
									<a href="img/large/08.jpg" class="single_image">
										<i class="fa fa-search"></i><br>
										<p>In Sydney, Australia</p>
									</a>
								</div>
								</figcaption>
							</figure>
						</li>
					</ul>
				</div>
			</div>
		</section>
	</script>
		<footer ng-controller="navCtrl">
			<div class="row nav-wrapper">
				<div class="col-md-12 col-sm-12 col-xs-12 text-center">
					<p>© Luis Constante 2016</p>
				</div>
				<div class="small-text col-md-6 col-sm-6 col-xs-6 text-left">
					<p>Suave Standpipe Kevin MacLeod (incompetech.com)
					Licensed under Creative Commons: By Attribution 3.0 License
					http://creativecommons.org/licenses/by/3.0/</p>
				</div>
				<div ng-click="navToggle()" class="col-md-6 col-sm-6 col-xs-6 text-right navicon">
					<p>MENU</p><br><a id="trigger-overlay" class="nav_slide_button nav-toggle"><span></span></a>
				</div>
			</div>
		</footer> 
	
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/angular-ui-router/0.2.10/angular-ui-router.js"></script>
		<script src="js/min/toucheffects-min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/flickity.pkgd.min.js"></script>
		<script src="js/jquery.fancybox.pack.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/retina.js"></script>
		<script src="js/waypoints.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/scripts.js"></script>
		<script src="js/angularMod.js"></script>
		<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
		<script>
		(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
		function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
		e=o.createElement(i);r=o.getElementsByTagName(i)[0];
		e.src='//www.google-analytics.com/analytics.js';
		r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
		ga('create','UA-80975921-1');ga('send','pageview');
		</script>
		<script type="text/javascript">
		function googleTranslateElementInit() {
		  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'ar,de,en,es,fr', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, autoDisplay: false, gaTrack: true, gaId: 'UA-80975921-1'}, 'google_translate_element');
		}
		</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

		
	</body>
</html

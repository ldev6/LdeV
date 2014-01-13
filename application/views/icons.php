<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="not-ie" lang="en"> <!--<![endif]-->
<head>

	<!-- Basic meta tags -->
	<meta charset="utf-8">
	<title>Plain - Clean Responsive Bootstrap Theme</title>
	<meta name="description" content="Plain is a responsible HTML template with 12-column grid based on popular Twitter Bootstrap framework. This theme is suitable as a clean and easily maintainable template for any business, portfolio or single-project site, with support for mobile devices and latest HTML5 &amp; CSS3 user interface components.">

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Styles -->
	<link href="css/style.css" rel="stylesheet">
	<link href="css/font-awesome/font-awesome.css" rel="stylesheet">
	<!--[if IE 7]>
		<link href="css/font-awesome/font-awesome-ie7.css" rel="stylesheet">
	<![endif]-->
	
	<!-- Web Fonts  -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800' rel='stylesheet' type='text/css'>

	<!-- Javascript -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-1.7.2.min.js"><\/script>')</script>
	
	<!-- Internet Explorer condition - HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

</head>
<body>

	<!-- Header
	================================================== -->
	<header id="header">

		<!-- Navigation
		================================================== -->
		<nav class="navbar">
			<div class="navbar-inner">
				<div class="container">
					<!-- Logo -->
					<a class="brand" href="index.html">
						Plain
					</a>
					<ul class="nav">
						<li><a href="index.html" title="Home">Home</a></li>
						<li><a href="work.html" title="Our work">Portfolio</a></li>
						<li><a href="plans.html" title="Plans and pricing">Pricing</a></li>
						<li><a href="team.html" title="Our team">Our team</a></li>
						<li>
							<a href="blog.html" title="Our blog">Blog</a>
						</li>
						<li class="dropdown active">
							<a href="components.html" title="Features">Features</a>
							<!-- Dropdown menu -->
							<ul>
								<li><a href="components.html" title="">Components</a></li>
								<li><a href="grid.html" title="">Grid</a></li>
								<li><a href="icons.html" title="">Icons</a></li>
								<li><a href="home-variant-1.html" title="">Homepage variant #1</a></li>
								<li><a href="home-variant-2.html" title="">Homepage variant #2</a></li>
							</ul>
						</li>
						<li><a href="contact.html" title="Contact us">Contact</a></li>
					</ul>
				</div><!-- end .container -->
			</div><!-- end .navbar-inner -->
		</nav>

	</header>

	<!-- Content
	================================================== -->
	<section id="content" class="container">

	<!-- Custom style only for icon preview -->
	<style type="text/css">
		
		ul.the-icons li {display:block;width:100%;padding:0px;margin:20px 0;background:#fff;}
		ul.the-icons li i {font-size:22px;color:#333;margin-right:4px;}
		ul.the-icons {
			margin:0;
		}
		ul.the-icons li:hover {
			background:#eee;
		}

	</style>

	<div class="hero-unit">
		<h1>Icons</h1>
		<p>
			This theme is bundled with <a href="http://fortawesome.github.com/Font-Awesome/">Font Awesome</a>, 100% scalable icon pack.
		</p>
	</div>

	<hr />

	<!-- large icons -->
	<div class="well" style="background:#fff;">

		<div id="carousel" class="carousel slide ac" rel="carousel">
			<!-- Carousel items -->
			<div class="carousel-inner" style="box-shadow:none;">
				<!-- Item -->
				<div class="item active">
					<i style="font-size:20em;line-height:1em;color:#2f2f2f" class="icon-globe"></i>
				</div>
				<!-- end Item -->
				<!-- Item -->
				<div class="item">
					<i style="font-size:20em;line-height:1em;color:#2f2f2f" class="icon-paper-clip"></i>
				</div>
				<!-- end Item -->
				<!-- Item -->
				<div class="item">
					<i style="font-size:20em;line-height:1em;color:#2f2f2f" class="icon-hdd"></i>
				</div>
				<!-- end Item -->
				<!-- Item -->
				<div class="item">
					<i style="font-size:20em;line-height:1em;color:#2f2f2f" class="icon-github"></i>
				</div>
				<!-- end Item -->
				<!-- Item -->
				<div class="item">
					<i style="font-size:20em;line-height:1em;color:#2f2f2f" class="icon-qrcode"></i>
				</div>
				<!-- end Item -->
				<!-- Item -->
				<div class="item">
					<i style="font-size:20em;line-height:1em;color:#2f2f2f" class="icon-camera-retro"></i>
				</div>
				<!-- end Item -->
			</div>
			<!-- Carousel navigation -->
			<a class="carousel-control left" href="#carousel" data-slide="prev"></a>
			<a class="carousel-control right" href="#carousel" data-slide="next"></a>
		</div>
	</div>

	<hr />

	<!-- medium icons -->
	<div class="row">
		<div class="span1" rel="tooltip" title="Beaker">
			<i style="font-size:4em;color:#DD6E03;" class="icon-beaker"></i>
		</div>
		<div class="span1" rel="tooltip" title="Cart">
			<i style="font-size:4em;color:#B11D01" class="icon-shopping-cart"></i>
		</div>
		<div class="span1" rel="tooltip" title="Remove">
			<i style="font-size:4em;color:#D74C8D" class="icon-remove"></i>
		</div>
		<div class="span1" rel="tooltip" title="Umbrella">
			<i style="font-size:4em;color:#850244" class="icon-umbrella"></i>
		</div>
		<div class="span1" rel="tooltip" title="Marker">
			<i style="font-size:4em;color:#960A77" class="icon-map-marker"></i>
		</div>
		<div class="span1" rel="tooltip" title="Leaf">
			<i style="font-size:4em;color:#00044B" class="icon-leaf"></i>
		</div>
		<div class="span1" rel="tooltip" title="Upload">
			<i style="font-size:4em;color:#006A96" class="icon-upload"></i>
		</div>
		<div class="span1" rel="tooltip" title="Retro camera">
			<i style="font-size:4em;color:#004F8A" class="icon-camera-retro"></i>
		</div>
		<div class="span1" rel="tooltip" title="Heart">
			<i style="font-size:4em;color:#3AB4DB" class="icon-heart"></i>
		</div>
		<div class="span1" rel="tooltip" title="Zoom">
			<i style="font-size:4em;color:#053F02" class="icon-zoom-in"></i>
		</div>
		<div class="span1" rel="tooltip" title="Asterisk">
			<i style="font-size:4em;color:#80AD00" class="icon-asterisk"></i>
		</div>
		<div class="span1" rel="tooltip" title="Thumbs up">
			<i style="font-size:4em;color:#800080" class="icon-thumbs-up"></i>
		</div>
	</div>

	<hr />

	<!-- all icons -->
	<div class="row">

		<div class="span12">
			<h3>Web Application Icons</h3>
		</div>
		<div class="span3">
			<ul class="the-icons">
				<li><i class="icon-adjust"></i> icon-adjust</li>
				<li><i class="icon-asterisk"></i> icon-asterisk</li>
				<li><i class="icon-ban-circle"></i> icon-ban-circle</li>
				<li><i class="icon-bar-chart"></i> icon-bar-chart</li>
				<li><i class="icon-barcode"></i> icon-barcode</li>
				<li><i class="icon-beaker"></i> icon-beaker</li>
				<li><i class="icon-bell"></i> icon-bell</li>
				<li><i class="icon-bolt"></i> icon-bolt</li>
				<li><i class="icon-book"></i> icon-book</li>
				<li><i class="icon-bookmark"></i> icon-bookmark</li>
				<li><i class="icon-bookmark-empty"></i> icon-bookmark-empty</li>
				<li><i class="icon-briefcase"></i> icon-briefcase</li>
				<li><i class="icon-bullhorn"></i> icon-bullhorn</li>
				<li><i class="icon-calendar"></i> icon-calendar</li>
				<li><i class="icon-camera"></i> icon-camera</li>
				<li><i class="icon-camera-retro"></i> icon-camera-retro</li>
				<li><i class="icon-certificate"></i> icon-certificate</li>
				<li><i class="icon-check"></i> icon-check</li>
				<li><i class="icon-check-empty"></i> icon-check-empty</li>
				<li><i class="icon-cloud"></i> icon-cloud</li>
				<li><i class="icon-cog"></i> icon-cog</li>
				<li><i class="icon-cogs"></i> icon-cogs</li>
				<li><i class="icon-comment"></i> icon-comment</li>
				<li><i class="icon-comment-alt"></i> icon-comment-alt</li>
				<li><i class="icon-comments"></i> icon-comments</li>
				<li><i class="icon-comments-alt"></i> icon-comments-alt</li>
				<li><i class="icon-credit-card"></i> icon-credit-card</li>
				<li><i class="icon-dashboard"></i> icon-dashboard</li>
				<li><i class="icon-download"></i> icon-download</li>
				<li><i class="icon-download-alt"></i> icon-download-alt</li>
				<li><i class="icon-edit"></i> icon-edit</li>
				<li><i class="icon-envelope"></i> icon-envelope</li>
				<li><i class="icon-envelope-alt"></i> icon-envelope-alt</li>
			</ul>
		</div>
		<div class="span3">
			<ul class="the-icons">
				<li><i class="icon-exclamation-sign"></i> icon-exclamation-sign</li>
				<li><i class="icon-external-link"></i> icon-external-link</li>
				<li><i class="icon-eye-close"></i> icon-eye-close</li>
				<li><i class="icon-eye-open"></i> icon-eye-open</li>
				<li><i class="icon-facetime-video"></i> icon-facetime-video</li>
				<li><i class="icon-film"></i> icon-film</li>
				<li><i class="icon-filter"></i> icon-filter</li>
				<li><i class="icon-fire"></i> icon-fire</li>
				<li><i class="icon-flag"></i> icon-flag</li>
				<li><i class="icon-folder-close"></i> icon-folder-close</li>
				<li><i class="icon-folder-open"></i> icon-folder-open</li>
				<li><i class="icon-gift"></i> icon-gift</li>
				<li><i class="icon-glass"></i> icon-glass</li>
				<li><i class="icon-globe"></i> icon-globe</li>
				<li><i class="icon-group"></i> icon-group</li>
				<li><i class="icon-hdd"></i> icon-hdd</li>
				<li><i class="icon-headphones"></i> icon-headphones</li>
				<li><i class="icon-heart"></i> icon-heart</li>
				<li><i class="icon-heart-empty"></i> icon-heart-empty</li>
				<li><i class="icon-home"></i> icon-home</li>
				<li><i class="icon-inbox"></i> icon-inbox</li>
				<li><i class="icon-info-sign"></i> icon-info-sign</li>
				<li><i class="icon-key"></i> icon-key</li>
				<li><i class="icon-leaf"></i> icon-leaf</li>
				<li><i class="icon-legal"></i> icon-legal</li>
				<li><i class="icon-lemon"></i> icon-lemon</li>
				<li><i class="icon-lock"></i> icon-lock</li>
				<li><i class="icon-unlock"></i> icon-unlock</li>
				<li><i class="icon-magic"></i> icon-magic</li>
				<li><i class="icon-magnet"></i> icon-magnet</li>
				<li><i class="icon-map-marker"></i> icon-map-marker</li>
				<li><i class="icon-minus"></i> icon-minus</li>
				<li><i class="icon-minus-sign"></i> icon-minus-sign</li>
			</ul>
		</div>
		<div class="span3">
			<ul class="the-icons">
				<li><i class="icon-money"></i> icon-money</li>
				<li><i class="icon-move"></i> icon-move</li>
				<li><i class="icon-music"></i> icon-music</li>
				<li><i class="icon-off"></i> icon-off</li>
				<li><i class="icon-ok"></i> icon-ok</li>
				<li><i class="icon-ok-circle"></i> icon-ok-circle</li>
				<li><i class="icon-ok-sign"></i> icon-ok-sign</li>
				<li><i class="icon-pencil"></i> icon-pencil</li>
				<li><i class="icon-picture"></i> icon-picture</li>
				<li><i class="icon-plane"></i> icon-plane</li>
				<li><i class="icon-plus"></i> icon-plus</li>
				<li><i class="icon-plus-sign"></i> icon-plus-sign</li>
				<li><i class="icon-print"></i> icon-print</li>
				<li><i class="icon-pushpin"></i> icon-pushpin</li>
				<li><i class="icon-qrcode"></i> icon-qrcode</li>
				<li><i class="icon-question-sign"></i> icon-question-sign</li>
				<li><i class="icon-random"></i> icon-random</li>
				<li><i class="icon-refresh"></i> icon-refresh</li>
				<li><i class="icon-remove"></i> icon-remove</li>
				<li><i class="icon-remove-circle"></i> icon-remove-circle</li>
				<li><i class="icon-remove-sign"></i> icon-remove-sign</li>
				<li><i class="icon-reorder"></i> icon-reorder</li>
				<li><i class="icon-resize-horizontal"></i> icon-resize-horizontal</li>
				<li><i class="icon-resize-vertical"></i> icon-resize-vertical</li>
				<li><i class="icon-retweet"></i> icon-retweet</li>
				<li><i class="icon-road"></i> icon-road</li>
				<li><i class="icon-rss"></i> icon-rss</li>
				<li><i class="icon-screenshot"></i> icon-screenshot</li>
				<li><i class="icon-search"></i> icon-search</li>
				<li><i class="icon-share"></i> icon-share</li>
				<li><i class="icon-share-alt"></i> icon-share-alt</li>
				<li><i class="icon-shopping-cart"></i> icon-shopping-cart</li>
			</ul>
		</div>
		<div class="span3">
			<ul class="the-icons">
				<li><i class="icon-signal"></i> icon-signal</li>
				<li><i class="icon-signin"></i> icon-signin</li>
				<li><i class="icon-signout"></i> icon-signout</li>
				<li><i class="icon-sitemap"></i> icon-sitemap</li>
				<li><i class="icon-sort"></i> icon-sort</li>
				<li><i class="icon-sort-down"></i> icon-sort-down</li>
				<li><i class="icon-sort-up"></i> icon-sort-up</li>
				<li><i class="icon-star"></i> icon-star</li>
				<li><i class="icon-star-empty"></i> icon-star-empty</li>
				<li><i class="icon-star-half"></i> icon-star-half</li>
				<li><i class="icon-tag"></i> icon-tag</li>
				<li><i class="icon-tags"></i> icon-tags</li>
				<li><i class="icon-tasks"></i> icon-tasks</li>
				<li><i class="icon-thumbs-down"></i> icon-thumbs-down</li>
				<li><i class="icon-thumbs-up"></i> icon-thumbs-up</li>
				<li><i class="icon-time"></i> icon-time</li>
				<li><i class="icon-tint"></i> icon-tint</li>
				<li><i class="icon-trash"></i> icon-trash</li>
				<li><i class="icon-trophy"></i> icon-trophy</li>
				<li><i class="icon-truck"></i> icon-truck</li>
				<li><i class="icon-umbrella"></i> icon-umbrella</li>
				<li><i class="icon-upload"></i> icon-upload</li>
				<li><i class="icon-upload-alt"></i> icon-upload-alt</li>
				<li><i class="icon-user"></i> icon-user</li>
				<li><i class="icon-user-md"></i> icon-user-md</li>
				<li><i class="icon-volume-off"></i> icon-volume-off</li>
				<li><i class="icon-volume-down"></i> icon-volume-down</li>
				<li><i class="icon-volume-up"></i> icon-volume-up</li>
				<li><i class="icon-warning-sign"></i> icon-warning-sign</li>
				<li><i class="icon-wrench"></i> icon-wrench</li>
				<li><i class="icon-zoom-in"></i> icon-zoom-in</li>
				<li><i class="icon-zoom-out"></i> icon-zoom-out</li>
			</ul>
		</div>

		<div class="span12">
			<h3>Text Editor Icons</h3>
		</div>
		<div class="span3">
			<ul class="the-icons">
				<li><i class="icon-file"></i> icon-file</li>
				<li><i class="icon-cut"></i> icon-cut</li>
				<li><i class="icon-copy"></i> icon-copy</li>
				<li><i class="icon-paste"></i> icon-paste</li>
				<li><i class="icon-save"></i> icon-save</li>
				<li><i class="icon-undo"></i> icon-undo</li>
				<li><i class="icon-repeat"></i> icon-repeat</li>
				<li><i class="icon-paper-clip"></i> icon-paper-clip</li>
			</ul>
		</div>
		<div class="span3">
			<ul class="the-icons">
				<li><i class="icon-text-height"></i> icon-text-height</li>
				<li><i class="icon-text-width"></i> icon-text-width</li>
				<li><i class="icon-align-left"></i> icon-align-left</li>
				<li><i class="icon-align-center"></i> icon-align-center</li>
				<li><i class="icon-align-right"></i> icon-align-right</li>
				<li><i class="icon-align-justify"></i> icon-align-justify</li>
				<li><i class="icon-indent-left"></i> icon-indent-left</li>
				<li><i class="icon-indent-right"></i> icon-indent-right</li>
			</ul>
		</div>
		<div class="span3">
			<ul class="the-icons">
				<li><i class="icon-font"></i> icon-font</li>
				<li><i class="icon-bold"></i> icon-bold</li>
				<li><i class="icon-italic"></i> icon-italic</li>
				<li><i class="icon-strikethrough"></i> icon-strikethrough</li>
				<li><i class="icon-underline"></i> icon-underline</li>
				<li><i class="icon-link"></i> icon-link</li>
				<li><i class="icon-columns"></i> icon-columns</li>
				<li><i class="icon-table"></i> icon-table</li>
			</ul>
		</div>
		<div class="span3">
			<ul class="the-icons">
				<li><i class="icon-th-large"></i> icon-th-large</li>
				<li><i class="icon-th"></i> icon-th</li>
				<li><i class="icon-th-list"></i> icon-th-list</li>
				<li><i class="icon-list"></i> icon-list</li>
				<li><i class="icon-list-ol"></i> icon-list-ol</li>
				<li><i class="icon-list-ul"></i> icon-list-ul</li>
				<li><i class="icon-list-alt"></i> icon-list-alt</li>
			</ul>
		</div>

		<div class="span12">
			<h3>Directional Icons</h3>
		</div>
		<div class="span3">
			<ul class="the-icons">
				<li><i class="icon-arrow-down"></i> icon-arrow-down</li>
				<li><i class="icon-arrow-left"></i> icon-arrow-left</li>
				<li><i class="icon-arrow-right"></i> icon-arrow-right</li>
				<li><i class="icon-arrow-up"></i> icon-arrow-up</li>
				<li><i class="icon-chevron-down"></i> icon-chevron-down</li>
			</ul>
		</div>
		<div class="span3">
			<ul class="the-icons">
				<li><i class="icon-circle-arrow-down"></i> icon-circle-arrow-down</li>
				<li><i class="icon-circle-arrow-left"></i> icon-circle-arrow-left</li>
				<li><i class="icon-circle-arrow-right"></i> icon-circle-arrow-right</li>
				<li><i class="icon-circle-arrow-up"></i> icon-circle-arrow-up</li>
				<li><i class="icon-chevron-left"></i> icon-chevron-left</li>
			</ul>
		</div>
		<div class="span3">
			<ul class="the-icons">
				<li><i class="icon-caret-down"></i> icon-caret-down</li>
				<li><i class="icon-caret-left"></i> icon-caret-left</li>
				<li><i class="icon-caret-right"></i> icon-caret-right</li>
				<li><i class="icon-caret-up"></i> icon-caret-up</li>
				<li><i class="icon-chevron-right"></i> icon-chevron-right</li>
			</ul>
		</div>
		<div class="span3">
			<ul class="the-icons">
				<li><i class="icon-hand-down"></i> icon-hand-down</li>
				<li><i class="icon-hand-left"></i> icon-hand-left</li>
				<li><i class="icon-hand-right"></i> icon-hand-right</li>
				<li><i class="icon-hand-up"></i> icon-hand-up</li>
				<li><i class="icon-chevron-up"></i> icon-chevron-up</li>
			</ul>
		</div>

		<div class="span12">
			<h3>Video Player Icons</h3>
		</div>
		<div class="span3">
			<ul class="the-icons">
				<li><i class="icon-play-circle"></i> icon-play-circle</li>
				<li><i class="icon-play"></i> icon-play</li>
				<li><i class="icon-pause"></i> icon-pause</li>
				<li><i class="icon-stop"></i> icon-stop</li>
			</ul>
		</div>
		<div class="span3">
			<ul class="the-icons">
				<li><i class="icon-step-backward"></i> icon-step-backward</li>
				<li><i class="icon-fast-backward"></i> icon-fast-backward</li>
				<li><i class="icon-backward"></i> icon-backward</li>
				<li><i class="icon-forward"></i> icon-forward</li>
			</ul>
		</div>
		<div class="span3">
			<ul class="the-icons">
				<li><i class="icon-fast-forward"></i> icon-fast-forward</li>
				<li><i class="icon-step-forward"></i> icon-step-forward</li>
				<li><i class="icon-eject"></i> icon-eject</li>
			</ul>
		</div>
		<div class="span3">
			<ul class="the-icons">
				<li><i class="icon-fullscreen"></i> icon-fullscreen</li>
				<li><i class="icon-resize-full"></i> icon-resize-full</li>
				<li><i class="icon-resize-small"></i> icon-resize-small</li>
			</ul>
		</div>

		<div class="span12">
			<h3>Social Icons</h3>
		</div>
		<div class="span3">
			<ul class="the-icons">
				<li><i class="icon-phone"></i> icon-phone</li>
				<li><i class="icon-phone-sign"></i> icon-phone-sign</li>
				<li><i class="icon-facebook"></i> icon-facebook</li>
				<li><i class="icon-facebook-sign"></i> icon-facebook-sign</li>
			</ul>
		</div>
		<div class="span3">
			<ul class="the-icons">
				<li><i class="icon-twitter"></i> icon-twitter</li>
				<li><i class="icon-twitter-sign"></i> icon-twitter-sign</li>
				<li><i class="icon-github"></i> icon-github</li>
				<li><i class="icon-github-sign"></i> icon-github-sign</li>
			</ul>
		</div>
		<div class="span3">
			<ul class="the-icons">
				<li><i class="icon-linkedin"></i> icon-linkedin</li>
				<li><i class="icon-linkedin-sign"></i> icon-linkedin-sign</li>
				<li><i class="icon-pinterest"></i> icon-pinterest</li>
				<li><i class="icon-pinterest-sign"></i> icon-pinterest-sign</li>
			</ul>
		</div>
		<div class="span3">
			<ul class="the-icons">
				<li><i class="icon-google-plus"></i> icon-google-plus</li>
				<li><i class="icon-google-plus-sign"></i> icon-google-plus-sign</li>
				<li><i class="icon-sign-blank"></i> icon-sign-blank</li>
			</ul>
		</div>
	</div>
	</section>

	<!-- Footer
	================================================== -->

	<footer id="footer">
		<div class="container">
			<div class="row">
				<div class="span4">
					<a class="brand" href="index.html">
						Plain
					</a>
					<p>
						Creative agency working <br />with web and interactive media. <br />
						Lorem ipsum dolor sit amet.
						
					</p>
				</div>
				<div class="span4 social-networks">
					<h3>Find us elsewhere</h3>
					<p>
						<a class="social-network twitter"></a>
						<a class="social-network facebook"></a>
						<a class="social-network linkedin"></a>
						<a class="social-network dribbble"></a>
						<a class="social-network pinterest"></a>
					</p>
				</div>
				<div class="span4 newsletter">
					<h3>Newsletter</h3>
					<p>Subscribe to our monthly newsletter and be the first to know about our news and special deals!</p>
					<img class="ajax-loader" src="img/ajax-loader.gif" alt="" />
					<form method="post" id="newsletter-form">
						<input type="text" placeholder="Enter your E-mail" name="subscribe" />
						<input type="hidden" name="bot" /><!-- SPAM protection -->
						<button type="submit" class="icon-ok" id="newsletter-subscribe" ></button>
					</form>
				</div> 
			</div> <!-- end .row -->		
		</div> <!-- end .container -->
	</footer><!-- end #footer -->

	<footer id="copyright">
		<div class="container">
			<div class="row">
				<div class="span4">
					&copy; 2010—2012 by <a>Plain</a>
				</div>
				<div class="span4">
					<a href="#" title="Send us email">hello@plain.com</a>, 
					+123 320 000 123 456
				</div>
				<div class="span4">
					PLAIN BY US
					
				</div>
			</div> <!-- end .row -->		
		</div> <!-- end .container -->
	</footer><!-- end #footer-extra -->

	<!-- Javascript - Placed at the end of the document so the pages load faster 
	================================================== -->

	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.isotope.min.js"></script>
	<script type="text/javascript" src="js/jquery.touchSwipe.js"></script>
	<script type="text/javascript" src="js/jquery.hotkeys.min.js" charset='utf-8'></script>
	<script type="text/javascript" src="js/functions.js"></script>
	
</body>
</html>		
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
		
		<link rel="author" href="https://plus.google.com/b/115659103781016687400">
		<link rel="publisher" href="https://plus.google.com/b/115659103781016687400">

		<meta property="og:title" content="The Daisy Jaynes">
		<meta property="og:type" content="website">
		<meta property="og:url" content="http://www.thedaisyjaynes.com/">
		<meta property="og:site_name" content="The Daisy Jaynes">
	
		<link href="//www.google-analytics.com" rel="dns-prefetch">

		<link rel='stylesheet' href='<?php bloginfo('template_url'); ?>/normalize.css' />
		<link rel='stylesheet' href='<?php bloginfo('template_url'); ?>/style.css' />
		<link rel='stylesheet' href='<?php bloginfo('template_url'); ?>/style2.css' />
		<!--[if IE]>
		    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
		<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
		<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

		<meta name="apple-mobile-web-app-capable" content="yes" />		
		<link rel="apple-touch-icon-precomposed"  href="<?php bloginfo('template_url'); ?>/appleicons/apple-touch-icon-precomposed.png" />
		<link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php bloginfo('template_url'); ?>/appleicons/apple-touch-icon-57x57-precomposed.png" />
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php bloginfo('template_url'); ?>/appleicons/apple-touch-icon-72x72-precomposed.png" />
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php bloginfo('template_url'); ?>/appleicons/apple-touch-icon-114x114-precomposed.png" />

		<meta name="twitter:card" content="summary">
		<meta name="twitter:site" content="@thedaisyjanes">
		<meta name="twitter:creator" content="@thedaisyjanes">
		<meta name="twitter:title" content="The Daisy Jaynes -" <?php wp_title(); ?>>
		<meta name="twitter:description" content="The Daisy Jaynes">
		<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-48315099-1', 'auto');
  ga('send', 'pageview');

</script>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		
		<script src='<?php bloginfo('template_url'); ?>/js/imagesloaded.pkgd.min.js'></script>
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/instafeed.min.js"></script>
		


		<?php wp_head(); ?> 

	</head>

	<body>
			<!-- :::::::::::::::::::: Mobile Header ::::::::::::::::::: -->
			<header id="mobile-header" role="banner">
			<img src="<?php bloginfo('template_directory'); ?>/images/retsmalldaisy@2x.png" width="30" alt="The Daisy Jaynes">
				<h1 id="mobile-title"><a href="<?php echo home_url(); ?>" title="<?php bloginfo('name'); ?>"> <?php bloginfo('name'); ?></a></h1>
				<a id="mobile-nav-button" href="#" title="Activate Mobile Menu">Mobile Nav Menu </a>
			</header>

			<nav id="mobile-nav" role="navigation">
				<div class="menu-mobile">
					<?php wp_nav_menu( array('theme_location' => 'mobile-menu', 'menu_class' => 'menu-mobile' ) ); ?>
				</div>
			</nav>

			<!-- :::::::::::::::::::: Main Header ::::::::::::::::::: -->
			<header id="main-header" role="banner">	
			
				<nav id="main-nav">
					<div class="logo"><img id="daisy-logo" src="<?php bloginfo('template_directory'); ?>/images/retsmalldaisy@2x.png" alt="The Daisy Jaynes Logo" width="50"><?php get_template_directory(); ?></div>
					<h1 id="site-title"><a href="<?php echo home_url(); ?>" title="<?php bloginfo('name'); ?>"> <?php bloginfo('name'); ?></a></h1>
					
						<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'header-menu-container', 'menu_class' => 'header-menu' ) ); ?>			
					<!--<a id="search-nav-button" href="#" title="Search The Daisy Jaynes">Show Search</a> -->
										
				</nav>
				<div style="clear:both"></div>
				
						
			</header>



			<section id="search-panel">

				<form id="panel-search" method="get" action="<?php bloginfo('home'); ?>">
					<div class="search-wrap">
						<input type="text" class="searchTerm" name="s" id="panelsearchBox" placeholder="What are you looking for?"><input type="submit" class="searchButton" id="search-panel-button" name="search-panel-button" value="Search">
					</div>
                </form>

			</section>



			<div id="site-wrapper">

			<script type="text/javascript">
var feed = new Instafeed({
  get: 'user',
  userId: 1134351905,
  accessToken: '1134351905.467ede5.270d2c1a36204ef3ad6f0c9cbe19b5cf',
  clientId: '29d7afdea54d4e1bb13e9192fbade6ee',
  limit: 6,
  sortBy: 'most-recent',

 
  template: '<a href="{{link}}" target="_blank"><img class="insta-photos" src="{{image}}" /></a>'
});
feed.run();

</script>


			

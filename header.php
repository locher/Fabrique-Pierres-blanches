<!doctype html>
<html <?php language_attributes(); ?>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		
        <!--Typekit-->
		<script src="https://use.typekit.net/dfj5rwt.js"></script>
        <script>try{Typekit.load({ async: true });}catch(e){}</script>
		
	</head>
	<body <?php body_class(); ?>>
        
        <div class="svg-wrapper" aria-hidden="true">
			<?php echo file_get_contents(get_template_directory_uri().'/img/svg-prod/sprite/svgs.svg'); ?>
		</div>	

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear" role="banner">

					<!-- logo -->
					<div class="logo">
						<a href="<?php echo home_url(); ?>">
							<img
							    src="<?php echo get_template_directory_uri(); ?>/img/logo.jpg"
							    srcset="<?php echo get_template_directory_uri(); ?>/img/logo@2x.jpg 2x,
							    <?php echo get_template_directory_uri(); ?>/img/logo@3x.jpg 3x" 
							    alt="Logo" class="logo-img"
							 >
						</a>
					</div>
					
					<!-- /logo -->
					
					<div class="wrapper-button">
					    <button class="bt-menu bt">Menu</button>
					</div>
					

					<!-- nav -->
					<nav class="nav" role="navigation">
						<?php html5blank_nav(); ?>
					</nav>
					<!-- /nav -->
					
                    <?php include('arabesque.php'); ?>

			</header>
			<!-- /header -->
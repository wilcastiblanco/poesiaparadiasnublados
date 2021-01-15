<?php
	/*-----------------------------------------------------------------------------------*/
	/* This template will be called by all other template files to begin 
	/* rendering the page and display the header/nav
	/*-----------------------------------------------------------------------------------*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title>
	<?php bloginfo('name'); // show the blog name, from settings ?> | 
	<?php is_front_page() ? bloginfo('description') : wp_title(''); // if we're on the home page, show the description, from the site's settings - otherwise, show the title of the post or page ?>
</title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // We are loading our theme directory style.css by queuing scripts in our functions.php file, 
	// so if you want to load other stylesheets,
	// I would load them with an @import call in your style.css
?>

<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?> >

<!-- Header for Movile -->
<header class="movil d-block d-md-none">
	<div class="nav-top">
		<a class="navbar-brand" href="<?php the_permalink() ?>">
		<?php the_custom_logo(); ?>
		</a>
		<div class="suscript">
			<h3>Suscríbete a nuestra lista</h3>
			<form class="">
			<div class="in-but">
				<input class="form-control" type="search" placeholder="Ingresa aquí tu correo" aria-label="Search">
				<button class="btn button" type="submit">Enviar</button>
			</div>
			</form>
		</div>
		
		<div class="burger">
			<div class="line1"></div>
			<div class="line2"></div>
			<div class="line3"></div>
		</div>
	</div>
	<div class="nav-button">
		<ul class="nav-links" id="navId">
			<li>
				<a href="#" class="">INICIO</a>
			</li>
			<li>
				<a href="#" class="">PODCAST</a>
			</li>
			<li>
				<a href="#" class="">ARTÍCULOS</a>
			</li>	
		</ul>
		<div class="nav-search">
			<a href=""><i class="fas fa-search"></i></a>
		</div>
	</div>
</header>

<!-- Heather for Screen -->
<header class="screen d-none d-md-block">
	<div class="nav-top">
		<a class="navbar-brand" href="#">
			<img class="brand" src="<?php echo get_template_directory_uri(); ?>/img/Logo_PDN.svg">
		</a>
		<div class="suscript">
			<h3>Suscríbete a nuestra lista</h3>
			<form class="">
			<div class="in-but">
				<input class="form-control" type="search" placeholder="Ingresa aquí tu correo" aria-label="Search">
				<button class="btn" type="submit">Enviar</button>
			</div>
			</form>
		</div>
		
		<div class="burger">
			<div class="line1"></div>
			<div class="line2"></div>
			<div class="line3"></div>
		</div>
	</div>
	<div class="nav-button">
	<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>

		<!-- <ul class="nav" id="navId">
			<li class="nav-item">
				<a href="#tab1Id" class="btn nav-link active">INICIO<span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
				<a href="#tab5Id" class="btn nav-link">PODCAST</a>
			</li>
			<li class="nav-item">
				<a href="#tab5Id" class="btn nav-link">ARTÍCULOS</a>
			</li>	
		</ul> -->
		<div class="nav-search">
			<a href=""><i class="fas fa-search"></i></a>
		</div>
	</div>
</header>




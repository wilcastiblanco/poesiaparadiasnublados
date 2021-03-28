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

	<main class="inicial_page">

		<div class="expectativa">
			<div class="logo_expectativa">
				<img class="d-block d-md-none" src="<?php echo get_template_directory_uri();?>/img/Logo_pdn_small.svg" alt="" width="250px">
				<img class="d-none d-md-block" src="<?php echo get_template_directory_uri();?>/img/Logo_PDN.svg" alt="" width="500px">

			</div>
				<h2 class="land_head">
				¡Empieza tu día, con más poesía!	
				</h2>
			<div class="caja_landing">
				<div class="podcast_expectativa">
					<h3>Podcast de la semana</h3>
					<iframe src="https://open.spotify.com/embed-podcast/episode/1wCv3qH3VhzwL0r36iNxRq" width="100%" height="164" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
				</div>
				<div class="mail_list">
					<h3 class="land_foot">Coméntanos</h3>
					<?php echo do_shortcode('[mc4wp_form id="222"]'); ?>
				</div>
			</div> <!-- caja_landing -->
			<h2>			
			¡Espera nuestro sitio web!
			</h2>
			<div class="side-social">
				<div class="caja-social">
						<a href="https://www.facebook.com/gloriagudelom/" target="_blank"><i class="fab fa-facebook-f"></i></a>
						<a href="https://www.instagram.com/poesia_paradias_nublados/" target="_blank"><i class="fab fa-instagram"></i></a>
						<a href="https://open.spotify.com/show/1Sx4Tu0UIhvWFoFCAOmsTn?si=Babg0a7YQ86H54mVZSAZsw" target="_blank"><i class="fab fa-spotify"></i></a>
				</div><!-- caja-social - incluye links para redes sociales -->
			</div><!-- side-social -->

		</div><!-- expectativa -->

	</main>


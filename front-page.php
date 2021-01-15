<?php 
/**
 * 	Template Name: Front Page
 *
 *	This page template has a sidebar built into it, 
 * 	and can be used as a home page, in which case the title will not show up.
 *
*/
define( 'WP_USE_THEMES', false ); get_header(); // This fxn gets the header.php file and renders it ?>
<primary>
	soy front page
	<main>
		<?php include 'includes/inc-carousel.php';
			//Incluye carousel
		?>
		<?php include 'includes/inc-lastest.php';
			//Incluye ultimos posts
		?>
	</main>
<primary> <!-- end primay -->
<?php get_footer(); // This fxn gets the footer.php file and renders it ?>
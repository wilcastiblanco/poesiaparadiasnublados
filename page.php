<?php
/**
 * The template for displaying any single page.
 *
 */

define( 'WP_USE_THEMES', false ); get_header(); // This fxn gets the header.php file and renders it ?>
<primary>
	soy page default
	<main>
		<?php include 'includes/inc-privacy.php';
			//Incluye ultimos posts
		?>
	</main>
<primary> <!-- end primay -->
<?php get_footer(); // This fxn gets the footer.php file and renders it ?>
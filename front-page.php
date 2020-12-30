<?php 
/**
 * 	Template Name: Sidebar/Home Page
 *
 *	This page template has a sidebar built into it, 
 * 	and can be used as a home page, in which case the title will not show up.
 *
*/
get_header(); // This fxn gets the header.php file and renders it ?>
<primary>
	<main>
		<?php include 'carousel.php';
			//Incluye carousel
		?>
		<?php include 'lastest-posts.php';
			//Incluye ultimos posts
		?>
	</main>
<primary> <!-- end primay -->
<?php get_footer(); // This fxn gets the footer.php file and renders it ?>
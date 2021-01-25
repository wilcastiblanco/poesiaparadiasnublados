<?php
/**
 * The template for displaying any single post.
 *
 */

define( 'WP_USE_THEMES', false ); get_header(); // This fxn gets the header.php file and renders it ?>
<primary>
single-podcast.php
	<main class="mt-5">
		<div class="row">
			<article class="box-main-article single-art col-8">
				<div class="art-social">
					<?php include 'includes/inc-single-podcast.php';
					//Incluye carousel?>
				</div>
			</article><!-- article -->
			<div class="sidebar sidebar-single col-2">
				<?php get_sidebar(); ?>
			</div><!-- #sidebar -->
		</div><!-- row -->
	</main>
<primary> <!-- end primay -->
<?php get_footer(); ?>
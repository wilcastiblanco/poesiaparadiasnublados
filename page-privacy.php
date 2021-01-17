<?php
/*
Template Name: Privacy
*/


define( 'WP_USE_THEMES', false ); get_header(); // This fxn gets the header.php file and renders it ?>
<primary>
	<main class="mt-5">
		<div class="row">
			<article class="box-main-article single-art col-8">
				<div class="art-social container">
					<?php include 'includes/inc-privacy.php';
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

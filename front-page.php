<?php 
/**
 * 	Template Name: Sidebar/Home Page
 *
 *	This page template has a sidebar built into it, 
 * 	and can be used as a home page, in which case the title will not show up.
 *
*/
get_header(); // This fxn gets the header.php file and renders it ?>
<div id="primary">
	<div id="content" role="main" class="span8">
		<?php if ( have_posts() ) : 
		// Do we have any posts/pages in the databse that match our query?
		?>
			<?php while ( have_posts() ) : the_post(); 
			// If we have a page to show, start a loop that will display it
			?>

	<main class="">
		<div class="ultimos-podcasts contenedor">
			<div class="contenedor-titulo-controles">
				<h3>ULTIMOS PODCAST</h3>
				<div class="indicadores">
				</div>
			</div>

			<div class="contenedor-principal">
				<button role="button" id="flecha-izquierda" class="btn flecha-izquierda"><i class="fas fa-angle-left"></i></button>

				<div class="contenedor-carousel">
					<div class="carousel">
						<div class="last-podcast">
							<a href="#">
								<img src="<?php echo get_template_directory_uri()?>/img/1.png" alt="">
							</a>
						</div>
						<div class="last-podcast">
							<a href="#">
							<img src="<?php echo get_template_directory_uri()?>/img/2.png" alt="">
							</a>
						</div>
						<div class="last-podcast">
							<a href="#">
							<img src="<?php echo get_template_directory_uri()?>/img/3.png" alt="">
							</a>
						</div>
						<div class="last-podcast">
							<a href="#">
							<img src="<?php echo get_template_directory_uri()?>/img/4.png" alt="">
							</a>
						</div>
						<div class="last-podcast">
							<a href="#">
							<img src="<?php echo get_template_directory_uri()?>/img/5.png" alt="">
							</a>
						</div>
						<div class="last-podcast">
							<a href="#">
							<img src="<?php echo get_template_directory_uri()?>/img/2.png" alt="">
							</a>
						</div>
						<div class="last-podcast">
							<a href="#">
							<img src="<?php echo get_template_directory_uri()?>/img/3.png" alt="">
							</a>
						</div>
						<div class="last-podcast">
							<a href="#">
							<img src="<?php echo get_template_directory_uri()?>/img/4.png" alt="">
							</a>
						</div>
						<div class="last-podcast">
							<a href="#">
							<img src="<?php echo get_template_directory_uri()?>/img/5.png" alt="">
							</a>
						</div>
						<div class="last-podcast">
							<a href="#">
							<img src="<?php echo get_template_directory_uri()?>/img/3.png" alt="">
							</a>
						</div>
						<div class="last-podcast">
							<a href="#">
							<img src="<?php echo get_template_directory_uri()?>/img/4.png" alt="">
							</a>
						</div>
						<div class="last-podcast">
							<a href="#">
							<img src="<?php echo get_template_directory_uri()?>/img/5.png" alt="">
							</a>
						</div>
						<div class="last-podcast">
							<a href="#">
								<img src="<?php echo get_template_directory_uri()?>/img/3.png" alt="">
							</a>
						</div>
						<div class="last-podcast">
							<a href="#">
							<img src="<?php echo get_template_directory_uri()?>/img/4.png" alt="">
							</a>
						</div>
						<div class="last-podcast">
							<a href="#">
							<img src="<?php echo get_template_directory_uri()?>/img/5.png" alt="">
							</a>
						</div>
						<div class="last-podcast">
							<a href="#">
							<img src="<?php echo get_template_directory_uri()?>/img/3.png" alt="">
							</a>
						</div>
						<div class="last-podcast">
							<a href="#">
							<img src="<?php echo get_template_directory_uri()?>/img/4.png" alt="">
							</a>
						</div>
						<div class="last-podcast">
							<a href="#">
							<img src="<?php echo get_template_directory_uri()?>/img/5.png" alt="">
							</a>
						</div>
						<div class="last-podcast">
							<a href="#">
								<img src="<?php echo get_template_directory_uri()?>/img/3.png" alt="">
							</a>
						</div>
					</div>
				</div>

				<button role="button" id="flecha-derecha" class="btn flecha-derecha"><i class="fas fa-angle-right"></i></button>
			</div>
		</div>
	</main>
				<?php endwhile; // OK, let's stop the page loop once we've displayed it ?>

			<?php else : // Well, if there are no posts to display and loop through, let's apologize to the reader (also your 404 error) ?>
				
				<article class="post error">
					<h1 class="404">Nothing has been posted like that yet</h1>
				</article>

			<?php endif; // OK, I think that takes care of both scenarios (having a page or not having a page to show) ?>
		</div><!-- #content .site-content -->
		<div id="sidebar" role="sidebar" class="span4">
			<?php get_sidebar(); // This will display whatever we have written in the sidebar.php file, according to admin widget settings ?>
		</div><!-- #sidebar -->
	</div><!-- #primary .content-area -->
<?php get_footer(); // This fxn gets the footer.php file and renders it ?>
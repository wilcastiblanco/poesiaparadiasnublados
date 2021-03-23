<?php
	/*-----------------------------------------------------------------------------------*/
	/* This template will be called by all other template files to finish 
	/* rendering the page and display the footer area/content
	/*-----------------------------------------------------------------------------------*/
?>

<footer class="site-footer ">
	<div class="site-info">
	<?php wp_nav_menu( array( 'theme_location' => 'footer_menu' ) ); ?>
		<p>“El único verdadero viaje de descubrimiento consiste
			no en buscar nuevos paisajes, sino en mirar con nuevos ojos.” <br>
			<small>Marcel Proust</small>
		</p>
	</div><!-- .site-info -->
	<div class="foot">
		<p>
			<small>diseñado por: 
				<a href="https://www.mutacionessonoras.com/" target=”_blank”>
					<img src="<?php echo get_template_directory_uri();?>/img/virallab.svg" height="28px" margin-bottom="50px" alt=""> 
				</a> ®
			</small>
		</p>
	</div>

<?php wp_footer(); ?>

</body>
</html>

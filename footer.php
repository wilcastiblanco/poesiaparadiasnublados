<?php
	/*-----------------------------------------------------------------------------------*/
	/* This template will be called by all other template files to finish 
	/* rendering the page and display the footer area/content
	/*-----------------------------------------------------------------------------------*/
?>

<footer class="site-footer ">
	<div class="form-footer" style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/img-footer.png')">
		<div class="suscript form-foot">
			<h3>Suscríbete a nuestra lista</h3>
			<form class="">
				<div class="in-but">
					<input class="form-control" type="search" placeholder="Ingresa aquí tu correo" aria-label="Search">
					<button class="btn button" type="submit">Enviar</button>
				</div>
			</form>
		</div>
	</div>
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
</footer><!-- #colophon .site-footer -->

<?php wp_footer(); ?>

</body>
</html>

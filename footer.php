<?php
	/*-----------------------------------------------------------------------------------*/
	/* This template will be called by all other template files to finish 
	/* rendering the page and display the footer area/content
	/*-----------------------------------------------------------------------------------*/
?>

<footer class="site-footer ">
	<div class="form-footer" style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/img-footer.png')">

	</div>
	<div class="site-info">
		<ul>
			<li><a href="">Sobre Pesía</a></li>
			<li><a href="">Contacto</a></li>
			<li><a href="">Políticas</a></li>
		</ul>
		<p>“El único verdadero viaje de descubrimiento consiste <br>
			no en buscar nuevos paisajes, sino en mirar con nuevos ojos.” <br>
			Marcel Proust
		</p>
	</div><!-- .site-info -->
	<div class="foot">
		<h5>diseñado por: </h5>
	</div>
</footer><!-- #colophon .site-footer -->

<?php wp_footer(); 

?>

</body>
</html>

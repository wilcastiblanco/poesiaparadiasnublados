
<div class="carousel">
	<div class="ultimos-podcasts contenedor">
		<div class="contenedor-titulo-controles">
			<h1>ULTIMOS PODCAST</h1>
			<div class="indicadores">
			</div>
		</div>

		<div class="contenedor-principal">
			<button role="button" id="flecha-izquierda" class="btn flecha-izquierda"><i class="fas fa-angle-left"></i></button>
			<div class="contenedor-carousel">
				<?php PDN_Podcasts_post_types (); ?>
			</div>
			<button role="button" id="flecha-derecha" class="btn flecha-derecha"><i class="fas fa-angle-right"></i></button>
		</div>
	</div>
</div>
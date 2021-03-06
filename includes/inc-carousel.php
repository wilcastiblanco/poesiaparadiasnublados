<div class="carousel">
	<div class="ultimos-podcasts contenedor">
		<div class="contenedor-titulo-controles">
			<h1>PODCASTS RECIENTES</h1>
			<div class="indicadores">
			</div>
		</div>

		<div class="contenedor-principal">
			<button role="button" id="flecha-izquierda" class="btn flecha-izquierda"><i class="fas fa-angle-left"></i></button>
			<div class="contenedor-carousel">

<!-- Query Carousel -->
				
					<?php if ( have_posts() ) :?>
						<div class="carousel">

							<?php $args = array (
								'post_type' => 'podcast',
								'posts_per_page' => 10,
								'order' => 'ACS',
								'order' => 'title',
							);  ?>
								<?php $query1 = new WP_Query($args); ?>
								<?php while ( $query1->have_posts() ): $query1->the_post(); ?>
								<div class="cont-pod-car">
									<div class="last-podcast">
										<a href="<?php the_permalink() ?>">
											<?php the_post_thumbnail('podcast'); ?>
										</a>
									</div>
									<div class="title-last-podcast">
										<h2 >
											
												<?php the_title() ?>
											
										</h2>
									</div>
								</div>
							<?php endwhile; wp_reset_postdata(); ?>
						</div>
					</div>
                    <?php endif; ?>

			<button role="button" id="flecha-derecha" class="btn flecha-derecha"><i class="fas fa-angle-right"></i></button>
		</div>
	</div>
</div>
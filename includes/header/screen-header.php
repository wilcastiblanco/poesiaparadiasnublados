<!-- Heather for Screen -->
<header id="masthead" class="screen d-none d-md-block">
	<div class="nav-top">
	<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$pdn_description = get_bloginfo( 'description', 'display' );
			if ( $pdn_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $pdn_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<div class="suscript">
			<h3>Suscríbete a nuestra lista</h3>
			<form class="">
			<div class="in-but">
				<input class="form-control" type="search" placeholder="Ingresa aquí tu correo" aria-label="Search">
				<button class="btn" type="submit">Enviar</button>
			</div>
			</form>
		</div>
		
		<div class="burger">
			<div class="line1"></div>
			<div class="line2"></div>
			<div class="line3"></div>
		</div>
	</div>
	<div class="nav-button">
		<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
		?>

		<div class="nav-search">
			<a href=""><i class="fas fa-search"></i></a>
		</div>
	</div>
</header>
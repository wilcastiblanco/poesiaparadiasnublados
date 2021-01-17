<div class="contenido-post col-11">
<?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <?php the_post_thumbnail('destacada'); ?>
            <h2 class="title"><?php the_title(); ?></h2>

            <div class="the-content">
                <?php the_content(); ?>
                <?php wp_link_pages(); ?>
			</div><!-- the-content -->
			
        <?php endwhile; ?> 
        <?php
        if ( comments_open() || '0' != get_comments_number() )
        comments_template( '', true );
        //Comentarios?>
        <?php else : ?>
        <div class="post error">
            <h1 class="404">Nothing has been posted like that yet</h1>
        </div><!-- /post error -->
        <?php endif;?>
    </div><!--/contenido-post -->
<div class="side-social col-1">
    <div class="caja-social">
        <a href=""><i class="fab fa-facebook-f"></i></a>
        <a href=""><i class="fab fa-instagram"></i></a>
        <a href=""><i class="fab fa-spotify"></i></a>
    </div>
</div><!-- side-social -->
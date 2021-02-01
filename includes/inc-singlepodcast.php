<div class="single-article">
    <div class="posts-container container">
    inc-singlepodcast.php
    <?php 
    if ( have_posts() ) : ?>

        <?php while ( have_posts() ) : the_post(); ?>

            <article class="post">
                <div class="row">
                    <div class="post-container col-11">
                        <a class="d-block d-md-none" href="<?php the_permalink() ?>" target=”_blank”>
                            <?php the_post_thumbnail('podcast'); ?>
                        </a>
                        <a class="d-none d-md-block" href="<?php the_permalink() ?>">
                            <?php the_post_thumbnail( 'podcast', array( 'class' => 'img-fluid' )); //Get the thumbnail to this post. ?>
                        </a>
                        <div class="text-post">

                            <?php if (!is_front_page()) : ?>
                                <h1 class="title">
                                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </h1>
                            <?php endif; ?>
        
                            <div class="post-meta">
                                    <p> fecha: <?php the_time('m/d/Y'); ?> | Autor: <?php the_author('archive'); ?></p>
                                </div><!-- post-meta -->

                            <div class="the-content">
                                <?php the_content(); ?>
                                <?php wp_link_pages(); ?>
                            </div><!-- the-content -->


                        </div><!-- text-post -->
                    </div> <!-- post-container -->
        
                    <div class="side-social col-1">
                        <div class="caja-social">
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                            <a href=""><i class="fab fa-spotify"></i></a>
                        </div><!-- caja-social - incluye links para redes sociales -->
                    </div><!-- side-social -->
                </div> <!-- row -->
            </article> <!-- post -->

        <?php endwhile; ?>

    <?php endif; ?>

    </div><!-- posts-container -->

    <div id="pagination" class="clearfix">
        <div class="btn btn-primary past-page"><?php previous_posts_link( 'newer' ); // Display a link to  newer posts, if there are any, with the text 'newer' ?></div>
        <div class="btn btn-primary next-page"><?php next_posts_link( 'older' ); // Display a link to  older posts, if there are any, with the text 'older' ?></div>
    </div><!-- pagination -->

</div> <!-- single-article -->
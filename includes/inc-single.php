<div class="single-article">
    <div class="posts-container container">
    <?php 
    if ( have_posts() ) : ?>

        <?php while ( have_posts() ) : the_post(); ?>

            <article class="post">
                <div class="row">
                    <div class="post-container col-11">
                        <?php if (!is_front_page()) : ?>
                            <h1 class="title">
                                <?php the_title(); ?>
                            </h1>
                        <?php endif; ?>
                        <div class="d-block d-md-none" href="<?php the_permalink() ?>" target=”_blank”>
                            <?php the_post_thumbnail('destacada-sm'); ?>
                        </div>
                        <div class="d-none d-md-block" href="<?php the_permalink() ?>">
                            <?php the_post_thumbnail( 'single-thumbnail', array( 'class' => 'img-fluid' )); //Get the thumbnail to this post. ?>
                        </div>
                        <div class="text-post">

        
                            <div class="post-meta">
                                    <p> fecha: <?php the_time('m/d/Y'); ?> | Autor: <?php the_author('archive'); ?></p>
                                </div><!-- post-meta -->

                            <div class="the-excerpt">
                                <?php the_excerpt() ?>
                            </div><!-- the-excerpt -->                            
                            <div class="categoria d-flex mb-3">
                                <hr class="mr-2" width="100%">
                                <div class="category"><?php echo get_the_category_list(); // Display the categories this post belongs to, as links ?>
                                </div>
                                <div class="tags"><?php echo get_the_tag_list( '| &nbsp;', '&nbsp;' ); // Display the tags this post has, as links separated by spaces and pipes ?></div>
                            </div><!-- categoria -->

                            <div class="the-content">
                                <?php the_content(); ?>
                                <?php wp_link_pages(); ?>
                            </div><!-- the-content -->


                        </div><!-- text-post -->
                        <div id="pagination" class="clearfix">
                        <a class="btn btn-primary" href="<?php previous_posts_link('« Newer Entries', 'textdomain' );?>" role="button">anterior</a>
                        <a class="btn btn-primary" href="<?php next_posts_link( 'Older Entries »', 0 );?>" role="button">siguiente</a>
    </div><!-- pagination -->
                    </div> <!-- post-container -->
        
                    <div class="side-social col-1">
                    <div class="caja-social">
                            <a href="https://www.facebook.com/gloriagudelom/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://www.instagram.com/poesia_paradias_nublados/" target="_blank"><i class="fab fa-instagram"></i></a>
                            <a href="https://open.spotify.com/show/1Sx4Tu0UIhvWFoFCAOmsTn?si=Babg0a7YQ86H54mVZSAZsw" target="_blank"><i class="fab fa-spotify"></i></a>
                        </div><!-- caja-social - incluye links para redes sociales -->
                    </div><!-- side-social -->
                </div> <!-- row -->
            </article> <!-- post -->


        <?php endwhile; ?>

    <?php endif; ?>

    </div><!-- posts-container -->


</div> <!-- single-article -->
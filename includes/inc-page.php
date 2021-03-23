<div class="single-article">
    <div class="posts-container container">

        <article class="post">
            <div class="row">
                <div class="post-container col-11">
                <hr class="division" style="border-style: solid; margin: 0px 10px 40px 10px"/>

                        <?php if ( have_posts() ) : while (have_posts()): the_post(); ?>

                            <?php $args = array(
                                'post_type' => 'post',
                                // 'post_per_page' => 10,
                                'order' => 'ACS',
                                'order' => 'title',
                            ); ?>
                    <div class="row">
                    
                            <?php $query1 = new WP_Query($args); ?>
                            <?php while ( $query1 -> have_posts() ) : $query1 -> the_post(); ?>
                            <div class="articulo">
                            <a class="d-block d-md-none" href="<?php the_permalink() ?>" target=”_blank”>
                                <?php the_post_thumbnail('destacada-sm2'); ?>
                            </a>
                            <a class="d-none d-md-block" href="<?php the_permalink() ?>">
                                <?php the_post_thumbnail('destacada-sm2'); //Get the thumbnail to this post. ?>
                            </a>
                            <div class="text-post">
    
                                <?php if (!is_front_page()) : ?>
                                    <h2 class="title mb-1">
                                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                            <?php the_title(); ?>
                                        </a>
                                    </h2>
                                <?php endif; ?>
            
                                <div class="post-meta">
                                    <p> fecha: <?php the_time('m/d/Y'); ?> | Autor: <?php the_author('archive'); ?></p>
                                </div><!-- post-meta -->
    
                                <div class="the-excerpt">
                                    <?php the_excerpt() ?>
                                </div><!-- the-excerpt -->
                                <a class="go" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                    Ir al artículo <i>⎘ →</i>
                                </a>
    
                                <div class="categoria d-flex">
                                    <hr class="mr-2" width="100%">
                                    <div class="category"><?php echo get_the_category_list(); // Display the categories this post belongs to, as links ?>
                                    </div>
                                    <div class="tags"><?php echo get_the_tag_list( '| &nbsp;', '&nbsp;' ); // Display the tags this post has, as links separated by spaces and pipes ?></div>
                                </div><!-- categoria -->
    
                            </div><!-- text-post -->
                        </div>
                        <?php endwhile; wp_reset_postdata(); ?>
                    </div> <!-- row -->
                        <?php endwhile;?>
                
                    <?php endif; ?>

                    </div> <!-- post-container -->
        
                    <div class="side-social col-1">
                    <div class="caja-social">
                            <a href="https://www.facebook.com/gloriagudelom/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://www.instagram.com/poesia_paradias_nublados/" target="_blank"><i class="fab fa-instagram"></i></a>
                            <a href="https://open.spotify.com/show/1Sx4Tu0UIhvWFoFCAOmsTn?si=Babg0a7YQ86H54mVZSAZsw" target="_blank"><i class="fab fa-spotify"></i></a>
                        </div><!-- caja-social - incluye links para redes sociales -->
                    </div><!-- side-social -->
            </div> <!-- row 1 -->
        </article> <!-- post -->

    </div><!-- posts-container -->

    <div id="pagination" class="clearfix">
        <a href="<?php previous_posts_link('« Newer Entries', 'textdomain' );?>">Artículos Anteriores</a>
        <a href="<?php next_posts_link( 'Older Entries »', 0 );?>">Siguientes Artículos</a>
    </div><!-- pagination -->

</div> <!-- single-article -->
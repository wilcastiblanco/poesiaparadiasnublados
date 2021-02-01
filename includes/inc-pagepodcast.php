<div class="page-podcast">
    <div class="podcasts-container container">
        <article class="article-podcast">
            <div class="row">
                <div class="podcast-container col-11">
                <hr class="division" style="border-style: solid; margin: 0px 10px 40px 10px"/>

                        <?php if ( have_posts() ) : while (have_posts()): the_post(); ?>

                        <?php $args = array (
								'post_type' => 'podcast',
								'posts_per_page' => 10,
								'order' => 'ACS',
								'order' => 'title',
							);  ?>
                    <div class="row">
                    
                            <?php $query2 = new WP_Query($args); ?>
                            <?php while ( $query2 -> have_posts() ) : $query2 -> the_post(); ?>
                            <div class="articulo">
                            <a class="d-block d-md-none" href="<?php the_permalink() ?>" target=”_blank”>
                                <?php the_post_thumbnail('podcast'); ?>
                            </a>
                            <a class="d-none d-md-block" href="<?php the_permalink() ?>">
                                <?php the_post_thumbnail('podcast'); //Get the thumbnail to this post. ?>
                            </a>
                            <div class="text-post">
    
                                <?php //if (!is_front_page()) : ?>
                                    <h2 class="title">
                                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                            <?php the_title(); ?>
                                        </a>
                                    </h2>
                                <?php //endif; ?>
            
                                <!-- <div class="post-meta">
                                    <p> fecha: <?php the_time('m/d/Y'); ?> | Autor: <?php the_author('archive'); ?></p>
                                </div>post-meta -->
    
                                <div class="the-excerpt">
                                    <?php the_excerpt() ?>
                                </div><!-- the-excerpt -->
    
                                <div class="categoria d-flex">
                                    <div class="tags"><?php echo get_the_tag_list( '| &nbsp;', '&nbsp;' ); // Display the tags this post has, as links separated by spaces and pipes ?></div>
                                </div><!-- categoria -->
                                
                            </div><!-- text-post -->
                        </div>
                        <hr class="" width="100%">
                        <?php endwhile; wp_reset_postdata(); ?>
                    </div> <!-- row -->
                        <?php endwhile;?>
                
                    <?php endif; ?>

                    </div> <!-- post-container -->
        
                    <div class="side-social col-1">
                        <div class="caja-social">
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                            <a href=""><i class="fab fa-spotify"></i></a>
                        </div><!-- caja-social - incluye links para redes sociales -->
                    </div><!-- side-social -->
            </div> <!-- row 1 -->
        </article> <!-- post -->

    </div><!-- posts-container -->

    <div id="pagination" class="clearfix">
        <div class="btn btn-primary past-page"><?php previous_posts_link( 'newer' ); // Display a link to  newer posts, if there are any, with the text 'newer' ?></div>
        <div class="btn btn-primary next-page"><?php next_posts_link( 'older' ); // Display a link to  older posts, if there are any, with the text 'older' ?></div>
    </div><!-- pagination -->

</div> <!-- single-article -->
<?php
    function PDN_podcasts_post_types() { ?>
            <div class="carousel">
                soy query
                <?php
                    $args = array (
                        'post_type' => 'PDN_Podcasts',
                        'posts_per_page' => 10
                    );
                    $clases = new WP_Query($args);
                    while ( $clases->have_posts() ): $clases->the_post(''); ?>
                        <div class="last-podcast">
                            <a href="<?php the_permalink() ?>">
                                <?php the_post_thumbnail('destacada-podcast'); //Get the thumbnail to this post. ?>
                            </a>
                        </div>
                <?php endwhile; wp_reset_postdata(); ?>
                
            </div>
        <?php
        }
        
        
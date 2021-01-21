<?php
    function PDN_page_podcasts_post_types() { ?>
            <div class="podcasts">
                <?php
                    $args = array (
                        'post_type' => 'podcasts',
                        'posts_per_page' => 10
                    );
                    $clases = new WP_Query($args);
                    while ( $clases->have_posts() ): $clases->the_post(); ?>
                    <div class="cont-pod-car">
                        <div class="last-podcast">
                            <a href="<?php the_permalink() ?>">
                                <?php the_post_thumbnail('podcast'); ?>
                            </a>
                        </div>
                        <div class="tittle-last-podcast">
                            <h2 >
                                
                                    <?php the_title() ?>
                                
                            </h2>
                        </div>
                    </div>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>
        <?php
        }




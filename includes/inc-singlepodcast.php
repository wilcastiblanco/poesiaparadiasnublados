<div class="page-podcast">
    <div class="podcasts-container container">
        <article class="article-podcast">
            <div class="row">
                <div class="podcast-container col-11">
                <!-- <hr class="division" style="border-style: solid; margin: 0px 10px 40px 10px"/> -->
                <?php if ( have_posts() ) : ?>

                    <?php while ( have_posts() ) : the_post(); ?>

                    <div class="row">

                            <div class="articulo">
                                <?php the_post_thumbnail('podcast'); //Get the thumbnail to this post. ?>
                            <div class="text-post">

                            <?php //if (!is_front_page()) : ?>
                                    <h2 class="title mb-0">
                                            <?php the_title(); ?>
                                    </h2>
                                    <div class="tax-autor mb-3">                                 
                                        <?php
                                            $terms = get_the_terms( $post->ID , 'autor' );
                                                foreach ( $terms as $term ) {
                                                echo "<a href='" . $termino->slug . "'>" . $term->name . "</a>";
                                            }
                                        ?>
                                    </div>
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
                        <div class="col-12"><?php the_field('embed_podcast'); ?></div>
                    </div> <!-- row -->
                                    
                    <?php endwhile; ?>
                <?php endif; ?>

                <div class="side-social col-1">
                    <div class="caja-social">
                        <a href=""><i class="fab fa-facebook-f"></i></a>
                        <a href=""><i class="fab fa-instagram"></i></a>
                        <a href=""><i class="fab fa-spotify"></i></a>
                    </div><!-- caja-social - incluye links para redes sociales -->
                </div><!-- side-social -->
            </div> <!-- row -->
        </article> <!-- post -->
    </div><!-- posts-container -->
</div> <!-- single-article -->
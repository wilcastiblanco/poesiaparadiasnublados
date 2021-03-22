<div class="page-podcast">
    <div class="podcasts-container container">
        <article class="article-podcast">
            <div class="row row-out">
                <div class="podcast-container single-podcast art-social col-11">

                    <?php if ( have_posts() ) : ?>
                        <?php while ( have_posts() ) : the_post(); ?>

                        <div class="row row-in">

                            <div class="articulo">
                                <?php 
                                    the_post_thumbnail('podcast');
                                    //Imágen Destacada Podcast
                                ?>
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
                                        </div> <!-- tax-autor -->
                                    <?php //endif; ?>
                                    <div class="the-excerpt">
                                        <?php the_excerpt() ?>
                                    </div><!-- the-excerpt -->
                                    <div class="categoria d-flex">
                                        <div class="tags">
                                            <?php echo get_the_tag_list( '| &nbsp;', '&nbsp;' ); ?>
                                        </div>
                                    </div><!-- categoria -->
                                </div><!-- text-post -->
                            </div> <!-- articulo -->
                            <hr class="" width="100%">
                            <div class="field col-12">
                                <?php 
                                    the_field('embed_podcast'); 
                                    //Incrustar Podcast de Spotify
                                ?>
                            </div> <!-- field -->
                            <div class="field notas col-12">
                            <h2>Notas del podcast</h2>
                                <?php 
                                    the_field('notal_del_podcast'); 
                                    //Incrustar Podcast de Spotify
                                ?>
                            </div> <!-- field -->

                        </div> <!-- row row-in-->
                                        
                        <?php endwhile; ?>
                    <?php endif; ?>

                </div> <!-- podcast-container single-podcast -->
                <div class="side-social col-1">
                <div class="caja-social">
                            <a href="https://www.facebook.com/gloriagudelom/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://www.instagram.com/poesia_paradias_nublados/" target="_blank"><i class="fab fa-instagram"></i></a>
                            <a href="https://open.spotify.com/show/1Sx4Tu0UIhvWFoFCAOmsTn?si=Babg0a7YQ86H54mVZSAZsw" target="_blank"><i class="fab fa-spotify"></i></a>
                        </div><!-- caja-social - incluye links para redes sociales -->
                </div><!-- side-social -->
            </div> <!-- row row-out -->
        </article> <!-- article-podcast -->
    </div><!-- podcasts-container -->
</div> <!-- page-podcast -->
<div class="single-article">
    <div class="posts-container container">
    <?php 
    if ( have_posts() ) : ?>

        <?php while ( have_posts() ) : the_post(); ?>

            <article class="post">
                <div class="row">
                    <div class="post-container col-11">
                        <div class="text-post">

                            <?php if (!is_front_page()) : ?>
                                <h1 class="title">
                                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </h1>
                            <?php endif; ?>
                            
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
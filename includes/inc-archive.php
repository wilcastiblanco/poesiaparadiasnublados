<div class="single-article">
    <div class="posts-container container">

    <?php 
    $the_query = new WP_Query( array( 'posts_per_page' => 10,'offset' => 0 ) ); 
    if ( have_posts() ) : ?>

        <?php while ( $the_query -> have_posts() ) : $the_query -> the_post(); ?>

            <article class="post">
            <hr class="division" style="border-style: solid; margin: 0px 10px 40px 10px"/>
                <div class="post-container">
                    <a class="d-block d-md-none" href="<?php the_permalink() ?>" target=”_blank”>
                        <?php the_post_thumbnail('destacada-sm'); ?>
                    </a>
                    <a class="d-none d-md-block" href="<?php the_permalink() ?>">
                        <?php the_post_thumbnail('destacada'); ?>
                    </a>
                    <div class="text-post">
                    <?php if (!is_front_page()) : ?>

                        <h2 class="title">
                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h2>
                    
                        <?php endif; ?>

                        <div class="post-meta">
                            <?php the_time('m/d/Y'); ?> | 
                            <?php if( comments_open() ) : ?>
                                <span class="comments-link">
                                    <?php comments_popup_link( __( 'Comment', 'break' ), __( '1 Comment', 'break' ), __( '% Comments', 'break' ) ); ?>
                                </span>
                            <?php endif; ?>
                        
                        </div><!--post-meta -->
                        
                        <div class="the-content">
                            <?php the_excerpt(); ?>
                            <?php wp_link_pages(); ?>
                        </div><!-- the-content -->
            
                        <div class="categoria d-flex">
                            <hr class="mr-2" width="100%">
                            <div class="category"><?php echo get_the_category_list(); ?>
                            </div>
                            <div class="tags"><?php echo get_the_tag_list( '| &nbsp;', '&nbsp;' ); // Display the tags this post has, as links separated by spaces and pipes ?></div>
                        </div><!-- categoria -->
                    </div><!-- text-post -->
                </div> <!-- post-container -->
                <hr class="division" style="border-style: solid; margin: 40px 10px 0px 10px"/>
            </article> <!-- post -->

        <?php endwhile; ?>

    <?php endif; ?>

    </div><!-- posts-container -->

    <div id="pagination" class="clearfix">
        <div class="btn btn-primary past-page"><?php previous_posts_link( 'newer' ); // Display a link to  newer posts, if there are any, with the text 'newer' ?></div>
        <div class="btn btn-primary next-page"><?php next_posts_link( 'older' ); // Display a link to  older posts, if there are any, with the text 'older' ?></div>
    </div><!-- pagination -->

</div> <!-- single-article -->
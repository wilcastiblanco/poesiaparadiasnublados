<div class="lastests">
    <!-- soy lastest
    <h1>ULTIMAS ENTRADAS</h1> -->
    <div class="posts-container container">

<?php 
    $the_query = new WP_Query( array( 'posts_per_page' => 5,'offset' => 0 ) ); 
    if ( have_posts() ) : ?>
    <?php while ( $the_query -> have_posts() ) : $the_query -> the_post(); ?>

        <article class="post">
            <hr class="division" style="border-style: solid; margin: 0px 10px 40px 10px"/>
            <div class="post-container">
                <a class="d-block d-md-none" href="<?php the_permalink() ?>" target=”_blank”>
                    <?php the_post_thumbnail('destacada-sm'); //Get the thumbnail to this post. ?>
                </a>
                <a class="d-none d-md-block" href="<?php the_permalink() ?>">
                    <?php the_post_thumbnail('destacada'); //Get the thumbnail to this post. ?>
                </a>
                <div class="text-post">
                <?php if (!is_front_page()) : // Only if this page is NOT being used as a home page, display the title ?>

                    <h2 class="title">
                        <a href="<?php the_permalink(); // Get the link to this post ?>" title="<?php the_title(); ?>">
                            <?php the_title(); // Show the title of the posts as a link ?>
                        </a>
                    </h2>
                
                    <?php endif; ?>

                    <div class="post-meta">
                        <?php the_time('m/d/Y'); // Display the time published ?> | 
                        <?php if( comments_open() ) : // If we have comments open on this post, display a link and count of them ?>
                            <span class="comments-link">
                                <?php comments_popup_link( __( 'Comment', 'break' ), __( '1 Comment', 'break' ), __( '% Comments', 'break' ) ); 
                                // Display the comment count with the applicable pluralization
                                ?>
                            </span>
                        <?php endif; ?>
                    
                    </div><!--post-meta -->
                    
                    <div class="the-content">
                        <?php the_excerpt(); 
                        // This call the main content of the post, the stuff in the main text box while composing.
                        // This will wrap everything in p tags and show a link as 'Continue...' where/if the
                        // author inserted a <!-- more --> link in the post body
                        ?>
                        
                        <?php wp_link_pages(); // This will display pagination links, if applicable to the post ?>
                    </div><!-- the-content -->
        
                    <div class="categoria d-flex">
                        <hr class="mr-2" width="100%">
                        <div class="category"><?php echo get_the_category_list(); // Display the categories this post belongs to, as links ?>
                        </div>
                        <div class="tags"><?php echo get_the_tag_list( '| &nbsp;', '&nbsp;' ); // Display the tags this post has, as links separated by spaces and pipes ?></div>
                    </div><!-- categoria -->
                </div><!-- text-post -->
            </div> <!-- post-container -->
            <hr class="division" style="border-style: solid; margin: 40px 10px 0px 10px"/>
        </article>

    <?php endwhile; // OK, let's stop the posts loop once we've exhausted our query/number of posts ?>

<?php endif; // OK, I think that takes care of both scenarios (having posts or not having any posts) ?>
</div><!-- #content .site-content -->

    <!-- pagintation -->
    <div id="pagination" class="clearfix">
        <div class="btn btn-primary past-page"><?php previous_posts_link( 'newer' ); // Display a link to  newer posts, if there are any, with the text 'newer' ?></div>
        <div class="btn btn-primary next-page"><?php next_posts_link( 'older' ); // Display a link to  older posts, if there are any, with the text 'older' ?></div>
    </div><!-- pagination -->
</div>
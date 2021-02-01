<?php 
/**
 * 	Template Name: About
 *
*/
get_header(); ?>
<primary>
	<main class="container">

        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>

                <article class="mt-5 mb-5">
                    <div class="container about mt-5 mb-5">
                            <h2 class="title">
                                <?php the_title(); ?>
                            </h2>
                        <div class="row container-about mt-5">
                            <div class="the-content col-8">
                                <?php the_content(); ?>
                            </div>
                            <div class="destacada-about col-4">
                                <?php the_post_thumbnail(''); ?>
                            </div>
                        </div><!-- container-about -->
                        <h2 class="title mt-5">
                            Equipo
                        </h2>
                        <div class="container equip row mt-5 mb-5">
                            <div class="equip1">
                                Gloria Agudelo <br>
                                Contenidos digitales y podcasts <br>
                                Editora
                            </div>
                            <div class="equip2">
                                Wil Castiblanco <br>
                                Diseño y desarrollo web <br>
                                Producción de audio
                            </div>
                        </div>
                    </div> <!-- about -->
                </article>

            <?php endwhile; // OK, let's stop the posts loop once we've exhausted our query/number of posts ?>

            <?php else : // Well, if there are no posts to display and loop through, let's apologize to the reader (also your 404 error) ?>
                <article class="post error">
                    <h1 class="404">Nothing has been posted like that yet</h1>
                </article>
            <?php endif; // OK, I think that takes care of both scenarios (having posts or not having any posts) ?>

	</main>
<primary> <!-- end primay -->
<?php get_footer(); ?>
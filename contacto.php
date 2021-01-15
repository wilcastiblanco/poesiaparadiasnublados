<?php 
/**
 * 	Template Name: Contact
 *
*/
get_header(); ?>
<primary>
    soy contacto
	<main>

        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>

                <article class="contactanos pt-5 pb-5" style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/img-contact.png')">
                    <div class="contact container">
                        <div class="box-contact">
                            <div class="contacto">
                                <form class="contact-form">
                                    <h2 class="title">
                                        <?php the_title(); ?>
                                    </h2>
                                    <div class="in-group">
                                        <input type="name" class="form-control form-control-sm m-2" id="contactInput1" placeholder="¿Cómo te llamas?">
                                        <input type="email" class="form-control form-control-sm m-2" id="contactInput2" placeholder="Pon tu mejor correo">
                                        <input type="name" class="form-control form-control-sm m-2" id="contactInput3" placeholder="¿Qué poema quieres que lea para ti?">
                                        <textarea class="form-control form-control-sm m-2" id="exampleFormControlTextarea1" placeholder="Mensaje" rows="4"></textarea>
                                    </div>
                                </form>
                            </div><!-- contacto -->
                        </div><!-- box-contact -->
                    </div> <!-- contact -->
                </article>

            <?php endwhile; // OK, let's stop the posts loop once we've exhausted our query/number of posts ?>

            <?php else : // Well, if there are no posts to display and loop through, let's apologize to the reader (also your 404 error) ?>
                <article class="post error">
                    <h1 class="404">Nothing has been posted like that yet</h1>
                </article>
            <?php endif; // OK, I think that takes care of both scenarios (having posts or not having any posts) ?>

	</main>
<primary> <!-- end primay -->
<?php get_footer('contact'); ?>
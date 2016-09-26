<?php

/*
	Template Name: contact, No Sidebar
*/

get_header();  ?>

    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    	<div class="body-wrapper">
            <div class="main-container">
                <div class="contact">
                    <div class="contact-content">
                        <h2><?php the_title(); ?></h2>
                        <hr>
                        <div class="contact-info">
                            <?php the_field('contact-info'); ?>
                        </div>
                    </div>
                    <div class="contact-form">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
    	</div>

    <?php endwhile; // end the loop?>
  

<?php get_footer(); ?>
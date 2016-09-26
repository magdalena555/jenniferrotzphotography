<?php

/*
	Template Name: my story, No Sidebar
*/

get_header();  ?>

    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<div class="body-wrapper">
	        <div class="main-container">
				<div class="mystory">
					<?php $image = get_field('mystory-image'); ?>
					<div class="image-container">
						<div class=" mystoryimage" style="background-image: url('<?php echo $image['sizes'] ['mystory'] ; ?>');">
							<div class="green"></div>

						</div> 
							
					</div>
		              
					
					<div class="mystory-content">
		                <h2><?php the_field('mystory-title'); ?></h2>
		                <div class="mystory-text">
		                	<?php the_content(); ?>
		                </div>
						

					</div>


				</div>

	        </div> 

		</div>
        

    <?php endwhile; // end the loop?>
  

<?php get_footer(); ?>
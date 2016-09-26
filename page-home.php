<?php

/*
	Template Name: home, No Sidebar
*/

get_header();  ?>

    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<div class="main-container">
			
			<div class="bxslider-home">	
			
				<?php if( have_rows('home-slider') ): ?>

				 	<!-- This makes a image variable -->
				    <?php while ( have_rows('home-slider') ) : the_row();
				 		$image = get_sub_field('home-slider-images');
				 	?>
				 
					 	 	<div class="  hero-gallery" style="background-image: url('<?php echo $image['sizes'] ['hero'] ; ?>');">
					 			<div class="overlay">
					 			</div>
					 	 
					 	 	
					 	 		<div class="home-slider-titles">
					 	 			<h1><?php the_sub_field('home-slider-title'); ?></h1>
					 	 			<p><?php the_sub_field('home-slider-subtitle'); ?></p>
					 	 		</div>
					 	 						 	 		
					 	 	</div>

					 	 										 		

				 	<?php endwhile; ?> 

				<?php endif; ?>

			</div>

			<div class="green"></div>	
			<div class="arrows">
				<p><span id="slider-prev"></span> <span id="slider-next"></span></p>
			</div>
		</div>

    <?php endwhile; // end the loop?>
  

<?php get_footer(); ?>

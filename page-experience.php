<?php

/*
	Template Name: experience, No Sidebar
*/

get_header();  ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

	<div class="bxslider">	

	    <?php 
	        $params = array(
	            'post_per_page' => -1,
	            'post_type' => 'photo-portfolio', 
	            'orderby' => 'title'

	            );
	        // this passes the parameter
	        $onePageQuery = new WP_Query($params);

	        // This is a custom query loop
	        if($onePageQuery->have_posts()) while($onePageQuery->have_posts()) : $onePageQuery->the_post(); ?>
			<div class="experience">
				<div class="body-wrapper">
					<div class="main-container">	
					 	<div class="experience-container">
		 	 					<?php $image = get_field('experience-featured-image'); ?>
		 	 				
		 	 				<div class="image-container">
			 	 		        <div class="experience-gallery" style="background-image: url('<?php echo $image['sizes'] ['mystory'] ; ?>');">
			 	 		        	<div class="green"></div>
		 			 	 		</div> 
							
		 	 				</div>	

		 	 		 

		 					<div class="experience-content">
		 						<h2><?php the_field('experience-page-title'); ?></h2>
		 						<hr>
								<h3><?php the_title(); ?></h3>
								<div class="experience-text">
									<?php the_field('experience-paragraph'); ?>
								</div>
								<a class="" href="<?php the_field('portfolio-link'); ?>">
									<h4 class="button">
										view more
									</h4>
										
								</a>
		 					
		 					</div>	 	 		
					 	</div>
					 	 
					</div>		
				</div>
			</div>

	    <?php endwhile ?>
	</div>   
	<div class="arrows-wrapper">
		<div class="arrows">
		    <p><span id="slider-prev"> </span> <span id="slider-next"></span></p>
		</div>
	</div>  

<?php endwhile; // end the loop?>

<?php get_footer(); ?>
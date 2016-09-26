<?php

/*
	Template Name: portfolio, No Sidebar
*/

get_header();  ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

		<div class="main-container">

			<div class="portfolio-page">

				<h1>  <?php the_title(); ?></h1>

				<div class="portfolio-wrapper">
					
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



								<a href="<?php the_field('portfolio-link'); ?>">
									
									<?php $image = get_field('portfolio-page-thumbnail'); ?>


							 		<div class="portfolio-image-parent">
							 		
					 			 		<div class="portfoliopage-image" style="background-image: url('<?php echo $image['sizes'] ['portfolio-page-thumbnail'] ; ?>');">
					 			 		
					 						
											<p>  <?php the_title(); ?></p>
					 			 		</div>
					 			 		<div class="overlay">
					 			 			
					 			 		</div>
							 		</div> 
							 		
									
								</a>
								<div class="green"></div>
								

					    <?php endwhile ?>
				</div>	


			</div>
		</div>
	
<?php endwhile; // end the loop?>

<?php get_footer(); ?>
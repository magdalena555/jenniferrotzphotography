<?php // If there are no posts to display, such as an empty archive page ?>

<?php if ( ! have_posts() ) : ?>

	<article id="post-0" class="post error404 not-found">
		<h1 class="entry-title">Not Found</h1>
		<section class="entry-content">
			<p>Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.</p>
			<?php get_search_form(); ?>
		</section><!-- .entry-content -->
	</article><!-- #post-0 -->

<?php endif; // end if there are no posts ?>

<?php if (  $wp_query->max_num_pages > 1 ) : ?>
	

<?php endif; ?>

<?php // if there are posts, Start the Loop. ?>
<div class="main-container">
	<div class="blog-arrows">
		<p class="alignleft"><?php next_posts_link(' <i class="fa fa-arrow-right" aria-hidden="true"></i>'); ?></p>
		<p class="alignright"><?php previous_posts_link('<i class="fa fa-arrow-left" aria-hidden="true"></i>'); ?></p>
	</div>	
	<h2>Stories</h2>
	<div class="blog-parent">
		<?php while ( have_posts() ) : the_post(); ?>
		<div class="blog-item-wrapper">
			<a class="blog-item" href="<?php the_permalink(); ?>" title="Permalink to: <?php esc_attr(the_title_attribute()); ?>" rel="bookmark">
				<div class="image-container">
					
						<article class="post-content" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							
							<div class="blog-image" style="background-image: url('<?php the_post_thumbnail_url('blog-page'); ?>');">
								<div class="overlay">
									
								</div>
							</div> 	
							<div class="date-container">
								<div class="date">
									<h3><?php the_time('j'); ?></h3>
									<h4><?php the_time('M'); ?></h4>
								</div>
								<div class="date-circle"></div>
								<p class="title"><?php the_title(); ?></p>
							</div>
							<!--  -->
						</article>

					
				</div>
				<div class="green"></div>
				
			</a>
		</div>
		


					<?php comments_template( '', true ); ?>

		<?php endwhile; // End the loop. Whew. ?>
		<!-- <div class="green"></div>	 -->
	</div>
	
</div>


<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>
	<div class="body-wrapper">
		<section class="blog-main">
			<?php get_template_part( 'loop', 'index' );	?>
		</section>
	</div>
	

<?php get_footer(); ?>
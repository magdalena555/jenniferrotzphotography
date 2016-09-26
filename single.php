<?php get_header(); ?>

    <div class="body-wrapper">
        
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

          <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>  
              <div class="main-container">
                    <div class="blog-image" style="background-image: url('<?php the_post_thumbnail_url('blog-page'); ?>');">
                        <div class="green"></div>
                    </div>    
                    <div class="blog-right">
                        <div class="back">
                            <?php $page_id = 64; ?>
                            <a href="<?php echo get_permalink( $page_id ); ?>"> 
                              <i class="fa fa-arrow-left back" aria-hidden="true"><span> <p> back</p>  </span></i>
                            </a>
                        </div>
                        <div class="blog-single-content">
                            <div class="blog-heading">
                                <div class="date-container">
                                    <div class="date">
                                          <h3><?php the_time('j'); ?></h3>
                                          <h4><?php the_time('M'); ?></h4>
                                    </div>
                                    <div class="date-circle"></div>
                                </div>
                                <div class="blog-title">
                                    <h1 class="entry-title"><?php the_title(); ?></h1>
                                    <div class="tags">
                                          <?php
                                          echo get_the_tag_list('<p>',', ','</p>');
                                          ?>
                                    </div>
                                </div>
                                 
                            </div>
                        </div>

                        
                        <div class="entry-content">
                          <?php the_content(); ?>
                          <?php wp_link_pages(array(
                            'before' => '<div class="page-link"> Pages: ',
                            'after' => '</div>'
                          )); ?>
                        </div><!-- .entry-content -->
                      
                    
                    <?php 
                    $images = get_field('gallery');
                    // check to see if the field exist and is populated
                    // if gallery exist
                    $counter = 0;
                    if( $images ): ?>
                        <ul class="parent-container">
                            <?php foreach( $images as $image ): ?>
                                
                                <?php if ($counter == 0): ?>
                                    <a title="<?php the_title(); ?>"  href="<?php echo $image['sizes']['portfolio-popout']; ?>" class="blog-button">
                                        <h5 class="button">view more</h5>
                                    </a>
                                <?php else: ?>
                                    <a title="<?php the_title(); ?>"   href="<?php echo $image['sizes']['portfolio-popout']; ?>" class="blog-button hide"></a>
                                <?php endif; ?>
                            <?php $counter++ ?>
                        <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                       

                        <!-- parent container was here --> 
                        
                    </div> 
                </div>
              
            </div><!-- #post-## -->

        <?php endwhile; // end of the loop. ?>
    </div>

<?php get_footer(); ?>
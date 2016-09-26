<?php get_header(); ?>


    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <div class="single-portfolio single-portfolio-desktop">
            <div class="body-wrapper">
                <div class="main-container ">
                   
                    
                    <div class="title">
                        <h1>  <?php the_title(); ?></h1>
                        <?php $page_id = 10; ?>
                        <a href="<?php echo get_permalink( $page_id ); ?>"> 
                            <i class="fa fa-arrow-left back" aria-hidden="true"><span> <p> back</p>  </span></i>
                        </a>
                       
                        <div class="arrows">
                            <p><span id="slider-prev"> </span> <span id="slider-next"></span></p>
                        </div>
                    </div>
                    <div class="bx-container">
                        
                        <div class=" bxslider-desktop bxslider-portfolio parent-container ">  
                            
                            <!-- main-repeater         -->
                            <?php if( have_rows('gallery-main') ): ?>
                                <?php while( have_rows('gallery-main') ): the_row(); ?>

                                <div class="portfolio-image-parent">
                                    <?php $clickedImages = get_sub_field('gallery-thumbnail'); ?>
                                    
                                        <div id="<?php echo $clickedImages['id'] ?>" class="portfolio-gallery" style="background-image: url('<?php echo $clickedImages['url'] ; ?>')">
                                            <p><?php the_sub_field('gallery-title'); ?></p>
                                            <div class="overlay"></div>
                                        </div>
                                        
                                    
                                        <script>
                                            
                                            jQuery('#<?php echo $clickedImages['id']; ?>').magnificPopup({
                                                <?php $popupGalleryImages = get_sub_field('gallery-images'); ?>
                                                items: [
                                                <?php foreach( $popupGalleryImages as $image ): ?>
                                                  {
                                                    
                                                     src: '<?php echo $image['url'];?>',
                                                    
                                                     title: '<?php the_sub_field('gallery-title'); ?>'
                                                  },
                                                 <?php endforeach; ?>
                                                ],
                                                gallery: {
                                                  enabled: true
                                                },
                                                type: 'image' // this is a default type

                                            });
                                        </script>
        
                                </div>         
                   

                                <!-- end of sub reapeater                    -->

                            <?php endwhile; ?>

                        <?php endif; ?>
                        <!-- end of main repeater -->
                    </div>
                    <!-- end of desktop container -->
                    <!-- start of mobile container -->

                    
                    <div class=" bxslider-mobile  parent-container ">  
                        
                        <!-- main-repeater         -->
                        <?php if( have_rows('gallery-main') ): ?>
                            <?php while( have_rows('gallery-main') ): the_row(); ?>


                     

                            <div class="portfolio-image-parent">
                                <?php $clickedImages = get_sub_field('gallery-thumbnail'); ?>
                                
                                    <div id="mobile<?php echo $clickedImages['id'] ?>" class="portfolio-gallery" style="background-image: url('<?php echo $clickedImages['url'] ; ?>')">
                                        <p><?php the_sub_field('gallery-title'); ?></p>
                                        <div class="overlay"></div>
                                    </div>
                                
                                
                                    <script>
                                    jQuery('#mobile<?php echo $clickedImages['id']; ?>').on('click', function(){
                                        console.log('I got clicked on mobile');
                                    });
                                        jQuery('#mobile<?php echo $clickedImages['id']; ?>').magnificPopup({
                                            <?php $popupGalleryImages = get_sub_field('gallery-images'); ?>
                                            items: [
                                            <?php foreach( $popupGalleryImages as $image ): ?>
                                              {
                                                
                                                 src: '<?php echo $image['url'];?>',
                                                
                                                 title: '<?php the_sub_field('gallery-title'); ?>'
                                              },
                                             <?php endforeach; ?>
                                            ],
                                            gallery: {
                                              enabled: true
                                            },
                                            type: 'image' // this is a default type

                                        });
                                    </script>
                
                            </div>         
                

                                <!-- end of sub reapeater                    -->

                            <?php endwhile; ?>

                        <?php endif; ?>
                        <!-- end of main repeater -->

                    </div>
                    <!-- end of bx container -->
                  
                 
                </div>
                <!-- end of main-container -->


  
            </div> <!-- end of body wrapper -->
        </div> <!-- single portfolio -->
    <?php endwhile; // end of the loop. ?>


<?php get_footer(); ?>
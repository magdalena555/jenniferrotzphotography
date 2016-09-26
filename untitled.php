

<?php if( have_rows('portfolio-gallery') ): ?>
    <?php while( have_rows('portfolio-gallery') ): the_row(); 
            // vars
            $image = get_sub_field('portfolio-gallery-image');
            ?>
            
    <div class="portfolio-image-parent">
        
 
        <a title="<?php the_title(); ?>"  href="<?php echo $image['sizes']['portfolio-popout']; ?>" >
           
            <div class="  portfolio-gallery" style="background-image: url('<?php echo $image['sizes'] ['portfolio-page-thumbnail'] ; ?>');">


                <p>  <?php the_title(); ?></p>
            </div>
            <div class="overlay"></div>
        </a>
       

    </div>                                  

    <?php endwhile; ?>

    </ul>

<?php endif; ?>



<div class="bxslider-mobile-container">
    <div class="bxslider-mobile  parent-container ">  
        <?php if( have_rows('portfolio-gallery') ): ?>
            <?php while( have_rows('portfolio-gallery') ): the_row(); 
                    // vars
                    $image = get_sub_field('portfolio-gallery-image');
                    ?>
                    
                    <div class="portfolio-image-parent">
                        
                       
                    <a title="<?php the_title(); ?>"  href="<?php echo $image['sizes']['portfolio-popout']; ?>" >
                            <div class="portfolio-gallery" 
                            style="background-image: url('<?php echo $image['sizes'] ['portfolio-page-thumbnail'] ; ?>');">
                                <p>  <?php the_title(); ?></p>
                            </div>
                            <div class="overlay"></div>
                        </a>
                    </div>

               

            <?php endwhile; ?>


        <?php endif; ?>

    </div>
    
</div>
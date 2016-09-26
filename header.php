<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php  wp_title('|', true, 'right'); ?></title>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link href='https://fonts.googleapis.com/css?family=Cabin:400,500|Prata' rel='stylesheet' type='text/css'>
    <script src="https://use.fontawesome.com/641d5efb29.js"></script>
    <?php // Load our CSS ?>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>


    <header class="body-wrapper">

            <!-- header-wrapper -->
            <div class="header-wrapper">

                    <!-- menu container -->
                <div id="menu-container">
                    <!-- logo -->
                    <div class="logo">
                        
                        <!-- options acf !!!!!!-->
                        <?php $image = get_field('logo', 'option'); ?>
                        <?php $page_id = 4; ?>
                        <a  href="<?php echo get_permalink( $page_id ); ?>"> 
                            <img width="200" src="<?php echo $image ['sizes']['logo'] ?>"> 
                        </a>

                    </div>
                    <div class="logo-dark">
                        
                        <!-- options acf !!!!!!-->
                        <?php $image = get_field('logo-dark', 'option'); ?>
                        <?php $page_id = 4; ?>
                        <div class="logo-dark-wrapper">
                            <a href="<?php echo get_permalink( $page_id ); ?>"> 
                                <img width="200" src="<?php echo $image ['sizes']['logo'] ?>"> 
                            </a>
                        </div>
                        

                    </div>
                    <!-- left nav -->
                    <nav class="desktop-nav ">
                        <div class="social-icons">
                            
                            <?php if( have_rows('header-social', 'option') ): ?>
                               
                                
                                    <?php while(the_repeater_field('header-social', 'option')): ?>
                                        <a href="<?php the_sub_field('social-link'); ?>">
                                            <p class="social"><?php the_sub_field('header-social-icon'); ?></p> 
                                        </a>
                                       
                                        
                                    <?php endwhile; ?> 
                            
                            <?php endif; ?>
                        </div>

                        <?php wp_nav_menu( array(
                          'container' => false,
                          'theme_location' => 'main'
                        )); ?>
                    </nav>
                    <nav class="mobile ">

                        <?php wp_nav_menu( array(
                          'container' => false,
                          'theme_location' => 'mobile'
                        )); ?>
                        <div class="social-icons">
                            
                            <?php if( have_rows('header-social', 'option') ): ?>
                               
                                
                                    <?php while(the_repeater_field('header-social', 'option')): ?>
                                        <a href="<?php the_sub_field('social-link'); ?>">
                                            <p class="social"><?php the_sub_field('header-social-icon'); ?></p> 
                                        </a>
                                       
                                        
                                    <?php endwhile; ?> 
                            
                            <?php endif; ?>
                        </div>
                    </nav>
                    

                
                    
                    <!-- hamburger menu -->
                    <a href="#" class="mobileNavIcon"><i class="fa fa-bars"></i></a>
                </div>   
                
            </div> <!-- header wrapper -->
    </header><!--/.header-->





<!DOCTYPE html>
<html>
    <head>
        <title><?php wp_title(' | ', true, 'right');?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href = "<?php bloginfo('stylesheet_url'); ?>" rel = "stylesheet">
        <?php WP_head(); ?>
    </head>
    <body>
        
        <div class = "navbar navbar-inverse navbar-static-top">
            <div class = "container">
                
                <a href = "<?php the_permalink(); ?>" class = "navbar-brand"><span class="glyphicon glyphicon-leaf" aria-hidden="true">DECODEC>_</span></a>
                
                <button class = "navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">
                    <span class = "icon-bar"></span>
                    <span class = "icon-bar"></span>
                    <span class = "icon-bar"></span>
                </button>
                
                <div class = "collapse navbar-collapse navHeaderCollapse pull-right">
                
                    <?php
                        wp_nav_menu( array(
                            'menu'              => 'primary menu links',
                            'theme_location'    => 'primary',
                            'depth'             => 2,
                           
                            'menu_class'        => 'nav navbar-nav',
                            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                            'walker'            => new wp_bootstrap_navwalker())
                          );
                    ?>
                
                </div>
                
            </div>
        </div>
        
        <div class = "container">
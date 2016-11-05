<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div id="wrapper">
        <div class="topbar">
            <div class="container">
                <?php
                    wp_nav_menu( array (
                        'container'         => false,
                        'theme_location'    => 'topbar',
                        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                        'depth'             => 2,
                        'walker'            => new wp_bootstrap_navwalker(),
                        'menu_class'        => 'topbar-menu pull-left'
                    ) );
                ?>
                <div class="social pull-right">
                    <?php if(get_theme_mod('danny_facebook')) : ?><a href="<?php echo esc_url( get_theme_mod('danny_facebook') ); ?>" target="_blank"><i class="fa fa-facebook"></i></a><?php endif; ?>
    				<?php if(get_theme_mod('danny_twitter')) : ?><a href="<?php echo esc_url( get_theme_mod('danny_twitter') ); ?>" target="_blank"><i class="fa fa-twitter"></i></a><?php endif; ?>
    				<?php if(get_theme_mod('danny_instagram')) : ?><a href="<?php echo esc_url( get_theme_mod('danny_instagram') ); ?>" target="_blank"><i class="fa fa-instagram"></i></a><?php endif; ?>
    				<?php if(get_theme_mod('danny_pinterest')) : ?><a href="<?php echo esc_url( get_theme_mod('danny_pinterest') ); ?>" target="_blank"><i class="fa fa-pinterest"></i></a><?php endif; ?>
    				<?php if(get_theme_mod('danny_bloglovin')) : ?><a href="<?php echo esc_url( get_theme_mod('danny_bloglovin') ); ?>" target="_blank"><i class="fa fa-heart"></i></a><?php endif; ?>
    				<?php if(get_theme_mod('danny_google')) : ?><a href="<?php echo esc_url( get_theme_mod('danny_google') ); ?>" target="_blank"><i class="fa fa-google-plus"></i></a><?php endif; ?>
    				<?php if(get_theme_mod('danny_tumblr')) : ?><a href="<?php echo esc_url( get_theme_mod('danny_tumblr') ); ?>" target="_blank"><i class="fa fa-tumblr"></i></a><?php endif; ?>
    				<?php if(get_theme_mod('danny_youtube')) : ?><a href="<?php echo esc_url( get_theme_mod('danny_youtube') ); ?>" target="_blank"><i class="fa fa-youtube-play"></i></a><?php endif; ?>
    				<?php if(get_theme_mod('danny_dribbble')) : ?><a href="<?php echo esc_url( get_theme_mod('danny_dribbble') ); ?>" target="_blank"><i class="fa fa-dribbble"></i></a><?php endif; ?>
    				<?php if(get_theme_mod('danny_soundcloud')) : ?><a href="<?php echo esc_url( get_theme_mod('danny_soundcloud') ); ?>" target="_blank"><i class="fa fa-soundcloud"></i></a><?php endif; ?>
    				<?php if(get_theme_mod('danny_vimeo')) : ?><a href="<?php echo esc_url( get_theme_mod('danny_vimeo') ); ?>" target="_blank"><i class="fa fa-vimeo-square"></i></a><?php endif; ?>
                </div>
            </div>
        </div>
        <div id="site-name" class="container">
            <?php if(!get_theme_mod('danny_logo')) : ?>
                <?php if(is_front_page()) : ?>
                    <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( get_template_directory_uri() .'/assets/images/logo.png' ); ?>" alt="<?php bloginfo( 'name' ); ?>" /></a></h1>
                <?php else : ?>
                    <h2><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( get_template_directory_uri() .'/assets/images/logo.png' ); ?>" alt="<?php bloginfo( 'name' ); ?>" /></a></h2>
                <?php endif; ?>
            <?php else : ?>
                <?php if(is_front_page()) : ?>
                    <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url(get_theme_mod('danny_logo')); ?>" alt="<?php bloginfo( 'name' ); ?>" /></a></h1>
                <?php else : ?>
                    <h2><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url(get_theme_mod('danny_logo')); ?>" alt="<?php bloginfo( 'name' ); ?>" /></a></h2>
                <?php endif; ?>
            <?php endif; ?>
        </div>
        <div id="nav-wrapper">
            <div class="container">                
                <a href="javascript:void(0)" class="togole-mainmenu"><i class="fa fa-bars"></i></a>
                <?php
                    wp_nav_menu( array (
                        'container' => false,
                        'theme_location' => 'primary',
                        'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                        'depth' => 10,
                        'walker' => new wp_bootstrap_navwalker(),
                        'menu_class' => 'azmenu',
                      'menu_id' => 'menu-topbar-menu'
                    ) );
                ?>          
            </div>
        </div>
        <div class="container">
         
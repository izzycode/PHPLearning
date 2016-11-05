<?php
    get_header();
    if ( get_theme_mod('danny_featured_slider') ) {
        get_template_part('template-parts/featured', 'slider');   
    }
    
    if ( get_theme_mod('danny_promobox_show') ) {
        get_template_part('template-parts/promo', 'box');
    }
    $col_numbers = get_theme_mod('danny_hompage_disable_sidebar') ? 12 : 9;
    
?>
    <div class="row">
        <div class="col-md-<?php echo esc_attr($col_numbers); ?>">
        <?php
            if ( get_theme_mod('danny_blog_layout') == 'grid' ){
                if ( get_theme_mod('danny_hompage_disable_sidebar') ) {
                    get_template_part('loop', 'grid-3columns');
                } else {
                    get_template_part('loop', 'grid');
                }
            } else {
                get_template_part('loop', 'classic');
            }
        ?>
        </div>
            
        <?php if ( !get_theme_mod('danny_hompage_disable_sidebar') ) : ?>
        <div class="col-md-3 sidebar"><?php get_sidebar(); ?></div>
        <?php endif; ?>
        
    </div>

<?php get_footer(); ?>
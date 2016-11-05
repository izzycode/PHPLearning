<?php
    get_header();    
    $danny_archive_layout = get_theme_mod('danny_archive_layout', true);
    $danny_disable_archive_sidebar = get_theme_mod('danny_disable_archive_sidebar', true);
    if ( $danny_disable_archive_sidebar ) {
        $danny_col_md = 12;
    } else {
        $danny_col_md = 9;
    }
?>
<div class="container">
    <div class="archive-box">
		<span><?php esc_html_e( 'Search results for', 'natalie' ); ?>:&nbsp;</span>
		<h3><?php printf( __( '%s', 'natalie' ), get_search_query() ); ?></h3>
	</div>
    <div class="row">
        <div class="col-md-<?php echo esc_attr($col_numbers); ?>">
        <?php
            if ( get_theme_mod('danny_archive_layout') == 'grid' ){
                if ( get_theme_mod('danny_archive_disable_sidebar') ) {
                    get_template_part('loop', 'grid-3columns');
                } else {
                    get_template_part('loop', 'grid');
                }
            } else {
                get_template_part('loop', 'classic');
            }
        ?>
        </div>
            
        <?php if ( !get_theme_mod('danny_archive_disable_sidebar') ) : ?>
        <div class="col-md-3 sidebar"><?php get_sidebar(); ?></div>
        <?php endif; ?>
        
    </div>
</div>
<?php get_footer(); ?>
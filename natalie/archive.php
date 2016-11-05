<?php get_header(); ?>
    <div id="main">
        <div class="archive-box">
    		<?php if ( is_category() ) : ?>
                <span><?php esc_html_e('Browsing Category', 'natalie'); ?>: </span>
    		    <h3><?php printf( __('%s', 'natalie'), single_cat_title('', false) ); ?></h3>
            <?php elseif ( is_tag() ) : ?>
                <span><?php esc_html_e('Browsing Tag', 'natalie'); ?>: </span>
    			<h3><?php printf(__('%s', 'natalie'), single_tag_title('', false)); ?></h3>
            <?php elseif ( is_author() ) : ?>
                <span><?php esc_html_e('All Posts By', 'natalie'); ?>: </span>
    			<h3><?php the_post(); echo get_the_author(); ?></h3>
            <?php else : ?>
    			<?php if ( is_day() ) : ?>
    			<span><?php esc_html_e('Daily Archives', 'natalie'); ?>: </span>
                <h3><?php echo get_the_date(); ?></h3>            
                <?php elseif ( is_month() ) : ?>
                <span><?php esc_html_e('Monthly Archives', 'natalie'); ?>: </span>
                <h3><?php echo get_the_date( _x( 'F Y', 'monthly archives date format', 'natalie' ) ); ?></h3>            
                <?php elseif ( is_year() ) : ?>
                <span><?php esc_html_e('Yearly Archives', 'natalie'); ?>: </span>
    			<h3><?php echo get_the_date( _x( 'Y', 'yearly archives date format', 'natalie' ) ); ?></h3>			
                <?php else : ?>
                    <h3><?php esc_html_e('Archives', 'natalie'); ?>: </h3>
    			<?php endif; ?>
            <?php endif; ?>
		</div>
        <?php
            $col_numbers = get_theme_mod('danny_archive_disable_sidebar') ? 12 : 9;
        ?>
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
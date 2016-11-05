    </div>    
    <section id="footer">        
        <div class="social-footer">
            <?php if(get_theme_mod('danny_facebook')) : ?><a class="social-icon" href="<?php echo esc_url( get_theme_mod('danny_facebook') ); ?>" target="_blank"><i class="fa fa-facebook"></i><span class="text">&nbsp;&nbsp;Facebook</span></a><?php endif; ?>
            <?php if(get_theme_mod('danny_twitter')) : ?><a class="social-icon" href="<?php echo esc_url( get_theme_mod('danny_twitter') ); ?>" target="_blank"><i class="fa fa-twitter"></i><span class="text">&nbsp;&nbsp;twitter</span></a><?php endif; ?>
			<?php if(get_theme_mod('danny_instagram')) : ?><a class="social-icon" href="<?php echo esc_url( get_theme_mod('danny_instagram') ); ?>" target="_blank"><i class="fa fa-instagram"></i><span class="text">&nbsp;&nbsp;instagram</span></a><?php endif; ?>
			<?php if(get_theme_mod('danny_pinterest')) : ?><a class="social-icon" href="<?php echo esc_url( get_theme_mod('danny_pinterest') ); ?>" target="_blank"><i class="fa fa-pinterest"></i><span class="text">&nbsp;&nbsp;pinterest</span></a><?php endif; ?>
			<?php if(get_theme_mod('danny_bloglovin')) : ?><a class="social-icon" href="<?php echo esc_url( get_theme_mod('danny_bloglovin') ); ?>" target="_blank"><i class="fa fa-heart"></i><span class="text">&nbsp;&nbsp;bloglovin</span></a><?php endif; ?>
			<?php if(get_theme_mod('danny_google')) : ?><a class="social-icon" href="<?php echo esc_url( get_theme_mod('danny_google') ); ?>" target="_blank"><i class="fa fa-google-plus"></i><span class="text">&nbsp;&nbsp;google plus</span></a><?php endif; ?>
			<?php if(get_theme_mod('danny_tumblr')) : ?><a class="social-icon" href="<?php echo esc_url( get_theme_mod('danny_tumblr') ); ?>" target="_blank"><i class="fa fa-tumblr"></i><span class="text">&nbsp;&nbsp;tumblr</span></a><?php endif; ?>
			<?php if(get_theme_mod('danny_youtube')) : ?><a class="social-icon" href="<?php echo esc_url( get_theme_mod('danny_youtube') ); ?>" target="_blank"><i class="fa fa-youtube-play"></i><span class="text">&nbsp;&nbsp;dribbble</span></a><?php endif; ?>
			<?php if(get_theme_mod('danny_dribbble')) : ?><a class="social-icon" href="<?php echo esc_url( get_theme_mod('danny_dribbble') ); ?>" target="_blank"><i class="fa fa-dribbble"></i><span class="text">&nbsp;&nbsp;dribbble</span></a><?php endif; ?>
			<?php if(get_theme_mod('danny_soundcloud')) : ?><a class="social-icon" href="<?php echo esc_url( get_theme_mod('danny_soundcloud') ); ?>" target="_blank"><i class="fa fa-soundcloud"></i><span class="text">&nbsp;&nbsp;soundcloud</span></a><?php endif; ?>
			<?php if(get_theme_mod('danny_vimeo')) : ?><a class="social-icon" href="<?php echo esc_url( get_theme_mod('danny_vimeo') ); ?>" target="_blank"><i class="fa fa-vimeo-square"></i><span class="text">&nbsp;&nbsp;vimeo</span></a><?php endif; ?>
        </div>
        <?php if ( is_active_sidebar('footer-sidebar') ) : ?>
        <div class="instagram-footer">
            <?php dynamic_sidebar('footer-sidebar'); ?>
        </div>
        <?php endif; ?>
        <div class="copyright"><?php echo wp_kses_post(get_theme_mod('danny_footer_copyright', '&copy; 2016 <a href="http://dannywordpress.etsy.com/">DannyWPThemes</a>. All right reserved.')); ?></div>
    </section>
    <?php wp_footer(); ?>
</div>
</body>
</html>
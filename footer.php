<?php
/*
 * Template for displaying footer.
 * 
 * @package TW
 */
?>
            <footer class="footer-bg-section clearfix">
            	<?php get_sidebar('footer') ?>
                <div id="footer-section" class="footer-section content-wrap">
                    <div id="copyright" class="copyright"><?php _e( 'Copyright', 'afford' ) ?> &#169; <?php echo date( 'Y' ) ?> | <?php _e( 'Powered by', 'afford' ) ?> <a href="http://www.wordpress.org">WordPress</a> | <?php _e( 'Afford theme by', 'afford' ) ?> <a href="http://www.mudthemes.com/" target="_blank">mudThemes</a></div>
                    <?php  afford_social_section_show() ?>
                </div>
            </footer>
        </div><!-- wrapper ends -->
    <?php wp_footer(); ?>
</body>
</html>
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
                    <div id="copyright" class="copyright">&#169; <?php echo date( 'Y' ) ?> ThoughtWorks, Inc.</div>
                    <?php  afford_social_section_show() ?>
                </div>
            </footer>
        </div><!-- wrapper ends -->
    <?php wp_footer(); ?>
</body>
</html>
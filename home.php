<?php
/**
 * The homepage file.
 * 
 * @package TW
 */
?>
<?php get_header() ?>

<?php if(is_front_page()) afford_cta_section_show() ?>

<?php if (!is_front_page()): ?>
    <div class="archive-meta-container">
        <div class="archive-head">
            <?php echo '<h1>' . __('Our Blog', 'afford') . '</h1>' ?>
        </div>
        <div class="archive-description">
        </div>
    </div><!-- Archive Meta Container ends -->
<?php endif; ?>

<div id="content-section" class="content-section blog-page">

    <?php get_sidebar() ?>

    <div class="inner-content-section content-wrap">
        
            <?php if( have_posts() ) : ?>
            

                    <ul class="loop-container-section clearfix">
                    
                    <?php
                    // Here starts the loop
                    while( have_posts() ): the_post();
                        get_template_part( 'loop', 'home' );
                    endwhile;
                    ?>
                        
                    </ul><!-- loop-container-section ends -->

                <?php afford_archive_nav(); // Calls the 'Previous' and 'Next' Post Links. ?>

            <?php else : ?>

                    <?php afford_404_show(); // Function dedicated for handling empty queries. ?>

            <?php endif;?>

        
    </div><!-- inner-content-section ends -->
    
</div><!-- Content-section ends here -->

<?php get_footer() ?>
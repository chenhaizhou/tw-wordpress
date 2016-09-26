<?php
/**
 * The main template file.
 * 
 * @package TW
 */
?>
<?php get_header() ?>

<div id="content-section" class="content-section content-wrap">

    <?php get_sidebar() ?>

    <div class="inner-content-section">
        
            <?php if( have_posts() ) : ?>

            <ul class="loop-container-section clearfix">

                <?php
                    // Here starts the loop
                    while (have_posts()): the_post();
                        get_template_part('loop', 'archive');
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
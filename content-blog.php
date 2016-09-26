<?php
/**
 * The Blog Content (mostly used on archive pages).
 * 
 * @todo Here sidebar is called in a different way then other archive files. Modify either this or others.
 * @package TW
 */
?>

<div id="content-section" class="content-section content-wrap clearfix">
    
    <?php get_sidebar() ?>

    <div class="inner-content-section">
        
            <?php if( have_posts() ) : ?>
        
                <ul class="post-list clearfix">

                <?php
                    // Here starts the loop
                    while( have_posts() ): the_post();
                        get_template_part( 'loop', 'home' );
                    endwhile;
                ?>
                </ul>

                <?php afford_archive_nav(); // Calls the 'Previous' and 'Next' Post Links. ?>

            <?php else : ?>

                    <?php afford_404_show(); // Function dedicated for handling empty queries. ?>

            <?php endif;?>

        
    </div><!-- inner-content-section ends -->

</div><!-- Content-section ends here -->

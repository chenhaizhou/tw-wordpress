<?php
/**
 * Template for displaying category archive posts.
 * 
 * @package TW
 */
?>
<?php get_header() ?>
<div class="archive-meta-container">
    <div class="archive-head">
        <h1><?php _e('Category Archives', 'afford') ?></h1>
    </div>
    <div class="archive-description">
        <?php
        $afford_category_description = term_description();
        if (!empty($afford_category_description)) {
            echo '<span>' . $afford_category_description . '</span>';
        } else {
            printf(__('Archive of posts published in the category:', 'afford').' %s', single_cat_title('', false));
        }
        ?>
    </div>

</div><!-- Archive Meta Container ends -->


<div id="content-section" class="content-section content-wrap">

    <?php get_sidebar() ?>

    <div class="inner-content-section">

            <?php if( have_posts() ) : ?>

                    <ul class="post-list clearfix">

                        <?php
                            // Here starts the loop
                            while (have_posts()): the_post();
                                get_template_part('loop', 'archive');
                            endwhile;
                        ?>                

                    </ul><!-- loop-container-section ends -->
					
                    <?php afford_archive_nav() // Calls the 'Previous' and 'Next' Post Links. ?>

              <?php else : ?>

                    <?php afford_404_show() // Function dedicated for handling empty queries. ?>

              <?php endif;?>
                    
    </div><!-- inner-content-section ends -->
    
</div><!-- Content-section ends here -->

<?php get_footer() ?>
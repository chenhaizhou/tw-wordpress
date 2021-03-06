<?php
/**
 * Template for displaying tag archive posts.
 * 
 * @package TW
 */
?>
<?php get_header() ?>
<div class="archive-meta-container">
    <div class="archive-head">
        <h1><?php _e('Tag Archives', 'afford') ?></h1>
    </div>
    <div class="archive-description">
        <?php
        $afford_tag_description = term_description();
        if (!empty($afford_tag_description)) {
            echo $afford_tag_description;
        } else {
            printf(__('Archive of posts published in the tag:', 'afford').' %s', single_term_title('', false));
        }
        ?>
    </div>

</div><!-- Archive Meta Container ends -->

<div id="content-section" class="content-section">
    <?php get_sidebar() ?>
    <div class="inner-content-section">

              <?php if( have_posts() ) : ?>

                    <?php if( have_posts() ) : ?>

                    <ul class="loop-container-section post-list clearfix">

                        <?php
                            // Here starts the loop
                            while (have_posts()): the_post();
                                get_template_part('loop', 'tag');
                            endwhile;
                        ?>                

                    </ul><!-- loop-container-section ends -->

                    <?php endif; ?>
                    
                    
                    <?php afford_archive_nav() // Calls the 'Previous' and 'Next' Post Links  ?>

              <?php else : ?>

                    <?php afford_404_show() // Function dedicated for handling empty queries. ?>

              <?php endif ?>

    </div><!-- inner-content-section ends -->
    
</div><!-- Content-section ends here -->

<?php get_footer() ?>
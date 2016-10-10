<?php
/**
 * Template for displaying author archive page.
 * 
 * @package TW
 */
?>
<?php get_header() ?>

<div id="content-section" class="content-section content-wrap">

    <?php get_sidebar() ?>

    <div class="inner-content-section">

        <div class="author-info-box">
            <div class="count">
                <?php printf('%s', "<strong>" . get_the_author() . "</strong>") ?>共有<span><?php printf(count_user_posts(get_the_author_meta( 'ID' ), 'post')) ?></span>篇文章
            </div>
            <div class="author-info">
                <?php echo get_avatar( get_the_author_meta( 'ID' ), 80 ); ?>
                <p>
                    <?php printf('%s', "<strong>" . get_the_author() . "</strong>") ?>

                    <?php printf('%s', "<span>" . get_the_author_meta('description') . "</span>") ?>
                </p>
            </div>

        </div>
        
              <?php if ( have_posts() ) : the_post() ?>


                    <ul class="post-list clearfix">

                        <?php
                            // Here starts the loop
                            rewind_posts();
                            while (have_posts()): the_post();
                                get_template_part('loop', 'archive');
                            endwhile;
                        ?>                

                    </ul><!-- loop-container-section ends -->
                    
                    <?php afford_archive_nav() // Calls the 'Previous' and 'Next' Post Links ?>

              <?php else : ?>

                    <?php afford_404_show() // Function dedicated for handling empty queries. ?>

              <?php endif ?>

        
    </div><!-- inner-content-section ends -->
    
</div><!-- Content-section ends here -->

<?php get_footer() ?>
<?php
/*
 * Template for displaying single posts.
 * 
 * @package TW
 */
?>
<?php get_header() ?>

<?php if( have_posts() ) : while( have_posts() ): the_post() ?>

<div id="content-section" class="content-section content-wrap clearfix">
    
    <?php get_sidebar() ?>

    <div id="post-<?php the_ID() ?>" <?php post_class('inner-content-section') ?>>
	
	                <div class="post-title">
                    <?php if ( is_front_page() ): ?>
                        <h1 class="front-page"><?php the_title() ?></h1>
                    <?php else: ?>
                        <h1 class="inner-page"><?php the_title() ?></h1>
                    <?php endif ?>
                        
                        <div class="post-meta">
                            
                            <span class="face"><?php echo get_avatar( get_the_author_meta( 'ID' ), 32 ); ?></span>

                            <?php 
							echo '<span class="entry-date">'.get_the_date().'</span>';
							echo '<span class="meta-author-url">, '.__('By','afford').' <span class="author vcard">';
								the_author_posts_link();
							echo '</span> </span>';

                            if(!comments_open()) { // Comments not open
								if(get_comments_number()){ // Comments are more than zero
									echo ' | <span class="post-meta-comments">'.get_comments_number(). ' '. __('Comments (Closed)', 'afford').'</span>';
								} else { // Comments are zero
									echo ' | ' . __('Comments (Closed)', 'afford');
								}
							} else { // Comments are open
                                echo ' | <span class="post-meta-comments">';
                                comments_number( '<a href='.get_comments_link().'>'.__('Leave a reply', 'afford').'</a>', __('1 Comment', 'afford'), '% '.__('Comments', 'afford') );
                                echo '</span>';
                            } ?>
                        </div>
                        
                    </div>

                    <div class="post-content">
                         <?php the_content() ?>
                         <?php wp_link_pages(array('before' => '<div class="post-nav-link"><span>' . __('Pages:', 'afford') . '</span>', 'after' => '</div>')) ?>

                         -----------------
                         <div class="post-like">
    <a href="javascript:;" data-action="ding" data-id="<?php the_ID(); ?>" class="specsZan <?php if(isset($_COOKIE['specs_zan_'.$post->ID])) echo 'done';?>">喜欢 <span class="count">
        <?php if( get_post_meta($post->ID,'specs_zan',true) ){
                echo get_post_meta($post->ID,'specs_zan',true);
                } else {
          echo '0';
        }?></span>
    </a>
</div>
-------------------
                    </div>

                    <div class="post-below-content">
                    	<?php edit_post_link( __( 'Edit', 'afford' ), '<div class="edit-link">', '</div>' ) ?>
                        <p class="tags-below-content"><?php the_tags( __( 'Tags: ', 'afford' ) , ', ', '') ?></p>
                    </div>

                    <?php afford_post_nav() ?>

                    <?php comments_template( '', true ) ?>


        
    </div><!-- inner-content-section ends -->
    
</div><!-- Content-section ends here -->

<?php endwhile ?>

<?php endif ?>

<?php get_footer() ?>
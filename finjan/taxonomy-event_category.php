<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Finjan
 */

get_header(); ?>

<section>
	<div class="uk-container uk-container-center">
    	<div class="about-us uk-block">
        	<?php $queried_object = get_queried_object();?>
        		<h2><?php echo get_queried_object()->name;?></h2>
            <hr>
            <div class="blog-widget uk-margin-bottom">
                    <div class="uk-grid uk-grid-match" data-uk-grid-margin>
                   <?php if ( have_posts() ) : ?>
 						<?php while ( have_posts() ) : the_post(); ?>	
                    <div class="uk-width-medium-1-2">
                        <div class="blog-detail">
                            <div class="uk-panel uk-panel-box">
                                <div class="uk-panel-teaser">
                                	<?php if(is_category( '14' ) ):?>
                                    	<?php the_field('featured_video');?>
                                    <?php else:?>
                                    	<?php the_post_thumbnail(array(548,251));?>
                                    <?php endif;?>
                                </div>
                                <div class="uk-panel-header uk-grid uk-grid-match">
                                    <div class="uk-width-2-10">
                                        <div class="trip-date">
                                            <span><?php the_time('M'); ?></span>
                                            <span><strong><?php the_time('n'); ?></strong></span>
                                        </div>
                                    </div>
                                    <div class="uk-width-8-10">
                                        <div class="header-desc">
                                            <h5><?php the_title();?></h5>
                                        </div>
                                    </div>
                                </div>
                                <p><?php echo wp_trim_words( get_the_content(), 14, '...' );?></p>
                                <a class="uk-float-right" href="<?php the_permalink();?>">READ MORE</a>
                            </div>
                        </div>
                   </div>
						<?php endwhile; ?>
                        <?php wp_pagenavi();?>
                	<?php endif; ?>
                </div>
            </div>
            
            
           
            
        </div>
    </div>
</section>

<?php

get_footer();

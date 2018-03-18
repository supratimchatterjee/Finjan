<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Finjan
 */

get_header(); ?>


<section>
	<div class="uk-container uk-container-center">
		<div class="about-us trips-detail uk-block">
			<h2><?php printf( esc_html__( 'Search Results for: %s', 'finjan' ), '<span>' . get_search_query() . '</span>' ); ?></h2>
			<hr>
			<div class="uk-grid uk-grid-match" data-uk-grid-margin>

			<?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
            <?php $before_image = get_field('event_image'); 
				$description = get_the_content();
				$before_image = wp_get_attachment_image_src($before_image, array('270','145'));
				$before_image = $before_image[0];
			?>	
					<div class="uk-width-medium-1-3">
					<div class="uk-panel uk-panel-box trip-block">
						<div class="uk-panel-teaser">
                        <?php if ($before_image):?>
							<img src="<?php echo $before_image;?>">
                         <?php else:?>
                         <img src="http://placehold.it/270x145">
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
                             <h5><a href="<?php echo get_permalink();?>"><?php echo wp_trim_words( get_the_title(), 6, '...' );?></a></h5>
                                 
                                </div>
                            </div>
                        </div>
                       <p><?php echo wp_trim_words( get_the_content(), 18, '...' );?></p>
						<a class="uk-float-right" href="<?php the_permalink(); ?>">READ MORE</a>
					</div>
				</div>
			<?php endwhile;?>
            <?php endif;?>

    
			</div>
		</div>
        
        
				
     </div>
	</div>
 </section>

<?php

get_footer();

<?php
/**
 * The template for displaying all pages
Template Name: Adventure
 * @package Finjan
 */

get_header(); ?>

<section>
	<div class="uk-container uk-container-center">
    	<div class="about-us uk-block">
        	<h2>ADVENTURES</h2>
            <hr>
            <div class="blog-widget uk-margin-bottom">
            	<h2>PHOTO GALLERY</h2>
                

                <span class="uk-float-right"><a href="<?php echo home_url('/'); ?>/category/photo-gallery">VIEW ALL</a></span>
                <div class="uk-grid uk-grid-match">
				<?php
					$args = array(
					'post_type'			=>	'post',
					'posts_per_page'	=>	2,
					'cat'				=>	'16'
					);
					
					$query = new WP_Query($args);
					if ($query->have_posts()) :
					while ($query->have_posts()) : $query->the_post();
					$id    =    $query->ID;
                ?>
                    <div class="uk-width-medium-1-2 uk-margin-bottom ">
                        <div class="blog-detail">
                            <div class="uk-panel uk-panel-box">
                                <div class="uk-panel-teaser">
                                    <?php the_post_thumbnail(array(548,251));?>
                                </div>
                                <div class="panel-content">
                                    <div class="uk-panel-header uk-grid uk-grid-match">
                                        <div class="uk-width-1-10">
                                            <div class="trip-date">
                                                <span><?php the_time('M'); ?></span>
                                                <span><strong><?php the_time('j'); ?></strong></span>
                                            </div>
                                        </div>
                                        <div class="uk-width-8-10">
                                            <div class="header-desc">
                                                <h5><?php the_title();?></h5>
                                            </div>
                                        </div>
                                    </div>
                                    <p><?php echo wp_trim_words( get_the_content(), 14, '...' );?></p>
                                </div>
                                <a class="uk-float-right" href="<?php the_permalink();?>">READ MORE</a>
                            </div>
                        </div>
                   </div>
				<?php endwhile; ?>
                <?php endif; wp_reset_query(); ?>
                </div>
            </div>
            <div class="blog-widget uk-margin-bottom">
            	<h2>VIDEO BLOG</h2>
                <span class="uk-float-right"><a href="<?php echo home_url('/'); ?>/category/video-trip">VIEW ALL</a></span>
                <div class="uk-grid uk-grid-match">
                	<?php
					$args = array(
					'post_type'			=>	'post',
					'posts_per_page'	=>	2,
					'cat'				=>	'14'
					);
					
					$query = new WP_Query($args);
					if ($query->have_posts()) :
					while ($query->have_posts()) : $query->the_post();
					$id    =    $query->ID;
               	 ?>
                    <div class="uk-width-medium-1-2 uk-margin-bottom">
                        <div class=" blog-detail">
                            <div class="uk-panel uk-panel-box">
                                <div class="uk-panel-teaser">
                                   <?php the_field('featured_video');?>
    
                                </div>
                                <div class="panel-content">
                                    <div class="uk-panel-header uk-grid uk-grid-match">
                                        <div class="uk-width-1-10">
                                            <div class="trip-date">
                                                <span><?php the_time('M'); ?></span>
                                                <span><strong><?php the_time('j'); ?></strong></span>
                                            </div>
                                        </div>
                                        <div class="uk-width-8-10">
                                            <div class="header-desc">
                                                <h5><?php the_title();?></h5>
                                            </div>
                                        </div>
                                    </div>
                                    <p><?php echo wp_trim_words( get_the_content(), 14, '...' );?></p>
                                </div>
                                <a class="uk-float-right" href="<?php the_permalink();?>">READ MORE</a>
                            </div>
                        </div>
                        
					</div>
                    <?php endwhile; ?>
                <?php endif; wp_reset_query(); ?>
                </div>
            </div>
            
            <div class="blog-widget">
            	<h2>PRESS RELEASE</h2>
                <span class="uk-float-right"><a href="<?php echo home_url('/'); ?>/category/press-release">VIEW ALL</a></span>
                <div class="uk-grid">
                <?php
					$args = array(
					'post_type'			=>	'post',
					'posts_per_page'	=>	1,
					'cat'				=>	'15'
					);
					
					$query = new WP_Query($args);
					if ($query->have_posts()) :
					while ($query->have_posts()) : $query->the_post();
					$id    =    $query->ID;
               	 ?>
                	<div class="uk-width-medium-1-1 uk-margin-bottom">
                        <div class=" blog-detail">
                            <div class="uk-panel uk-panel-box">
                            <div class="uk-panel-teaser">
                                <?php the_post_thumbnail(array(1130,518));?>
                            </div>
                            <div class="uk-panel-header uk-grid uk-grid-match">
                                <div class="uk-width-1-10">
                                    <div class="trip-date">
                                        <span><?php the_time('M'); ?></span>
                                        <span><strong><?php the_time('j'); ?></strong></span>
                                    </div>
                                </div>
                                <div class="uk-width-9-10">
                                    <div class="header-desc">
                                        <h5><?php the_title();?></h5>
                                    </div>
                                </div>
                            </div>
                            <p><?php echo wp_trim_words( get_the_content(), 50, '...' );?></p>
                            <a class="uk-float-right" href="<?php the_permalink();?>">READ MORE</a>
                        </div>
                   	</div>
                        
				</div>
                 <?php endwhile; ?>
                <?php endif; wp_reset_query(); ?>   
             </div>
            </div>
            
        </div>
    </div>
</section>
<?php
get_footer();

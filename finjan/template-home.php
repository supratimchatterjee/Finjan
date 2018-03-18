<?php

/**

Template Name: Home

 */



get_header(); ?>
<section class="site-banner uk-position-relative">
    <div class="overlay uk-position-absolute"></div>
        <div class="uk-container uk-container-center">
            <div class="uk-grid">
                <div class="uk-width-medium-7-10">
                        <div class="flexslider">
                            <ul class="slides">
                            <?php if (have_rows('slider')):?>
                            <?php while(have_rows('slider')): the_row();?>
                            <?php $before_image = get_sub_field('image_slider');?>
                            <?php $before_image = wp_get_attachment_image_src($before_image, array('781','520'));
							$before_image = $before_image[0];?>
                                <li>

                                    <figure class="uk-overlay">

                                        <img src="<?php echo $before_image; ?>" alt="">

                                        <figcaption class="uk-overlay-panel uk-overlay-background uk-overlay-bottom">

                                            <h1><?php the_sub_field('text_slider');?></h1>

                                            <div class="uk-text-right"><a class="uk-button visibility" href="<?php the_sub_field('read_more_link');?>">READ MORE</a></div>

                                        </figcaption>

                                    </figure>

                                </li>

                             <?php endwhile;?>

                             <?php endif;?>





                            </ul>

                        </div>

               </div>

                <div class="uk-width-medium-3-10 side-image">



				<?php if(have_rows('right_section')):?>
                <?php while(have_rows('right_section')):the_row();?>

								<?php $br_image = get_sub_field('image_r');?>
								<?php $br_image = wp_get_attachment_image_src($br_image, array('315','165'));
								$br_image = $br_image[0];?>
                    	<figure class="uk-overlay image-block uk-position-relative uk-display-block">

                        <img class="uk-width-1-1" src="<?php echo $br_image;?>">

                        <figcaption class="uk-overlay-panel uk-overlay-bottom uk-text-right tm-no-padding">

                            <h6><?php the_sub_field('text_r');?></h6>

                        </figcaption>

                          <a class="uk-position-cover" href="<?php the_sub_field('link_r');?>"></a>

                    </figure>
				<?php endwhile;?>
                <?php endif;?>

                </div>

            </div>

       </div>



</section>

<!--banner-section-end-->



<section>
	<div class="uk-container uk-container-center">
		<div class="trips-detail uk-margin-top">
			<div class="uk-width-medium-9-10 uk-display-inline-block"><h2><?php the_field('title_ut');?></h2></div>
			<a class="uk-text-right uk-width-1-10 view" href="<?php echo home_url('/'); ?>/upcoming-trips"><span>VIEW ALL</span></a>
			<hr>
			<div class="uk-grid uk-grid-match" data-uk-grid-margin>
				<?php $post_objects = get_field('upcoming_trips');?>
				<?php foreach( $post_objects as $post_object): ?>
				<?php $id = $post_object->ID; ?>
                <div class="uk-width-medium-1-3">
					<div class="uk-panel uk-panel-box uk-position-relative">
						<div class="uk-panel-teaser">
	                        <?php $event_image = get_field('event_image',$id);?>
	                        <?php $event_image = wp_get_attachment_image_src($event_image,array(298,154));?>
							<?php $event_image = $event_image[0];?>
	                        <?php if ($event_image):?>
								 <a href="<?php echo get_the_permalink($id); ?>"><img src="<?php echo $event_image;?>"></a>
	                            <?php else:?>
	                             <a href="<?php echo get_the_permalink($id); ?>"><img src="<?php echo get_template_directory_uri();?>/image/p.png"></a>
	                            <?php endif;?>
						</div>
                        <div class="panel-content">
                            <div class="uk-panel-header">
                                <div class="">
                                    <div class="trip-date uk-position-absolute">
	                                      <?php // get raw date
										$date = get_field('start_date',$id, false, false);
										// make date object
										$date = new DateTime($date);
										?>
	                                    <span><?php echo $date->format('M'); ?></span>
	                                    <span><strong><?php echo $date->format('d'); ?></strong></span>
                                    </div>
                                </div>
                                <div class="uk-width-1-1">
                                    <div class="header-desc">
                                        <a href="<?php echo get_the_permalink($id); ?>"><h5><?php echo $post_object->post_title;?></h5></a>
                                    </div>
                                </div>
                            </div>
								<?php $content = $post_object->post_content; ?>
                                <?php $sentence = explode('.', $content); ?>
                             	<a href="<?php echo get_the_permalink($id); ?>"><p><?php echo $sentence[0];?>.</p></a>
                       </div>
						<a class="uk-float-right" href="<?php echo get_the_permalink($id); ?>">READ MORE</a>
                        <a class="uk-position-cover" href="<?php echo get_the_permalink($id); ?>"></a>
					</div>
				</div>
			</div>
			<?php endforeach;?>
		</div>
        <div class="about-us uk-block">
            <h2><?php the_field('gallery_titlte'); ?></h2>
            <hr>
            <?php echo do_shortcode('[instashow rows="3" effect="fade"]');?>
        </div>
       <div class="about-us uk-block">
        	<h2><?php the_field('finjan_media_title') ?></h2>
            <hr>
            <div class="blog-widget uk-margin-bottom">
            	<?php /*<h2>PHOTO GALLERY</h2>*/php?>


               <?php /* <span class="uk-float-right"><a href="<?php echo home_url('/'); ?>/category/photo-gallery">VIEW ALL</a></span>*/php?>
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
                                     <a href="<?php the_permalink();?>"><?php the_post_thumbnail(array(548,251));?></a>
                                </div>
                                <div class="panel-content">
                                    <div class="uk-panel-header uk-grid uk-grid-match">
                                        <div class="uk-width-1-10">
                                            <div class="trip-date p_gallery">
                                                <span><?php the_time('M'); ?></span>
                                                <span><strong><?php the_time('j'); ?></strong></span>
                                            </div>
                                        </div>
                                        <div class="uk-width-8-10">
                                            <div class="header-desc">
                                                <a href="<?php the_permalink();?>"><h5><?php the_title();?></h5></a>
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
            	<?pgp /*<h2>BLOG AND VIDEO BLOG</h2>
                <span class="uk-float-right"><a href="<?php echo home_url('/'); ?>/category/video-trip">VIEW ALL</a></span>*/?>
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
                                            <div class="trip-date v_blog">
                                                <span><?php the_time('M'); ?></span>
                                                <span><strong><?php the_time('j'); ?></strong></span>
                                            </div>
                                        </div>
                                        <div class="uk-width-8-10">
                                            <div class="header-desc">
                                                <a href="<?php the_permalink();?>"><h5><?php the_title();?></h5></a>
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

        </div>
	</div>
 </section>
<?php
get_footer();

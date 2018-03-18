<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Finjan
 */

get_header(); ?>

<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
<?php /*?><section class="side-bar uk-width-1-10 uk-position-absolute">
	<div class="uk-panel uk-panel-box">
    	<div class="uk-panel-header">
            <a class="uk-text-left" href="#"><span>SORT BY</span></a>
            <a class="uk-text-right" href="#"><span>VIEW ALL</span></a>
        </div>
        <div class="sidebar-content">
        	<h6>DIFFICULTY LEVEL</h6>
            <span></span>
            <h6>DATE</h6>
            <span></span>
            <h6>DESTINATION</h6>
            <span></span>
        </div>
    </div>
</section><?php */?>
<section>
	<div class="uk-container uk-container-center">
    	<div class="about-trip uk-block">
       <?php $roles = get_the_terms( $post->ID, 'event_category' ); ?>
        	<h2><?php echo $roles[0]->name;?></h2>
            <hr>
            <?php /*?><div class="lightbox-section">
            	<img src="<?php the_field('slider_single');?>" alt="">
            	<div class="uk-grid uk-margin-top">
                <?php if (have_rows('lightbox_images')):?>
                <?php while(have_rows('lightbox_images')): the_row();?>
                	<div class="uk-width-medium-1-10">
                    	<a href="<?php the_sub_field('image_lb');?>" data-lightbox-type="image" data-uk-lightbox="{group:'group1'}">
                           <img src="<?php the_sub_field('image_lb');?>" width="800" height="600" alt="">
                       </a>
                    </div>
                    <?php endwhile;?>
                    <?php endif;?>
                </div>
            </div><?php */?>

            <div class="uk-panel uk-panel-box uk-margin-top">
            	<div class="uk-grid" data-uk-grid-margin>
                	<div class="uk-width-medium-6-10">
                        <div class="trip-detail-content uk-margin-bottom">
                            <div class="uk-panel-header uk-margin-bottom">
                                <h3><?php the_title();?></h3>
                            </div>
							<div class="slider-section">
								<?php $gallerys = get_field('slider_event');?>
								<ul id="images-gallery">
								   <?php foreach( $gallerys as $gallery ): ?>
								   <?php
									   $sf_image = $gallery['ID'];
									   $sf_image = wp_get_attachment_image_src($sf_image, array(1128,492));
									   $sf_image = $sf_image[0];
									?>
									<?php
									   $s_image = $gallery['ID'];
									   $s_image = wp_get_attachment_image_src($s_image, array(93,52));
									   $s_image = $s_image[0];
									?>
									<li data-thumb="<?php echo $s_image;?>">
									   <img src="<?php echo $sf_image;?>">
									</li>
									<?php endforeach;?>
								</ul>
							</div>
                            <?php the_field('event_info');?>
                       </div>

                        <div class="trip-detail-content border uk-margin-bottom">
                             <div class="uk-panel-header uk-margin-bottom">
                                <h3>MEETING POINT</h3>
                            </div>
                            <?php the_field('meeting_place');?>
                        </div>

						<div class="new_button uk-text-center">
						   <a class="uk-button" href="#tm-modal" data-uk-modal>Terms And Conditions</a>
						</div>
						 <div id="tm-modal" class="uk-modal">
							 <div class="uk-modal-dialog">
							 <a class="uk-modal-close uk-close"></a>
							 <?php the_field('terms_and_conditions');?>
							 </div>
						 </div>

                       </div>

                    <div class="uk-width-medium-4-10 uk-text-center">
                    	<div class="uk-panel-header uk-margin-bottom uk-text-left">
                        	<h3>TRIP DETAILS</h3>
                        </div>

                      <div class="trip-timing uk-grid uk-grid-match uk-text-left">
                      		<div class="uk-width-medium-2-10">
                            	<div class="trip-date">
                                <?php // get raw date
									$date = get_field('start_date', false, false);


									// make date object
									$date = new DateTime($date);
									?>
                                    <span><?php echo $date->format('M'); ?></span>
                                    <span><strong><?php echo $date->format('d'); ?></strong></span>
                                </div>
                            </div>
                            <div class="trip-times uk-width-medium-8-10 uk-margin-bottom">
                            	<p><span>MEETING TIME:</span><?php the_field('start_time');?></p>
                                <p><span>COMPLETION TIME:</span> <?php the_field('end_time');?></p>
                                <div class="border uk-width-5-10"></div>
                                <p><span>TYPE OF TRIP:</span><?php echo $roles[0]->name;?></p>
                                <p><span>DIFFICULTY LEVEL</span></p>
                                 <div class="dificulty-level">
                                 <?php $dif_label = get_field('event_level');?>

                                 <?php if( get_field('event_level') == 'rate1' ): ?>
                                	<div class="dif-level dif-select"></div>
                                    <div class="dif-level dif-deselect"></div>
                                    <div class="dif-level dif-deselect"></div>
                                    <div class="dif-level dif-deselect"></div>
                                    <div class="dif-level dif-deselect"></div>
                                  <?php elseif ( get_field('event_level') == 'rate2'):?>
                                    <div class="dif-level dif-select"></div>
                                     <div class="dif-level dif-select"></div>
                                    <div class="dif-level dif-deselect"></div>
                                    <div class="dif-level dif-deselect"></div>
                                    <div class="dif-level dif-deselect"></div>
                                   <?php elseif ( get_field('event_level') == 'rate3' ):?>
                                    <div class="dif-level dif-select"></div>
                                    <div class="dif-level dif-select"></div>
                                    <div class="dif-level dif-select"></div>
                                    <div class="dif-level dif-deselect"></div>
                                    <div class="dif-level dif-deselect"></div>
                                    <?php elseif ( get_field('event_level') == 'rate4' ):?>
                                    <div class="dif-level dif-select"></div>
                                    <div class="dif-level dif-select"></div>
                                    <div class="dif-level dif-select"></div>
                                    <div class="dif-level dif-select"></div>
                                    <div class="dif-level dif-deselect"></div>
                                    <?php else:?>
                                    <div class="dif-level dif-select"></div>
                                    <div class="dif-level dif-select"></div>
                                    <div class="dif-level dif-select"></div>
                                    <div class="dif-level dif-select"></div>
                                    <div class="dif-level dif-select"></div>
                                   <?php endif;?>
                                </div>
                                <div class="border uk-width-5-10"></div>
                                <span><strong>COST:  <?php the_field('price');?></strong></span>
                                <div class="border uk-width-5-10"></div>
                                <span>READY FOR A YOUR <br> FINJAN EXPERIENCE?</span>
                           </div>
                         </div>

                         <div class="uk-grid uk-margin-top-remove tm-new-color">
                           <div class="uk-width-medium-2-10"></div>
                           <div class="editor uk-width-medium-8-10 uk-text-left">
                           	<a class="uk-button" href="<?php the_field('event_link');?>">SIGN UP NOW</a>
                            <?php the_field('contentt_under_signup');?>
                           </div>
                         </div>
                     </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<?php endwhile;?>
<?php endif;?>
<?php
get_footer();

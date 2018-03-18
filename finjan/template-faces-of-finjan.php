<?php
/**
Template Name: Faces of Finjan
 *
 * @package Finjan
 */

get_header(); ?>

<div class="uk-container uk-container-center">
    	<div class="about-us uk-block">
        	<h2>1,001 FACES OF FINJAN</h2>
            <hr>
           		<div class="uk-panel uk-panel-box page-header">
                	<div class="uk-panel uk-panel-header">
                    	<h3><?php the_field('subtitle_heading');?></h3>
                   	</div>
                    <p><?php the_field('subtitle_description');?></p>
                </div>

                <div class="our-people">
                	<div class="uk-grid" data-uk-grid-margin>
                    <?php if(have_rows('author_description')):?>
                     <?php while(have_rows('author_description')):the_row();?>
											 <?php
											   $sf_image = get_sub_field('author_image');
											   $sf_image = wp_get_attachment_image_src($sf_image, 'thumbnail');
											   $sf_image = $sf_image[0];
											 ?>
                    	<div class="uk-width-medium-1-2">
                       	 <div class="people-detail">
                                <div class="uk-panel uk-panel-box">
                                <div class="people-image uk-float-left uk-width-2-10">
                                    <img class="uk-border-circle" src="<?php echo $sf_image;?>" alt="">
                                </div>
                                <div class="people-desc uk-float-left uk-width-8-10">
                                    <div class="uk-panel-header">
                                        <h5><?php the_sub_field('author_name');?></h5>
                                    </div>
                                   <?php the_sub_field('author_description');?>
                                </div>
                                </div>
                           </div>
                        </div>
                      <?php endwhile;?>
                     <?php endif;?>
                    </div>
                </div>
            </div>
        </div>


<?php
get_footer();

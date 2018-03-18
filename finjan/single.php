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



<!--main-body-content-->

<section>
	<div class="uk-container uk-container-center">
        <div class="uk-grid  uk-block-large">
            <div class="uk-width-medium-8-10 about-trip">
					 <?php $category = get_the_terms( $post->ID, 'category' ); ?>
                    <h2><?php the_title();?></h2>

                    <hr>

                    <div class="uk-panel uk-panel-box uk-margin-top">
                            <div class="uk-width-medium-1-1">
                                <div class="trip-detail-content uk-margin-bottom">
                                    <div class="uk-panel-header uk-margin-bottom">
                                    	<div class="date-selector uk-width-1-10">
                                        	<span><?php the_time('F j, Y');?></span>
                                        </div>
                                        <?php /*?><h3><?php the_title();?></h3><?php */?>
                                    </div>
									<div class="slider-section">
										<?php if(  in_category( 'video-trip' ) ):?>

											<?php the_field('featured_video');?>

										<?php else:?>
										<?php $gallerys = get_field('gallery_posts');?>
										<ul id="images-gallery">
											<?php foreach( $gallerys as $gallery ): ?>
											<?php
												$sf_image = $gallery['ID'];
												$sf_image = wp_get_attachment_image_src($sf_image, array(1192,492));
												$sf_image = $sf_image[0];
											?>
											<?php
												$s_image = $gallery['ID'];
												$s_image = wp_get_attachment_image_src($s_image, array(120,65));
												$s_image = $s_image[0];
											?>
											<li data-thumb="<?php echo $s_image;?>" >
												   <img src="<?php echo $sf_image; ?>">
											</li>
											<?php endforeach;?>
										</ul>
										<?php endif;?>
									</div>
                                  <?php the_content();?>
                              </div>
                               </div>
                               <?php /*?><div class="uk-width-medium-4-10">
                                <img src="<?php the_field('sidebar_image');?>" alt="">
                            </div><?php */?>

                        </div>
            </div>
            <div class="uk-width-medium-2-10 sidebar-categories" data-uk-margin >
            <?php dynamic_sidebar('sidebar-1'); ?>

            <?php /*?>	<div class="sidebar-categories">
                	<h3>search posts</h3>
                    <hr>
                    <form>
                    	<input type="text" placeholder="type here">
                    </form>
                </div>
                <div class="sidebar-categories">
                	<h3>blog categories</h3>
                    <hr>
                    <ul>
                    	<li><a href="#">lorem ipsum dolor sit amet</a></li>
                        <li><a href="#">lorem ipsum dolor sit amet</a></li>
                        <li><a href="#">lorem ipsum dolor sit amet</a></li>
                        <li><a href="#">lorem ipsum dolor sit amet</a></li>
                        <li><a href="#">lorem ipsum dolor sit amet</a></li>
                    </ul>
                </div>
                <div class="sidebar-categories">
                	<h3>recent post</h3>
                    <hr>
                    <ul>
                    	<li><a href="#">lorem ipsum dolor sit amet<span>post date</span></a></li>
                        <li><a href="#">lorem ipsum dolor sit amet<span>post date</span></a></li>
                        <li><a href="#">lorem ipsum dolor sit amet<span>post date</span></a></li>
                        <li><a href="#">lorem ipsum dolor sit amet<span>post date</span></a></li>
                        <li><a href="#">lorem ipsum dolor sit amet<span>post date</span></a></li>
                    </ul>
                </div>
                <div class="sidebar-categories">
                	<h3>latest updates</h3>
                    <hr>
                    <ul>
                    	<li><a href="#">lorem ipsum dolor sit amet</a></li>
                        <li><a href="#">lorem ipsum dolor sit amet</a></li>
                        <li><a href="#">lorem ipsum dolor sit amet</a></li>
                        <li><a href="#">lorem ipsum dolor sit amet</a></li>
                        <li><a href="#">lorem ipsum dolor sit amet</a></li>
                    </ul><?php */?>
                </div>
            </div>
        </div>
    	 </div>
    </div>
</section>
	<?php endwhile;?>
<?php endif;?>
 <!--main-body-content-->

<!------footer----------->
<?php
get_footer();

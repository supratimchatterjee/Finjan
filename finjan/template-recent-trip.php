<?php
/**
Template Name: Recent Trip
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
		<div class="about-us trips-detail uk-block">
			<h2>RECENT TRIPS</h2>
			<hr>
			<div class="uk-grid uk-grid-match" data-uk-grid-margin>
			<?php
            $page = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : get_query_var( 'page' );
            if(!$page) $page = 1; /*this is only for pagination if required*/
            $args = array(
            'post_type'         =>  'events',
            'posts_per_page'    =>  6,
			'event_category' => 'past',
            'paged'    =>  $page
            
            );
            
            $query = new WP_Query($args);
            if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();
            $id    =    $query->post->ID; 
            ?>
			<?php  $title = get_the_title();
				$description = get_the_content();
			?>
				<?php $featured_image = get_field('event_image',$id);?>
                <?php $featured_image = wp_get_attachment_image_src($featured_image,array(298,154));?>
                <?php $featured_image = $featured_image[0];?>

					<div class="uk-width-medium-1-3 uk-position-relative">
					
                    <div class="uk-panel uk-panel-box trip-block">
						<div class="uk-panel-teaser">
                        <?php if ($featured_image):?>
							<img src="<?php echo $featured_image;?>" alt="" style="width:100%;">
                         <?php else:?>
                         <img src="http://placehold.it/270x145">
                         <?php endif;?>
						</div>
                        <div class="uk-panel-header">
                        	<div class="">
                                <div class="trip-date uk-position-absolute">
                                     <?php // get raw date
									$date = get_field('start_date', false, false);
									
									
									// make date object
									$date = new DateTime($date);
									?>
                                    <span><?php echo $date->format('M'); ?></span>
                                    <span><strong><?php echo $date->format('d'); ?></strong></span>
                                </div>
                            </div>
                            <div class="uk-width-1-1">
                                <div class="header-desc">
                              <h5><?php echo wp_trim_words( get_the_title(), 6, '...' );?></h5>
                                   <?php /*?><h5><?php echo $title; ?></h5><?php */?>
                                </div>
                            </div>
                        </div>
						
                        <?php $content = get_the_content(); ?>
						<?php $sentence = explode('.', $content); ?>
                        <a href="<?php the_permalink(); ?>"><p><?php echo $sentence[0];?>.</p></a>
                        
                        <a class="uk-float-right" href="<?php the_permalink(); ?>">READ MORE</a>
					     <a class="uk-position-cover" href="<?php the_permalink(); ?>"></a>
                    </div>
                   
				</div>
                              
		 <?php endwhile; ?>
        <div class="tm-pagination"><?php wp_pagenavi( array( 'query' => $query ) ); ?></div>
        <?php endif; wp_reset_query(); ?>    
			</div>
		</div>
        
        
				
     </div>
	</div>
 </section>
<?php endwhile;?>
<?php endif;?>
<?php
get_footer();

<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Finjan
 */

get_header(); ?>
 <?php if ( have_posts() ) : ?>
 <?php while ( have_posts() ) : the_post(); ?>	

	<section class="default_page">
	<div class="uk-container uk-container-center">
		<div class="about-us our-team uk-block uk-margin-bottom">
			<?php the_content();?>
		</div>       
    </div>
 </section>
 <?php endwhile;?>
<?php endif;?>
<?php
get_footer();

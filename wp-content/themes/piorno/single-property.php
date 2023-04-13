<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
	<?php while ( have_posts() ) : the_post(); ?>
	<main id="main" class="site-main" role="main">
		<?php get_template_part('modules/property/popup'); ?>
		<?php get_template_part('modules/property/hero'); ?>
		<?php get_template_part('modules/property/contact'); ?>
		<?php get_template_part('modules/property/gallery'); ?>
		<?php get_template_part('modules/property/amenities'); ?>
		<?php get_template_part('modules/property/plans'); ?>
		<?php get_template_part('modules/property/locations'); ?>
	</main><!-- .site-main -->
	<?php endwhile;	?>
</div><!-- .content-area -->

<?php get_footer(); ?>

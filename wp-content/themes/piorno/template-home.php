<?php /* Template Name: Home */ ?>
<?php get_header(); ?>

<?php
	if ( have_posts() ) :
		while ( have_posts() ) :
			the_post();
			if( have_rows('contents') ):
  				while( have_rows('contents') ): the_row();
    				get_template_part('modules/home/'.get_row_layout());
  				endwhile;
			endif;
		endwhile;
	endif;
?>

<?php get_template_part( 'modules/map' ); ?>

<?php get_footer(); ?>

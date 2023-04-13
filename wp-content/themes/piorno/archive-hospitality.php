<?php $selected = $_GET['tab']; ?>
<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
	<section class="hospitality">
		<div class="container">
			<?php // Styles for this block in pages/hospitality/page ?>
			<div class="hospitality__tabs__links">
			<?php while ( have_posts() ) :	the_post(); ?>
				<?php $post_slug = get_post_field( 'post_name', get_post() ); ?>
				<div class="hospitality__tabs__links__link h1<?php echo ( (!$selected && !$wp_query->current_post) || ($selected == $post_slug) ) ? ' active':''; ?>" data-tab="<?php the_ID() ;?>">
					<?php the_title(); ?>
					<?php if( $place = get_field('place') ): ?><span><?php echo $place ?></span><?php endif; ?>
				</div>
		  	<?php endwhile; ?>
			</div><!-- /hospitality__tabs__links -->

			<div class="hospitality__tabs__list">
			<?php while ( have_posts() ) :	the_post(); ?>
				<?php $post_slug = get_post_field( 'post_name', get_post() ); ?>
				<div class="hospitality__tabs__list__tab hospitality__tabs__list__tab--<?php the_ID() ;?><?php echo ( !$wp_query->current_post || $selected == $post_slug ) ? ' active':''; ?>">
					<?php if( has_post_thumbnail() ): ?>
					<div class="background-image"><?php the_post_thumbnail('large',array('alt' => get_the_title())); ?></div>
					<?php endif; ?>

					<div class="hospitality__tabs__list__text-cont">
						<?php if( $logo = get_field('logo') ): ?>
						<div class="hospitality__tabs__list__logo">
							<?php echo ( $link = get_field('external_link') ) ? '<a href="'.$link.'" target="_blank">':''; ?>
							<img src="<?php echo $logo['sizes']['large']; ?>" alt="<?php the_title(); ?>" />
							<?php echo ( $link ) ? '</a>':''; ?>
						</div>
						<?php endif; ?>

						<?php if( $copy = get_field('copy') ): ?>
						<div class="hospitality__tabs__list__text"><?php echo $copy; ?></div>
						<?php endif; ?>
					</div>
				</div> <!--/tab -->
		  	<?php endwhile; ?>
		  	</div><!-- /hospitality__tabs__list -->
		</div><!-- /container -->
	</section><!-- /hospitality -->
<?php else: ?>
	<section class="page-404__text">
		<div class="container center">
			<h2><?php the_field('no_results_text','option'); ?></h2>
		</div>
	</section>
<?php endif; ?>

<?php get_footer(); ?>

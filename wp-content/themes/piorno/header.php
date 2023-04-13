<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php $favicon = get_field('favicon','option');	?>
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo $favicon['url']; ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
	<?php the_field('analytics','options'); ?>
</head>
<?php
if(is_page()) {
	$parent = get_post($post->post_parent); $page_slug = 'page-'.$post->post_name;
	if($parent): $parent_slug = 'parent-'.$parent->post_name; endif;
} else {
	if(is_single()) { $class=''; $category = get_the_category(); $class .= $category[0]->slug; }
}
?>
<body <?php body_class($page_slug ." ". $parent_slug ." ". $class ." ". $newsbar); ?>>
<?php
$logo = get_field('logo','options');
$credits_logo = get_field('credits_logo','options');
$credit_logo_link = get_field('credit_logo_link','options');
?>
<?php wp_body_open(); ?>
<?php the_field('analytics_body','options'); ?>
<div id="page" class="site">
	<div class="site-inner">
		<header class="header">
			<div class="container">
				<div class="header__logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo $logo['sizes']['large']; ?>" alt="<?php bloginfo( 'name' ); ?>" /></a>
				</div> <!--/header__logo -->
				<div class="right">
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
					<a href="javascript:void(0);" class="responsive__btn">
						<span></span><span></span><span></span><span></span>
					</a>
				</div>
			</div>
		</header>

		<?php get_template_part('modules/socials_bar'); ?>

		<div id="content" class="site-content">

<?php

/**

 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

$footer_logo = get_field('footer_logo','options');
$footer_imagen = get_field('footer_imagen','options');
$telefono = get_field('telefono','options');
$address = get_field('address','options');
$email = get_field('email','options');
?>

			<footer id="colophon" class="site-footer animate fadeIn wow" role="contentinfo">
				<?php if ($footer_image): ?>
					<div class="site-footer__image" data-aos="fade-up"><div class="image-background"><img src="<?php echo $footer_image['sizes']['large']; ?>" /></div></div>
				<?php endif; ?>
				<div class="site-footer__content">
					<div class="container">
						<!--/header__logo -->
						<div class="site-footer__columns">
							<div class="site-footer__columns__box"><?php wp_nav_menu( array('menu' => 'Menu Footer', 'menu_class' => 'footer_menu')); ?></div>
							<div class="site-footer__columns__box">
								<?php if ($telefono): ?>
									<p>Telefono</p>
									<a href="tel:<?php echo $telefono ?>"><?php echo $telefono ?></a>
								<?php endif; ?>
								<?php if ($email): ?>
									<p>Email</p>
									<a href="mailto:<?php echo $email ?>"><?php echo $email ?></a>
								<?php endif; ?>
							</div>
							<div class="site-footer__columns__box">
								<p>Follow Us</p>
								<?php get_template_part('modules/socials'); ?>
							</div>
						</div>
						<div class="site-footer__bottom">
							<?php if( have_rows('logos','options') ):?>
								<div class="site-footer__bottom__logos">
									<?php while ( have_rows('logos','options') ) : the_row();
								    $logo = get_sub_field('logo');
										$link = get_sub_field('link');
								  ?>
										<?php if ($link) { ?>
											<a class="site-footer__bottom__logos__item" href="<?php echo $link ?>" target="_blank">
										<?php } else { ?>
											<div class="site-footer__bottom__logos__item">
										<?php } ?>
											<img src="<?php echo $logo['sizes']['large']; ?>" />
										<?php if ($link) { ?>
											</a>
										<?php } else { ?>
											</div>
										<?php } ?>
								  <?php endwhile; ?>
								</div>
							<?php endif; ?>
							<div class="site-footer__bottom__links">
								<?php if( have_rows('icons','options') ):?>
									<div class="site-footer__bottom__icons">
										<?php while ( have_rows('icons','options') ) : the_row();
									    $icono = get_sub_field('icono');
									  ?>
											<div class="site-footer__bottom__icons__item">
												<img src="<?php echo $icono['sizes']['large']; ?>" />
											</div>
									  <?php endwhile; ?>
									</div>
								<?php endif; ?>
								<a href="#">Terms & Privacy</a>
							</div>
						</div>
						<?php // Styles for this block in pages/components/socials_bar ?>

						<div class="socials__bar">
						  <?php if (get_field('facebook','option')) { ?>
						    <a href="<?php the_field('facebook','option') ?>" class="facebook" target="_blank"><?php get_template_part('icons/facebook'); ?></a>
						  <?php }  ?>
						  <?php if (get_field('instagram','option')) { ?>
						    <a href="<?php the_field('instagram','option') ?>" class="instagram" target="_blank"><?php get_template_part('icons/instagram'); ?></a>
						  <?php }  ?>
						  <?php if (get_field('linkedin','option')) { ?>
						    <a href="<?php the_field('linkedin','option') ?>" class="linkedin" target="_blank"><?php get_template_part('icons/linkedin'); ?></a>
						  <?php }  ?>
						  <?php if (get_field('twitter','option')) { ?>
						    <a href="<?php the_field('twitter','option') ?>" class="twitter" target="_blank"><?php get_template_part('icons/twitter'); ?></a>
						  <?php }  ?>
						</div>	<!--/socials__bar -->
					</div>
				</div>
			</footer><!-- .site-footer -->

		</div><!-- .site-content -->
	</div><!-- .site-inner -->
</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>

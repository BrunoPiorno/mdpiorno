<?php /* Template Name: Coberturas */ ?>
<?php get_header(); ?>

<?php
  $hero = get_sub_field('hero');
?>

<section class="hero" style="background-image: url('<?php echo $hero['sizes']['large']; ?>')">
  <div class="hero__title">
    <div class="container">
      <h1 class="hero__title__h1"></h1>
    </div>
  </div>
</section>

<?php
  $titulo_coberturas = get_sub_field('titulo_coberturas');
  $texto_coberturas = get_sub_field('texto_coberturas');
?>


<section class="coberturas">
	<div class="container">
		<?php if ($titulo_coberturas || $texto_coberturas) { ?>
		<div class="coberturas__cont">
			<?php if ($titulo_coberturas) { ?><h1 class="coberturas__cont__title h1"><?php echo $titulo_coberturas; ?></h1><?php } ?>
			<?php if ($texto_coberturas) { ?><div class="coberturas__cont__text"><?php echo $texto_coberturas; ?></div><?php } ?>
		</div>
		<?php } ?>

		<?php if( have_rows('coberturas') ):?>
			<div class="coberturas__grid">

		<?php  while( have_rows('coberturas') ) : the_row();
			$imagen_coberturas = get_sub_field('imagen_coberturas');
			$titulo = get_sub_field('titulo');
      $link = get_sub_field('link');
      $texto = get_sub_field('texto');
		?>

          <?php if($link) { ?>
            <a class="coberturas__grid__item" href="#">
          <?php } else { ?>
            <div class="coberturas__grid__item">
          <?php } ?>
            <div class="row">
              <img src="<?php echo $imagen_coberturas['sizes']['large']; ?>" alt="<?php echo $imagen_coberturas['alt']; ?>" />
  					  <?php if ($titulo) { ?> <div class="coberturas__grid__item__title h3"><?php echo $titulo; ?></div><?php } ?>
              <?php if ($texto) { ?> <div class="coberturas__grid__item__text"><?php echo $texto; ?></div><?php } ?>
            </div>
          <?php if($link) { ?>
          </a>
          <?php } else { ?>
          </div>
          <?php } ?>
			<?php endwhile; ?>
		</div>
	<?php endif; ?>
	</div>
</section>

<?php get_footer(); ?>

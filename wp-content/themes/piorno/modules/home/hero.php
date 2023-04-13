<?php // Styles for this block in pages/modules/hero ?>
<?php
  $titulo = get_sub_field('titulo');
  $subtitulo = get_sub_field('subtitulo');
?>

<section class="hero-home">
  <?php $images = get_sub_field('galeria');
  if( $images ): ?>
    <div class="hero-home__carousel">
      <?php foreach( $images as $image ): ?>
        <div class="hero-home__item" style="background-image: url(<?php echo esc_url($image['sizes']['large']); ?>)"></div>
      <?php endforeach; ?>
    </div>
  <?php endif; ?>
  <div class="hero-home__cont">
    <div class="container">
      <?php if ($titulo) { ?><div class="hero-home__title"><?php echo $titulo ?></div><?php } ?>
      <?php if ($subtitulo) { ?><div class="hero-home__text"><?php echo $subtitulo ?></div><?php } ?>
    </div>
  </div>
</section>

<?php // Styles for this block in pages/components/map ?>


<?php $mostrar_mapa = get_field('mostrar_mapa'); ?>
<?php if ($mostrar_mapa): ?>
  <section class="map">
    <?php $address = get_field('mapa','options'); ?>
    <div class="map__cont">
      <?php echo do_shortcode($address); ?>
    </div>
  </section>
<?php endif; ?>

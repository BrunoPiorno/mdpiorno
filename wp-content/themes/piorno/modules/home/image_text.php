<?php // Styles for this block in pages/modules/home/image_text ?>
<?php
  $image = get_sub_field('image');
  $text = get_sub_field('text');
  $link = get_sub_field('link');
?>

<section class="image-text-block">
  <div class="container">
      <div class="image-text-block__column--left">
        <div class="image-text-block__image">
          <div class="image-poliza"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></div>
        </div>
      </div>

    <?php if ($text) { ?>
      <div class="image-text-block__column--right site-text-styles">
        <div class="row"><?php echo $text ?></div>
        <?php if ($link) { ?>
          <div class="image-text-block__column--right__link">
            <a class="button" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
          </div>
        <?php } ?>
      </div>
    <?php } ?>
  </div>
</section>

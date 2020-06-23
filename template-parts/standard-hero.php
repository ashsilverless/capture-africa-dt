<?php $heroImage = get_field('hero_background_image');?>
<div class="component__page-hero">
  <div class="component__page-hero__hero">
    <div class="component__page-hero__hero__container">
      <div class="component__banner__hero__background">
      <img <?php $thisImage = $heroImage;?>
        src="<?php echo $thisImage['url'];?>"
        title="<?php echo $thisImage['title'];?>"
        alt="<?php echo $thisImage['alt'];?>"
      />
      </div>
    </div>
  </div>
</div>

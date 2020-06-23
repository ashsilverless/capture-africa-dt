<?php $ctaImage = get_field('call_to_action_background_image');?>
<div class="component__banner">
  <div class="component__banner__hero">
    <div class="component__banner__hero__container">
      <div class="component__banner__hero__background">
          <img <?php $thisImage = $ctaImage;?>
            src="<?php echo $thisImage['url'];?>"
            title="<?php echo $thisImage['title'];?>"
            alt="<?php echo $thisImage['alt'];?>"
          />
      </div>
      <div class="page__grid">
        <div class="component__banner__content grid__location--content">
          <h2 class="component__banner__content__title"><?php the_field('call_to_action_heading');?></h2>
          <a class="button-one" href="<?php the_field('call_to_action_button_target');?>"
            ><span class="button-one__wrapper"><?php the_field('call_to_action_button_text');?></span></a
          >
        </div>
      </div>
    </div>
  </div>
</div>

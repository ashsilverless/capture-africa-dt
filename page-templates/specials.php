<?php
/**
 * ============== Template Name: Specials Page
 *
 * @package captureafrica
 */
get_header();?>
<?php get_template_part('template-parts/standard-hero');?>
<?php get_template_part('template-parts/under-hero');?>

<div
  data-expandable-animation-duration="500"
  data-expandable-container="true"
  data-expandable-scroll-animation="true"
  data-expandable-one-at-a-time="true"
  class="component__expandable__container--style-1"
>
<?php if( have_rows('specials') ): ?>
    <?php $i = 1;?>
    <?php while( have_rows('specials') ): the_row(); ?>
        <?php
        $specialImage = get_sub_field('background_image');
        ?>
        <div
          class="component__expandable__item--style-1"
          data-expandable-item="true"
          data-expandable-is-expanded="false"
        >
          <div class="component__banner" data-expandable-hero="true">
            <div class="component__banner__hero page__grid">
              <div
                class="component__banner__hero__container grid__location--wide-content"
              >
                <div class="component__banner__hero__background">
                    <img <?php $thisImage = $specialImage;?>
                      src="<?php echo $thisImage['url'];?>"
                      title="<?php echo $thisImage['title'];?>"
                      alt="<?php echo $thisImage['alt'];?>"
                    />
                </div>

                <div class="page__grid">
                  <div class="component__banner__content grid__location--content">
                    <p class="component__banner__content__sub-title">special <?php echo $i;?></p>
                    <h2 class="component__banner__content__title"><?php the_sub_field('title');?></h2>
                    <a class="button-three" href="#" data-expandable-cta="true"
                      ><span class="button-three__icon"
                        ><svg
                          class=""
                          xmlns="http://www.w3.org/2000/svg"
                          width="30"
                          height="30"
                        >
                          <path
                            d="M30 15A15 15 0 1115 0a15.072 15.072 0 0115 15zM1.6 15A13.392 13.392 0 1015 1.6 13.384 13.384 0 001.6 15zm20.908.56l-5.54 5.554a.745.745 0 01-.527.209.674.674 0 01-.688-.688.75.75 0 01.24-.544l2.641-2.641 1.889-1.777-2.562.084H7.956a.714.714 0 01-.753-.752.707.707 0 01.753-.721h10.005l2.561.064-1.889-1.776-2.641-2.626a.7.7 0 01.448-1.233.745.745 0 01.527.209l5.54 5.538a.772.772 0 01.256.56.757.757 0 01-.255.537z"
                            fill="currentColor"
                          ></path></svg></span
                      ><span class="button-three__wrapper">View Special</span></a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="page__grid" data-expandable-content="true">
            <div
              class="grid__location--wide-content component__expandable__content--style-1"
            >
              <div class="page__grid">
                <div class="grid__location--content">
                  <h1 class="type__scale--4"><?php the_sub_field('title');?><br />Special Offer</h1>
                </div>
            </div>
                <?php if( have_rows('offer_details') ): ?>
                    <?php while( have_rows('offer_details') ): the_row(); ?>
                        <div class="page__grid special-offer-details">
                            <div class="grid__location--sidebar">
                                <h3 class="type__scale--5"><?php the_sub_field('heading');?></h3>
                            </div>
                            <div class="grid__location--content special-offer">
                                <p><?php the_sub_field('copy');?></p>
                            </div>
                        </div>
                    <?php endwhile;?>
                <?php endif;?>
            <div class="page__grid">
                <div class="grid__location--content">
                  <a class="button-one" href="/contact"
                    ><span class="button-one__wrapper">Get In Touch</span></a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php $i++;?>
    <?php endwhile;?>
<?php endif;?>
</div>

<?php get_template_part('template-parts/call-to-action');?>
<?php get_footer();?>

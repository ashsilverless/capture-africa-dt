<?php
/**
 * ============== Template Name: Home Page
 *
 * @package captureafrica
 */
get_header();?>

<?php if( have_rows('hero') ):
    $i = 1;?>
    <?php while( have_rows('hero') ): the_row(); ?>
        <div
          class="component__expandable__item--style-1 experience-block hero-wrapper"
          data-expandable-item="true"
          data-expandable-is-expanded="false">
          <div class="component__banner" data-expandable-hero="true">
            <div class="">
              <div class="component__banner__hero__container grid__location--wide-content carousel-wrapper home-slider">
                  <div class="component__experience-slider__controls--prev exp-prev<?=$i;?>">
                    <svg class="" xmlns="http://www.w3.org/2000/svg" width="30" height="30">
                      <path
                        d="M0 15a15 15 0 1115 15A15.072 15.072 0 010 15zm6.82.624l6 5.987a.859.859 0 00.592.241.766.766 0 00.785-.785.827.827 0 00-.273-.592l-2.833-2.834-2.05-1.92 2.818.1h10.775a.777.777 0 00.832-.817.8.8 0 00-.832-.849H11.862l-2.833.1 2.065-1.922L13.927 9.5a.826.826 0 00.273-.592.766.766 0 00-.785-.785.794.794 0 00-.592.24l-6 6a.862.862 0 00-.288.624.879.879 0 00.285.637z"
                        fill="currentColor"
                      ></path>
                    </svg>
                  </div>
                  <div class="component__experience-slider__controls--next exp-next<?=$i;?>">
                <svg
                  class="icon--rotate-180"
                  xmlns="http://www.w3.org/2000/svg"
                  width="30"
                  height="30"
                >
                  <path
                    d="M0 15a15 15 0 1115 15A15.072 15.072 0 010 15zm6.82.624l6 5.987a.859.859 0 00.592.241.766.766 0 00.785-.785.827.827 0 00-.273-.592l-2.833-2.834-2.05-1.92 2.818.1h10.775a.777.777 0 00.832-.817.8.8 0 00-.832-.849H11.862l-2.833.1 2.065-1.922L13.927 9.5a.826.826 0 00.273-.592.766.766 0 00-.785-.785.794.794 0 00-.592.24l-6 6a.862.862 0 00-.288.624.879.879 0 00.285.637z"
                    fill="currentColor"
                  ></path>
                </svg>
              </div>
                    <div class="component__banner__hero__background">
                        <div class="home-slider__list<?=$i;?>">
                        <?php
            			$images = get_sub_field('carousel_images');
            			if( $images ):
                        foreach( $images as $image ): ?>
                        <div class="image-item" style="background:url('<?php echo $image['url']; ?>');"></div>
            			<?php endforeach; ?>
            			<?php endif; ?>
                        </div>
                    </div>
              </div>
            </div>
          </div>
          <div class="page__grid hero-wrapper__content">
              <div class="component__homepage-hero__content grid__location--content">
                <h2 class="component__homepage-hero__content__title"><?php the_sub_field('heading');?></h2>
                <p class="component__homepage-hero__content__description"><?php the_sub_field('copy');?></p>
                    <div class="component__homepage-hero__content__scroll-button js-scroll-down" >
                        <svg
                        class="icon--rotate-90"
                        xmlns="http://www.w3.org/2000/svg"
                        width="30"
                        height="30">
                            <path
                              d="M30 15A15 15 0 1115 0a15.072 15.072 0 0115 15zM1.6 15A13.392 13.392 0 1015 1.6 13.384 13.384 0 001.6 15zm20.908.56l-5.54 5.554a.745.745 0 01-.527.209.674.674 0 01-.688-.688.75.75 0 01.24-.544l2.641-2.641 1.889-1.777-2.562.084H7.956a.714.714 0 01-.753-.752.707.707 0 01.753-.721h10.005l2.561.064-1.889-1.776-2.641-2.626a.7.7 0 01.448-1.233.745.745 0 01.527.209l5.54 5.538a.772.772 0 01.256.56.757.757 0 01-.255.537z"
                              fill="currentColor"></path>
                        </svg>
                    </div>
                </div>
        </div>
    </div>
        <?php $i++;?>
    <?php endwhile;?>
<?php endif;?>










<div id="under-hero"></div>
<?php get_template_part('template-parts/under-hero');?>

<section class="component__experience-slider">
  <div class="page__grid component__experience-slider__container">
    <div class="grid__location--content">
      <h2 class="component__experience-slider__title">Experiences</h2>
    </div>
    <div
      class="grid__location--extra-wide-content component__experience-slider__wrapper"
    >
      <div class="component__experience-slider__controls--prev">
        <svg class="" xmlns="http://www.w3.org/2000/svg" width="30" height="30">
          <path
            d="M0 15a15 15 0 1115 15A15.072 15.072 0 010 15zm6.82.624l6 5.987a.859.859 0 00.592.241.766.766 0 00.785-.785.827.827 0 00-.273-.592l-2.833-2.834-2.05-1.92 2.818.1h10.775a.777.777 0 00.832-.817.8.8 0 00-.832-.849H11.862l-2.833.1 2.065-1.922L13.927 9.5a.826.826 0 00.273-.592.766.766 0 00-.785-.785.794.794 0 00-.592.24l-6 6a.862.862 0 00-.288.624.879.879 0 00.285.637z"
            fill="currentColor"
          ></path>
        </svg>
      </div>
      <?php if( have_rows('experience_leaders') ): ?>
          <ul class="component__experience-slider__list">
              <?php while( have_rows('experience_leaders') ): the_row(); ?>
                <?php $experienceImage = get_sub_field('background_image');?>
                <li class="component__experience-slider-item">
          <div class="component__experience-slider-item__container">
            <div class="component__experience-slider-item__background">
                <img
                  alt="<?php echo $experienceImage['alt']; ?>"
                  src="<?php echo $experienceImage['url']; ?>"
                  title="<?php echo $experienceImage['title']; ?>"
                />
            </div>
            <div class="component__experience-slider-item__content">
              <h3 class="component__experience-slider-item__title">
                <?php the_sub_field('title');?>
              </h3>
              <p class="component__experience-slider-item__description">
                  <?php the_sub_field('copy');?>
              </p>
              <div class="component__experience-slider-item__link">
                <a class="button-four" href="/experiences"
                  ><span class="button-four__wrapper">Find out more</span></a
                >
              </div>
            </div>
          </div>
        </li>
                <?php endwhile;?>
            </ul>
            <?php endif;?>
      <div class="component__experience-slider__controls--next">
        <svg
          class="icon--rotate-180"
          xmlns="http://www.w3.org/2000/svg"
          width="30"
          height="30"
        >
          <path
            d="M0 15a15 15 0 1115 15A15.072 15.072 0 010 15zm6.82.624l6 5.987a.859.859 0 00.592.241.766.766 0 00.785-.785.827.827 0 00-.273-.592l-2.833-2.834-2.05-1.92 2.818.1h10.775a.777.777 0 00.832-.817.8.8 0 00-.832-.849H11.862l-2.833.1 2.065-1.922L13.927 9.5a.826.826 0 00.273-.592.766.766 0 00-.785-.785.794.794 0 00-.592.24l-6 6a.862.862 0 00-.288.624.879.879 0 00.285.637z"
            fill="currentColor"
          ></path>
        </svg>
      </div>
    </div>
    <div
      class="grid__location--content component__experience-slider__cta-container"
    >
      <a class="button-two" href="/experiences"
        ><span class="button-two__icon"
          ><svg
            class=""
            xmlns="http://www.w3.org/2000/svg"
            width="30"
            height="30"
          >
            <path
              d="M30 15A15 15 0 1115 0a15.072 15.072 0 0115 15zM1.6 15A13.392 13.392 0 1015 1.6 13.384 13.384 0 001.6 15zm20.908.56l-5.54 5.554a.745.745 0 01-.527.209.674.674 0 01-.688-.688.75.75 0 01.24-.544l2.641-2.641 1.889-1.777-2.562.084H7.956a.714.714 0 01-.753-.752.707.707 0 01.753-.721h10.005l2.561.064-1.889-1.776-2.641-2.626a.7.7 0 01.448-1.233.745.745 0 01.527.209l5.54 5.538a.772.772 0 01.256.56.757.757 0 01-.255.537z"
              fill="currentColor"
            ></path></svg></span><span class="button-two__wrapper">Start Planning</span></a>
      <a class="button-four white" href="/destinations"><span class="button-five__wrapper">All Destinations</span></a>
    </div>
  </div>
</section>

<?php if( have_rows('sample_itinerary') ): ?>
    <?php while( have_rows('sample_itinerary') ): the_row(); ?>
<div data-expandable-container="true">
    <?php $intineraryImage = get_sub_field('background_image_sample');?>
  <div
    data-expandable-item="true"
    data-expandable-is-expanded="false"
    data-expandable-scroll-animation="true"
    data-expandable-animation-duration="500"
  >
    <div class="component__banner" data-expandable-hero="true">
      <div class="component__banner__hero">
        <div class="component__banner__hero__container">
          <div class="component__banner__hero__background">

          <img <?php $thisImage = $intineraryImage;?>
            src="<?php echo $thisImage['url'];?>"
            title="<?php echo $thisImage['title'];?>"
            alt="<?php echo $thisImage['alt'];?>"
          />
          </div>
          <div class="page__grid">
            <div class="component__banner__content grid__location--content">
              <h2 class="component__banner__content__title">
                <?php the_sub_field('title_sample');?>
              </h2>
              <a class="button-three expanding" href="#" data-expandable-cta="true"
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
                ><span class="button-three__wrapper">see more</span></a
              >
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="page__grid" data-expandable-content="true">
      <div class="grid__location--content">
        <h3 class="type__scale--4"><?php the_sub_field('heading_sample');?></h3>
      </div>

      <?php if( have_rows('items_sample') ): ?>
          <?php while( have_rows('items_sample') ): the_row(); ?>
              <div class="grid__location--sidebar">
                <h4 class="type__scale--5"><?php the_sub_field('section_heading');?></h4>
              </div>
              <div class="grid__location--content sample-content">
                <p><?php the_sub_field('section_content');?></p>
              </div>
<?php endwhile;?>
<?php endif;?>
      <div class="grid__location--content">
          <a class="button-three" href="#" data-expandable-close-cta="true"
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
                ><span class="button-three__wrapper">see less text</span></a
              >
      </div>

      </div>
    </div>
  </div>
</div>
<?php endwhile; ?>
<?php endif; ?>

<?php get_template_part('template-parts/call-to-action');?>
<?php get_footer();?>

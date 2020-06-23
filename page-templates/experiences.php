<?php
/**
 * ============== Template Name: Experiences Page
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
<?php if( have_rows('experiences') ): ?>
    <?php while( have_rows('experiences') ): the_row(); ?>
        <div
          class="component__expandable__item--style-1"
          data-expandable-item="true"
          data-expandable-is-expanded="false"
        >
          <div class="component__banner" data-expandable-hero="true">
            <div class="component__banner__hero page__grid">
              <div
                class="component__banner__hero__container grid__location--wide-content carousel-wrapper"
              >
              <div class="component__experience-slider__controls--prev">
                <svg class="" xmlns="http://www.w3.org/2000/svg" width="30" height="30">
                  <path
                    d="M0 15a15 15 0 1115 15A15.072 15.072 0 010 15zm6.82.624l6 5.987a.859.859 0 00.592.241.766.766 0 00.785-.785.827.827 0 00-.273-.592l-2.833-2.834-2.05-1.92 2.818.1h10.775a.777.777 0 00.832-.817.8.8 0 00-.832-.849H11.862l-2.833.1 2.065-1.922L13.927 9.5a.826.826 0 00.273-.592.766.766 0 00-.785-.785.794.794 0 00-.592.24l-6 6a.862.862 0 00-.288.624.879.879 0 00.285.637z"
                    fill="currentColor"
                  ></path>
                </svg>
              </div>
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
                <div class="component__banner__hero__background">
                    <div class="experience-carousel">
                    <?php
        			$images = get_sub_field('carousel');
        			if( $images ):
                    foreach( $images as $image ): ?>
                    <img src="<?php echo $image['sizes']['large']; ?>" />
        			<?php endforeach; ?>
        			<?php endif; ?>
                    </div>
                </div>

                <div class="page__grid">
                  <div class="component__banner__content grid__location--content">
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
                      ><span class="button-three__wrapper">View Experience</span></a
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
                  <h1 class="type__scale--4"><?php the_sub_field('title');?></h1>
                  <p><?php the_sub_field('copy');?></p>
                  <a class="button-one" href="/contact"
                    ><span class="button-one__wrapper">Get In Touch</span></a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>

    <?php endwhile;?>
<?php endif;?>
</div>

<?php get_template_part('template-parts/call-to-action');?>
<?php get_footer();?>

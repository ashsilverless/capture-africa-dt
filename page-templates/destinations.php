<?php
/**
 * ============== Template Name: Destinations Page
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
<?php if( have_rows('destinations') ): ?>
    <?php while( have_rows('destinations') ): the_row(); ?>
        <?php
        $destImage = get_sub_field('background_image');
        $destMap = get_sub_field('map');
        ?>
        <div
          class="component__expandable__item--style-1 destination-item"
          data-expandable-item="true"
          data-expandable-is-expanded="false"
        >
          <div class="component__banner" data-expandable-hero="true">
            <div class="component__banner__hero page__grid">
              <div
                class="component__banner__hero__container grid__location--wide-content"
              >
                <div class="component__banner__hero__background">
                    <img <?php $thisImage = $destImage;?>
                      src="<?php echo $thisImage['url'];?>"
                      title="<?php echo $thisImage['title'];?>"
                      alt="<?php echo $thisImage['alt'];?>"
                    />
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
                      ><span class="button-three__wrapper">View Destination</span></a
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
                    <h1 class="type__scale--5"><?php the_sub_field('sub_heading');?></h1>
                  </div>
                  <div class="grid__location--sidebar">
                    <div class="component__map">
                      <div class="component__map__image-container svg-map">
                        <img src="<?php echo $destMap['url'];?>"/>
                      </div>
                      <div class="component__map__cta-container">
                        <hr />
                        <a class="button-three" href="<?php the_sub_field('google_earth_location');?>" target="_blank"
                          ><span class="button-three__icon"
                            ><svg
                              class=""
                              xmlns="http://www.w3.org/2000/svg"
                              width="29.994"
                              height="30"
                            >
                              <path
                                d="M29.994 14.066v1.874c-.017.075-.038.15-.048.225-.086.628-.13 1.264-.261 1.882A15.011 15.011 0 0116.77 29.891c-.278.034-.557.071-.836.107H14.06c-.084-.017-.168-.039-.253-.05-.628-.088-1.262-.138-1.881-.266a14.55 14.55 0 01-5.178-2.155 14.989 14.989 0 01-6.64-14.313 14.5 14.5 0 01.835-3.458A15.022 15.022 0 0114.317.017a14.536 14.536 0 014.322.433 15.021 15.021 0 0111.248 12.778c.034.281.073.563.107.838zm-27.21 4.308l.067.021a1.693 1.693 0 011.66-.591 7.733 7.733 0 011.193.269c1.238.383 2.463.807 3.7 1.178 1.942.581 3.894 1.13 5.883 1.526a34.362 34.362 0 004.429.619 18.408 18.408 0 004.636-.185 7.963 7.963 0 001.76-.528.543.543 0 00.321-.316c.2-.547.412-1.092.615-1.639a.55.55 0 000-.151 2.622 2.622 0 01-.959.419 6 6 0 01-2.182-.041 19.408 19.408 0 01-3.558-1.038 35.255 35.255 0 01-5.036-2.466c-1.559-.888-3.107-1.794-4.67-2.674a10.881 10.881 0 00-2.794-1.1 7.363 7.363 0 00-2.9-.191 3.493 3.493 0 00-2.27 1.319.738.738 0 00-.154.307c-.073.383-.139.768-.181 1.155a9.367 9.367 0 00.129 2.737c.087.463.208.915.311 1.37zm3.05-11.882c.2-.053.39-.115.588-.157a10.894 10.894 0 012.444-.2A10.208 10.208 0 0113.39 7.28a35.338 35.338 0 016.022 3.923c1.108.9 2.239 1.763 3.379 2.616a15.413 15.413 0 001.666 1.086 9.471 9.471 0 001.517.681 1.17 1.17 0 001.494-.527.7.7 0 00.128-.436 15.2 15.2 0 00-.318-2.447c-.229.051-.441.115-.66.141a1.917 1.917 0 01-1.159-.34 15.53 15.53 0 01-3.109-2.376c-.751-.711-1.462-1.463-2.18-2.208a15.437 15.437 0 00-1.826-1.687 11.559 11.559 0 00-3.051-1.649 11.8 11.8 0 00-4.687-.687 1.712 1.712 0 00-.568.113 12.188 12.188 0 00-2.769 1.623 7.81 7.81 0 00-1.435 1.385zM23.56 24.261c-.582.155-1.14.332-1.71.449a18.964 18.964 0 01-3.841.333 30.032 30.032 0 01-5.754-.578 6.13 6.13 0 00-1.684-.153 1.065 1.065 0 00-1.02 1.075 3.028 3.028 0 00.188.94.37.37 0 00.263.276 17.7 17.7 0 004.521 1.012 9.738 9.738 0 003.049-.234 14.665 14.665 0 004.777-2.066 5.253 5.253 0 001.211-1.054z"
                                fill="currentColor"
                              ></path></svg></span
                          ><span class="button-three__wrapper"
                            >View on Google Earth</span
                          ></a
                        >
                      </div>
                    </div>
                  </div>
                  <div class="grid__location--content">
                  <p><?php the_sub_field('copy');?></p>
                  <a class="button-one" href="/contact"
                    ><span class="button-one__wrapper">Get In Touch</span></a
                  >
                </div>
              </div>
              <div class="page__grid">
                  <?php get_template_part('template-parts/flexible-gallery');?>
              </div>
            </div>
          </div>
        </div>

    <?php endwhile;?>
<?php endif;?>
</div>

<div class="component__banner">
  <div class="component__banner__hero">
    <div class="component__banner__hero__container">
      <div class="page__grid">
        <div class="component__banner__content grid__location--content">
          <h2 class="component__banner__content__title">Contact Us</h2>
          <a class="button-one" href="#"
            ><span class="button-one__wrapper">Example Button</span></a
          >
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_template_part('template-parts/call-to-action');?>
<?php get_footer();?>

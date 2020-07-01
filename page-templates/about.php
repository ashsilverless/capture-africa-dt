<?php
/**
 * ============== Template Name: About Page
 *
 * @package captureafrica
 */
get_header();?>
<?php get_template_part('template-parts/standard-hero');?>
<?php get_template_part('template-parts/under-hero');?>

<section class="component__quote-section">
  <div class="page__grid component__quote-section__container">
    <div class="grid__location--sidebar">
      <h2 class="component__quote-section__title">What people say</h2>
    </div>
    <div class="grid__location--content">
    <?php if( have_rows('testimonials') ): ?>
      <div class="component__quote-slider">
        <div class="component__quote-slider__container">
            <?php while( have_rows('testimonials') ): the_row(); ?>
                <blockquote class="component__quote">
                  <p class="component__quote__text">
                    <?php the_sub_field('testimonial');?>
                  </p>
                  <footer class="component__quote__footer">
                    <?php the_sub_field('attributed_to');?>
                  </footer>
                </blockquote>
            <?php endwhile;?>
        </div>
        <?php endif;?>
        <div class="component__quote-slider__controls">
          <div class="component__quote-slider__controls--prev">
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
          <div class="component__quote-slider__controls--next">
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
      </div>
    </div>
  </div>
</section>

<?php if( have_rows('faq') ): ?>
    <?php while( have_rows('faq') ): the_row(); ?>
    <?php $faqImage = get_sub_field('faq_background_image');?>
<div class="component__banner">
  <div class="component__banner__hero">
    <div class="component__banner__hero__container">
      <div class="component__banner__hero__background">
          <img <?php $thisImage = $faqImage;?>
            src="<?php echo $thisImage['url'];?>"
            title="<?php echo $thisImage['title'];?>"
            alt="<?php echo $thisImage['alt'];?>"
          />
      </div>
      <div class="page__grid">
        <div class="component__banner__content grid__location--content">
          <h2 class="component__banner__content__title">
            <?php the_sub_field('faq_heading');?>
          </h2>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="page__grid">
    <?php if( have_rows('faq_items') ): ?>
        <?php while( have_rows('faq_items') ): the_row(); ?>
        <div class="grid__location--content toggle">
          <p class="toggle__question">
              <svg
                class=""
                xmlns="http://www.w3.org/2000/svg"
                width="30"
                height="30"
              >
                <path
                  d="M30 15A15 15 0 1115 0a15.072 15.072 0 0115 15zM1.6 15A13.392 13.392 0 1015 1.6 13.384 13.384 0 001.6 15zm20.908.56l-5.54 5.554a.745.745 0 01-.527.209.674.674 0 01-.688-.688.75.75 0 01.24-.544l2.641-2.641 1.889-1.777-2.562.084H7.956a.714.714 0 01-.753-.752.707.707 0 01.753-.721h10.005l2.561.064-1.889-1.776-2.641-2.626a.7.7 0 01.448-1.233.745.745 0 01.527.209l5.54 5.538a.772.772 0 01.256.56.757.757 0 01-.255.537z"
                  fill="currentColor"
                ></path></svg>
              <?php the_sub_field('question');?></p>
          <div class="toggle__answer"><?php the_sub_field('answer');?></div>
        </div>
        <?php endwhile;?>
    <?php endif;?>
</div>
<?php endwhile;?>
<?php endif;?>
<!--
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
-->
<?php get_template_part('template-parts/call-to-action');?>
<?php get_footer();?>

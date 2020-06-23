<?php
/**
 * ============== Template Name: Contact Page
 *
 * @package captureafrica
 */
get_header();?>
<?php get_template_part('template-parts/standard-hero');?>
<?php get_template_part('template-parts/under-hero');?>
<div class="page__grid">
  <div class="grid__location--wide-content">
    <?php echo do_shortcode('[contact-form-7 id="25" title="Contact form 1"]');?>
  </div>
</div>
<?php get_footer();?>

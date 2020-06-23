<?php
/**
 * ============== Template Name: Gallery Page
 *
 * @package captureafrica
 */
get_header();?>
<?php get_template_part('template-parts/standard-hero');?>
<?php get_template_part('template-parts/under-hero');?>
<div class="page__grid gallery-page">
<?php get_template_part('template-parts/flexible-gallery');?>
</div>

<?php get_template_part('template-parts/call-to-action');?>
<?php get_footer();?>

<?php
/**
 * ============== Template Name: Legal
 *
 * @package captureafrica
 */
get_header();?>
<?php get_template_part('template-parts/standard-hero');?>


<div class="page__grid">
    <div class="grid__location--content">
        <h1 class="type__scale--2"><?php the_field('main_title');?></h1>
    </div>
    <nav class="page-navigation grid__location--sidebar" role="navigation" aria-labelledby="page-navigation-label">
        <h2 id="page-navigation-label">Legal pages</h2>
        <ul class="page-navigation__list">
            <li class="page-navigation__list-item page-navigation__list-item--current">
                <a href="/privacy-policy">Privacy Policy</a>
            </li>
            <li class="page-navigation__list-item">
                <a href="/terms">Terms &amp; Conditions</a>
            </li>
        </ul>
    </nav>
    <div class="grid__location--content">
        <?php the_field('terms_copy');?>
    </div>
</div>

<?php get_template_part('template-parts/call-to-action');?>

<?php get_footer();?>
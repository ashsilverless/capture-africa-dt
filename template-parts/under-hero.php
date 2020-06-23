<div class="page__grid">
    <?php if(get_field('after_hero_heading')):?>
    <div class="grid__location--content">
      <h1 class="type__scale--2"><?php the_field('after_hero_heading');?></h1>
    </div>
    <?php endif;?>
  <div class="grid__location--sidebar">
      <?php if(get_field('after_hero_quote')):?>
        <p class="type__scale--6">
          <?php the_field('after_hero_quote');?>
        </p>
    <?php endif;?>
  </div>
  <div class="grid__location--content">
    <?php if(get_field('after_hero_copy')):?>
        <p><?php the_field('after_hero_copy');?></p>
    <?php endif;?>
    <div class="read-more-wrapper">
        <p><?php the_field('after_hero_read_more_copy');?></p>
    </div>
    <?php if(get_field('after_hero_read_more_copy')):?>
        <a class="button-two read-more-trigger"><span class="button-two__icon">
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
              </span>
            <span class="button-two__wrapper">Continue Reading</span>
        </a>
    <?php endif;?>
  </div>
</div>

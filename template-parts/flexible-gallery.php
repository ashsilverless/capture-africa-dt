<div class="gallery">
    <?php
    if( have_rows('dest_gallery') ):
    while ( have_rows('dest_gallery') ) : the_row();?>

        <?php if( get_row_layout() == 'fullwidth' ):?>
        <div class="gallery__fullwidth slide-up">
            <?php $image = get_sub_field('image');?>
            <?php $imageHeight = get_sub_field('height');?>
            <?php $imageType = get_sub_field('inline_item');?>
            <?php if($imageType == 'yes') :?>
                <div class="inline-wrapper">
                    <a href="<?php echo $image['url']; ?>" class="inline">
                        <img
                          alt="<?php echo $image['alt']; ?>"
                          src="<?php echo $image['url']; ?>"
                          title="<?php echo $image['title']; ?>"
                        />
                        <p><?php echo $image['title']; ?></p>
                        <i class="fas fa-search"></i>
                    </a>
                </div>
            <?php endif;?>
            <?php if($imageType == 'no') :?>
                <a href="<?php echo $image['url']; ?>" class="lightbox-gallery <?php echo $imageType;?>"  alt="<?php echo $image['alt']; ?>" style=" height:<?php echo $imageHeight;?>vh;">
                    <img
                      alt="<?php echo $image['alt']; ?>"
                      src="<?php echo $image['url']; ?>"
                      title="<?php echo $image['title']; ?>"
                    />
                    <p><?php echo $image['title']; ?></p>
                    <i class="fas fa-search"></i>
                </a>
            <?php endif;?>

        </div><!--fullwidth-->

    <?php elseif( get_row_layout() == 'halves' ):?>
        <?php $imageHeight = get_sub_field('height');?>
        <div class="gallery__halves slide-up">
            <?php if( have_rows('half_images') ):
            while ( have_rows('half_images') ) : the_row();
            $halfImage = get_sub_field('half_image');?>
                <a href="<?php echo $halfImage['url']; ?>" class="lightbox-gallery"  alt="<?php echo $halfImage['alt']; ?>" style="height:<?php echo $imageHeight;?>vh;">
                    <img
                      alt="<?php echo $halfImage['alt']; ?>"
                      src="<?php echo $halfImage['url']; ?>"
                      title="<?php echo $halfImage['title']; ?>"
                    />
                    <p><?php echo $halfImage['title']; ?></p>
                    <i class="fas fa-search"></i>
                </a>
            <?php endwhile; endif; //image repeater?>
        </div>

    <?php elseif( get_row_layout() == 'onethird-twothird' ):?>
        <?php $alignment = get_sub_field('alignment');?>
        <div class="gallery__onethird-twothird <?php echo $alignment;?> slide-up">
            <?php $imageHeight = get_sub_field('height');?>
            <?php if( have_rows('half_images') ):
            while ( have_rows('half_images') ) : the_row();
            $halfImage = get_sub_field('half_image');?>

                <a href="<?php echo $halfImage['url']; ?>" class="lightbox-gallery"  alt="<?php echo $halfImage['alt']; ?>" style="height:<?php echo $imageHeight;?>vh;">
                    <img
                      alt="<?php echo $halfImage['alt']; ?>"
                      src="<?php echo $halfImage['url']; ?>"
                      title="<?php echo $halfImage['title']; ?>"
                    />
                    <p><?php echo $halfImage['title']; ?></p>
                </a>
            <?php endwhile; endif; //image repeater?>
        </div>

    <?php elseif( get_row_layout() == 'three-images' ):?>
        <?php $imageHeight = get_sub_field('height');?>
        <?php $alignment = get_sub_field('alignment');?>
        <div class="gallery__three-images <?php echo $alignment;?> slide-up" style="height:<?php echo $imageHeight;?>vh;">
            <?php if( have_rows('tri_images') ):
            while ( have_rows('tri_images') ) : the_row();
            $halfImage = get_sub_field('tri_image');?>
                <a href="<?php echo $halfImage['url']; ?>" class="lightbox-gallery"  alt="<?php echo $halfImage['alt']; ?>">
                    <img
                      alt="<?php echo $halfImage['alt']; ?>"
                      src="<?php echo $halfImage['url']; ?>"
                      title="<?php echo $halfImage['title']; ?>"
                    />
                    <p><?php echo $halfImage['title']; ?></p>
                    <i class="fas fa-search"></i>
                </a>
            <?php endwhile; endif; //image repeater?>
        </div>

    <?php endif; //else if halves?>
    <?php endwhile; endif; //main gallery loop?>
</div>

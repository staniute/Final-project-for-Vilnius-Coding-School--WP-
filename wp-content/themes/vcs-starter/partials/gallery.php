<!-- Gallery start -->
<section class="gallery">
    <div>
        <h2><?php the_field('g_section_heading'); ?></h2>
    </div>
    <div class="container flex-container">
        <?php 
        $images = get_field('g_gallery_image');
        // print_r($images); 

        if($images):
            foreach($images as $image): 
                // print_r($image); ?>
                <a href="<?php echo $image['sizes']['large']; ?>" data-fancybox data-caption="<?php echo $image['alt']; ?>">
                    <img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" />
                </a>
            <?php
            endforeach;
        endif;
        ?>
    </div>
</section>
<!-- Gallery end -->
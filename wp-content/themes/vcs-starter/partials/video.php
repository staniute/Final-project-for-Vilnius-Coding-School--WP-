<!-- Video start -->
<section class="video">
    <div class="container">
        <a data-fancybox href="<?php the_field('video_link'); ?>">
            <?php $image = get_field('video_thumbnail'); 
            // print_r($image); ?>
            <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>">
        </a>			
    </div>
</section>
<!-- Video end -->
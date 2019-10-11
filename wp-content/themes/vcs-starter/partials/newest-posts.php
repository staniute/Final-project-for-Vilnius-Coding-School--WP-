<!-- Carousel start -->
<section class="carousel">
    <div class="container flex-container">
        <?php

        // Uzklausos parametrai
        $sql = [
            'post_type' => 'post',
            'posts_per_page' => 4
        ];

        // Uzklausos vykdymas ir rezultato saugojimas
        $result = new WP_Query($sql);
        // dump($result);

        // Gautu duomenu isvedimas
        if($result->have_posts()):
            while($result->have_posts()):
                $result->the_post();
                ?>
                <div class="column">
                    <div class="picture">
                        <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url('newest-posts'); ?>" 
                        alt="<?php the_title(); ?>"></a>
                    </div>
                    <div class="category">
                        <h2><?php the_category(", "); ?></h2>
                    </div>
                    <div class="header">
                        <a href="<?php the_permalink(); ?>">
                            <h1><?php the_title(); ?></h1>
                        </a>
                    </div>
                </div>
                <?php
            endwhile;
        endif;

        // Atstatome pradine puslapio uzklausa
        wp_reset_postdata();
        ?>
    </div>
</section>
<!-- Carousel end -->
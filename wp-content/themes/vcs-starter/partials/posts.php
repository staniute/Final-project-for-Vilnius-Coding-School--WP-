<!-- Articles start -->
<section class="main">
    <div class="container flex-container">
        <div class="article">
            <?php  
            
            // Uzklausos parametrai
            
            $sql = [
                'post_type' => 'post',
                'posts_per_page' => 3,
                'max_num_pages' => 9999999
            ];
            $sql['paged'] = get_query_var( 'page' ) ? get_query_var( 'page' ) : 1;
            // Uzklausos vykdymas ir rezultato saugojimas
            $result = new WP_Query($sql);
            // print_r($result);

            // Gautu duomenu isvedimas
            if($result->have_posts()):
                while($result->have_posts()):
                    $result->the_post();
                    ?>
                    <div >
                        <div class="flex-container">
                            <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url('homepage-posts'); ?>" alt="<?php the_title(); ?>"></a>
                            <div class="column">
                                <div class="flex-container">
                                    <h2><?php the_category(); ?></h2>
                                    <h2>&middot;</h2>
                                    <h2><?php echo get_the_date(); ?></h2>
                                </div>
                                <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                                <?php the_excerpt(30); ?>
                                <div>
                                    <a class="button" href="<?php the_permalink(); ?>">read the post</a>   
                                </div>
                            </div>
                        </div>   
                    </div>
                    <?php
                endwhile; ?>
                
            <?php endif; ?>                

            <!-- <div class="container">
                
            </div> -->
            <nav class="page-numbers">
                <ul>
                    <li><?php previous_posts_link( '&laquo; Newer', $result->max_num_pages) ?></li> 
                    <li><?php next_posts_link( 'Older &raquo;', $result->max_num_pages) ?></li>
                </ul>
            </nav>
            <?php
            // Atstatome pradine puslapio uzklausa
            wp_reset_postdata();
            ?>
        <!--  -->
        

        </div>
        <div id="aboutme">
            <div >
                <?php $image = get_field('author_image'); ?>
                <div>
                    <img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>">
                </div>
                <h2><?php the_field('author_name'); ?></h2>
                <p><?php the_field('author_description'); ?></p>
                <div class="icons">
                    <ul class="flex-container">
                        <li><a href="http://instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="http://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="http://pinterest.com" target="_blank"><i class="fab fa-pinterest"></i></a></li>
                        <li><a href="https://www.youtube.com/" target="_blank"><i class="fab fa-youtube"></i></a></li>	
                    </ul>
                </div>	
            </div>
        </div>
    </div>
</section>
<!-- Articles end -->
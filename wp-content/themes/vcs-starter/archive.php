<?php get_header();?>

<!-- Articles start -->
<section class="main">
    <div class="container flex-container">
        <div class="article">
            <?php
            if(have_posts()):
                while(have_posts()):
                    the_post();
                    ?>
                    <div class="flex-container">
                        <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url('homepage-posts'); ?>" alt="<?php the_title(); ?>"></a>
                        <div class="column">
                            <div class="flex-container">
                                <h2><?php the_category(); ?></h2>
                                <h2>&middot;</h2>
                                <h2><?php echo get_the_date(); ?></h2>
                            </div>
                            <h1><a href="<?php the_permalink(); ?>#"><?php the_title(); ?></a></h1>
                            <?php the_excerpt(30); ?>
                            <div>
                                <a class="button" href="<?php the_permalink(); ?>">read the post</a>
                            </div>
                        </div>
                    </div>
                    <?php
                endwhile;
            else : ?>
                <div>
                    <h2>Oops! I guess the page you're looking for doesn't exist... just yet!</h2>
                </div>
            <?php        
            endif;
            ?>
            <div class="page-numbers">
                <?php echo paginate_links(); ?>
            </div>   	
        </div>	
    </div>
</section>
<!-- Articles end -->

<?php get_footer();?>

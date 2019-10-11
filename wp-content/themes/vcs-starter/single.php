<?php get_header();?>

<!-- Articles start -->
<section class="main">
    <div class="article" id="single">
        <div class="flex-container">
            <h2><?php the_category(); ?></h2>
            <h2>&middot;</h2>
            <h2><?php the_date(); ?></h2>
        </div>
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
    </div>
</section>
<!-- Articles end -->

<?php get_footer();?>

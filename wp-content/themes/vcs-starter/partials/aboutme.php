<!-- About me start -->
<section class="aboutme-p">
			<div class="flex-container container">
                <?php $image = get_field('about_me_image'); ?>
                
				<img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>">	
				
				<div class="aboutme-content">
					<h2><?php the_field('a_section_heading'); ?></h2>
					<p><?php the_field('a_section_text'); ?></p>
					<p><?php the_field('a_action'); ?></p>
					<a href="<?php the_field('instagram_link'); ?>"><h2><?php the_field('instagram_name'); ?></h2></a>
				</div>
				
			</div>
		</section>
        <!-- About me end -->
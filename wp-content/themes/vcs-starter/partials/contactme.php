<!-- Contact start -->
<div>
    <div class="contact-container" id="contactme">
        <h1><?php the_field('c_section_heading'); ?></h1>
        <div><?php the_field('c_section_description'); ?></div>
        <div>
            <?php echo do_shortcode(get_field('c_contact_form_shortcode')); ?>
        </div>
    </div>
</div>	
<!-- Contact end -->
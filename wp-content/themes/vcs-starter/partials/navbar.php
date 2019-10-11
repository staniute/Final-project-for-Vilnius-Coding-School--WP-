<!-- Navbar start -->
<header>
    <div class="header-container flex-container">
        <div class="logo">
            <a href="<?php echo get_option("siteurl"); ?>">
                <?php
                $image = get_field('ho_image', 'option');
                // dump($image);
                ?>
                <img src="<?php echo $image['sizes']['logo']; ?>" alt="<?php echo $image['alt']; ?>">
            </a>
        </div>
        <div class="container flex-container">
            <button class="burger"><i class="fas fa-bars"></i></button>
            <nav class="main-nav burger-menu">	
                <?php

                    $menu_options = [
                        'menu_class' => 'flex-container',
                        'container' => false,
                        'theme_location' => "primary-navigation",
                        'walker' => new custom_navwalker()
                    ];

                    wp_nav_menu($menu_options);
                ?>
            </nav>
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
</header>	
<!-- Navbar end -->
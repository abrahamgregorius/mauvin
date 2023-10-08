<footer>
            <div class="footer-main">
                <div class="container">
                    <div class="grid grid-cols-1 grid-cols-lg-4">
                        <div class="footer-group">
                            <div class="logo">
                                <a href="#">TenizenCode</a>
                            </div>
                        </div>
                        <div class="footer-group">
                            <h3 class="footer-header">Menus</h3>
                            <ul>
                                <?php 
                                    $menus = wp_get_nav_menu_items('main');
                                    foreach($menus as $menu) :
                                ?>
                                <li>
                                    <a href="<?php echo $menu->url ?>"><?php echo $menu->title ?></a>
                                </li>

                                <?php endforeach ?>
                            </ul>
                        </div>
                        <div class="footer-group">
                            <h3 class="footer-header">Menus</h3>
                            <ul>
                                <?php 
                                    $menus = wp_get_nav_menu_items('main');
                                    foreach($menus as $menu) :
                                ?>
                                <li>
                                    <a href="<?php echo $menu->url ?>"><?php echo $menu->title ?></a>
                                </li>

                                <?php endforeach ?>
                            </ul>
                        </div>
                        <div class="footer-group">
                            <h3 class="footer-header">Follow Our Socials</h3>
                            <ul class="footer-menu">

                            <?php
                                $q = new WP_Query([
                                    'post_type' => 'social-media',
                                    'posts_per_page' => -1
                                ]);
                            
                                while($q->have_posts()) : $q->the_post()
                            ?>
                            <li>
                                <a href="#" class="social-links">
                                    <img width="30" src="<?php echo get_field('icon') ?>" alt="">
                                    <span><?php the_title() ?></span>
                                </a>    
                            </li>

                            <?php endwhile ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                Copyright &copy; 2023 TenizenCode
            </div>
        </footer>
    </div>
<?php wp_footer() ?>
</body>
</html>
<?php get_header() ?>
<main>
    <section class="section" id="hero">
        <div class="container">
            <div class="hero-text mb-5">
                <h1 class="hero-title">
                    Let's Craft Your Ideas Into Meaningful Software
                </h1>
            </div>
            <p class="hero-desc mb-5">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus placeat, labore qui saepe voluptatibus recusandae! Voluptatibus, fugiat, exercitationem maiores at blanditiis voluptates praesentium eaque alias quam, dolorum repudiandae iusto corrupti.</p>
            <button class="btn btn-primary">View our works</button>
        </div>
    </section>


    <section class="section" id="about">
        <div class="container">
            <div class="grid grid-cols-1 grid-cols-lg-2">
                <div class="section-left">
                    <img class="img-cover" src="<?php echo get_theme_file_uri('./images/about.jpeg') ?>" alt="">
                </div>
                <div class="section-right">
                    <h2 class="section-title">About us</h2>
                    <p class="section-desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellendus eligendi earum quasi mollitia veniam cumque sunt placeat. Autem odit hic sed eos dignissimos ratione et fugiat? Rem quia quaerat optio?</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="testimonials">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">
                    Testimonials
                </h2>
                <p class="section-desc mb-5">
                    Our happy clients
                </p>
            </div>
            <div class="section-body">
                <div class="testimonies grid grid-cols-1 grid-cols-lg-3">
                    <?php $query = new WP_Query([
                        'post_type' => 'testimonial',
                        'posts_per_page' => 3,
                    ]);
                        while($query->have_posts()) : $query->the_post()
                    ?>
                    <div class="card">
                        <div class="card-body">
                            <img src="<?php the_post_thumbnail_url() ?>" class="card-image" alt="">
                            <div class="card-title">
                                <h1>
                                    <?php the_title() ?>
                                </h1>
                            </div>
                            <?php echo get_the_content() ?>
                            <div class="card-description">
                                <!-- <?php echo get_the_content() ?> -->
                            </div>
                        </div>
                    </div>

                    <?php endwhile ?>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="projects">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">
                    Projects
                </h2>
                <p class="section-desc mb-5">
                    Our happy clients
                </p>
            </div>
            <div class="section-body">
                <div class="projects grid grid-cols-1 grid-cols-lg-3">
                <?php $query = new WP_Query([
                    'post_type' => 'project',
                    'posts_per_page' => 3
                ]);
                
                while($query->have_posts()) : $query->the_post()
                ?>
                    <div class="card">
                        <img src="<?php echo get_the_post_thumbnail_url() ?>" class="card-image" alt="">
                        <div class="card-body">
                            <div class="card-title">
                                <h2>
                                    <a href="<?php the_permalink() ?>">
                                        <?php the_title() ?>
                                    </a>
                                </h2>
                            </div>
                            <p class="card-description"><?php the_excerpt() ?></p>
                        </div>
                    </div>
                    <?php endwhile ?>
                </div>
                <div class="btn-project-wrap">
                    <a href="<?php echo get_permalink(11) ?>" class="btn btn-primary all-projects">See all projects</a>
                </div>
            </div>
        </div>
    </section>

</main>
<?php get_footer() ?>
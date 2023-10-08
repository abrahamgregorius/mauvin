
<?php get_header() ?>
<main>
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
                    'paged' => get_query_var('paged'),
                    'posts_per_page' => 2
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
                    <?php echo paginate_links([
                        'total' => $query->max_num_pages,
                    ]) ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer() ?>

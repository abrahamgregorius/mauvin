
<?php get_header() ?>
    <main>
        <section class="section" id="testimonials">
            <div class="container">
                <div class="section-header">
                    <h2 class="section-title">
                        <?php echo get_the_title() ?>
                    </h2>
                    <p class="section-desc mb-5">
                        Created at <?php echo get_the_date('F d, Y') ?>
                    </p>
                </div>
                <div class="section-body" id="single">
                    <div class="single-image">
                        <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
                    </div>

                    <?php the_content() ?>
                </div>
            </div>
        </section>
    </main>

    <?php get_footer() ?>

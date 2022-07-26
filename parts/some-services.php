<div class="row mb-5">
    <?php 
        $query = new WP_Query([
            'post_type' => 'service',
            'posts_per_page' => 3,
            'orderby' => 'rand',
        ]);
        while ($query->have_posts()) : $query->the_post();
    ?>
    <div class="col-md-6 col-lg-4 my-4">
        <?php get_template_part("parts/card-service"); ?>
    </div>
    <?php endwhile; ?>
</div>
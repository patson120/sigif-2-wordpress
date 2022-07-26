<?php get_header(); ?>
    <div class="container">
        <h1 class="jumbotron mt-4">Bienvenu sur SIGIF</h1>
        <div class="row">
            <?php if (have_posts()): while (have_posts()): the_post(); ?>
                <div class="col-sm-4 mb-5">
                    <?php get_template_part('parts/card', 'post'); ?>
                </div>
            <?php endwhile; endif; ?>
        </div>
        <?php capitaine_pagination(); ?>
    </div>
<?php get_footer(); ?>
<?php get_header(); ?>
<div class="container">
    <p class="mb-4"></p>
    <h1 class="jumbotron">Vos article en rapport avec le <?=  esc_html(get_queried_object()->name); ?></h1>
    <?php get_template_part('parts/taxonomy-menu', 'post'); ?>

    <p><?= esc_html(get_queried_object()->description) ?></p>
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

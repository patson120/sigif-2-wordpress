<?php get_header(); ?>

<?php get_template_part('parts/banner'); ?>
<div class="max-width">
    <h1 class="site__heading text-white mt-3 font-weight-bold text-uppercase">Actualités</h1>
    <div class="bg-success border border-success" style="height: 4px; width: 50px"></div>
</div>

<div class="max-width mb-4 overflow-hidden">

    <?php get_template_part('parts/taxonomy-menu', 'post'); ?>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 mt-5 justify-content-center">
            <?php if (have_posts()): while (have_posts()): the_post(); ?>
                <div class="col mb-5">
                    <?php get_template_part('parts/card', 'post'); ?>
                </div>
            <?php endwhile; endif;  ?>
        </div>
    <?php capitaine_pagination(); ?>
</div>
<div  id="qlqmodule" class="some-modules">
    <div class="max-width py-5">
        <!-- <hr class="bg-dark" style="height: 2px"/> -->
        <h1 class="site__heading font-weight-bold text-center white-color text-uppercase">Quelques modules du sigif 2</h1>
        <!-- <hr class="bg-dark" style="height: 2px"/> -->
        <?php get_template_part('parts/some-modules'); ?>
        <a href="<?= home_url('/module')?>" target="_blank" class="nav-link btn-outline-success border border-success rounded-pill text-white d-flex justify-content-center mx-auto font-weight-bold" style="width: 10rem;">Voir plus</a>
    </div>
</div>
<?php get_footer(); ?>

<?php get_header(); ?>

<div class="max-width">
    <?php if (have_posts()): ?>
        <?php  while (have_posts()): the_post(); 
            get_template_part('parts/single-module');
        endwhile;  ?> 
    <?php else: ?>;
        <p>Pas d'article ici</p>
    <?php endif; ?>
</div>
<div class="autres-modules" >
    <div class="max-width my-5">
        <!-- <hr class="mt-5 bg-success" style="height: 2px"/> -->
        <h1 class="font-weight-bold text-center text-uppercase text-white">Autres modules</h1>
        <!-- <hr class="bg-success" style="height: 2px"/> -->
        <?php get_template_part('parts/some-modules'); ?>
    </div>
</div>

<?php get_footer(); ?>
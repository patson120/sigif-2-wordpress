
<?php get_header(); ?>

<header id="mon-carousel" class="carousel slide mon-carousel" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#mon-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#mon-carousel" data-slide-to="1"></li>
        <li data-target="#mon-carousel" data-slide-to="2"></li>
        <li data-target="#mon-carousel" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner rounded">
        <div class="carousel-item active">
            <img class="d-block w-100 h-100" src="<?= get_template_directory_uri() . '/img/trevor-pye-KyaoT3NKN2s-unsplash-scaled-2560x1280.jpg'?>" alt="Third slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100 h-100" src="<?= get_template_directory_uri() . '/img/gettyimages-182921931-612x612.jpg'?>" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100 h-100" src="<?= get_template_directory_uri() . '/img/0602337228761-web-tete.jpg'?>" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100 h-100" src="<?= get_template_directory_uri() . '/img/photo-foret.jpg'?>" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#mon-carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#mon-carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</header>

<div class="max-width overflow-hidden my-5">

    <h1 class="site__heading font-weight-bold text-uppercase text-white mt-3">Modules</h1>
    <div class="bg-success border border-success" style="height: 4px; width: 50px"></div>
    <div class="row justify-content-center">
        <?php  if (have_posts()): while (have_posts()): the_post(); ?>
        <div class="col-sm-6 col-lg-4 my-4">
            <?php get_template_part('parts/card-module'); ?>
        </div>
        <?php endwhile; endif; ?>
    </div>
    <?php capitaine_pagination(); ?>
</div>

<?php get_footer(); ?>
<article class="jumbotron mt-5 pt-3">
    <?php the_post_thumbnail('post_thumbnail', ['class'=> 'card-img-top d-flex justify-content-center mx-auto rounded-circle overflow-hidden', "alt"=> 'icon', "style"=> "height: 25rem; width: 25rem;"]); ?>
    <div class="card-body px-4 text-center">
        <h2 class="card-title font-weight-bold h2"> <?php the_title(); ?> </h2>
        <div class="text-justify mt-5" style="font-size: 24px">
            <?= the_content(); ?>
        </div>
        <p class="post__meta">
            Publié le <?php the_time(get_option('date_format')) ?>
            par <?php the_author(); ?>
        </p>
    </div>
</article>
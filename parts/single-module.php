<article class="jumbotron mt-5 pt-3">
    <?php the_post_thumbnail('post_thumbnail', ['class'=> 'img mx-auto d-flex justify-content-center rounded-pill overflow-hidden', "alt"=> 'icon', "style"=> "height: auto;"]); ?>
    <div class="card-body px-4 text-center">
        <h2 class="card-title font-weight-bold h5"> <?php the_title(); ?> </h2>
        <?= the_content(); ?>
        <p class="post__meta">
            Publié le <?php the_time(get_option('date_format')) ?>
            par <?php the_author(); ?>
        </p>
    </div>
</article>
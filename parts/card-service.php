
<article class="card h-100 pt-3 bg-dark">
    <?php the_post_thumbnail('post_thumbnail', ['class'=> 'card-img-top mx-auto overflow-hidden rounded-circle', "alt"=> 'icon', "style"=> "width: 12rem; height: 12rem;"]); ?>
    <div class="card-body px-4 text-center">
        <h2 class="card-title h5"> <a href="<?php the_permalink(); ?>" class="text-success"><?php the_title(); ?></a> </h2>
        <p class="post__meta text-white">
            Publié le <?php the_time(get_option('date_format')) ?>
            par <?php the_author(); ?> 
        </p>
    </div>
</article>
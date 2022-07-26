<?php get_header(); ?>
    <?php if (have_posts()): while (have_posts()): the_post(); ?>
        <article class="post">
            <p class="mt-5">
                <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="img-responsive w-100" />
            </p>
            <h1><?php the_title(); ?></h1>
            <div class="post__meta">
                <?php echo get_avatar(get_the_author_meta('ID'), 40); ?>
                <p> 
                    Publié le <?php the_time(get_option("date_format")); ?> 
                    par <?php the_author(); ?> 
                    Dans la catégorie <?php the_category(); ?> 
                    Avec les étiquettes <?php the_tags(); ?> 
                </p>
            </div>
            <div class="post__content">
                <?php the_content(); ?>
            </div>
        </article>
        <?php comments_template(); ?>
    <?php endwhile; endif; ?>
<?php get_footer(); ?>
<?php get_header(); ?>
    <?php if (have_posts()): ?>
        
        <?php  while (have_posts()): the_post(); ?>
            <h1 class="jumbotron"><?php the_title() ?></h1>

            <!-- <?php if(get_post_meta(get_the_ID(), SponsoMetaBox::META_KEY, true) === '1'): ?>
                <p class="alert alert-info p-4">Cet article est sponsorisé</p>
            <?php endif ?> -->
            <p>
                <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="img-responsive w-100 rounded">
            </p>
            <!-- <div class="post__meta">
                <?= get_avatar(get_the_author_meta('ID'), 40); ?>
                <p> 
                    Publié le <?php the_time(get_option("date_format")); ?> 
                    par <?php the_author(); ?> 
                    Dans la catégorie <?php the_category(); ?>
                    <?php if (the_tags() !== null): ?>
                        Avec les étiquettes <?= the_tags(); ?> 
                    <?php endif; ?>
                </p> 
            </div>-->
            <!-- <?php the_content(); ?> -->
        <?php endwhile;  ?> 
    <?php else: ?>;
        <p>Pas d'article ici</p>
    <?php endif; ?>
    
<?php get_footer(); ?>

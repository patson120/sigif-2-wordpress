<?php  get_header(); ?>
    <?php if (have_posts()): while (have_posts()): the_post(); ?>
        <h1 class="container my-5 p-2 text-white"> Formulaire de contact ok</h1>
<?php
    function get_some_data(){
        global $wpdb;
        $week = date('W'); //strftime("%W", mktime(0, 0, 0, date('n'), date('d'), date('y')));
        $date = date('Y');

        return $wpdb->get_results("SELECT * FROM {$wpdb->prefix}frm_items where WEEK(created_at) = {$week} AND YEAR(created_at) = {$date}");
    }
?>
 <?php var_dump(get_some_data()); die; ?>
        <div class="container mx-auto mb-5 ml-5 p-0"> <?php the_content(); ?></div>
<?php endwhile; endif; ?>
<p>Salut les gens</p>
<?php get_footer(); ?>
        
       


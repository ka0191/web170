<?php
get_header();
if(have_posts()) : while(have_posts()) : the_post(); ?>

    <main>

        <?php the_content(); ?>
        <?php endwhile; endif;?>

        <small>front-page.php</small>
    </main>


<?php get_footer(); ?>

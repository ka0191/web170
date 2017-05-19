<?php get_header(); ?>

    <div id="content">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
    <article id="post"-<?php the_ID(); ?> class="post">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <p><small>Posted on <?php the_time('F j, Y'); ?> by <?php the_author(); ?> in <?php the_category(', '); ?> </small></p>
        <a href="<?php the_permalink(); ?>">
       <?php the_post_thumbnail( 'large' ); ?></a>

        <?php the_content('');
        <?php endwhile; endif; ?>
        <?php if(is_404()) {echo 'Nothing was found.';}?>

    </article>



<small>page.php</small>
</div>


<?php get_sidebar(); ?>

<?php get_footer(); ?>

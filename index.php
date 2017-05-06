
<!--start header.php-->
<?php get_header(); ?>
<!--end header.php-->

<!--start content -->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // replaced the ({) for (:)?>
    <article id="article- <?php the_ID(); ?>" class="article">
    <h2><a href="<?php the_permalink(); // it will link to the posting ?>"><?php the_title(); // it will get the posting title ?></a></h2>
    <?php the_content(''); // it will get posting content ?>
    </article>
    <?php endwhile; endif; ?>
    <?php if(is_404()) {echo 'Nothing was found.';}?>
    <small>index.php</small>
<!--end content-->


<!--start footer.php-->
<?php get_footer(); ?>
<!--end footer.php-->

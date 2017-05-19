
<!--start header.php-->
<?php get_header(); ?>
<!--end header.php-->

<!--start content -->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
    <article id="article- <?php the_ID(); ?>" class="article">
    <h2><a href="<?php the_permalink();  ?>"><?php the_title(); ?></a></h2>
    <?php the_content('');  ?>
    </article>
    <?php endwhile; endif; ?>
    <?php if(is_404()) {echo 'Nothing was found.';}?>
    <small>page.php</small>
<!--end content-->






<!--start sidebar-->
    <?php get_sidebar(); ?>
<!--end sidebar-->

<!--start footer.php-->
<?php get_footer(); ?>
<!--end footer.php-->

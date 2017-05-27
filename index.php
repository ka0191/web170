
<!--start header.php-->
<?php get_header(); ?>
<!--end header.php-->

<div id="content">
<!--start content -->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
        <article id="post"-<?php the_ID(); ?> class="post">
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<p><small>Posted on <?php the_time('F j, Y'); ?> by <?php the_author(); ?> in <?php the_category(', '); ?> </small></p>
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'thumbnail' ); ?></a>
               <?php the_excerpt(); ?> <a href="<?php the_permalink(); ?>">Read More ></a>

	</article>
    <?php endwhile; endif; ?>


    <small>index.php</small>
<!--end content-->
<!--start sidebar-->
    <?php get_sidebar(); ?>
<!--end sidebar-->
</div>






<!--start footer.php-->
<?php get_footer(); ?>
<!--end footer.php-->

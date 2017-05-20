<?php get_header(); ?>

<div class="container page-title">
	<div id="page-title">
		<h2><?php the_title(); ?></h2>
	</div>
</div>

<div id="content">
<!--start content -->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
        <article id="article"-<?php the_ID(); ?> class="article">
			<p><small>Posted on <?php the_time('F j, Y'); ?> by <?php the_author(); ?>  </small></p>

                <?php the_content(); ?>


	</article>
    <?php endwhile; endif; ?>


    <small>page.php</small>
    <?php get_sidebar(); ?>
</div>






	<?php get_footer(); ?>

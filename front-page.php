<?php get_header();?>

<div id="content">
<!--start content -->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
        <article id="post"-<?php the_ID(); ?> class="post">
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<p><small>Posted on <?php the_time('F j, Y'); ?> by <?php the_author(); ?> in <?php the_category(', '); ?> </small></p>
			<a href="<?php the_permalink(); ?>">
			   <?php the_post_thumbnail( 'thumbnail' ); ?></a>
			<?php the_excerpt(); ?> <a href="<?php the_permalink(); ?>">Read More ></a>
	</article>
    <?php endwhile; endif; ?>


    <h3>Latest news</h3>
    <?php rewind_posts(); ?>
    <?php query_posts('showposts=5'); ?>
    <?php while (have_posts()) : the_post(); ?>
    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
    <?php endwhile; ?>

    <small>index.php</small>

</div>

<?php get_footer(); ?>

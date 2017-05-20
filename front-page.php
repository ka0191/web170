<?php get_header();?>

<div id="content">
<!--start content -->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
        <article id="post"-<?php the_ID(); ?> class="post">
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<p><small>Posted on <?php the_time('F j, Y'); ?> by <?php the_author(); ?>   </small></p>
			<a href="<?php the_permalink(); ?>">
			   <?php the_post_thumbnail( 'thumbnail' ); ?></a>
			<?php the_excerpt(); ?> <a href="<?php the_permalink(); ?>">Read More ></a>



    </article>
    <?php endwhile; endif; ?>


    <h3>Latest news</h3>
        <ul>
            <?php rewind_posts(); ?>
            <?php query_posts(array ('posts_per_page' => '4', 'category_name' => 'news')); ?>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php endwhile; endif; ?>
        </ul>

    <h2>Latest Promotions</h2>
		<ul>
    		<?php rewind_posts(); ?>
    		<?php query_posts(array('posts_per_page' => '4', 'category_name' => 'promotions')); ?>
    		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    			<li><a href="<?php the_permalink();?>"><?php the_title();?></a><br />
    			<small><?php the_time('F j, Y'); ?> in <?php the_category(','); ?></small></li>
    		<?php endwhile; endif; ?>
		</ul>

    <small>front-page.php</small>
<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>

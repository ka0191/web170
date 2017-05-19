<?php
get_header();
if(have_posts()) : while(have_posts()) : the_post();
?>
    <main>
        <section class="container">
	        <div class="blog-post-header">
	            <h1 class="blog-title"><?php the_title(); ?></h1>
	            <small class="blog-date">Published on <?php the_time('F jS, Y'); ?> in <?php the_category(); ?></small>
	        </div> <!-- .blog-post-header -->

	        <?php the_content(); ?>

        <small>single.php</small>
        </section>
    </main>

<?php endwhile; endif; ?>
<?php get_footer(); ?>

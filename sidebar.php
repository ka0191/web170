<aside id="sidebar">
<!-- Sub Navigation -->
	<div id="sub-navigation" class="widget">
	<?php
		echo '<h2>';
		if (is_page()) {
			echo get_the_title($post->post_parent);
		} else {
			echo 'Blog';
		}
		echo '</h2>';
		echo '<ul>';
		if (is_page() || is_404()) {
			if ($post->post_parent) {
				wp_list_pages(array('title_li' => '', 'child_of' => $post->post_parent,));
			} else {
				wp_list_pages(array('title_li' => '', 'child_of' => $post->ID,));
			}
		} else {
			wp_list_categories(array('title_li' => '',));
		}
		echo '</ul>';
	?>
	</div>
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
            <small><?php the_time('F j, Y'); ?> in <?php the_category(','); ?></small></li>
    		<?php rewind_posts(); ?>
    		<?php query_posts(array('posts_per_page' => '4', 'category_name' => 'promotions')); ?>
    		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    			<li><a href="<?php the_permalink();?>"><?php the_title();?></a><br />
    		<?php endwhile; endif; ?>
		</ul>

		<!-- Start Quote -->
		<div id="quote">

    	<?php if (get_post_meta($post->ID, 'quote', true)) :  ?>
    	<blockquote class="sidebar">"<?php echo get_post_meta($post->ID, 'quote', true); ?>"</blockquote>
    	<?php endif; ?>

	</div
		<!-- End Quote -->

		<!-- Begin dynamic Sidebar -->
		<?php dynamic_sidebar(1); ?>
		<!--End  dynamic Sidebar -->
</aside>

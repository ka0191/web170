<aside id="sidebar">

<?php

    echo '<h2 id="sub-nav-title">';
    if (is_page) {

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


</aside>

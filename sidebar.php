<aside id="sidebar">

<?php
<?php if (is_page()) : ?>
        <h2 id="sub-nav-title">
        <?php echo get_the_title($post->post_parent); ?></h2>
            <ul id="sub-nav-items"><?php  if ($post->post_parent) {
            wp_list_pages(array('child_of' => $post->post_parent, 'title_li' => __('')));
            } else {
            wp_list_pages(array('child_of' => $post->ID, 'title_li' => __('')));
            } ?></ul>
        <?php endif; ?>
        <?php if (!(is_page())) : ?>

        <h2 id="sub-nav-title">Blog</h2>
           <ul id="sub-nav-items"><?php wp_list_categories(array('title_li' => __(''))); ?></ul>
        <?php endif; ?>

</aside>

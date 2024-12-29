<?php
function move_custom_post_type_to_posts() {
    $old_post_type = 'your_custom_post_type'; // Replace with your custom post type slug.
    $new_post_type = 'post';
    $args = array(
        'post_type' => $old_post_type,
        'posts_per_page' => -1,
        'post_status' => 'any', // Include drafts, pending, etc.
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            $post_id = get_the_ID();

            // Update the post type
            wp_update_post(array(
                'ID' => $post_id,
                'post_type' => $new_post_type,
            ));
        }
        wp_reset_postdata();
        echo 'All "'.$old_post_type.'" have been moved to "'.$new_post_type.'".';
    } else {
        echo 'No posts found for '.$old_post_type.'.';
    }
}

// Uncomment the following line to run the function ONCE.
// move_custom_post_type_to_posts();

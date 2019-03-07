
/**
 * adds last modified date to posts
 */
function storefront_add_moddate() {
    ?>
    <p>This post was updated on : <?php the_modified_date(); ?></p>

    <?php
}
add_action( 'storefront_post_content_before', 'storefront_add_moddate',20 );

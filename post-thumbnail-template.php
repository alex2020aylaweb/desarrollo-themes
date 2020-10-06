
<?php  
function has_post_thumbnail( $post = null ) {
    $thumbnail_id  = get_post_thumbnail_id( $post );
    $has_thumbnail = (bool) $thumbnail_id;
 
    /**
     * Filters whether a post has a post thumbnail.
     *
     * @since 5.1.0
     *
     * @param bool             $has_thumbnail true if the post has a post thumbnail, otherwise false.
     * @param int|WP_Post|null $post          Post ID or WP_Post object. Default is global `$post`.
     * @param int|string       $thumbnail_id  Post thumbnail ID or empty string.
     */
    return (bool) apply_filters( 'has_post_thumbnail', $has_thumbnail, $post, $thumbnail_id );
}
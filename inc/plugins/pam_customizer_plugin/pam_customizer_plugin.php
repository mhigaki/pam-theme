<?php
/*
Plugin Name: pam_customizer_plugin
Version: 1.0
Plugin URI: http://higatech.xyz
Description: Customizer Theme
Author: Higatech Team
Author URI: http://higatech.xyz
*/

//* Add theme info box into WordPress Dashboard
add_action('wp_dashboard_setup', 'pam_add_dashboard_widgets');
function pam_add_dashboard_widgets()
{

	wp_add_dashboard_widget('wp_dashboard_widget', 'Theme Details', 'pam_theme_info');

}

function pam_theme_info()
{

	echo "<ul>
	<li><strong>Tema:</strong> PAM Consultoria </li>
	<li><strong>Desenvolvido por:</strong> HIGATECH Team </li>
	<li><strong>Website:</strong> <a href='http://higatech.xyz'>higatech.xyz</a></li>
	<li><strong>Contato:</strong> <a href='mailto:info@higatech.xyz'>info@higatech.xyz</a></li>
	<li><strong>Telefone:</strong> <a href='tel:5511941101331'>+55 (11) 94110-1331 </a></li>
	</ul>";

}

/**
 * Add Thumbnail Column to Post Listing
 */

add_image_size( 'admin-list-thumb', 80, 80, false );

function wpcs_add_thumbnail_columns( $columns ) {

    if ( !is_array( $columns ) )
        $columns = array();
    $new = array();

    foreach( $columns as $key => $title ) {
        if ( $key == 'title' ) // Put the Thumbnail column before the Title column
            $new['featured_thumb'] = __( 'Image');
        $new[$key] = $title;
    }
    return $new;
}

function wpcs_add_thumbnail_columns_data( $column, $post_id ) {
    switch ( $column ) {
    case 'featured_thumb':
        echo '<a href="' . $post_id . '">';
        echo the_post_thumbnail( 'admin-list-thumb' );
        echo '</a>';
        break;
    }
}

if ( function_exists( 'add_theme_support' ) ) {
    add_filter( 'manage_posts_columns' , 'wpcs_add_thumbnail_columns' );
    add_action( 'manage_posts_custom_column' , 'wpcs_add_thumbnail_columns_data', 10, 2 );
}

// Custom Callback

function pam_comments($comment, $args, $depth)
{
    $GLOBALS['comment'] = $comment; ?>
<li <?php comment_class(); ?> id="comment-<?php comment_id() ?>">
		<div class="the-comment media">
			<div class="avatar media-left">
				<?php echo get_avatar($comment, $args['avatar_size'], null, null); ?>
			</div>
			<div class="comment-box media-body">
				<div class="comment-author meta">
					<strong><?php echo get_comment_author_link(); ?></strong>
					<span class="date"><?php printf(__('%1$s às %2$s', 'pam'), get_comment_date( 'd/M/y'), get_comment_time( 'g:i a' )) ?></span>
				</div>
				<div class="comment-text">
					<?php comment_text(); ?>
				</div>
				<span class="comment-reply"> <?php comment_reply_link(array_merge($args, array('reply_text' => __('Reply', 'pam'), 'depth' => $depth, 'max_depth' => $args['max_depth'])), $comment->comment_ID); ?></span>
			</div>
		</div>
	<?php
}

// Enqueue comment-reply

add_action('wp_enqueue_scripts', 'pam_public_scripts');

function pam_public_scripts()
{
    if (!is_admin()) {
        if (is_singular() && get_option('thread_comments')) {
            wp_enqueue_script('comment-reply');
        }
    }
}

function the_copyright()
{
	echo '<span> Copyright ©2021 - PAM Consultoria CRECI 38288-J - Desenvolvido por <a href="http://higatech.net" target="_blank">MNH</a> </span>';
}

//* Modify the admin footer text
add_filter('admin_footer_text', 'pam_modify_footer_admin');
function pam_modify_footer_admin()
{
    echo '<span id="footer-thankyou">Theme Development by <a href="http://higatech.xyz" target="_blank">MNH</a></span>';
}

?>

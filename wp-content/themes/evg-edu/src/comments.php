<div id="comments" class="comments-details">
	<?php if (post_password_required()) : ?>
	<p><?php _e( 'Post is password protected. Enter the password to view any comments.', 'html5blank' ); ?></p>


	<?php return; endif; ?>

<?php if (have_comments()) : ?>


<?php wp_list_comments('type=comment&callback=html5blankcomments'); // Custom callback in functions.php ?>


<?php elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

	<p><?php _e( 'Comments are closed here.', 'html5blank' ); ?></p>

<?php endif; ?>

</div>

<?php $args = array(
  'comment_notes_after' => '',
  'title_reply' => __('Drop a Comment')
);
?>
<?php comment_form($args); ?>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>

  <!-- Article -->
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <!-- Blog image -->
    <a href="<?php the_permalink(); ?>">
      <?php the_post_thumbnail('full'); ?>
    </a>

    <!-- Blog title -->
    <h5>
      <?php echo the_title(); ?><br>
      <small>Posted By <?php the_author(); ?>, <?php the_date(); ?></small>
    </h5>

    <!-- Blog post description -->
    <?php the_excerpt(); ?>

    <!-- Blog read more -->
    <div class="read-more">
      <a href="<?php the_permalink(); ?>">Read More...</a>
    </div>

    <!-- Blog comments -->
    <div class="comments">
      <a href="<?php the_permalink(); ?>#comments"><?php comments_number( '0 comments', '1 comment', '% comments' ); ?></a>
    </div>
  </article>

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>

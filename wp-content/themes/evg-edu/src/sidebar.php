<?php
 global $post;
 $myposts = get_posts('numberposts=6&category=1');
 ?>

<?php if (count($myposts) > 0): ?>
  <div class="span4 blog-list-right">
    <!-- Latest blog posts block -->
    <div class="block">
      <h6>Lates blog posts</h6>
      <ul class="simple-link-list">
        <?php foreach($myposts as $post): setup_postdata($post); ?>
          <li>
            <a href="<?php the_permalink(); ?>" class="active"><?php the_title(); ?></a>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
<?php endif; ?>
<?php
 global $post;
 $myposts = get_posts('numberposts=6&category=1');
 ?>

<?php if (count($myposts) > 0): ?>
  <div class="pages page-blog" id="page-blog">
    <div class="container">
      <!-- Header -->
      <header>
        <h4 class="line-divider">Blog</h4>
        <h1>Recent Blog Posts</h1>
        <div class="row">
          <div class="span8 offset2">
            <div class="input-append">
              <input class="span5" id="appendedInputButton" type="text" placeholder="Search Blog">
              <button class="btn btn-primary sicon-search sicon-white" type="button"><i>Search</i></button>
            </div>
          </div>
        </div>
      </header>
      <!-- End Header -->

      <!-- Article -->
      <article>
        <!-- Blog articles -->
        <ul class="thumbnails">

          <?php foreach($myposts as $post): setup_postdata($post); ?>
            <!-- Blog post -->
            <li class="span4">

              <!-- Blog image -->
              <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('recent-post'); ?>
              </a>

              <!-- Blog title -->
              <h5>
                <?php the_title(); ?><br>
                <small>April 10, 2013</small>
              </h5>

              <!-- Blog post description -->
              <p class="smallFontBy08"><?php the_excerpt(); ?></p>

              <!-- Blog read more -->
              <div class="read-more">
                <a href="<?php the_permalink(); ?>">Read More...</a>
              </div>
            </li>
          <?php endforeach; ?>

        </ul>
      </article>
      <!-- End Article -->

      <!-- Footer -->
      <footer>
        <!-- More blog posts -->
        <div class="show-more-cube">
          <a href="/blog/"><span>All Blog<br>Posts</span></a>
        </div>
      </footer>
      <!-- End Footer -->
    </div>
  </div>
<?php endif; ?>
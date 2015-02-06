<?php get_header(); ?>

<div class="pages page-blog-list" id="page-blog-list">
  <div class="container">
    <!-- Header -->
    <header>
      <h4 class="line-divider">Blog</h4>
      <h1>Blog Posts</h1>
      <div class="row">
        <div class="span8 offset2">
          <div class="input-append">
            <form method="get" action="<?php echo home_url(); ?>" role="search">
              <input name="s" class="span5" id="appendedInputButton" type="text" placeholder="Search Blog">
              <button class="btn btn-primary sicon-search sicon-white" type="button"><i>Search</i></button>
            </form>
          </div>
        </div>
      </div>
    </header>
    <!-- End Header -->

    <div class="row-fluid">
      <div class="span8 blog-details">

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
            <?php the_content(); ?>

          </article>
        
          <!-- Blog comments -->
          <div class="comments">
            <a href="<?php the_permalink(); ?>#comments"><?php comments_number( '0 comments', '1 comment', '% comments' ); ?></a>
          </div>
          <?php comments_template(); ?>
        <?php endwhile; ?>

        <?php else: ?>

          <!-- article -->
          <article>
            <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
          </article>
          <!-- /article -->

        <?php endif; ?>

      </div>
      
      <?php get_sidebar(); ?>
    </div>    
  </div>
</div>

<?php get_footer(); ?>


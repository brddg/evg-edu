<?php get_header(); ?>

<div class="pages page-blog-list" id="page-blog-list">
  <div class="container">
    <!-- Header -->
    <header>
      <h4 class="line-divider"><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h4>
      <h1>Search</h1>
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

        <?php get_template_part('loop'); ?>

        <?php get_template_part('pagination'); ?>

      </div>
      
      <?php get_sidebar(); ?>
    </div>    
  </div>
</div>

<?php get_footer(); ?>

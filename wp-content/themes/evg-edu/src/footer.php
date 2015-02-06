  <?php if(is_front_page()) { require 'recent-posts.php'; } ?>

  <!-- PAGE | CONTACT -->
  <div class="pages black-bg white page-contact" id="page-contact">
    <div class="container">
      <!-- Header -->
      <header>
        <h4 class="line-divider">Contact</h4>
        <h1>Let's Talk</h1>
      </header>
      <!-- End Header -->

      <div class="row">
        <div class="span8 offset2 center">
          <div class="media">
            <div class="media-body smallFontBy08">
              <div class="sicon-white sicon-mail"><i>email</i></div> <a href="mailto:info@enveritasgroup.com">info@enveritasgroup.com</a>
            </div>
          </div>
          <div class="media">
            <div class="media-body smallFontBy08">
              <div class="sicon-white sicon-phone"><i>Phone</i></div> 864.241.0779 ext. 323
            </div>
          </div>
          <div class="media">
            <div class="media-body smallFontBy08">
              <div class="sicon-white sicon-place"><i>Location</i></div> Greenville, SC
            </div>
          </div>
            
        </div>
      </div>

      <div class="row">
        <div class="span8 offset2 center">
          <a href="#myModal" id="consultation" data-toggle="modal">Request a Consultation</a>
        </div>
      </div>
        
    </div>
    
    <!-- Background map image -->
    <div id="map-image">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pages/contact/map_bck.jpg" alt="Map">
    </div>
  </div>
  <!-- END PAGE | CONTACT -->
  
  
  <!-- JQUERY -->
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-1.10.2.min.js" type="text/javascript"></script>
  
  
  <!-- TWITTER BOOTSTRAP -->
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap/bootstrap.min.js" type="text/javascript"></script>
  <!--[if lt IE 9]>
      <script src="assets/js/bootstrap/html5shiv.js"></script>
  <![endif]-->
  
  
  <!-- PLUGINS -->
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/plugins/jquery.bxslider.min.js" type="text/javascript"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/plugins/jquery.centralized.min.js" type="text/javascript"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/plugins/jquery.fixedonlater.min.js" type="text/javascript"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/plugins/source/jquery.hashloader.js" type="text/javascript"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/plugins/jquery.mixitup.min.js" type="text/javascript"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/plugins/jquery.nav.min.js" type="text/javascript"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/plugins/jquery.parallax-1.1.3.min.js" type="text/javascript"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/plugins/jquery.responsivevideos.min.js" type="text/javascript"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/plugins/jquery.scrollTo.min.js" type="text/javascript"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/plugins/jquery.tweet.min.js" type="text/javascript"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/plugins/jquery.tweetCarousel.min.js" type="text/javascript"></script>
      
  
  <!-- INITIALIZE -->
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/application/application.min.js" type="text/javascript"></script>

    <!-- Modal -->
  <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      <h3 id="myModalLabel">Consultation</h3>
    </div>
    <div class="modal-body">

      <form class="form-horizontal" action="//formspree.io/info@enveritasgroup.com" method="post">
        <div class="control-group">
          <label class="control-label" for="inputName">Name</label>
          <div class="controls">
            <input type="text" id="inputName" placeholder="Name" name="name">
          </div>
        </div>
        <div class="control-group">
          <label class="control-label" for="inputEmail">Email</label>
          <div class="controls">
            <input type="text" id="inputEmail" placeholder="Email" name="email">
          </div>
        </div>
        <div class="control-group">
          <label class="control-label" for="inputSchool">School</label>
          <div class="controls">
            <input type="text" id="inputSchool" placeholder="School" name="school">
          </div>
        </div>
        <div class="control-group">
          <label class="control-label" for="inputPhone">Phone</label>
          <div class="controls">
            <input type="text" id="inputPhone" placeholder="Phone" name="phone">
          </div>
        </div>
        <div class="control-group">
          <label class="control-label" for="inputDetail">Project Detail</label>
          <div class="controls">
            <textarea type="text" id="inputDetail" name="detail"></textarea>
          </div>
        </div>
        <div class="control-group">
          <div class="controls">
            <input id="next" name="_next" type="hidden" value="http://education.enveritasgroup.com/?thanks=true">
            <button type="submit" class="btn">Submit</button>
          </div>
        </div>
      </form>

    </div>
  </div>

  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/application/contact.js" type="text/javascript"></script>

  <?php wp_footer(); ?>
  
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-31803127-3', 'auto');
    ga('send', 'pageview');

  </script>
      
</body>
</html>
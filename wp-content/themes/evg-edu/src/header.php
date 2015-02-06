<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- META DATA -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="shortcut icon" href="/favicon.ico">
    
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' : '; } ?><?php bloginfo('name'); ?></title>
                                   
    <!-- STYLESHEETS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/style/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/style/overrides.css" type="text/css" />
    
    <!-- GOOGLE WEB FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,700,600,300,800' rel='stylesheet' type='text/css'>
    
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <div class="alert alert-success alert-dismissable hidden" id="thanks">
    <button aria-hidden="true" class="close" data-dismiss="alert" type="button">×</button>
    Thanks for your inquiry! We will be in touch with you soon.
  </div>
  <!-- NAVIGATION -->
  <nav class="fixed-top" id="navigation">
    <div class="container">
      <div class="row-fluid">
        <div class="span12 center">
          <!-- LOGO -->
          <a class="brand pull-left" href="./">
            <img src="assets/images/logo.jpg" alt="EVG">
          </a>
          <!-- END LOGO -->

          <!-- MOBILE MENU BUTTON -->
          <div class="mobile-menu" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </div>
          <!-- END MOBILE MENU BUTTON -->
          
          <!-- MAIN MENU -->
          <ul id="main-menu" class="nav-collapse collapse">
            <?php html5blank_nav(); ?>
            <li><a href="#page-welcome">Home</a></li>
            <li><a href="#page-work">Work</a></li>
            <li><a href="#page-features">Solutions</a></li>
            <li><a href="#page-about">About</a></li>
            <li><a href="#page-contact">Contact</a></li>
          </ul>
          <!-- END MAIN MENU -->
          
          <!-- SOCIAL ICONS -->
          <div class="social-icons hover-big pull-right">
            <a href="http://www.facebook.com/pages/EnVeritas-Group/245423272145857" class="sicon-facebook"><i>Facebook</i></a>
            <a href="https://twitter.com/EnVeritasGroup" class="sicon-twitter"><i>Twitter</i></a>
            <a href="http://www.linkedin.com/company/enveritas-group" class="sicon-linkedin"><i>LinkedIn</i></a>
            <a href="http://pinterest.com/enveritasgroup/" class="sicon-pinterest"><i>Pinterest</i></a>
            <a href="https://plus.google.com/b/111763263766102803410/111763263766102803410/posts" class="sicon-gplus"><i>Google Plus</i></a>
          </div>
          <!-- END SOCIAL ICONS -->
        </div>
      </div>
    </div>
  </nav>
  <!-- END NAVIGATION -->
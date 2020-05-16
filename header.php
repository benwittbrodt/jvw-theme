<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
   

  </head>
<body>
<header>
<div data-collapse="medium" data-animation="default" data-duration="400" class="portfolio_nav w-nav">
    <div class="w-container">
        <a href="<?php echo site_url('/'); ?>" aria-current="page" class="w-nav-brand w--current">
        <div class="logo-text portfolio">Ben<strong>Wittbrodt</strong></div>
        </a>
    <nav role="navigation" class="nav-menu w-nav-menu">
        <a href="<?php echo site_url('/'); ?>" aria-current="page" class="nav-link_pic w-nav-link <?php if ( is_home() ) echo 'w--current'?>">Home</a>
        <a href="<?php echo site_url('/about'); ?>" class="nav-link_pic w-nav-link <?php if ( is_page('about')) echo 'w--current'?>">About</a>
        <a href="<?php echo site_url('/portfolio'); ?>" class="nav-link_pic w-nav-link <?php if ( is_page('portfolio') || is_page('people') || is_page('places') || is_page('puppies') ) echo 'w--current'?>">Portfolio</a>
        <a href="<?php echo site_url('/packages'); ?>" class="nav-link_pic w-nav-link <?php if ( is_page('packages')) echo 'w--current'?>">Packages</a>
        <a href="<?php echo site_url('contact');?>" class="nav-link_pic w-nav-link <?php if ( is_page('contact')) echo 'w--current'?>">Contact</a>
    </nav>
    <div class="menu-button w-nav-button">
        <div class="icon-3 w-icon-nav-menu"></div>
    </div>
</div>
  
</header>
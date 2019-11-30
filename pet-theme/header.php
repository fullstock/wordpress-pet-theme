<!doctype html>

<html>
<head> <?php wp_head(); ?> 

</head>

<body <?php body_class();?>>

<header class="site-header">
    <div class="container">

   <!-- <?php wp_nav_menu(array(
      'theme_location' => 'menu'
    ))  ?>
     -->

      <h1 class="school-logo-text float-right"><a href="<?php echo site_url()?>">
      
      חיות  <img width="40" height="40" src="<?php echo get_theme_file_uri('images/icon.png');?>"> וחיוכים</a></h1>
      <!--<span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span> 
      <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
      -->
      <div class="site-header__menu group">
        <nav class="main-navigation">
          <ul>
          <li><a href="<?php echo site_url('/about-us')?>">אודות</a></li>
          <li><a href="<?php echo site_url('/food')?>">מזון לחיות</a></li>
          <li><a href="<?php echo site_url('/animals')?>">חיות למכירה</a></li>
          <li><a href="<?php echo site_url('/blog')?>">בלוג</a></li>
          <li><a href="<?php echo site_url('/contact')?>">צור קשר</a></li>
            
            
           
            
          </ul>
        </nav>
        <div class="site-header__util">
          <!--
          <a href="#" class="btn btn--small btn--orange float-left push-right">Login</a>
          <a href="#" class="btn btn--small  btn--dark-orange float-left">Sign Up</a>
          <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span> -->
        </div>
      </div>
    </div>
  </header>



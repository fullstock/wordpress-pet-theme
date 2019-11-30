<?php 
get_header();
?>

  
    <div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('images/8.jpg');?>);"></div>
    <div class="page-banner__content container container--narrow">
      
      <div class="page-banner__intro">
      </div>
    </div>  
  </div>

  <div class="container container--narrow page-section">

  <?php
  while(have_posts()) { 
    the_post(); ?>
    <div class="generic-content">
    
    <h5> <?php the_title()?></h5>
    <?php the_meta(); ?>
       <?php the_content();?> 
       <?php comment_form();?> 
       

    </div>

  

    <?php } ?>


</div>
<?php
get_footer();
?>
?>










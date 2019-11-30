<?php 
get_header();
?>

  
    <div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('images/8.jpg');?>);"></div>
    <div class="page-banner__content container container--narrow">
      <?php 
     if ( get_post_type() == 'animals'){ ?>

        <h1 class="page-banner__title">חיות למכירה</h1>
     <?php } elseif ( get_post_type() == 'food'){?>

         <h1 class="page-banner__title">מזון לחיות</h1>
     <?php } else{ ?>
        <h1 class="page-banner__title">בלוג</h1>
     <?php  }
     
      
      
      ?>
      
      <div class="page-banner__intro">

      </div>
    </div>  
  </div>

  <div class="container container--narrow page-section">

  <?php
  while(have_posts()) { 
    the_post(); ?>
    <div class="generic-content">

   <a href="<?php the_permalink()?>"> <h5> <?php the_title()?></h5> </a>
   <?php the_meta(); ?>
    <?php the_post_thumbnail( "thumbnail");?> 
       <?php the_excerpt();?> 
       <hr>
    </div>

  

    <?php } ?>


</div>
<?php
get_footer();
?>
?>




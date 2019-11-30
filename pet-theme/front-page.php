
<?php  get_header(); ?>

<div class="page-banner">
  <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('images/8.jpg');?>);"></div>
    <div class="page-banner__content container t-center c-white">
      <h1 class="headline headline--large"> <?php the_title(); ?> </h1> 
      <h2 class="headline headline--medium">החנות הגדולה בארץ למכירת מזון וציוד לבעלי חיים</h2>
      <h3 class="headline headline--small"></h3>
      <a style="border:2px solid #80d4ff; color:#80d4ff;" href="<?php echo site_url( 'food' )?>" class="btn btn--large btn--blue">לקניית מזון</a>
    </div>
  </div>
  <hr>
  <div class="full-width-split group">
    <div class="full-width-split__one">
      <div class="full-width-split__inner">
        <h2 class="headline headline--small-plus t-center">חדש בחנות</h2>
        
        <?php 
        $args = array(
          'post_type' => 'food',
          'posts_per_page' => 2
     );

        $blogposts = new WP_Query($args);

          while($blogposts -> have_posts()) { 
             $blogposts -> the_post(); ?>

        <div class="event-summary">
          <a class="event-summary__date t-center" href="#">
            <span class="event-summary__month"><?php echo get_the_date('j F')?></span>
          </a>
          <div class="event-summary__content">
          <?php the_post_thumbnail( 'thumbnail' ); ?>
            <h5 class="event-summary__title headline headline--tiny"><a href="<?php echo get_permalink(get_the_ID())?>"> <?php the_title() ?> </a></h5>
            <p> <?php the_excerpt()?> <a href="<?php echo get_permalink(get_the_ID())?>" class="nu gray">היכנס למוצר</a></p>
            
          <hr>
          </div>
        </div>
        
        
        <?php } 
        
        ?> 

      </div>
    </div>

    <div class="full-width-split__two">
      <div class="full-width-split__inner">
        <h2 class="headline headline--small-plus t-center">חדש בבלוג</h2>

        
        <?php 
        
        
        $args = array(
          'post_type' => 'post',
          'posts_per_page' => 2,
          'order' => 'ASC'
     );

        $blogposts = new WP_Query($args);

          while($blogposts -> have_posts()) { 
             $blogposts -> the_post(); ?>

        <div class="event-summary">
          <a class="event-summary__date t-center" href="#">
            <span class="event-summary__month"><?php echo get_the_date('j F')?></span>
          </a>
          <div class="event-summary__content">
          <?php the_post_thumbnail( 'thumbnail' ); ?>
            <h5 class="event-summary__title headline headline--tiny"><a href="<?php echo get_permalink(get_the_ID())?>"> <?php the_title() ?> </a></h5>
            <p> <?php the_excerpt()?> <a href="<?php echo get_permalink(get_the_ID())?>" class="nu gray">קרא עוד...</a></p>
            
          <hr>
          </div>
        </div>
        
        
        <?php } 
        
        ?> 
        
      </div>
    </div>
  </div>

  <hr>
  <div class="hero-slider">
  
  <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('images/5.jpg');?>);">
    <div class="hero-slider__interior container">
      <div class="hero-slider__overlay">
        <h2 class="headline headline--medium t-center">גורי לברדור למכירה</h2>
        <p class="t-center">גורים גזעיים וחמודים של לברדור וגזעים אחרים</p>
        <p class="t-center no-margin"><a style="border:2px solid #80d4ff; color:#80d4ff;" href="<?php echo site_url( 'animals' )?>" class="btn btn--blue">לקניית גורים</a></p>
      </div>
    </div>
  </div>
  <hr>
  <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('images/2.jpg');?>);">
    <div class="hero-slider__interior container">
      <div class="hero-slider__overlay">
        <h2 class="headline headline--medium t-center">איך לטפח את פרוות הכלב שלכם</h2>
        <p class="t-center">טיפים מקצועיים לסירוק וטיפוח הכלב</p>
        <p class="t-center no-margin"><a style="border:2px solid #80d4ff; color:#80d4ff;" href="<?php echo site_url('take-care-dog-fur')?>" class="btn btn--blue">היכנסו לקרוא</a></p>
      </div>
    </div>
  </div>
  <hr>
  <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('images/9.jpg');?>);">
    <div class="hero-slider__interior container">
      <div class="hero-slider__overlay">
        <h2 class="headline headline--medium t-center">בחירת מזון לכלב</h2>
        <p class="t-center">איך לבחור את המזון האיכותי ביותר לכלב שלכם</p>
        <p class="t-center no-margin"><a style="border:2px solid #80d4ff; color:#80d4ff;" href="<?php echo site_url('choose-dog-food')?>" class="btn btn--blue">קרא עוד...</a></p>
      </div>
    </div>
  </div>
</div>

<?php  get_footer();  ?>
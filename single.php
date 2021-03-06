<?php get_header(); ?>

<div class="single-post">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
   <h1 class="single-post-title"><?php the_title(); ?></h1>
   <div class="">
     <?php the_post_thumbnail('large',['class'=>'post-single-thumb']); ?>
   </div>

   <p><?php the_content(); ?></p>
  <?php endwhile; else : ?>


   <!-- The very first "if" tested to see if there were any Posts to -->
   <!-- display.  This "else" part tells what do if there weren't any. -->
   <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>


   <!-- REALLY stop The Loop. -->
  <?php endif; ?>


</div>
<div class="rlt-post-container">


  <div class="rlt-post-cont">
    <div class="rlt-post">
      <div class="rlt-post-img-cont">
        <img src="" class='rlt-post-img' alt="">
      </div>
      <p class='rlt-post-title'></p>
    </div>
  </div>


</div>
<?php get_footer(); ?>

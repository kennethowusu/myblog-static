
<?php get_header(); ?>
 <main>
 <section class="blog-posts">
   <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article class="post">
      <section class="post__img-cont">
        <a href="<?php the_permalink(); ?>">
           <?php the_post_thumbnail('post-thumbnail',['class'=>'post__img']); ?>
        </a>
      </section>
      <section class=''>
        <a href="<?php the_permalink(); ?>"class="post__title">
          <h1>
            <?php echo the_title();  ?>
          </h1>
        </a>
         <p class="post__excerpt">

         </p>
         <a href="<?php the_permalink(); ?>" class='post__read-more'>READ MORE
           <span class='post__caret'></span>
         </a>
      </section>

    </article>
  <?php endwhile; else : ?>


   	<!-- The very first "if" tested to see if there were any Posts to -->
   	<!-- display.  This "else" part tells what do if there weren't any. -->
   	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>


   	<!-- REALLY stop The Loop. -->
   <?php endif; ?>





 </section>

 </main>
 <div class="nxt-post d-flex  align-items-center">
   <div class="nxt-post-prev mr-auto p-20">
     <a href="" class="nxt-post-prev-link rel">Previous posts</a>
   </div>
   <div class="nxt-post-next p-20">
     <a href="#" class='nxt-post-next-link'>Next posts</a>
   </div>

 </div>
<?php get_footer(); ?>

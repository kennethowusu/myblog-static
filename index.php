<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap-reboot.min.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">
  <?php wp_head(); ?>
  <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
</head>

<body>

 <header class='main-header full-flex'>
   <a href="" class="logo ">
     <img class="control" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="">
   </a>

   <button class='ml-auto menu-button js-menu-button'>
     <img src="<?php echo get_template_directory_uri(); ?>/images/menu.svg" alt="">

   </button>


  <div class="main-nav-overlay js-main-nav-overlay">
    <div class="main-nav-cont js-main-nav-cont">


      <button class='nav-close js-nav-close abs'>
        <img src="<?php echo get_template_directory_uri(); ?>/images/close.svg" alt="">
      </button>
       <!--Search form-->
        <form class="form-search inline-blk full-flex" action="/" method="get">
          <button type="submit">
            <img class="search-svg" src="/images/search.svg" alt="">
          </button>
          <input type="text" class="s_field control" name="s" placeholder="Search">
        </form>



       <nav role="navigation" class=" main-menu-cont bg-white">


         <ul class="main-menu ">
           <li class="menu-item current-menu-item has-children"><a href="#">TECH 101</a>
              <ul class="sub-menu">
                <li class="menu-item current-menu-item"><a href="#">HTML & CSS</a></li>
                <li class="menu-item"><a href="#">WORDPRESS</a></li>
                <li class="menu-item "><a href="#">LARAVEL</a></li>
              </ul>

           </li>
           <li class="menu-item"><a href="#">CAREER</a></li>
           <li class="menu-item"><a href="#">LIFE</a></li>
           <li class="menu-item"><a href="#">CULTURE</a></li>
         </ul>

       </nav>
    </div>
  </div>
 </header>
 <main>

 <section class="blog-posts">
   <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article class="post">
      <section class="post__img-cont">
        <a href="#">
          <img class='post__img' src="/images/post1.jpg" alt="">
        </a>
      </section>
      <section class='text-center'>
        <h1 class="post__title">
          <a href="#">
            <?php echo  ?>
        </h1>
         <p class="post__excerpt">
           <?php echo get_the_excerpt(); ?>
         </p>
         <a href="#" class='post__read-more'>READ MORE
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
 <?php wp_footer(); ?>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap-reboot.min.css">
  <link href="https://fonts.googleapis.com/css?family=Fredoka+One|Roboto" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <?php wp_head(); ?>
  <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
</head>

<body>

 <header class='main-header full-flex'>
   <a href="<?php echo site_url(); ?>" class="logo ">
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
            <img class="search-svg" src="<?php echo get_template_directory_uri(); ?>/images/search.svg" alt="">
          </button>
          <input type="text" class="s_field control" name="s" placeholder="Search">
        </form>



       <nav role="navigation" class=" main-menu-cont bg-white">


         <ul class="main-menu ">
           <li class="menu-item current-menu-item has-children"><a href="#">Javascript</a>
              <!-- <ul class="sub-menu">
                <li class="menu-item current-menu-item"><a href="#">HTML & CSS</a></li>
                <li class="menu-item"><a href="#">WORDPRESS</a></li>
                <li class="menu-item "><a href="#">LARAVEL</a></li>
              </ul> -->

           </li>
           <li class="menu-item"><a href="#">Wordpress</a></li>
           <li class="menu-item"><a href="#">About</a></li>
         </ul>

       </nav>
    </div>
  </div>
 </header>

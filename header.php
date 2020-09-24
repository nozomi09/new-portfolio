<!DOCTYPE html>
<html lang="ja" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nozomi.y Portfolio</title>
    <link rel="icon" href="<?php echo get_template_directory_uri();?>/img/user.svg">
    <?php wp_deregister_script('jquery'); ?>
    <?php wp_head(); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/jquery.js "></script>
    <script> new WOW().init();</script>
    
</head>
<body <?php body_class(); ?>>
    <header>
          <?php if(is_front_page()): ?> 
            <div class="inner header-inner">
                <ul class="wow fadeIn " data-wow-duration="3s">
                    <li class="header-item"><a class="nav-item" href="<?php echo home_url( '/' );?>">Top</a> </li>
                    <li class="header-item"><a class="nav-item" href="<?php echo get_page_link( 16 );?>">Work</a> </li>
                    <li class="header-item"><a href="#a-service" class="nav-item">Service</a> </li>
                    <li class="header-item"><a href="#a-about" class="nav-item">About</a> </li>
                    <li class="header-item"><a href="#a-contact" class="nav-item">Contact</a> </li>
                </ul>
            </div><!--header-inner-->

        <button class="drawer-icon js-drawer for-drawer" type="button" data-target="for-drawer">
          <span class="drawer-bars">
            <span class="drawer-bar"></span>
            <span class="drawer-bar"></span>
            <span class="drawer-bar"></span>
          </span>
        </button><!-- /drawer-icon -->
        <div class="drawer-background for-drawer"></div>
        <div class="drawer-content for-drawer">
          <ul>
            <li><a href="<?php echo home_url( '/' );?>"　class="drawer-item">Top</a></li>
            <li><a href="#a-about"　class="drawer-item">About</a></li>
            <li><a href="#a-service"　class="drawer-item">Service</a></li>
            <li><a href="<?php echo get_page_link( 16 );?>"　class="drawer-item">Work</a></li>
            <li><a href="#a-contact"　class="drawer-item">Contact</a></li>
          </ul>
        </div><!-- /drawer-content -->


        <section class="top">
            <div class="inner top-inner">
                <div class="top-contents wow fadeInUp" data-wow-duration="1.5s">
                <h1 class="top-title ">I'm Nozomi<br>Welcome my portfolio</h1>
                <p class="top-lead">あなたの思いをカタチにしませんか？<br>
                  お客様に寄り添う提案をこころがけています<br>
                  Web制作、全てお任せください！</p>
                <button class="btn btn-work"><a href="#a-contact">お問い合わせ</a></button>
                </div>
          </div><!--top-inner-->
        </section><!--top-->
  </header>

    <?php else: ?>
      <header class="header-suv">
        
        <div class="inner header-inner">
             <ul class="wow fadeIn " data-wow-duration="3s">
                <li class="header-item"><a href="<?php echo home_url( '/' );?>" class="nav-item">Top</a> </li>
                <li class="header-item"><a href="<?php echo get_page_link( 16 );?>" class="nav-item">Work</a> </li>
                <li class="header-item"><a href="<?php echo get_page_link( 54 );?>" class="nav-item">Service</a> </li>
                <li class="header-item"><a href="<?php echo get_page_link( 52 );?>" class="nav-item">Contact</a> </li>
            </ul>
        </div><!--header-inner-->


    <button class="drawer-icon js-drawer for-drawer" type="button" data-target="for-drawer">
      <span class="drawer-bars">
        <span class="drawer-bar"></span>
        <span class="drawer-bar"></span>
        <span class="drawer-bar"></span>
      </span>
    </button><!-- /drawer-icon -->
    <div class="drawer-background for-drawer"></div>
    <div class="drawer-content for-drawer">
      <ul>  
            <li><a href="<?php echo home_url( '/' );?>" class="drawer-item">Top</a></li>
            <li><a href="<?php echo get_page_link( 54 );?>" class="drawer-item">Service</a></li>
            <li><a href="<?php echo get_page_link( 16 );?>" class="drawer-item">Work</a></li>
            <li><a href="<?php echo get_page_link( 52 );?>" class="drawer-item">Contact</a></li>
      </ul>
    </div><!-- /drawer-content -->


    <section class="top-suv">
        <div class="inner top-inner">
            <div class="top-contents wow fadeInUp" data-wow-duration="1.5s">
             <h1 class="top-title ">Nozomi.Y portfolio</h1>
             <button class="btn btn-work"><a href="<?php echo get_page_link( 52 );?>">お問い合わせ</a></button>
            </div>
       </div><!--top-inner-->
    </section><!--top-->
   <!-- breadcrumb -->

</header>



    <?php endif;?>
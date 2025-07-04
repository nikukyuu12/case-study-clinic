<!DOCTYPE html>
<html>
  <head>
    <title>さわやか歯科クリニック</title>
    <meta name="description" content="さわやか歯科クリニックの公式サイトです。">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Noto+Sans+JP&family=Roboto:ital,wght@0,100..900;1,100..900&family=Zen+Maru+Gothic&display=swap" rel="stylesheet">

    <?php wp_head(); ?>

  </head>

  <body>
    <header>
      <div id="header-inner">
        <div id="logo-top">
          <a href="<?php echo esc_url(home_url('/')); ?>" id="logo"><img src="<?php echo get_template_directory_uri(); ?>/images/logo2.png" alt="トップページに戻る" class="logo"></a>
          
        </div>
        
        <div id="address">
          <!-- <p class="close-daytime">休診日  水・日/土曜 午前のみ<br>午後9：30－13：00<br>午後 14：00－18：30</p> -->
           <P class="tel">TEL 00-0000-0000</P> 
          <nav class="navlink-left">
            <a href="<?php echo home_url(); ?>/clinicguide">当院について</a>
            <a href="<?php echo home_url(); ?>/clinicguide/#kamoku-syousai">診療科目</a>
          </nav>
          <nav class="navlink-right">
            <a href="<?php echo home_url(); ?>/clinicguide/#staff">スタッフ</a>
            <a href="<?php echo home_url(); ?>/category">News</a>
          </nav>
          <nav class="navinfomation">
            <a href="<?php echo home_url(); ?>/bookingday"><img src="<?php echo get_template_directory_uri(); ?>/images/booking.png" id="booking">予約フォーム</a>
            <a href="<?php echo home_url(); ?>/contact"><img src="<?php echo get_template_directory_uri(); ?>/images/mail.png" id="mail">問合せフォーム</a>
          </nav>
        </div>
      </div>
      <!--- sp用nav  --->
      <div id="header-inner-sp">
        <div id="header-inner-logo">
          <a href="<?php echo esc_url(home_url('/')); ?>" id="logo-sp"><img  src="<?php echo get_template_directory_uri(); ?>/images/logo2.png" alt="トップページに戻る" class="logo-sp"></a>
        </div> 
        <div id="header-inner-nav">
          <img class="menu-sp" src="<?php echo get_template_directory_uri(); ?>/images/spmenu-nav.png" alt="navopen" onclick="document.getElementById('sp-nav').style.display = 'block'">
          <a href="<?php echo home_url(); ?>/bookingday"><img class="menu-sp" src="<?php echo get_template_directory_uri(); ?>/images/booking-nav.png" alt="予約"></a>
          <a href="<?php echo home_url(); ?>/contact"><img class="menu-sp" src="<?php echo get_template_directory_uri(); ?>/images/mail-nav.png" alt="mail"></a>
        </div>
      </div>
      
      <nav id="sp-nav">
        <img id="close" src="<?php echo get_template_directory_uri(); ?>/images/close.png" alt="navclose" onclick="document.getElementById('sp-nav').style.display = 'none'">
        <a href="<?php echo esc_url(home_url('/')); ?>" id="logo-sp"><img  src="<?php echo get_template_directory_uri(); ?>/images/logo2.png" alt="トップページに戻る" class="logo-sp"></a>
        <div class="menu">
          <a href="<?php echo home_url(); ?>/clinicguide" onclick="document.getElementById('sp-nav').style.display = 'none'">当院について</a>
          <a href="<?php echo home_url(); ?>/clinicguide/#kamoku-syousai" onclick="document.getElementById('sp-nav').style.display = 'none'">診療科目</a>
          <a href="<?php echo home_url(); ?>/clinicguide/#staff" onclick="document.getElementById('sp-nav').style.display = 'none'">スタッフ</a>
          <a href="<?php echo home_url(); ?>/category" onclick="document.getElementById('sp-nav').style.display = 'none'">News</a>
        </div>
      </nav>
    
    </header>
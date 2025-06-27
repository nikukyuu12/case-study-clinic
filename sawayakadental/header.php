<!DOCTYPE html>
<html>
  <head>
    <title>さわやか歯科クリニック</title>
    <meta name="description" content="さわやか歯科クリニックの公式サイトです。">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />

    <?php wp_head(); ?>

  </head>

  <body>
    <header>
      <div id="header-inner">
        <div id="logo-top">
          <a href="<?php echo esc_url(home_url('/')); ?>" id="logo"><img src="<?php echo get_template_directory_uri(); ?>/images/logo2.png" alt="トップページに戻る" class="logo"></a>
          <P class="tel">TEL 00-0000-0000</P>
        </div>
        <div id="address">
          <p class="close-daytime">休診日  水・日/土曜 午前のみ<br>午後9：30－13：00<br>午後 14：00－18：30</p>
            
          <nav class="navlink-left">
            <button><a href="<?php echo home_url(); ?>/clinicguide">当院について</a></button>
            <button><a href="<?php echo home_url(); ?>/clinicguide/#kamoku-syousai">診療科目</a></button>
          </nav>
          <nav class="navlink-right">
            <button><a href="<?php echo home_url(); ?>/clinicguide/#staff">スタッフ</a></button>
            <button><a href="<?php echo home_url(); ?>/category/news">News</a></button>
          </nav>
          <nav class="navinfomation">
            <button><img src="<?php echo get_template_directory_uri(); ?>/images/booking.png" id="booking"><a href="<?php echo home_url(); ?>/contact">問合せフォーム</a></button>
            <button><img src="<?php echo get_template_directory_uri(); ?>/images/mail.png" id="mail"><a href="<?php echo home_url(); ?>/bookingday">予約フォーム</a></button>
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
        <a href="index.html" id="logo-sp"><img  src="<?php echo get_template_directory_uri(); ?>/images/logo2.png" alt="トップページに戻る" class="logo-sp"></a>
        
        <button><a class="menu" href="clinicguide.html" onclick="document.getElementById('sp-nav').style.display = 'none'">当院について</a></button>
        <button><a class="menu" href="clinicguide.html#kamoku-syousai" onclick="document.getElementById('sp-nav').style.display = 'none'">診療科目</a></button>
        <button><a class="menu" href="clinicguide.html#staff" onclick="document.getElementById('sp-nav').style.display = 'none'">スタッフ</a></button>
        <button><a class="menu" href="news.html" onclick="document.getElementById('sp-nav').style.display = 'none'">News</a></button>

      </nav>
    
    </header>


<?php get_header(); ?>

    <!-- main  -->
    <main>
      <section id="booking-html">
        <!-- 外枠フレーム -->
            <div id="outer-frame">
                <div id="booking-top">
                  <div class="box-booking">
                    <h1>ご希望の日時を選択してください</h1>
                  </div>
                <?php if(have_posts()): ?>
                <?php while(have_posts()): the_post(); ?>
                <?php the_content(); ?>
                <br>
                <br>
                <br>

            </div>
            <?php endwhile; ?>
            <?php endif; ?>
      </section>

  
      <?php get_footer(); ?>
<?php get_header(); ?>


    <!-- main  -->
    <main>
      <section id="news-html">
        <!-- 外枠フレーム -->
        <div id="outer-frame">
          <div id="news-top-side">
            <div id="news-inner">
              <div id="news-title">
                <div id="news-top">
                  <div id="news-top-in">
                    <div class="box-1">
                      <h1>News</h1>
                    </div>
                    <a href="<?php echo home_url(); ?>/category">▶記事一覧はこちら</a>
                  </div>
                  <?php if(have_posts()) : ?>
                  <?php while(have_posts()) : the_post(); ?>

                  <div id="category-title">
                    <h2><?php $cat= get_the_category(); $cat=$cat[0];{echo $cat->cat_name;} ?></h2>
                    <div class="hr-1"><hr></div>
                    <p><?php echo the_title(); ?></p>
                  </div>
                </div>  
                <div id="aikyatti">
                  <!-- <img src="images/news.jpg" alt="花レター"> -->
                  <?php the_post_thumbnail('medium'); ?>
                </div>
              </div>
              <div id="news-kiji">
                <div class="hr-2"><hr></div>
                <p><?php echo get_the_content(); ?></p>
                <div class="hr-2"><hr></div>
              </div>
            </div>
          </div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
      </section>

     <?php get_footer(); ?>
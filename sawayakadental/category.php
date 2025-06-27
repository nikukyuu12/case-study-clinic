<?php get_header(); ?>
    <!-- main  -->
    <main>
      <section id="news-html">
        <!-- 外枠フレーム -->
        <div id="outer-frame">
          <div id="news-top-side">
            <h1 class="title-news">News</h1>
            <!-- Tab category 切替 -->
            <div id="category-tab">
              <label><input type="radio" name="TAB" checked>記事一覧</label>
              <?php if(have_posts()): ?>
              <?php while(have_posts()) : the_post(); ?>
              
              <div class="tab">
                <div class="kiji-outo">
                  <div class="hr-2"><hr></div>
                  <div class="kiji">
                    <img src="images/news.jpg" alt="花レター">
                  <div class="kiji-1">
                    <h3><?php echo single_cat_title(); ?></h3>
                    <p><?php echo the_title(); ?></p>
                    <div class="hr-2"><hr></div> 
                    <p><?php echo wp_trim_words(get_the_content(), 100, '・・・'); ?></p>
                    <div class="news-link"><a href="<?php echo get_permalink(); ?>">▶ 詳細はこちら</a></div>
                  </div>
                </div>
                  <div class="hr-2"><hr></div> 
                  <?php endwhile; ?>
                  <?php endif; ?>
              </div>  
              </div>
              
              <?php if(have_posts()): ?>
              <?php while(have_posts()) : the_post(); ?>
              <?php $cat = get_the_category();
              $catslug = $cat[0]->slug;
              
              ?>

              <label><input type="radio" name="TAB" checked><?php echo $catslug; ?></label>
              <div class="tab">
                <div class="kiji-outo">
                  <div class="hr-2"><hr></div>
                  <div class="kiji">
                    <img src="images/news.jpg" alt="花レター">
                  <div class="kiji-1">
                    <h3><?php echo single_cat_title(); ?></h3>
                    <p><?php echo the_title(); ?></p>
                    <div class="hr-2"><hr></div> 
                    <p><?php echo wp_trim_words(get_the_content(), 100, '・・・'); ?></p>
                    <div class="news-link"><a href="<?php echo get_permalink(); ?>">▶ 詳細はこちら</a></div>
                  </div>
                </div>
                  <div class="hr-2"><hr></div> 
                  <?php endwhile; ?>
                  <?php endif; ?>
              </div>
              </div>

              <?php if(have_posts()): ?>
              <?php while(have_posts()) : the_post(); ?>
              <?php $cat = get_the_category(); ?>

              <label><input type="radio" name="TAB" checked>豆知識</label>
              <div class="tab">
                <div class="kiji-outo">
                  <div class="hr-2"><hr></div>
                  <div class="kiji">
                    <img src="images/news.jpg" alt="花レター">
                  <div class="kiji-1">
                    <h3><?php echo single_cat_title(); ?></h3>
                    <p><?php echo the_title(); ?></p>
                    <div class="hr-2"><hr></div> 
                    <p><?php echo wp_trim_words(get_the_content(), 100, '・・・'); ?></p>
                    <div class="news-link"><a href="<?php echo get_permalink(); ?>">▶ 詳細はこちら</a></div>
                  </div>
                </div>
                  <div class="hr-2"><hr></div> 
                  <?php endwhile; ?>
                  <?php endif; ?>
              </div>

                
              
            </div>
          </div>
        </div>
      </section>

      <?php get_footer(); ?>
<?php get_header(); ?>

    <!-- main  -->
    <main>
      <section id="news-html">
        <!-- 外枠フレーム -->
        <div id="outer-frame">
          <div id="news-top-side">
            <h1 class="title-news">News</h1>

            <?php $args=array(
                'post-type' => 'post',
                'post_per_page' => 10
              );
              $query = new WP_Query($args);
              ?>

            <!-- Tab category 切替 -->
            <div id="category-tab">
              <label><input type="radio" name="TAB" checked>記事一覧</label>

              <div class="tab">
                <div class="kiji-outo">
                  <div class="hr-2"><hr></div>
                  <?php if($query->have_posts()) : ?>
                  <?php while($query->have_posts()) : $query-> the_post(); ?>
                  <div class="kiji">
                    <!-- <img src="images/news.jpg" alt="花レター"> -->
                    <?php the_post_thumbnail('thumbnail'); ?>
                    <div class="kiji-1">
                      <h3><?php $cat= get_the_category(); $cat=$cat[0];{echo $cat->cat_name;} ?></h3>
                      <p><?php echo the_title(); ?></p>
                      <div class="hr-1"><hr></div> 
                      <p><?php echo wp_trim_words(get_the_content(), 100, '・・・'); ?></p>
                      <div class="news-link"><a href="<?php echo get_permalink(); ?>">▶ 詳細はこちら</a></div>
                    </div>
                  </div> 
                  <div class="hr-2"><hr></div> 
                  <?php endwhile; ?>
                  <?php endif; ?>
                </div>
                
              </div>
              
              <label><input type="radio" name="TAB" >NEWS</label>  
              <div class="tab">
                <div class="kiji-outo">
                  <div class="hr-2"><hr></div>
                  <?php 
                  $args = array(
                  'post_type' => 'post',
                  'category_name' => 'news',
                  'posts_per_page' => 10,
                  );
                  $posts =get_posts($args);
                  ?>
                  <?php  foreach($posts as $post): ?>
                  <?php  setup_postdata($post); ?> 
                  <div class="kiji">
                    <!-- <img src="images/news.jpg" alt="花レター"> -->
                    <?php the_post_thumbnail('thumbnail'); ?>
                    <div class="kiji-1">
                      <h3><?php $cat= get_the_category(); $cat=$cat[0];{echo $cat->cat_name;} ?></h3>
                      <p><?php echo the_title(); ?></p>
                      <div class="hr-1"><hr></div> 
                      <p><?php echo wp_trim_words(get_the_content(), 100, '・・・'); ?></p>
                      <div class="news-link"><a href="<?php echo get_permalink(); ?>">▶ 詳細はこちら</a></div>
                    </div>
                    </div> 
                  <div class="hr-2"><hr></div> 
                  <?php endforeach; ?>
                </div>
              </div>
                
              <label><input type="radio" name="TAB" >豆知識</label>  
              <div class="tab">
                <div class="kiji-outo">
                  <div class="hr-2"><hr></div>
                  <?php 
                  $args = array(
                  'post_type' => 'post',
                  'category_name' => 'other',
                  'posts_per_page' => 10,
                  );
                  $posts =get_posts($args);
                  ?>
                  <?php  foreach($posts as $post): ?>
                  <?php  setup_postdata($post); ?> 
                  <div class="kiji">
                    <!-- <img src="images/news.jpg" alt="花レター"> -->
                    <?php the_post_thumbnail('thumbnail'); ?>
                    <div class="kiji-1">
                      <h3><?php $cat= get_the_category(); $cat=$cat[0];{echo $cat->cat_name;} ?></h3>
                      <p><?php echo the_title(); ?></p>
                      <div class="hr-1"><hr></div> 
                      <p><?php echo wp_trim_words(get_the_content(), 100, '・・・'); ?></p>
                      <div class="news-link"><a href="<?php echo get_permalink(); ?>">▶ 詳細はこちら</a></div>
                    </div>
                    </div> 
                  <div class="hr-2"><hr></div> 
                  <?php endforeach; ?>
                </div>
              </div>
              
            </div>
            
          </div>
        </div>
        
      </section>

      <?php get_footer(); ?>
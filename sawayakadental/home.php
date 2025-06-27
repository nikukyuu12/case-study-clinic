<?php get_header(); ?>

    <!-- main  -->
    <main>
      <article>
        <section id="mainvisual">
          <img src="<?php echo get_template_directory_uri(); ?>/images/family.jpg" id="mainimg" alt="家族歯磨き">
          <h1 class="toph1">地域の皆様が安心して通える</h1>
          <h1 class="toph1-2">家族みんなの為の歯科医院</h1>
        </section>

        <section id="kamoku">
          <!-- 科目 -->
          <div id="concept-top">
            <div class="kamokubar1">
              <hr>
              <span class="kamokuname1">一般歯科</span>             
            </div>
            <div class="kamokubar2">
              <hr>
              <span class="kamokuname2">小児歯科</span>
            </div>
            <div class="kamokubar3">
              <hr>
              <span class="kamokuname3">口腔外科</span>
            </div>
            <div class="kamokubar4">
              <hr>
              <span class="kamokuname4">予防歯科</span>
            </div>
            <!-- 大切3s -->
            <div class="title1">
              <span class="titlename1">痛みの少ないやさしい治療</span>
              <hr>
            </div>
            <div class="title2">
              <span class="titlename2">お口の健康を守る予防歯科</span>
              <hr>
            </div>
            <div class="title3">
              <span class="titlename3">清潔で最新の設備</span> 
              <hr>
            </div>
            <div id="kamoku-link">
              <div class="news-link"><a href="clinicguide.html">▶ 詳細はこちら</a></div>
            </div>
          </div>    
            <!-- 特徴 01-02 -->
          <section id="tokutyou">
            <div id="tokutyou-out">
              <div class="tokutyou-in">
                <h1>清潔で快適な診察環境</h1>
                <div class="tokutyou-kiji">
                  <div class="number">01</div>
                  <div class="tokutyou-text">
                    <p>清潔で患者さんに安心して治療を受けていただけるよう、衛生管理を徹底 し、最新の滅菌システムを導入。院内は明るく、清潔感のある快適な空間づくりを心がけています。</p>
                  </div>
                </div>  
              </div>
              <div class="tokutyou-in">
                <h1>小さなお子さまから<br>ご年配の方まで通いやすい</h1>
                <div class="tokutyou-kiji">
                  <div class="number">02</div>
                  <div class="tokutyou-text">
                    <p>お子さまが楽しく通えるように、キッズスペースを完備。また、ご年配の方やお身体が不自由な方にも安心してご来院いただけるよう、バリアフリー設計 になっています。</p>
                  </div>
                </div>
              </div>
            </div>
          </section>
        
        </section>
          <!-- news記事 -->
        <section id="news">
          <div class="bar-top"><hr></div> 
          <div id="newses">
          
          <div class="news-topics">
            <h1 class="news-title">NEWS</h1>           
              <?php 
              $args = array(
                'post_type' => 'post',
                'category_name' => 'news',
                'posts_per_page' => 3,
              );
              $posts =get_posts($args);
              ?>

              <?php  foreach($posts as $post): ?>
              <?php  setup_postdata($post); ?> 
              <div class="news1s"> 
              <p class="news-report"><?php echo get_the_date(); ?>&ensp;&ensp;&ensp;
              <?php echo the_title(); ?></P>
              <div class="news-link"><a href="<?php echo get_permalink(); ?>">▶ 詳細はこちら</a></div>  
            </div>
            <hr>
            <?php endforeach; ?>
            <?php wp_reset_postdata(); ?>
          </div>

          <div class="news-topics2">
            <h1 class="news-title">Other</h1>
            <?php 
              $args = array(
                'post_type' => 'post',
                'category_name' => 'other',
                'posts_per_page' => 3,
              );
              $posts =get_posts($args);
              ?>

              <?php  foreach($posts as $post): ?>
              <?php  setup_postdata($post); ?> 
              <div class="news1s"> 
              <p class="news-report"><?php echo get_the_date(); ?>&ensp;&ensp;&ensp;
              <?php echo the_title(); ?></P>
              <div class="news-link"><a href="<?php echo get_permalink(); ?>">▶ 詳細はこちら</a></div>  
            </div>
            <hr>
            <?php endforeach; ?>
            <?php wp_reset_postdata(); ?>
          </div>
          
          </div>
          </div>
          <div class="bar-bottom">
            <hr>

          </div>
        </section>
      </article>

      <?php get_footer(); ?>
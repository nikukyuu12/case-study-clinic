<?php get_header(); ?>


      <!-- main -->
    <main>
      <section id="contact">
        <div class="box-1">
          <h1>お問合せ</h1>
        </div>
        
        <form>
          <div class="form-box">
            <label><span>*</span>ご氏名</label><br>
            <input type="text" placeholder="名前を入力してください">
          </div>
          <div class="form-box">
            <label><span>*</span>電話番号</label><br>
            <input type="text" placeholder="電話番号を入力してください">
          </div>
          <div class="form-box">
            <label>メール</label><br>
            <input type="text" placeholder="メールアドレスを入力してください">
          </div>
          <div class="form-box-area">
            <label><span>*</span>お問合せ内容</label><br>
            <textarea>お問合わせ内容を入力してください</textarea>
          </div>
        </form>  
      </section>
      <div id="sousin">
        <img src="<?php echo get_template_directory_uri(); ?>/images/contact-button.png" class="contact-button" alt="送信">
      </div>

      <?php get_footer(); ?>
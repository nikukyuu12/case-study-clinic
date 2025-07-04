<footer>
        <div id="footer-innner">
          <div id="footer-address">
            <a href="<?php echo esc_url(home_url('/')); ?>" id="logo"><img src="<?php echo get_template_directory_uri(); ?>/images/logo2.png" alt="ロゴ" class="logo"></a>
            <P>〒105-0001<br>東京都港区虎ﾉ門1丁目3-1</P>
            <P>TEL 00-0000-0000</P>
            <!-- <p>休診日  水・日/土曜 午前のみ<br>午後9：30－13：00<br>午後 14：00－18：30</p> -->

            <table border="2" >
            <tr>
              <th>診察時間</th><th>月</th><th>火</th><th>水</th><th>木</th><th>金</th><th>土</th>  
            </tr>
            <tr>
              <td>9:00~13:00</td><td>●</td><td>●</td><td><span>休</span></td><td>●</td><td>●</td><td>●</td>
            </tr>
            <tr>
              <td>14:00~18:30</td><td>●</td><td>●</td><td><span>休</span></td><td>●</td><td>●</td><td><span>休</span></td>
            </tr>
          </table>


          </div>
          <div id="map">
            <p class="parking">駐車場ございません<br>近隣のパーキングをご利用ください。</p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6486.358754641794!2d139.74691337632353!3d35.670094730584836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188b9278cad6bd%3A0xf8a15f79423fdee0!2z44CSMTA1LTAwMDEg5p2x5Lqs6YO95riv5Yy66JmO44OO6ZaA77yR5LiB55uu77yT4oiS77yR!5e0!3m2!1sja!2sjp!4v1750134824355!5m2!1sja!2sjp" width="600" height="270" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> 
          </div>
        </div>
        <p id="copyright">&copy;2025 SawayakaClinic,All Rights Reserved.</p>
      </footer>
      

    </main>

    <?php wp_footer(); ?>
  </body>
</html>
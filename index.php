

<?php get_header();?>

   
    <section class="work" id="a-work">
        <h2 class="section-title">Work</h2>
          <div class="work-inner inner">  
              <div class="work-left">
    

                <ul class="slick01">

                <?php
        //記事があればentriesブロック以下を表示
        if (have_posts() ) : ?>
               
               <?php
                    //記事数ぶんループ
                    while ( have_posts() ) :
                    the_post(); ?>  
                  <li>     
                      <div class="top-card">
                                <a href="<?php the_permalink(); //記事のリンクを表示 ?>">
                                  <div class="top-card-img">
                                  <?php
                                          if (has_post_thumbnail() ) {
                                          // アイキャッチ画像が設定されてれば大サイズで表示
                                          the_post_thumbnail('large');
                                          } else {
                                          // なければnoimage画像をデフォルトで表示
                                          echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/noimg.png" alt="">';
                                          }
                                          ?>
                                  </div><!--work-card-img-->
                                  <div class="top-card-content">
                                      <h4 class="top-card-title"><?php the_title(); //タイトルを表示 ?></h4>
                                  </div>
                                </a>
                                </div><!--work-card-top-->
                        </li>
                        <?php
                endwhile;
                ?>
                </ul><!--slick01-->
                <?php endif; wp_reset_postdata();?>
              </div><!--work-left-->
             
              <div class="work-right">
                <p>過去に作成した作品をまとめていますので<br>ぜひ一度ご覧ください！</p>
                <a href="<?php echo get_page_link( 16 );?>" class="btn-archive">作品一覧へ</a>  
              </div><!--work-right--> 
         
          </div><!--work-inner-->
    
    </section><!--work-->
  
    <section class="service" id="a-service">
        <h2 class="section-title">Service</h2>
     <div class="inner service-inner">

       <div class="wp service-content wow fadeInLeftBig" data-wow-duration="1.5s" data-wow-offset="50">
         <div class="wp-tab">
           <img src="<?php echo get_template_directory_uri();?>/img/wp.png" alt="">
         </div><!--wp-tab-->
         <div class="wp-left">
          <h3>WordPress構築　￥50,000~</h3>
          <p>デザインからコーディング、WordPressへの組み込み<br>
            ドメイン取得など全てお任せください！<br>
            ざっくりなご依頼でも大歓迎！<br>
            ぜひお気軽にお問い合わせください^^</p>
         </div><!--wp-left--->
          <div class="wp-right ">
            <img src="<?php echo get_template_directory_uri();?>/img/wp.png" alt="ワードプレス構築">
          </div><!--wp-right-->
       </div><!--wp-->

       <div class="lp service-content wow fadeInRightBig" data-wow-duration="1.5s" data-wow-offset="40">
        <div class="lp-left service-left">
         <img src="<?php echo get_template_directory_uri();?>/img/lp.png" alt="LPページ制作">
        </div><!--lp-left--->
         <div class="lp-right service-right">
          <h3>LPページ制作　￥30,000~</h3>
          <p>デザインからコーディング、<br>
            ドメイン取得など全てお任せください！<br>
            お客様の思いをカタチにいたします！<br>
            ぜひお気軽にお問い合わせください^^</p>
         </div><!--lp-right-->
      </div><!--lp-->

      <div class="cd service-content wow fadeInLeftBig" data-wow-duration="1.5s" data-wow-offset="40">
        <div class="cd-tab">
          <img src="<?php echo get_template_directory_uri();?>/img/cd.png" alt="">
        </div><!--wp-tab-->
        <div class="cd-left service-left ">
          <h3>コーディング1ページ　￥6,000~</h3>
          <p>デザインカンプからのコーディング<br>
            JavaScriptプラグインやjQueryを使用した<br>
            動的なコーディングもお任せください！<br>
            更新のみの場合はさらにお安く対応いたします。<br>
            ぜひ一度お問い合わせください！</p>
        </div><!--cd-left--->
         <div class="cd-right service-right">
          <img src="<?php echo get_template_directory_uri();?>/img/cd.png" alt="">
         </div><!--cd-right-->
      </div><!--cd-->


      <!-- <div class="design service-content wow fadeInRightBig" data-wow-duration="1.5s" data-wow-offset="70"> -->
        <!-- <div class="design-left  service-left"> -->
         <!-- <img src="<?php echo get_template_directory_uri();?>/img/design2.png" alt=""> -->
        <!-- </div>design-left- -->
         <!-- <div class="design-right service-right"> -->
          <!-- <h3>デザイン　￥10,000~</h3> -->
          <!-- <p>お客様の思いをカタチにいたします！<br> -->
            <!-- ・とにかく売上げをあげたい<br> -->
            <!-- ・自社のPRがしたい、など<br> -->
            <!-- ざっくりなご依頼でも大歓迎！<br> -->
            <!-- ぜひお気軽にお問い合わせください^^</p> -->
         <!-- </div>design-right -->
      <!-- </div>design -->

      <div class="btn-contact">
        <button onclick="location.href='#a-contact'">お問い合わせはこちら</button>
      </div>

      
     </div><!--service-inner-->
 </section><!--service-->

 <section class="about" id="a-about">
        <h2 class="section-title about-title">About</h2>
        <div class="inner about-inner">
          <div class="about-tab">
            <img src="<?php echo get_template_directory_uri();?>/img/plof.png" alt="">
          </div> <!--about-tab-->
          <div class="about-left wow fadeInUp" data-wow-duration="1.5s" data-wow-offset="20">
            <div class="profile">
              <p><span>Profile</span> </p>
              <p>横井　希 <a class="twitter" href="https://twitter.com/nozomi11169527"><i class="fab fa-twitter"></i></a></p>
              <p>滋賀県出身の25歳</p>
              <p>オンラインスクール「デイトラ」でWeb制作を学習<br>デザイン、コーディングやWordPressを使用した<br>更新のしやすいWebサイトの作成などを行なっています。</p>
            </div> <!--profile-->

            <div class="skill">
              <p><span>Skill</span></p>
              <ul>
                <li class="html">
                  <i class="fab fa-html5"></i>
                  <p> HTML5</p>
                </li>
                <li class="css">
                  <i class="fab fa-css3"></i>
                  <p>CSS3</p>
                </li>
                <li class="js">
                  <i class="fab fa-js"></i>
                  <p>JavaScript(jQuery)</p>
                </li>
              </ul>
              <ul>
                <li class="sass">
                  <i class="fab fa-sass"></i>
                  <p>Sass</p> 
                </li>
                <li class="ps">
                  <i class="fab fa-adobe"></i>
                  <p>photoshop</p>
                </li>
                <li class="wp">
                  <i class="fab fa-wordpress-simple"></i>
                  <p>WordPress</p>
                </li>
              </ul>
           
           
            </div><!--skill-->
          </div><!--about-left-->

            <div class="about-right">
                <img src="<?php echo get_template_directory_uri();?>/img/plof.png" alt="" class="wow fadeInUp" data-wow-duration="1.5s" data-wow-offset="50">
            </div><!--about-right-->
        </div><!--about-inner-->

    </section>


    <section class="contact" id="a-contact">
      <div class="contents-title">
       <h2 class="section-title">Contact</h2>
       <p class="contact-read">お気軽にお問い合わせください！</p>
     </div>
       <div class="inner contact-inner">

        <div class="form">
          <div class="form-inner">
          <?php echo do_shortcode('[contact-form-7 id="100" title="Untitled"]')?>
        </div><!--form-inner-->
        </div><!--form-->

       </div><!--contact-inner-->
     </section><!--contact-->
 
  <?php get_footer();?>
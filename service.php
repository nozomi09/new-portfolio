<?php 
 /* 
  template name:service
 */
?>

<?php get_header();?>


<section class="service-suv" id="a-service">
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

       <div class="lp service-content wow fadeInRightBig" data-wow-duration="1.5s" data-wow-offset="50">
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

      <div class="cd service-content wow fadeInLeftBig" data-wow-duration="1.5s" data-wow-offset="50">
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
        <button onclick="location.href='<?php echo get_page_link( 52 );?>'">お問い合わせはこちら</button>
      </div>

      
     </div><!--service-inner-->
 </section><!--service-->

<?php get_footer();?>
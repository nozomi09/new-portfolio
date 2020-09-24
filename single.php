


<?php get_header();?>

    <div class="single">

    <div class="inner">
       <div class="breadcrumb">
         <?php bcn_display(); //BreadcrumbNavXTのパンくずを表示するための記述 ?>
       </div><!-- /breadcrumb -->
   </div>
   
    <h2 class="section-title">Work</h2>
    <div class="single-inner">
        <div class="single-img">
        <?php
                        if ( has_post_thumbnail() ) {
                        the_post_thumbnail( 'large' );
                        }
                        ?>
        </div><!--single-img-->
        <div class="single-content">
        <?php
           $work = SCF::get('work');
           foreach ($work as $fields ) {
               ?>
        <h2><?php echo $fields['work_title']; ?></h2>
        <?php } ?>
        <a href="https://github.com/nozomi09/portfolio" target="_blank" rel="noopener">
            <i class="fab fa-github"></i>
            ソースコード
        </a>
        <?php
           $work = SCF::get('work');
           foreach ($work as $fields ) {
               ?>
            <p>制作時期：<?php echo $fields['work_date']; ?></p>
            <p>作業時間：<?php echo $fields['work_time']; ?></p>
            <a href="<?php echo $fields['work_url2']; ?>"><?php echo $fields['work_url2']; ?></a>
        <?php } ?>
      <h3>ポイント</h3>
      <?php
           $work = SCF::get('work');
           foreach ($work as $fields ) {
               ?>
        <p> <?php echo nl2br($fields['work_point']); ?></p>
      <?php } ?>  
        <h3>使用言語</h3>
        <?php
           $work = SCF::get('work');
           foreach ($work as $fields ) {
               ?>
        <p><?php echo $fields['work_programme']; ?></p>
        <?php } ?>  

        <h3>使用ツール</h3>
        <?php
           $work = SCF::get('work');
           foreach ($work as $fields ) {
               ?>
        <p><?php echo $fields['work_tool']; ?></p>
        <?php } ?>  
        <h3>全体画像</h3>
      <div class="single-img2">
      <?php 
                  $work = SCF::get('work');	
                  foreach ($work as $fields ) {
                      $imgurl = wp_get_attachment_image_src($fields['work_img2'] , 'full');
                  ?>
                  <img src="<?php echo $imgurl[0]; ?>" width="<?php echo $imgurl[1]; ?>" height="<?php echo $imgurl[2]; ?>" >
                  <?php } ?>
      </div><!--single-img2-->
   
       </div><!--single-content-->
    </div><!--single-inner-->
  </div><!--single-->


<?php get_footer();?>
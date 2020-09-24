<?php 
 /* 
  template name:作品一覧
 */
?>

<?php get_header();?>



    <section class="archive">

    <div class="inner">
       <div class="breadcrumb">
         <?php bcn_display(); //BreadcrumbNavXTのパンくずを表示するための記述 ?>
       </div><!-- /breadcrumb -->
   </div>
   
      <h2 class="section-title">Work</h2>
        <div class="inner archive-inner">


              
        <?php
                $wp_query = new WP_Query();
                $my_posts = array(
                  'post_type' => 'post',
                  'posts_per_page'=> '12',
                );
                $wp_query->query( $my_posts );
                if( $wp_query->have_posts() ): while( $wp_query->have_posts() ) : $wp_query->the_post();
              ?>
          <div class="work-card">
          <a href="<?php the_permalink(); //記事のリンクを表示 ?>">
            <div class="work-card-img">
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
            <div class="work-card-content">
                <h4 class="work-card-title"><?php the_title(); //タイトルを表示 ?></h4>
            </div>
          </a>
          </div><!--work-card-->

          <?php
                endwhile;
                ?>
          </div><!--news-contents-->
          <?php endif; wp_reset_postdata();?>
        </div><!--archive-inner-->
    </section><!--archive-->

    <?php if (paginate_links() ) : //ページが1ページ以上あれば以下を表示 ?>
        <!-- pagenation -->
        <div class="pagenation">
            <?php
            echo
            paginate_links(
            array(
            'end_size' => 0,
            'mid_size' => 1,
            'prev_next' => true,
            'prev_text' => '<i class="fas fa-angle-left"></i>',
            'next_text' => '<i class="fas fa-angle-right"></i>',
            )
            );
            ?>

        </div><!-- /pagenation -->
  <?php endif; ?>

    <?php get_footer();?>
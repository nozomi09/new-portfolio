<?php 
 /* 
  template name:contact
 */
?>

<?php get_header();?>

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
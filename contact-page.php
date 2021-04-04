<?php
/*
Template Name: コンタクトフォーム
*/
?>
<?php get_header(); ?>

<div class="contact__space"></div>

<!-- breadcrumb -->
<div class="breadcrumb">
  <div class="breadcrumb-content">
    <div class="l-inner">
      <?php bcn_display(); //BreadcrumbNavXTのパンくずを表示するための記述 
      ?>
    </div>
  </div>
</div><!-- /breadcrumb -->

<!-- greeting -->
<section class="company__p-greeting">
  <div class="l-inner">
    <h2 class="c-util__titlesub wow fadeIn">お問い合わせ<br>Contact</h2>
    <div class="company__p-greeting__text wow fadeIn">
      <p class="">お問い合わせはお電話・メールフォーム・LINEにてお気軽にどうぞ。
        お問い合わせの際はプライバシーポリシーをご確認とご同意の上送信してください。
        プライバシーポリシーはこちら</p>
    </div>
    <div class="company__p-greeting__qr wow fadeIn">
      <img src="<?php echo get_template_directory_uri() ?>/image/line-qr.png" alt="LINEのQRコード">
    </div>
  </div>
</section>

<section class="contact__form">
  <div class="l-inner">
    <h2 class="c-util__titlesub wow fadeIn">お問い合わせフォーム<br>Contact Form</h2>
    <?php echo do_shortcode(' [contact-form-7 id="33" title="コンタクトフォーム 1"]'); ?>
  </div>
</section>

<?php get_footer(); ?>
<?php
/*
Template Name: 送信完了画面
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

<section class="contactfin">
  <div class="l-inner">
    <div class="contactfin__wrapper">
      <div class="contactfin__text wow fadeIn">
        お問い合わせありがとうございました。
      </div>
      <div class="contactfin__button">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="contactfin__button__link">TOPページに戻る</a>
      </div>
      <div class="contactfin__button">

      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
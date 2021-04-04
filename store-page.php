<?php
/*
Template Name: 店舗看板のページ
*/
?>
<?php get_header(); ?>

<!-- kv -->
<section class="p-utilkv _store">
  <div class="l-inner">
    <div class="service__p-utilkv__box">
      <p class="service__p-utilkv__text">
        分かりやすいデザインで<br>
        店舗をコーディネート
      </p>
    </div>
  </div>
</section>

<!-- breadcrumb -->
<div class="breadcrumb">
  <div class="breadcrumb-content">
    <div class="l-inner">
      <?php bcn_display(); //BreadcrumbNavXTのパンくずを表示するための記述 
      ?>
    </div>
  </div>
</div><!-- /breadcrumb -->

<section class="service__p-feature">
  <div class="l-inner">
    <h2 class="c-util__titlesub _service-store">店舗看板<br>Store Sign</h2>
    <div class="service__p-feature__image"><img src="<?php echo get_template_directory_uri() ?>/image/about_02.jpg" alt="店舗看板・買取BIG"></div>
    <div class="service__p-feature__text">
      塗装工事や照明設置などでお店の雰囲気を一変。集客アップにつながるようなデザインをご提供致します。<br>
      店舗の外観はお客様が最初に見る「顔」。<br>
      弊社では貴社のイメージや伝えたい事を最大限に表現し集客アップへつなげていきたいと考えています。<br>
      既存の店舗のお困りごともケースに合わせて改善提案いたします。<br>

      ＃シート貼り　＃内照式看板　＃行灯看板　＃屋上看板
    </div>
  </div>
</section>

<!-- casestudy -->
<section class="service__p-casestudy">
  <div class="l-inner">
    <h2 class="c-util__title">CASE STUDY<br>施工事例</h2>
    <div class="service__p-casestudy__content">
      <div class="service__p-casestudy__item">
        <div class="service__p-casestudy__image">
          <img src="<?php echo get_template_directory_uri() ?>/image/store__casestudy_01.jpg" alt="リース・野立て広告">
        </div>
        <p class="service__p-casestudy__desc">屋上看板</p>
      </div>
      <div class="service__p-casestudy__item">
        <div class="service__p-casestudy__image">
          <img src="<?php echo get_template_directory_uri() ?>/image/store__casestudy_02.jpg" alt="リース・野立て広告">
        </div>
        <p class="service__p-casestudy__desc">立体文字</p>
      </div>
      <div class="service__p-casestudy__item">
        <div class="service__p-casestudy__image">
          <img src="<?php echo get_template_directory_uri() ?>/image/store__casestudy_03.jpg" alt="リース・野立て広告">
        </div>
        <p class="service__p-casestudy__desc">行灯看板</p>
      </div>
    </div>
  </div>
</section>

<!-- flow -->
<section class="service__p-flow">
  <div class="l-inner">
    <h2 class="c-util__title">FLOW<br>制作の流れ</h2>
    <div class="service__p-flow__content">
      <!-- 01 -->
      <div class="service__p-flow__item">
        <h3 class="service__p-flow__title" data-direction="downward">店舗状況の確認<br>
          設置場所などの聴取</h3>
        <p class="service__p-flow__desc">お客様のご希望とイメージをお伺いしながら <br>
          店舗物件の状況とサービスに合わせた店舗に合わせた看板のご案内をいたします</p>
      </div>
      <!-- 02 -->
      <div class="service__p-flow__item">
        <h3 class="service__p-flow__title" data-direction="downward">お見積り（プレゼン）</h3>
        <p class="service__p-flow__desc">お客様に設置場所・規格・料金等をご納得していただき契約を締結いたします。</p>
      </div>
      <!-- 03 -->
      <div class="service__p-flow__item">
        <h3 class="service__p-flow__title" data-direction="downward">最終デザインの決定</h3>
        <p class="service__p-flow__desc">お客様に設置場所・規格・料金等をご納得していただき契約を締結いたします。</p>
      </div>
      <!-- 04 -->
      <div class="service__p-flow__item">
        <h3 class="service__p-flow__title">制作・設置</h3>
        <p class="service__p-flow__desc">デザインが決まり次第、迅速に製作いたします。 <br>
          看板の種類に合わせた適切な施工を行います。</p>
      </div>
    </div>
  </div>
</section>



<?php get_footer(); ?>
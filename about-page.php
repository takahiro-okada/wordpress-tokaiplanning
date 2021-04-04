<?php
/*
Template Name: 会社紹介のページ
*/
?>
<?php get_header(); ?>

<!-- kv -->
<!-- kv -->
<section class="p-utilkv _about">
  <div class="l-inner">
    <div class="p-utilkv__box">
      <p class="p-utilkv__text wow fadeIn">
        ABOUT US<span class="p-utilkv__desc"><br class="hidden-pc">東海プラニングについて</span>
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

<section class="about__p-service">
  <div class="l-inner">
    <h2 class="c-util__titlesub wow fadeIn">東海プラニングについて<br>Service</h2>
    <div class="about__p-service__wrapper">
      <p class="about__p-service__heading wow fadeIn">
        看板は、見た目の美しさはもちろんですが、目を引き、好感の持てるイメージに仕上げる事が大切です。お客様の意図するイメージを、当社独自のデジタルデザインテクニックで、的確に表現し、それ以上にクライアントの方が想像できないようなＣＧアートで、他にないユニークで、洗練されたデザイン看板を制作します。
      </p>
      <div class="about__p-service__content">
        <div class="about__p-service__box">
          <div class="about__p-service__text wow fadeIn">
            <h3>最新のデジタルデザインシステムによる高品質で
              高速なデザインワークを可能にしました</h3>
            <p>最新鋭のパソコンと熟練したスタッフがクライアントの要求を社内データベースにインプット、看板のデザイン・規格・設置場所・契約情報などを一括管理。看板設置前に詳細なプレゼンテーション資料が完成します。それと同時に完成データも出来上がっています。これにより合理的に制作時間を短縮、高速に制作進行できます。</p>
            <div class="about__p-service__image wow fadeIn">
              <img src="<?php echo get_template_directory_uri() ?>/image/about__image01.jpg" alt="東海プラニングについて">
            </div>
          </div>
        </div>
        <div class="about__p-service__box">
          <div class="about__p-service__text wow fadeIn">
            <h3>最先端の技術と、経験豊かな職人としての技</h3>
            <p>最先端のデジタル技術の恩恵を得られるのは、デザイン・印刷までの工程。その後は、経験豊かな職人の手による看板製造・施工になります。当社では、制作・施工両方の技術を最高水準に保つため、日々鍛錬しています。</p>
          </div>
          <div class="about__p-service__image wow fadeIn">
            <img src="<?php echo get_template_directory_uri() ?>/image/about__image02.jpg" alt="デジタル技術の写真">
          </div>
        </div>
        <div class="about__p-service__box">
          <div class="about__p-service__text wow fadeIn">
            <h3>最先端の制作機材と豊富な材料在庫。希望の
              看板が自在に迅速に制作できます</h3>
            <p>受注後に、材料を仕入れた場合、その制作期間は数日のロスがあります。当社では豊富な在庫と、必要とされる全ての機材が揃っています。従って受注したその日から迅速に制作にとりかかれることができます。</p>
          </div>
          <div class="about__p-service__image wow fadeIn">
            <img src="<?php echo get_template_directory_uri() ?>/image/about__image03.jpg" alt="材料在庫について">
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<section class="about__p-feature">
  <div class="l-inner">
    <div class="about__p-feature__wrapper">
      <div class="about__p-feature__item">
        <h2 class="c-util__titlesub wow fadeIn">リース・野立て広告<br>Lease Signboard</h2>
        <div class="about__p-feature__image wow fadeIn">
          <img src="<?php echo get_template_directory_uri() ?>/image/about_01.jpg" alt="リース・野立て広告">
        </div>
        <div class="about__p-feature__button wow fadeIn">
          <a href="<?php echo home_url('/lease'); ?>" class="c-button__link">リース・野立て看板についてもっと詳しく</a>
        </div>
      </div>

      <div class="about__p-feature__item">
        <h2 class="c-util__titlesub wow fadeIn">店舗看板<br>Store Sign</h2>
        <div class="about__p-feature__image wow fadeIn">
          <img src="<?php echo get_template_directory_uri() ?>/image/about_02.jpg" alt="店舗看板">
        </div>
        <div class="about__p-feature__button wow fadeIn">
          <a href="<?php echo home_url('/store'); ?>" class="c-button__link">店舗看板についてもっと詳しく</a>
        </div>
      </div>

      <div class="about__p-feature__item">
        <h2 class="c-util__titlesub wow fadeIn">各種製作・施工<br>Other</h2>
        <div class="about__p-feature__image wow fadeIn">
          <img src="<?php echo get_template_directory_uri() ?>/image/about_03.jpg" alt="各種製作・施工">
        </div>
        <div class="about__p-feature__button wow fadeIn">
          <a href="<?php echo home_url('/other'); ?>" class="c-button__link">その他製品についてもっと詳しく</a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
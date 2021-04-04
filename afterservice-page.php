<?php
/*
Template Name: アフターサービスのページ
*/
?>
<?php get_header(); ?>

<!-- kv -->
<section class="p-utilkv _lease">
  <div class="l-inner">
    <div class="p-utilkv__box">
      <p class="p-utilkv__text wow fadeIn">
        LEASE SIGNBOARD<span class="p-utilkv__desc">リース・野立て広告</span>
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

<section class="leasesignboard__p-feature">
  <div class="l-inner">
    <h2 class="c-util__titlesub _service-lease wow fadeIn">リース・野立て広告<br>Lease Signboard</h2>
    <div class="leasesignboard__p-feature__image wow fadeIn"><img src="<?php echo get_template_directory_uri() ?>/image/s_01.jpg" alt="リース・野立て広告"></div>
    <div class="leasesignboard__p-feature__text wow fadeIn">
      屋外看板、野立て広告のことなら東海プラニングにお任せください。<br>
      お客様のニーズに合わせて企画し、豊富な経験とネットワークで、より広告宣伝効果の高い場所を確保します。<br>
      制作・施工・保守・管理の全てを一貫して自社で行えるので、安心・確実です。<br>
      リース用地についてもご相談ください。<br>
      <br>
      ＃野立て看板　＃リース看板
    </div>
  </div>
</section>

<!-- casestudy -->
<section class="leasesignboard__p-casestudy">
  <div class="l-inner">
    <h2 class="c-util__title wow fadeIn">CASE STUDY<br>施工事例</h2>
    <div class="leasesignboard__p-casestudy__content">
      <div class="leasesignboard__p-casestudy__item wow fadeIn">
        <img src="<?php echo get_template_directory_uri() ?>/image/casestudy_01.jpg" alt="リース・野立て広告1">
      </div>
      <div class="leasesignboard__p-casestudy__item wow fadeIn">
        <img src="<?php echo get_template_directory_uri() ?>/image/casestudy_02.jpg" alt="リース・野立て広告2">
      </div>
      <div class="leasesignboard__p-casestudy__item wow fadeIn">
        <img src="<?php echo get_template_directory_uri() ?>/image/casestudy_03.jpg" alt="リース・野立て広告3">
      </div>
    </div>
  </div>
</section>

<!-- flow -->
<section class="leasesignboard__p-flow">
  <div class="l-inner">
    <h2 class="c-util__title wow fadeIn">FLOW<br>制作の流れ</h2>
    <div class="leasesignboard__p-flow__content">
      <!-- 01 -->
      <div class="leasesignboard__p-flow__item wow fadeIn">
        <h3 class="leasesignboard__p-flow__title" data-direction="downward">ご希望の場所等<br>の打ち合わせ</h3>
        <p class="leasesignboard__p-flow__desc">掲載場所をお客様と相談し、宣伝効果の高い場所をご提案致します。<br>
          ご希望の場所が無い場合は、新規で設置場所の交渉を行ってまいります。</p>
      </div>
      <!-- 02 -->
      <div class="leasesignboard__p-flow__item wow fadeIn">
        <h3 class="leasesignboard__p-flow__title" data-direction="downward">土地の確保</h3>
        <p class="leasesignboard__p-flow__desc">すべて当社が一貫して、借地契約を行ってまいります。</p>
      </div>
      <!-- 03 -->
      <div class="leasesignboard__p-flow__item wow fadeIn">
        <h3 class="leasesignboard__p-flow__title" data-direction="downward">ご契約</h3>
        <p class="leasesignboard__p-flow__desc">お客様に設置場所・規格・料金等をご納得していただき契約を締結いたします。</p>
      </div>
      <!-- 04 -->
      <div class="leasesignboard__p-flow__item wow fadeIn">
        <h3 class="leasesignboard__p-flow__title" data-direction="downward">デザインご提案</h3>
        <p class="leasesignboard__p-flow__desc">データ・資料をお預かりし、お伝えされたい内容を理解したうえで<br>
          宣伝効果の高いデザインをご提案させていただきます。<br>
          写真やグラフィックなど幅広い表現方法で校正いたします。</p>
      </div>
      <!-- 05 -->
      <div class="leasesignboard__p-flow__item wow fadeIn">
        <h3 class="leasesignboard__p-flow__title" data-direction="downward">看板製作</h3>
        <p class="leasesignboard__p-flow__desc">デザインが決まり次第、迅速に製作いたします。</p>
      </div>
      <!-- 06 -->
      <div class="leasesignboard__p-flow__item wow fadeIn">
        <h3 class="leasesignboard__p-flow__title" data-direction="downward">施工・取付け</h3>
        <p class="leasesignboard__p-flow__desc">基礎工事・建方工事・取付けを自社一貫して工事を行います。 耐久性に優れた工事を心がけております。</p>
      </div>
      <!-- 07 -->
      <div class="leasesignboard__p-flow__item wow fadeIn">
        <h3 class="leasesignboard__p-flow__title">管 理</h3>
        <p class="leasesignboard__p-flow__desc">施工後も定期的な巡回点検や、メンテナンスを行っております。</p>
      </div>
    </div>
  </div>
</section>

<!-- insurance -->
<section class="leasesignboard__p-insurance">
  <div class="l-inner">
    <h2 class="c-util__title wow fadeIn">INSURANCE<br>看板保険</h2>
    <div class="leasesignboard__p-insurance__content">
      <p class="leasesignboard__p-insurance__text wow fadeIn">東海プラニングではすべての広告に保険加入しています。<br>
        万が一天災などで看板が破損してしまっても、すべて弊社負担で復旧ができるので安心です。</p>
    </div>
  </div>
</section>

<?php get_footer(); ?>
<?php get_header(); ?>

<!-- kv -->
<section class="p-kv">
  <div class="p-kv__image src1">
  </div>
  <div class="p-kv__image src2">
  </div>
  <div class="l-inner">
    <p class="kv-text wow fadeIn">
      365日貴社のビジネスをPR
    </p>
  </div>
</section>

<!-- lead -->
<section class="p-lead">
  <div class="l-inner">
    <div class="p-lead__box">
      <div class="p-lead__announce">お知らせ</div>
      <div class="p-lead__news"><?php the_field('news'); ?></div>
    </div>
  </div>
</section>

<div class="border"></div>
<!-- service -->
<div class="index__bg"></div>
<section class="p-service">
  <h2 class="p-service__title c-util__title wow fadeIn">SERVICE<br>サービス一覧</h2>
  <!-- lease -->
  <div class="p-service__wrapper">
    <!-- リース・野立て広告 -->
    <div class="p-service__content">
      <div class="l-inner">
        <div class="p-service__inner">
          <a href="<?php echo home_url('/lease'); ?>" class="p-service__box">
            <div class="p-service__swiper-title _01 wow fadeIn">リース・野立て広告</div>
            <div class="p-service__swiper-text wow fadeIn">知多半島、三河、名古屋の看板</div>
          </a>
          <div class="swiper-container slide01 wow fadeIn">
            <div class="swiper-wrapper">
              <div class="swiper-slide"><img src="<?php echo get_template_directory_uri() ?>/image/slider-lease_01.jpg" alt="リース・野立て広告"></div>
              <div class="swiper-slide"><img src="<?php echo get_template_directory_uri() ?>/image/slider-lease_02.jpg" alt="リース・野立て広告"></div>
              <div class="swiper-slide"><img src="<?php echo get_template_directory_uri() ?>/image/slider-lease_03.jpg" alt="リース・野立て広告"></div>
              <div class="swiper-slide"><img src="<?php echo get_template_directory_uri() ?>/image/slider-lease_04.jpg" alt="リース・野立て広告"></div>
            </div>
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>
        </div>
      </div>
    </div>

    <!-- 店舗看板 -->
    <div class="p-service__content wow fadeIn">
      <div class="l-inner">
        <div class="p-service__inner">
          <a href="<?php echo home_url('/store'); ?>" class="p-service__box">
            <div class="p-service__swiper-title _02 wow fadeIn">店舗看板</div>
            <div class="p-service__swiper-text wow fadeIn">看板１点から店舗のトータルプロデュースまで</div>
          </a>
          <div class="swiper-container slide02 wow fadeIn">
            <div class="swiper-wrapper">
              <div class="swiper-slide"><img src="<?php echo get_template_directory_uri() ?>/image/slider-store_01.jpg" alt="店舗看板"></div>
              <div class="swiper-slide"><img src="<?php echo get_template_directory_uri() ?>/image/slider-store_02.jpg" alt="店舗看板"></div>
              <div class="swiper-slide"><img src="<?php echo get_template_directory_uri() ?>/image/slider-store_03.jpg" alt="店舗看板"></div>
              <div class="swiper-slide"><img src="<?php echo get_template_directory_uri() ?>/image/slider-store_04.jpg" alt="店舗看板"></div>
              <div class="swiper-slide"><img src="<?php echo get_template_directory_uri() ?>/image/slider-store_05.jpg" alt="店舗看板"></div>
              <div class="swiper-slide"><img src="<?php echo get_template_directory_uri() ?>/image/slider-store_06.jpg" alt="店舗看板"></div>
            </div>
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>
        </div>
      </div>
    </div>

    <!-- 各種製作工事 -->
    <div class="p-service__content">
      <div class="l-inner">
        <div class="p-service__inner">
          <a href="<?php echo home_url('/other'); ?>" class="p-service__box">
            <div class="p-service__swiper-title _03 wow fadeIn">各種製作工事</div>
            <div class="p-service__swiper-text wow fadeIn">知多半島、三河、名古屋の看板広告はお任せください。</div>
          </a>
          <div class="swiper-container slide03 wow fadeIn">
            <div class="swiper-wrapper">
              <div class="swiper-slide"><img src="<?php echo get_template_directory_uri() ?>/image/slider-other_01.jpg" alt="製作工事"></div>
              <div class="swiper-slide"><img src="<?php echo get_template_directory_uri() ?>/image/slider-other_02.jpg" alt="製作工事"></div>
              <div class="swiper-slide"><img src="<?php echo get_template_directory_uri() ?>/image/slider-other_03.jpg" alt="製作工事"></div>
              <div class="swiper-slide"><img src="<?php echo get_template_directory_uri() ?>/image/slider-other_04.jpg" alt="製作工事"></div>

              <div class="swiper-slide"><img src="<?php echo get_template_directory_uri() ?>/image/slider-other_05.jpg" alt="製作工事"></div>

              <div class="swiper-slide"><img src="<?php echo get_template_directory_uri() ?>/image/slider-other_06.jpg" alt="製作工事"></div>

            </div>
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>

<!-- AREA -->

<section class="p-area">
  <div class="l-inner">
    <h2 class="c-util__title -p-area wow fadeIn">AREA<br>施工エリア</h2>
    <div class="p-area__content">
      <h3 class="p-area__content-top wow fadeIn">愛知県全域</h3>
      <p class="p-area__content-sub wow fadeIn">
        知多半島<br>
        半田市 常滑市 知多市 東海市<br>
        知多郡 阿久比町 東浦町 武豊町 美浜町 南知多町<br>
        名古屋市 三河 尾張
      </p>
      <p class="p-area__content-desc wow fadeIn">
        施工エリア、リース用地のお問い合わせはお気軽に
      </p>

    </div>


  </div>
</section>

<!-- message -->
<section class="p-message">
  <h2 class=" c-util__title wow fadeIn">MESSAGE<br>メッセージ</h2>
  <div class="p-message-wrapper">
    <div class="p-message-content">
      <h3 class="p-message__title wow fadeIn">お客様の期待を超える看板デザイン</h3>
      <p class="p-message__text wow fadeIn">
        街のあちらこちらで広告看板を見かけます。<br>
        そんな溢れる看板の中でＰRできるデザインとは<br>
        これから成功させたい店舗をきらりと輝かせたい<br>
        東海プラニングではそんなお客様の思いをお伺いし、その期待と理想を<br>
        超えるデザインをカタチにします。<br>
        お客様に喜ばれる、成果の出る看板デザインを制作から設置まで責任を<br>
        持って施工させていただきます。
      </p>
    </div>
  </div>
</section>

<?php get_footer(); ?>
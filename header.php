<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,user-scalable=no,shrink-to-fit=yes">
  <link rel="icon" href="favicon.ico">

  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/wows/animate.css">
  <script src="<?php echo get_template_directory_uri(); ?>/wows/wow.js"></script>
  <?php wp_head(); ?>
</head>

<body>
  <header class="p-header">
    <div class="p-header__inner">
      <div class="p-header__row">
        <!-- ロゴ -->
        <a href="<?php echo esc_url(home_url('/')); ?>" class="p-header__logo"><img src="<?php echo get_template_directory_uri() ?>/image/logo.png" alt="東海プラニング株式会社ロゴ"></a>
        <!-- 中央nav -->
        <nav class="p-header__nav">
          <ul class="p-header__list">
            <li class="p-header__item"><a href="<?php echo esc_url(home_url('/')); ?>">HOME</a></li>
            <li class="p-header__item"><a href="<?php echo home_url('/about'); ?>">東海プランニングについて</a></li>
            <li class="p-header__item"><a class="js-toggle-button">サービス一覧</a>
              <ul class="js-toggle-menu toggle-menu">
                <li class="toggle-item">
                  <a href="<?php echo home_url('/lease'); ?>" class="toggle-link">野立て看板</a>
                </li>
                <li class="toggle-item">
                  <a href="<?php echo home_url('/store'); ?>" class="toggle-link">店舗看板</a>
                </li>
                <li class="toggle-item">
                  <a href="<?php echo home_url('/other'); ?>" class="toggle-link">各種製作・工事</a>
                </li>
              </ul>
            </li>
            <li class="p-header__item"><a href="<?php echo home_url('/company'); ?>">会社概要</a></li>
          </ul>
        </nav>
        <!-- cta -->
        <div class="p-header__cta">
          <ul class="p-header__cta-list">
            <li class="el-header-cta"><a href="tel:0569-21-4352"><img src="<?php echo get_template_directory_uri() ?>/image/contact_tel.png" alt="TELアイコン"></a></li>
            <li class="el-header-cta"><a href="<?php echo home_url('/contact'); ?>"><img src="<?php echo get_template_directory_uri() ?>/image/contact_mail.png" alt="メールアイコン"></a></li>
            <li class="el-header-cta"><a href="https://line.me/R/ti/p/%40191cgvgo"><img src="<?php echo get_template_directory_uri() ?>/image/contact_line.png" alt="LINEアイコン"></a></li>
          </ul>
        </div>
      </div>

      <!-- ここからドロワーメニュー -->
      <button type="button" id="js-hamburger" class="button hamburger" aria-controls="js-glabal-menu" aria-expanded="false" area-label="メニューを開閉する">
        <span class="hamburger__line">
        </span>
      </button>
      <div class="sp-global-menu" id="js-global-menu" area-hidden="true">
        <nav class="c-drawer__nav">
          <ul class="c-drawer__list">
            <li class="c-drawer__item"><a href="<?php echo home_url('/about'); ?>" class="c-drawer__link">東海プラニングについて</a></li>
            <li class="c-drawer__item"><a href="<?php echo home_url('/lease'); ?>" class="c-drawer__link">野立て看板</a></li>
            <li class="c-drawer__item"><a href="<?php echo home_url('/store'); ?>" class="c-drawer__link">店舗看板</a></li>
            <li class="c-drawer__item"><a href="<?php echo home_url('/other'); ?>" class="c-drawer__link">各種製作・工事</a></li>
            <li class="c-drawer__item"><a href="<?php echo home_url('/company'); ?>" class="c-drawer__link">会社概要</a></li>
            <div class="c-drawer__cta-list">
              <li class="c-drawer-cta"><a href="tel:0569-21-4352"><img src="<?php echo get_template_directory_uri() ?>/image/contact_tel.png" alt="TELアイコン"></a></li>
              <li class="c-drawer-cta"><a href="<?php echo home_url('/contact'); ?>"><img src="<?php echo get_template_directory_uri() ?>/image/contact_mail.png" alt="メールアイコン"></a></li>
              <li class="c-drawer-cta"><a href="https://line.me/R/ti/p/%40191cgvgo"><img src="<?php echo get_template_directory_uri() ?>/image/contact_line.png" alt="LINEアイコン"></a></li>
            </div>
          </ul>
        </nav>
      </div><!-- /.sp-header-menu -->
  </header>
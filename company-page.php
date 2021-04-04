<?php
/*
Template Name: 会社概要のページ
*/
?>
<?php get_header(); ?>

<!-- kv -->
<section class="p-utilkv _company">
  <div class="l-inner">
    <div class="p-utilkv__box">
      <p class="p-utilkv__text">
        COMPANY<span class="p-utilkv__desc wow fadeIn">会社概要</span>
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

<!-- greeting -->
<div class="p-company__bg">
  <section class="company__p-greeting">
    <div class="l-inner">
      <h2 class="c-util__titlesub wow fadeIn">ご挨拶<br>Greeting</h2>
      <div class="company__p-greeting__text wow fadeIn">
        当社は知多半島、名古屋市、三河地区を中心に、看板を中心にクリエイティブな活動をしています。
        <p>看板のみならずデジタルアートを応用しコンピューターによる多彩な表現手法であらゆる広告ニーズにお
          応えしております。</p>
        <p>看板それはお店、会社の顔です。当社ではその顔を表現するのにお客様のご希望に合わせて綿密な企画を
          行い、より広告宣伝効果の高い場所を確保し、最新のコンピューターシステムを駆使して、見る人を引き
          つける看板作りを心がけております。</p>
      </div>
    </div>
  </section>

  <!-- info -->
  <section class="company__p-info">
    <div class="l-inner">
      <h2 class="c-util__titlesub wow fadeIn">会社概要<br>Compnay Info</h2>
      <table class="companyprofile wow fadeIn">
        <tbody>
          <tr>
            <th class="table__heading">商 &nbsp;&nbsp;&nbsp;号</th>
            <td class="table__desc">東海プラニング株式会社</td>
          </tr>
          <tr>
            <th class="table__heading">代表取締役</th>
            <td class="table__desc">榊原 豊樹</td>
          </tr>
          <tr>
            <th class="table__heading">所&nbsp;&nbsp;在&nbsp;&nbsp;地</th>
            <td class="table__desc">愛知県半田市白山町 2-46</td>
          </tr>
          <tr>
            <th class="table__heading">電話番号</th>
            <td class="table__desc">0569-21-4352</td>
          </tr>
          <tr>
            <th class="table__heading">FAX番号</th>
            <td class="table__desc">0569-21-9292</td>
          </tr>
          <tr>
            <th class="table__heading">業務内容</th>
            <td class="table__desc">屋外広告(リース看板、ロードサイン)の制作と管理<br>
              店頭看板(電飾サイン、行灯、ステンレス看板、カルプ・チャンネル文字<br>
              &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; のぼり、懸垂幕、横断幕、テント、カッティングシート、マグネットシート)<br>
              駐車場看板、案内看板<br>
              許可票、登録票、指定看板<br>
              電柱広告<br>
              各種看板の修繕、撤去工事</td>
          </tr>
          <tr>
          <tr>
            <th class="table__heading">創&nbsp;&nbsp;業</th>
            <td class="table__desc">平成元年　４月</td>
          </tr>
          <th class="table__heading">資&nbsp;&nbsp;本&nbsp;&nbsp;金</th>
          <td class="table__desc">3,000,000円</td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>

</div><!-- company__bg -->


<!-- map -->
<section class="company__p-map">
  <div class="l-inner">
    <h2 class="c-util__titlesub wow fadeIn">アクセス<br>Access</h2>
    <div class="company__p-map__content">
      <div class="company__p-map__desc">
        愛知県半田市白山町2-46<br>
        名鉄知多半田駅より南へ500M
      </div>
      <div class="company__p-map__desc__iframe wow fadeIn">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3272.6163316064412!2d136.920719315667!3d34.89097948038599!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x600485b576f884c9%3A0xb61f89c2bc50e6f9!2z44CSNDc1LTA5MTIg5oSb55-l55yM5Y2K55Sw5biC55m95bGx55S677yS5LiB55uu77yU77yW!5e0!3m2!1sja!2sjp!4v1609206389058!5m2!1sja!2sjp" width="800" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
      <div class="company__p-map__linkbox wow fadeIn">
        <a class="company__p-map__link" href="https://goo.gl/maps/shWoT8dBQSuFAe6CA">>>GoogleMapで見る</a>
      </div>
    </div>
  </div>
</section>




<?php get_footer(); ?>
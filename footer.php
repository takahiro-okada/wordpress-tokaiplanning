<footer class="p-footer">
	<div class="l-inner">
		<div class="p-footer__row">
			<div class="p-footer__logo"><img src="<?php echo get_template_directory_uri() ?>/image/logo.png" alt="東海プラニング株式会社ロゴ"></div>
			<div class="p-footer__info"> 愛知県半田市白山町2-46<br class="hidden-pc"> [お問い合わせ受付時間]平日9:00 - 18:00</div>
			<div class="p-footer__cta">
				<ul class="p-footer__cta-list">
					<li class="el-header-cta"><a href="tel:0569-21-4352"><img src="<?php echo get_template_directory_uri() ?>/image/contact_tel.png" alt="電話する"></a></li>
					<li class="el-header-cta"><a href="<?php echo home_url('/contact'); ?>"><img src="<?php echo get_template_directory_uri() ?>/image/contact_mail.png" alt="メールする"></a></li>
					<li class="el-header-cta"><a href="https://line.me/R/ti/p/%40191cgvgo"><img src="<?php echo get_template_directory_uri() ?>/image/contact_line.png" alt="LINEする"></a></li>
				</ul>
			</div>
		</div>
		<nav class="p-footer__nav">
			<ul class="p-footer__list">
				<li class="p-footer__item"><a href="<?php echo esc_url(home_url('/')); ?>" class="p-footer__link">HOME</a></li>
				<li class="p-footer__item"><a href="<?php echo home_url('/about'); ?>" class="p-footer__link">東海プラニングについて</a></li>
				<li class="p-footer__item"><a class="p-footer__link js-toggle-button">サービス一覧</a>
					<ul class="js-toggle-menu footer-toggle-menu">
						<li class="footer-toggle-item">
							<a href="<?php echo home_url('/lease'); ?>" class="footer-toggle-link">野立て看板</a>
						</li>
						<li class="footer-toggle-item">
							<a href="<?php echo home_url('/store'); ?>" class="footer-toggle-link">店舗看板</a>
						</li>
						<li class="footer-toggle-item">
							<a href="<?php echo home_url('/other'); ?>" class="footer-toggle-link">各種製作・工事</a>
						</li>
						<li class="footer-toggle-item">
							<a href="#course" class="footer-toggle-link">アフターサービス</a>
						</li>
					</ul>
				</li>
				<li class="p-footer__item"><a href="<?php echo home_url('/company'); ?>" class="p-footer__link">会社概要</a></li>

			</ul>
		</nav>
	</div>
	<div id="js-scroll-fadein" class="js-scroll-fadein arrow">
</footer>
<script>
	new WOW().init();
</script>
<?php wp_footer(); ?>

</body>

</html>
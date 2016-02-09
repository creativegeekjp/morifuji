<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package morifuji
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="sidebar" class="widget-area" role="complementary">
	<nav id="site-navigation" class="main-navigation" role="navigation">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</nav><!-- #site-navigation -->
	<div class="nav-subtitle">
		<p><a href="http://samples.creativegeek.jp/morifuji/%E3%82%AB%E3%83%A9%E3%83%BC%E3%82%B9%E3%83%86%E3%83%B3%E3%83%AC%E3%82%B9%E6%B8%85%E6%8E%83%E3%83%A1%E3%83%B3%E3%83%86%E3%83%8A%E3%83%B3%E3%82%B9%E8%A6%81%E9%A0%98/">カラーステンレス清掃メンテナンス要領</a></p>
	</div>
	<div class="banner-nav" id="top-img">
		<p>関連企業「サン・アクト株式会社」</p>
		<a href="http://samples.creativegeek.jp/morifuji/%E3%82%B5%E3%83%B3%E3%82%A2%E3%82%AF%E3%83%88/"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/navFoot.jpg"  alt="logo: Morifuji"></a>
	</div>
	<div class="banner-nav">
		<p>関連企業「株式会社テクノアンカー」</p>
		<a href="http://samples.creativegeek.jp/morifuji/%E3%83%86%E3%82%AF%E3%83%8E%E3%82%A2%E3%83%B3%E3%82%AB%E3%83%BC/"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/banner2.jpg"  alt="logo: Morifuji"></a>
	</div>
</aside><!-- #secondary -->


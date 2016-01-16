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
		<p>カラーステンレス清掃メンテナンス要領</p>
	</div>
	<div class="banner-nav" id="top-img">
		<p>関連企業「サン・アクト株式会社」</p>
		<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/navFoot.jpg"  alt="logo: Morifuji">
	</div>
	<div class="banner-nav">
		<p>関連企業「株式会社テクノアンカー」</p>
		<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/banner2.jpg"  alt="logo: Morifuji">
	</div>
</aside><!-- #secondary -->


<?php
/**
 * Home Page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package morifuji
 */

?>

<article id="pagePadding post-<?php the_ID(); ?>" <?php post_class(); ?> >
	<header class="entry-header page-heading">
		
	</header><!-- .entry-header -->

	<div class="entry-content">
		
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'morifuji' ),
				'after'  => '</div>',
			) );
		?>
		<div class="row home-below">
			<div class="col-lg-6 ">
				<p class="title-pills">新着情報</p>
				<div class="bordered">
				<table class="home-table">
					<tbody>
						<tr>
							<td class="td-color">2010.8.1</td>
							<td>ホームページをリニューアルしました。</td>
						</tr>
						<tr>
							<td class="td-color">2010.8.1</td>
							<td>ホームページをリニューアルしました。</td>
						</tr>
						<tr>
							<td class="td-color">2010.8.1</td>
							<td>ホームページをリニューアルしました。</td>
						</tr>
						<tr>
							<td class="td-color">2010.8.1</td>
							<td>ホームページをリニューアルしました。</td>
						</tr>
						<tr>
							<td class="td-color">2010.8.1</td>
							<td>ホームページをリニューアルしました。</td>
						</tr>
						<tr>
							<td class="td-color">2010.8.1</td>
							<td>ホームページをリニューアルしました。</td>
						</tr>
					</tbody>
				</table>
			</div>
			</div>
			<div class="col-lg-6">
				<div class="row">
					<div class="col-lg-6 ">
						<p class="title-pills">加工技術報</p>
						<div class="home-below-right">
							<p>加工技術では、金属表面処理メーカーとして、エッチング、カラーステンレス以外に、バイブレーションやショットブラストなど、多彩な表面仕上げや、その他の表面加工・板金加工を紹介しております。</p>
						</div>
						
					</div>
					<div class="col-lg-6">
						<p class="title-pills">施工実績</p>
						<div class="home-below-right">
							<p>施工実績では、過去に弊社が納入した実績を紹介しております。</p>
						</div>
					</div>
				</div>
				<div class="row" style="margin-top:5px;">
					<div class="col-lg-6 ">
						<p class="title-pills">企業情報</p>
						<div class="home-below-right">
							<p>企業情報では弊社の概要、沿革、経営方針などの情報を掲載しております。</p>
						</div>
						
					</div>
					<div class="col-lg-6">
						<p class="title-pills">お問合せ</p>
						<div class="home-below-right">
							<p>お問合せでは、弊社の所在地や地図を掲載しております。</p>
							<p>また、営業お問合せフォームから直接、ご意見、ご質問をお受けいたしております。</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					esc_html__( 'Edit page', 'morifuji' ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				),
				'<span class="edit-link">',
				'</span>'
			);
		?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

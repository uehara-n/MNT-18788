<?php get_header();?>
</div>
<!-- ========================================================メインビジュアル ここから
	<div id="main_v">
		<span class="btn" style="margin-top:2px;"><a href="/seko"><img src="<?php bloginfo('template_url'); ?>/page_image/top/main_btn01.jpg" width="252" height="137" alt="東海地区約3,000件の施工実績" class="img_over" /></a></span>
        <span class="btn"><a href="<?php bloginfo('template_url'); ?>/#"><img src="<?php bloginfo('template_url'); ?>/page_image/top/main_btn03.jpg" width="252" height="111" alt="光触媒塗装工事施工実績　中部地区No.1（過去7年連続）" class="img_over"/ ></a></span>
        <span class="btn"><a href="<?php bloginfo('template_url'); ?>/#"><img src="<?php bloginfo('template_url'); ?>/page_image/top/main_btn02.jpg" alt="TOTOハイドロテクト全国コンテスト2014施工実績全国第2位" width="252" height="111" class="img_over" /></a></span>
	</div>
========================================================メインビジュアル ここまで -->
<!-- ======================スライダーここから======================= -->
<div id="slider">
<div id="s_wrapper">
<ul id="carousel">
<li><img src="<?php bloginfo('template_url'); ?>/images/slider/slide01.jpg" width="1060" height="450" /></li>
<li><a href="/shindan"><img src="<?php bloginfo('template_url'); ?>/images/slider/slide02.jpg" width="1060" height="450" /></a></li>
<li><img src="<?php bloginfo('template_url'); ?>/images/slider/slide03.jpg" width="1060" height="450" /></li>
</ul>
<a href="#" id="prev1"><img src="<?php bloginfo('template_url'); ?>/images/slider/slide_arrow_l.png" /></a>
<a href="#" id="next1"><img src="<?php bloginfo('template_url'); ?>/images/slider/slide_arrow_r.png" /></a>
</div>
<div id="pager">
</div>
</div>

<div id="content" class="clearfix">
<!-- ======================スライダーここまで======================= -->
<div id="wrapper">
	<div id="main">
		<!-- ========================================================右コンテンツ ここから -->
		<div id="contents">


<div id="oshirase">
<center>◆◇◆◇　夏季休暇のご案内　◆◇◆◇</center><br />
誠に勝手ながら、2018年8月13日（月）～ 2018年8月16日（木）は休業させていただきます。<br />
通常営業は、8月17日（金）からとなります。<br />
休暇中にいただいたお問い合わせについては、通常営業日より順次対応させていただきますので、ご了承ください。<br />
今後も変わらぬご愛顧をどうぞよろしくお願いいたします。
</div>



		<!-- ======================バナーここから======================= -->

		<div class="mb20"><a href="/shindan"><img src="<?php bloginfo('template_url'); ?>/page_image/top/bnr_20th.jpg" width="730" height="330" alt="20周年記念キャンペーン" /></a></div>

		<div class="mb20"><a href="/riyu"><img src="<?php bloginfo('template_url'); ?>/page_image/top/bnr_riyu2.jpg" width="730" height="300" alt="東海工芸が選ばれる8つの理由" class="img_over" /></a></div>
		<div><a href="/yakusoku"><img src="<?php bloginfo('template_url'); ?>/page_image/top/bnr_yakusoku.jpg" width="730" alt="東海工芸は必ず守ります！お客様満足度100%のための６つのお約束" class="img_over" /></a></div>
		<div class="mb20"><a href="/wb_tasai"><img src="<?php bloginfo('template_url'); ?>/page_image/top/bnr_wbtasai_new.jpg" width="730" height="317" alt=" WB多彩仕上工法" class="img_over" /></a></div>


<div class="index_bnr mb20 mr20"><a href="/shiharai"><img src="<?php bloginfo('template_url'); ?>/page_image/top/bnr_aeon.jpg" width="355" height="200" alt="分割ローンで支払い可能" class="img_over mb20" /></a><br />
<a href="/apart"><img src="<?php bloginfo('template_url'); ?>/page_image/top/bnr_apart.jpg" width="355" height="200" alt="アパート・マンション塗装" class="img_over" /></a></div>


<div class="index_bnr mb20"><a href="/line"><img src="<?php bloginfo('template_url'); ?>/page_image/top/bnr_line.jpg" width="355" height="200" alt="LINEでアドバイス" class="img_over mb20" /></a><br />
<a href="/kushitsu"><img src="<?php bloginfo('template_url'); ?>/page_image/top/bnr_kushitsu.jpg" width="355" height="200" alt="家賃保証＋外壁塗装で空室リスクなしの賃貸運営を！" class="img_over" /></a></div>

		<!-- こだわりをもって今年で設立20年 -->
<div class="renewbnr"><img src="<?php bloginfo('template_url'); ?>/page_image/top/top_aisatu2.jpg" width="730" height="406" alt="みなさまに支えられて20年" ></div>


			<!-- <div class="index_bnr mb20 mr20"><a href="/first"><img src="<?php bloginfo('template_url'); ?>/page_image/top/main_bnr_left.png" width="355" height="140" alt="まず初めにお読みください。　東海工芸が選ばれている理由とは？" class="img_over" /></a></div>
		<div class="index_bnr mb20"><a href="/point"><img src="<?php bloginfo('template_url'); ?>/page_image/top/main_bnr_right.png" width="355" height="139" alt="既に他社からお見積もりを取られている方へ。　契約前に確認したい業者選びの7つのポイント。" class="img_over" /></a></div> -->
		<!-- ======================バナーここから======================= -->

<!-- ===================== 早わかり施工事例 ここから ===================== -->
<div id="top_seko">

<img src="<?php bloginfo('template_url'); ?>/page_image/top/title_hayawakari_new2.png" class="mb15" alt="早わかり施工事例" />
          <div class="underbox">

          <?php $args = array(
                'tax_query' => array(
                    array(
			'taxonomy' => 'seko_cat', //タクソノミーを指定
			'field' => 'slug', //ターム名をスラッグで指定する
			'terms' => array( 'hayawakari' ) //表示したいタームをスラッグで指定
            ),
        ),
        'post_type' => 'seko', //カスタム投稿名
	'posts_per_page' => 15 /* 件数表示 */
			); ?>
	<?php query_posts( $args ); ?>
	<?php if (have_posts()) : ?>
	<?php $seko_i = 1; ?>
	<?php while (have_posts()) : the_post();
	/* ループ開始 */ ?>

					<div class="box">
                    <a href="<?php the_permalink() ?>">
					<div class="pic">



        <?php global $post;
		$Tokuchou = get_post_meta($post->ID,'seko_sekomachi');
		if(in_array("大満足",$Tokuchou)):?><div class="stamp"><img src="<?php bloginfo('template_url'); ?>/page_image/top/icon_manzoku.png" width="67" height="67" alt="大満足"></div><?php endif;?>
		<?php if(in_array("ありがとう",$Tokuchou)):?><div class="stamp"><img src="<?php bloginfo('template_url'); ?>/page_image/top/icon_arigatou.png" width="67" height="67" alt="ありがとう"></div><?php endif;?>
		<?php if(in_array("完工",$Tokuchou)):?><div class="stamp"><img src="<?php bloginfo('template_url'); ?>/page_image/top/icon_kankou.png" width="67" height="67" alt="完工"></div><?php endif;?>
		<?php if(in_array("施工待ち",$Tokuchou)):?><div class="stamp"><img src="<?php bloginfo('template_url'); ?>/page_image/top/icon_sekomachi.png" width="67" height="67" alt="施工待ち"></div><?php endif;?>
		<?php if(in_array("施工中",$Tokuchou)):?><div class="stamp"><img src="<?php bloginfo('template_url'); ?>/page_image/top/icon_sekochu.png" width="67" height="67" alt="施工中"></div><?php endif;?>


                    <?php
								printf(
									'%s',
									gr_get_image(
										'seko_after_image',
										array( 'width' => 230, 'alt' => esc_attr( post_custom( 'seko_comment' ) ) )
									)
								);
								?>

<?php if(get_post_meta($post->ID,'seko_csv2',true)): ?>
<img src="<?php echo site_url(); ?>/wp-content/themes/gaiheki/page_image<?php echo post_custom('seko_csv2') ?>" class="img" width="230" />
<?php endif ?>

<?php
$days=7; //NEWをつける日数
$today=date_i18n('U');
$entry=get_the_time('U');
$sa=date('U',($today - $entry))/86400;
  if( $days > $sa ){
  echo "\n" . '<div class="new"><img src="/wp-content/themes/gaiheki/page_image/top/new.png"></div>' . "\n";
  }
?>

</div>

        <?php global $post;
		$Tokuchou = get_post_meta($post->ID,'seko_infoicon', false);
		if(in_array("HPからのお問い合わせ",$Tokuchou)):?><div class="btn_hp"><img src="<?php bloginfo('template_url'); ?>/page_image/top/icon_hp.png" width="101" height="22" alt="HPからのお問い合わせ" /></div><?php endif;?>
		<?php if(in_array("クチコミご紹介",$Tokuchou)):?><div class="btn_kuchikomi"><img src="<?php bloginfo('template_url'); ?>/page_image/top/icon_kuchi.png" width="101" height="22" alt="クチコミご紹介" /></div><?php endif;?>
		<?php if(in_array("インタビューあり",$Tokuchou)):?><div class="btn_int"><img src="<?php bloginfo('template_url'); ?>/page_image/top/icon_int.png" width="101" height="22" alt="インタビューあり" /></div><?php endif;?>
		<?php if(in_array("ジョイントエンペラー使用",$Tokuchou)):?><div class="btn_je"><img src="<?php bloginfo('template_url'); ?>/page_image/top/icon_je.png" width="101" height="22" alt="ジョイントエンペラー使用" /></div><?php endif;?>
        <?php if(in_array("フッ素塗料",$Tokuchou)):?><div class="btn_fusso"><img src="<?php bloginfo('template_url'); ?>/page_image/top/icon_fusso.png" width="101" height="22" alt="フッ素塗料" /></div><?php endif;?>
		<?php if(in_array("光触媒塗料",$Tokuchou)):?><div class="btn_hikari"><img src="<?php bloginfo('template_url'); ?>/page_image/top/icon_hikari.png" width="101" height="22" alt="光触媒塗料" /></div><?php endif;?>
        
        <p class="tit"><?php the_title(); ?></p>

        <span class="name"><?php echo post_custom( 'seko_city' ); ?>　<?php echo post_custom( 'seko_name' ); ?></span>
		<span class="new"><?php if( post_custom('seko_newicon') ){?>
		<img src="<?php bloginfo('template_url'); ?>/page_image/top/icon_new.gif" width="30" height="10" alt="new" /><? } ?></span>
		</a>
        </div>

<?php
$seko_i++; //最後にループ回数を一つ進める
?>
<?php endwhile; ?>


<?php else : ?>
<p class="center nocontents">現在準備中です</p>
<?php endif; ?>
<?php wp_reset_query(); ?>
<div class="more"><a href="/seko"><img src="<?php bloginfo('template_url'); ?>/page_image/top/top_more.jpg" width="654" height="60" alt="すべての施工事例を見る" class="img_over"/></a></div>
</div>
</div>
<!-- ======================== 早わかり施工事例 ここまで ================================ -->


<!-- ========================================================お客様の声 ここから -->
<div id="top_seko" class="top_voice">
				<img src="<?php bloginfo('template_url'); ?>/page_image/top/title_voice_new2.png" class="mb15" alt="お客様の声" />

          <div class="underbox">
          <?php $args = array(
			'post_type' => 'voice', /* 投稿タイプ */
			'paged' => $paged,
			'posts_per_page' => 3 /* 件数表示 */
			); ?>
	<?php query_posts( $args ); ?>
	<?php if (have_posts()) : ?>
	<?php $seko_i = 1; ?>
	<?php while (have_posts()) : the_post();
	/* ループ開始 */ ?>

<div class="box">
<a href="<?php the_permalink() ?>">

<div class="pic">
<?php if(post_custom( 'voice_image')):
$imagefield = get_imagefield( 'voice_image' );
						$thumb = wp_get_attachment_image_src( $imagefield[ 'id' ], 'large' );
						printf(
							'%2$s',
							$thumb[ 0 ],
							gr_get_image(
								'voice_image',
								array(
									'width' => 230,
								)
							),
							get_the_title()
						);?>
						<?
						else:
						?>
						<?php
						$imagefield = get_imagefield( 'voice_image01' );
						$thumb = wp_get_attachment_image_src( $imagefield[ 'id' ], 'large' );
						printf(
							'%2$s',
							$thumb[ 0 ],
							gr_get_image(
								'voice_image01',
								array(
									'width' => 230,
								)
							),
							get_the_title()
						);
						?>
						<!--インポート用画像1-->
						<?php if ( post_custom('voice_csv1') ) : ?>
						<img src="<?php echo site_url(); ?>/wp-content/themes/gaiheki/page_image<?php echo post_custom('voice_csv1') ?>">
						<?php endif ?>
						<!--インポート用画像1-->
						<?php endif; ?>



</div><!-- //.pic -->
<p class="tit"><?php the_title(); ?></p>

</a></div>

<?php
$seko_i++; //最後にループ回数を一つ進める
?>
<?php endwhile; ?>
          <div class="more"><a href="/voice"><img src="<?php bloginfo('template_url'); ?>/page_image/top/topvoice_more.png" width="225" height="30" alt="すべてのお客様の声を見る" class="img_over"/></a></div>
<?php else : ?>
<p class="center nocontents">現在準備中です</p>
<?php endif; ?>
<?php wp_reset_query(); ?>

          </div>
          </div>
<!-- ========================================================お客様の声 ここまで -->




<!-- ======================現場レポート　ここから======================= -->
<div id="top_blog">
<div class="box_genba">
	<h2>現場レポート</h2>
<div class="inner"><ul>
<?php
$the_query = new WP_Query();
$args = array(
	'post_type' => 'blog',
	'posts_per_page' => 3, /* 件数表示 */
	'tax_query' => array(
		array(
			'taxonomy' => 'blog_cat',
			'field' => 'slug',
			'terms' => 'genba',
		)
	)
);
$the_query->query($args);
if($the_query->have_posts()): while($the_query->have_posts()) : $the_query->the_post();
?>
<li>
	<a href="<?php the_permalink(); ?>"><p class="blog_img"><img src="<?php echo catch_that_image(); ?>" alt=""></p>
	<span class="tit"><? the_title(); ?> <? the_time('Y.n.j'); ?></span></a></li>


<?php endwhile; ?>
<?php else : ?>
<p class="center nocontents">現在準備中です</p>
<?php endif; ?>
<?php wp_reset_query(); ?>

</ul>
</div>
<div class="more"><a href="/blog_cat/genba"><img src="<?php bloginfo('template_url'); ?>/page_image/top/topblog_more.png" width="225" height="30" alt="一覧を見る" /></a></div>
</div>
<!-- ======================現場レポート　ここから======================= -->


<!-- ======================ブログ　ここから======================= -->
<div class="box_l">
	<h2>社長ブログ</h2>
<div class="inner"><ul>
<?php
$the_query = new WP_Query();
$args = array(
	'post_type' => 'blog',
	'posts_per_page' => 2, /* 件数表示 */
	'taxonomy' => 'blog_cat',
	'term' => 'presi',
);
$the_query->query($args);
if($the_query->have_posts()): while($the_query->have_posts()) : $the_query->the_post();
?>
<li>
	<a href="<?php the_permalink(); ?>">
	<p class="blog_img"><img src="<?php echo catch_that_image(); ?>" alt=""></p>
	<span class="tit"><? the_title(); ?> <? the_time('Y.n.j'); ?></span><br />
	<span class="txt"><?php echo mb_substr(strip_tags($post-> post_content),0,30); echo $content. ･･･ ; ?></span></a>
</li>
<?php endwhile; ?>
</ul>
	<div class="more"><a href="/blog_cat/presi"><img src="<?php bloginfo('template_url'); ?>/page_image/top/topblog_more.png" width="225" height="30" alt="一覧を見る" /></a></div>
<?php else : ?>
<p class="center nocontents">現在準備中です</p>
<?php endif; ?>
<?php wp_reset_query(); ?>
</div>
</div>

<!--  スタッフブログ  -->
<div class="box_r">
	<h2>スタッフブログ</h2>
<div class="inner">
<ul>
<?php
$the_query = new WP_Query();
$args = array(
	'post_type' => 'blog',
	'posts_per_page' => 2, /* 件数表示 */
	'tax_query' => array(
		array(
			'taxonomy' => 'blog_cat',
			'field' => 'slug',
			'terms' => array( 'genba','presi' ),
			'operator'  => 'NOT IN'
		)
	)
);
$the_query->query($args);
if($the_query->have_posts()): while($the_query->have_posts()) : $the_query->the_post();
?>

<li>
	<a href="<?php the_permalink(); ?>">
	<p class="blog_img"><img src="<?php echo catch_that_image(); ?>" alt=""></p>
	<span class="tit"><? the_title(); ?> <? the_time('Y.n.j'); ?></span><br />
	<span class="txt"><?php echo mb_substr(strip_tags($post-> post_content),0,30); echo $content. ･･･ ; ?></span></a>
</li>
<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>

</ul>
</div>
	<div class="more"><a href="/blog"><img src="<?php bloginfo('template_url'); ?>/page_image/top/topblog_more.png" width="225" height="30" alt="一覧を見る" /></a></div>
</div>


</div>

<!-- ======================ブログ　ここまで======================= -->





<!-- ======================バナーここから=======================
<div class="index_bnr mb15 mr20"><a href="<?php bloginfo('template_url'); ?>/seko"><img src="<?php bloginfo('template_url'); ?>/page_image/top/bnr_kakaku.jpg" width="355" height="131" alt="適性価格の見分け方がわかる！塗り替えリフォーム価格表" class="img_over"/></a></div>
<div class="index_bnr mb15"><a href="<?php bloginfo('template_url'); ?>/seko"><img src="<?php bloginfo('template_url'); ?>/page_image/top/bnr_hikaku.jpg" width="355" height="131" alt="価格と機能でわかる！塗料比較" class="img_over"/></a></div>
 ======================バナーここから======================= -->

<?php gr_kaiyu(); ?>
<?php gr_contact_banner(); ?>

</div>
<!-- ========================================================右コンテンツ ここまで -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
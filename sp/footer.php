<!--	==================フッター-->
<footer id="foot"> <a href="#head" class="go_top"><img src="<?php echo get_template_directory_uri(); ?>/images/foot/go_top.svg" alt="トップへ戻る" width="32" height="32"></a>

 


  <div class="com_info inner">
    <p class="logo"><img src="<?php echo get_template_directory_uri(); ?>/images/foot/logo.png" alt="東海工芸" width="314" height="130"></p>
    <p class="add">〒468-0014<br>
      名古屋市天白区中平3-804</p>
</div>
<br clear="all">
  <div class="img_area inner">
    <!--<p class="ginoushi"><img src="<?php // echo get_template_directory_uri(); ?>/images/foot/ginoushi.png" alt="塗装一級技能士" width="324" height="249"></p>-->
    <p class="license"><img src="<?php echo get_template_directory_uri(); ?>/images/foot/license.png" alt="許可証" width="324" height="249"></p>
    <p class="map"><img src="<?php echo get_template_directory_uri(); ?>/images/foot/map.png" alt="マップ" ></p>
  </div>
  <!--<p class="foot_bnr"><img src="<?php // echo get_template_directory_uri(); ?>/images/foot/bengo.png" alt="顧問弁護士　敦賀昭代" width="610" height="250"/></p>-->
<!--<a href="/maintenance_contact" class="maintenance_btn">お客様専用窓口</a>-->
    
  <div class="area">
    <p class="tit">【施工エリア】</p>
    <p class="detail">会社の所在地を中心に愛知県内はもちろん、近隣岐阜県、三重県も場合に応じてご対応致します。<br>
      愛知県<br>
      名古屋市（天白区、北区、昭和区、千種区、中区、中川区、西区、東区、瑞穂区、緑区、南区、港区、名東区、守山区）、愛西市、あま市、安城市、一宮市、稲沢市、大府市、岡崎市、尾張旭市、春日井市、刈谷市、北名古屋市、清須市、江南市、小牧市、瀬戸市、高浜市、知多市、知立市、津島市、東海市、常滑市、豊明市、豊田市、長久手市、西尾市、日進市、半田市、碧南市、みよし市、弥富市、東郷町、大治町、蟹江町、阿久比町、美浜町、扶桑町<br>
      岐阜県<br>
      多治見市、土岐市、可児市<br>
      三重県<br>
      四日市市、鈴鹿市、桑名市、東員町、川越町、菰野町<br>
      ※車で１時間以内で行ける地域を対象にしています。<br>
      上記以外のエリアは、ご相談窓口よりお問合せください。</p>
  </div>
</footer>
  <p class="pc-switcher">
	  <a href="?pc-switcher=1" class="switch_btn more_btn2">PCサイトを表示する</a>
  </p>

<p class="copyright">Copyright &copy;2017東海工芸. All Rights Reserved.</p>
<script src="<?php echo get_template_directory_uri(); ?>/js/menu.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/lightbox.js"></script>
<?php if ( is_home() || is_front_page() ) : ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/slick.min.js"></script> 
<script>
// JavaScript Document
	$(function() {
		$('.slide_inner').slick({
			dots: true,
			arrows: false,
			infinite: true,
			autoplay: true,
			speed: 300,
		});
});
</script>
<?php endif; ?>
<?php wp_footer(); ?>
</body>
</html>

<footer>
  <div class="ft_nav">
    <nav>
      <ul>
        <li>
          <a href="/category/sapporo_wedding/">
            <p class="category">札幌ウェディング</p>
            <p class="en">SAPPORO</p>
          </a>
        </li>
        <li>
          <a href="/category/muroran_wedding/">
            <p class="category">室蘭ウェディング</p>
            <p class="en">MURORAN</p>
          </a>
        </li>
        <li>
          <a href="/category/hakodate_wedding/">
            <p class="category">函館ウェディング</p>
            <p class="en">HAKODATE</p>
          </a>
        </li>
        <li>
          <a href="/category/tomakomai_wedding/">
            <p class="category">苫小牧ウェディング</p>
            <p class="en">TOMAKOMAI</p>
          </a>
        </li>
        <li>
          <a href="/category/other/">
            <p class="category">その他</p>
            <p class="en">OTHER</p>
          </a>
        </li>
      </ul>
    </nav>
  </div>
  <div class="ft_logo">
    <p>札幌・室蘭・函館・苫小牧の結婚情報サイト</p>
    <p class="logo">
      <a href="/">
        <img src="<?php bloginfo('template_directory'); ?>/common/images/logo_white.svg" alt="logoキタコイ">
      </a>
    </p>
  </div>
  <div class="ft_sns">
    <div>
      <a href="https://www.instagram.com/kita_koi/" target="_blank">
        <img src="<?php bloginfo('template_directory'); ?>/common/images/insta_white.svg" alt="Instagramアイコン">
      </a>
    </div>
    <div>
      <a href="https://twitter.com/kita_koi" target="_blank">
        <img src="<?php bloginfo('template_directory'); ?>/common/images/tw_white.svg" alt="Twitterアイコン">
      </a>
    </div>
  </div>
  <div class="ft_bottom">
    <ul>
      <li><a href="/info/">運営会社</a></li>
      <li><a href="/privacy-policy/">プライバシーポリシー</a></li>
      <li>
        <a href="https://docs.google.com/forms/d/e/1FAIpQLSeTxqhT5M2aFkvGTCjwXOYULK5K9F5FuAT92HobinFXG84sGQ/viewform">お問い合わせ</a>
      </li>
      <li><a href="/sitemap/">サイトマップ</a></li>
    </ul>
    <p>Copyright(C) KITAKOI All Rights Reserved.</p>
  </div>
</footer>



<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/common/js/jquery.fatNav.min.js" type="text/javascript"></script>

<script type="text/javascript">
  const swiper = new Swiper(".swiper", {
    spaceBetween: 50,
    pagination: {
      el: ".swiper-pagination"
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev"
    }
  });

  $(function() {
    var topBtn = $('.flow_bnr, .flow_bnr_sp');
    topBtn.hide();
    //スクロールが300に達したらボタン表示
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            topBtn.fadeIn();
        } else {
            topBtn.fadeOut();
        }
    });
    // スクロールしてトップ
    topBtn.click(function () {
        $('body,html,').animate({
            scrollTop: 0
        }, 500);
        return false;
    });
  });

  $(function() {
    $(".A").click(function() {
        $(".B").toggleClass("C");
    });
  });

  (function() {
    $.fatNav();
  }());

  $(document).ready(function () {
    // 各 .bnr_ange_sapporo 要素に対して処理を実行
    $(".bnr_ange_sapporo").each(function () {
      // 新しい要素を生成
      var newBanner = $('<div class="bnr_ceremonyhall"><p>札幌の式場詳細はこちら⬇︎</p><div><a href="https://www.bellclassic.co.jp/hokkaidou/lavert/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/common/images/bnr_ange_sapporo.png" alt="アールベルアンジェ札幌バナー"></a></div></div>');
      // 現在の .bnr_ange_sapporo 要素の直後に追加
      $(this).after(newBanner);
    });
  });

  $(document).ready(function () {
    // 各 .bnr_ange_muroran 要素に対して処理を実行
    $(".bnr_ange_muroran").each(function () {
      // 新しい要素を生成
      var newBanner02 = $('<div class="bnr_ceremonyhall"><p>室蘭の式場詳細はこちら⬇︎</p><div><a href="https://www.bellclassic.co.jp/hokkaidou/muroran/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/common/images/bnr_ange_muroran.png" alt="アールベルアンジェ室蘭バナー"></a></div></div>');
      // 現在の .bnr_ange_muroran 要素の直後に追加
      $(this).after(newBanner02);
    });
  });

  $(document).ready(function () {
    // 各 .bnr_hokkaido_single 要素に対して処理を実行
    $(".bnr_hokkaido_single").each(function () {
      // 新しい要素を生成
      var newBanner03 = $('<div class="bnr_ceremonyhall_hokkaido"><div><a href="https://www.otokucon.jp/hokkaido/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/common/images/bnr_single_hokkaido.png" alt="北海道結婚式プレゼント" class="pc"><img src="<?php bloginfo('template_url'); ?>/common/images/bnr_single_hokkaido_sp.png" alt="北海道結婚式プレゼント" class="sp"></a></div></div>');
      // 現在の .bnr_hokkaido_single 要素の直後に追加
      $(this).after(newBanner03);
    });
  });
</script>
<?php wp_footer(); ?>
</body>
</html>

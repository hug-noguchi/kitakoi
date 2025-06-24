<!doctype html>
<html>
<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TRSXT7R');</script>
<!-- End Google Tag Manager -->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta name="format-detection" content="telephone=no">
<title>
  <?php $url = $_SERVER['REQUEST_URI']; ?>
  <?php if($url == "/news/" ) { ?>
    記事一覧｜キタコイ
  <?php } else if ($url == "/category/<?php the_category(); ?>" ){ ?>
    <?php the_category(); ?>｜キタコイ
  <?php } else if ($url == "/category/<?php the_title(); ?>" ){ ?>
    <?php the_title(); ?>｜キタコイ
  <?php } else if ($url == "/privacy-policy/" ){ ?>
    プライバシーポリシー｜キタコイ
  <?php } else if ($url == "/info/" ){ ?>
    運営会社｜キタコイ
  <?php } else { ?>
    キタコイ
  <?php } ?>
</title>

<meta name="description" content="『キタ・コイ』は、“北の恋は、本気の恋”をテーマに、
カップルに向けた北海道の場所やモノ、コト、 美味しい食べ物を紹介するカルチャーコミュニティです。">
<meta name="keywords" content="キタコイ">

<link rel="SHORTCUT ICON" href="<?php bloginfo('template_url'); ?>/common/images/favicon.ico">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/common/scss/reset.css" media="all">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/common/scss/style.css" media="all">
<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/common/scss/jquery.fatNav.min.css">

<?php wp_head(); ?>
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TRSXT7R"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<header>
  <div class="hd_box pc">
    <div class="hd_left">
      <p>札幌・室蘭・函館・苫小牧の結婚情報サイト</p>
      <p class="logo">
        <a href="/">
          <img src="<?php bloginfo('template_directory'); ?>/common/images/logo_gray.svg" alt="キタコイ">
        </a>
      </p>
    </div>
    <div>
      <nav class="header-nav">
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
    <div class="hd_right">
      <div>
        <?php get_search_form(); ?>
      </div>
      <div class="icon_insta">
        <a href="https://www.instagram.com/kita_koi/" target="_blank">
          <img src="<?php bloginfo('template_directory'); ?>/common/images/insta.svg">
        </a>
      </div>
      <div>
        <a href="https://twitter.com/kita_koi" target="_blank">
          <img src="<?php bloginfo('template_directory'); ?>/common/images/tw.svg">
        </a>
      </div>
    </div>
  </div>

  <div class="sp">
    <div class="hd_box">
      <div class="hd_left">
        <p>札幌・室蘭・函館・苫小牧の結婚情報サイト</p>
        <p class="logo">
          <a href="/">
            <img src="<?php bloginfo('template_directory'); ?>/common/images/logo_gray.svg" alt="キタコイ">
          </a>
        </p>
      </div>

      <div class="hd_search">
        <img src="<?php bloginfo('template_directory'); ?>/common/images/search.svg" alt="検索アイコン" class="icon_search A">
        <div class="B">
          <?php get_search_form(); ?>
          <div class="sample-popup-background"></div>
        </div>
      </div>

      <div class="fat-nav">
        <nav class="header-nav fat-nav__wrapper">
          <div class="fat-nav_box">
            <div class="fat-nav_detail">
              <p>札幌・室蘭・函館・苫小牧の結婚情報サイト</p>
              <p class="fat-logo">
                <a href="/">
                  <img src="<?php bloginfo('template_directory'); ?>/common/images/logo_gray.svg" alt="キタコイ">
                </a>
              </p>
            </div>
            <div class="hd_search">
              <img src="<?php bloginfo('template_directory'); ?>/common/images/search.svg" alt="検索アイコン" class="icon_search A">
              <div class="B">
                <?php get_search_form(); ?>
                <div class="sample-popup-background"></div>
              </div>
            </div>
          </div>
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
            <li class="icon_sns">
              <div class="icon_insta">
                <a href="https://www.instagram.com/kita_koi/" target="_blank">
                  <img src="<?php bloginfo('template_directory'); ?>/common/images/insta.svg">
                </a>
              </div>
              <div>
                <a href="https://twitter.com/kita_koi" target="_blank">
                  <img src="<?php bloginfo('template_directory'); ?>/common/images/tw.svg">
                </a>
              </div>
            </li>
          </ul>
        </nav>
      </div>
    </div>
    <div id="breadcrumb" class="breadcrumb_toukou">
      <?php $url = $_SERVER['REQUEST_URI']; ?>
      <ul>
        <li><a href="/">TOP</a>　>　</li>
        <li>
          <?php
            $cat = get_the_category();
            $cat = $cat[0];
          ?>
          <?php if($url == "/news/" ) { ?>
            <p>記事一覧</p>
          <?php } else if ($url == "/category/<?php the_title(); ?>" ){ ?>
            <p><?php the_category(); ?>　>　<?php the_title(); ?></p>
          <?php } else if ($url == "/privacy-policy/" ){ ?>
            <p>プライバシーポリシー</p>
          <?php } else if ($url == "/info/" ){ ?>
            <p>運営会社</p>
          <?php } else if ($url == "/sitemap/" ){ ?>
          <p>サイトマップ</p>
          <?php } else { ?>
            <p><?php echo $cat->cat_name; ?></p>
          <?php } ?>
        </li>
      </ul>
    </div>
  </div>

  <div id="breadcrumb" class="breadcrumb_toukou pc">
    <?php $url = $_SERVER['REQUEST_URI']; ?>
    <ul>
      <li><a href="/">TOP</a>　>　</li>
      <li>
        <?php
          $cat = get_the_category();
          $cat = $cat[0];
        ?>
        <?php if($url == "/news/" ) { ?>
          <p>記事一覧</p>
        <?php } else if ($url == "/category/<?php the_title(); ?>" ){ ?>
          <p><?php the_category(); ?>　>　<?php the_title(); ?></p>
        <?php } else if ($url == "/privacy-policy/" ){ ?>
          <p>プライバシーポリシー</p>
        <?php } else if ($url == "/info/" ){ ?>
          <p>運営会社</p>
        <?php } else if ($url == "/sitemap/" ){ ?>
          <p>サイトマップ</p>
        <?php } else { ?>
          <p><?php echo $cat->cat_name; ?></p>
        <?php } ?>
      </li>
    </ul>
  </div>

</header>

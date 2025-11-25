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
<?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post(); ?>
  <title><?php the_title(); ?>｜キタコイ</title>
  <?php endwhile;?>
<?php endif; ?>
<?php
  $meta_description = get_post_meta( get_the_ID(), 'description', true );
  if ( ! $meta_description ) {
      $meta_description = trim(
          preg_replace('/\s+/u', ' ', get_the_title() . '｜' . wp_strip_all_tags( get_the_excerpt() ))
      );
  }
?>
<meta name="description" content="<?php echo esc_attr( $meta_description ); ?>">
<link rel="SHORTCUT ICON" href="<?php bloginfo('template_url'); ?>/common/images/favicon.ico">
<script type="application/ld+json">
<?php
    $id = get_permalink();
    $title = get_the_title();
    $image = get_the_post_thumbnail_url(null, 'full');
    $published = get_the_date('Y-m-d');
    $modified = get_the_modified_date('Y-m-d');

    // ▼ カスタムフィールド description を取得
    $custom_description = get_post_meta(get_the_ID(), 'description', true);

    // ▼ 未入力の場合は fallback（抜粋 30語）
    if ( $custom_description ) {
        $description = $custom_description;
    } else {
        $description = wp_trim_words(strip_tags(get_the_excerpt()), 30, '...');
    }

    echo json_encode([
        "@context" => "https://schema.org",
        "@type" => "BlogPosting",
        "mainEntityOfPage" => ["@type" => "WebPage", "@id" => $id],
        "headline" => $title,
        "image" => $image,
        "datePublished" => $published,
        "dateModified" => $modified,
        "author" => [
            "@type" => "Person",
            "name" => "トイ"
        ],
        "publisher" => [
            "@type" => "Organization",
            "name" => "キタコイ",
            "logo" => [
                "@type" => "ImageObject",
                "url" => "https://www.kitakoi.info/wp-content/themes/kitakoi_new/common/images/logo_gray.svg"
            ]
        ],
        "description" => $description
    ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
?>
</script>
<script type="application/ld+json">
<?php
// パンくずリスト用の配列を作成
$itemListElement = [];

// 1階層目：HOME
$itemListElement[] = [
    "@type"    => "ListItem",
    "position" => 1,
    "name"     => "HOME",
    "item"     => home_url( '/' ),
];

// 投稿ページの場合のみ、カテゴリ＋記事タイトルを追加
if ( is_single() ) {

    // カテゴリ取得（先頭の1つを使用）
    $categories = get_the_category();
    if ( ! empty( $categories ) ) {
        $cat = $categories[0];

        // 2階層目：カテゴリ
        $itemListElement[] = [
            "@type"    => "ListItem",
            "position" => 2,
            "name"     => $cat->name,                 // パンくずのカテゴリー名
            "item"     => get_category_link( $cat->term_id ), // カテゴリーURL
        ];
    }

    // 3階層目：記事
    $itemListElement[] = [
        "@type"    => "ListItem",
        "position" => count( $itemListElement ) + 1, // 2 or 3 になる
        "name"     => get_the_title(),               // 記事タイトル
        "item"     => get_permalink(),               // 記事URL
    ];
}

// schema.org 用の配列をまとめる
$breadcrumb_json = [
    "@context"        => "https://schema.org",
    "@type"           => "BreadcrumbList",
    "itemListElement" => $itemListElement,
];

// JSONとして出力
echo json_encode(
    $breadcrumb_json,
    JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT
);
?>
</script>
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
<header id="single_header">
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
            <img src="<?php bloginfo('template_directory'); ?>/common/images/search.svg" alt="検索アイコン" class="icon_search A">
            <div class="B">
              <?php get_search_form(); ?>
              <div class="sample-popup-background"></div>
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
        <li><?php the_category(); ?>　>　</li>
        <li><?php the_title(); ?></li>
      </ul>
    </div>
  </div>

  <div id="breadcrumb" class="breadcrumb_toukou pc">
    <?php $url = $_SERVER['REQUEST_URI']; ?>
    <ul>
      <li><a href="/">TOP</a>　>　</li>
      <li><?php the_category(); ?>　>　</li>
      <li><?php the_title(); ?></li>
    </ul>
  </div>
</header>

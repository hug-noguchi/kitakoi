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
<title>北海道の自己負担0円からの結婚式場探し｜キタコイ</title>
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

<style>
  #pagination h2 {
    display: none;
  }
</style>

<header class="top_header">
  <div class="hd_box pc">
    <div class="hd_left">
      <p>札幌・室蘭・函館・苫小牧の結婚情報サイト</p>
      <h1 class="logo">
        <a href="/">
          <img src="<?php bloginfo('template_directory'); ?>/common/images/logo_gray.svg" alt="キタコイ">
        </a>
      </h1>
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
      <div class="icon_tw">
        <a href="https://twitter.com/kita_koi" target="_blank">
          <img src="<?php bloginfo('template_directory'); ?>/common/images/tw.svg">
        </a>
      </div>
    </div>
  </div>
  <div class="swiper pc">
    <div class="swiper-wrapper">
      <?php
        $loop = new WP_Query(array(
          'post_type' => 'post',
          'posts_per_page' => 4
        ));
      ?>
      <?php
        while ($loop->have_posts()) : $loop->the_post();
      ?>
      <div class="swiper-slide">
        <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?= $post->post_title; ?>">
          <figure>
            <?php echo get_the_post_thumbnail( $post_id, 'full', array( 'class' => 'photo' ) ); ?>
          </figure>
          <div class="text-block">
            <div class="meta-block">
              <p><span class="date"><?php the_time('Y.m.d'); ?>｜</span></p>
              <p class="ctegory-name"><?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?></p>
            </div>
            <p class="post-title"><?php echo $post->post_title; ?></p>
            <p class="readmore"><span>Read more</span></p>
          </div>
        </a>
      </div>
      <?php
      endwhile;
      wp_reset_query();
      ?>
    </div>
    <div class="swiper-pagination"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
  </div>
  <div class="sp">
    <div class="hd_box">
      <div class="hd_left">
        <p>札幌・室蘭・函館・苫小牧の結婚情報サイト</p>
        <h1 class="logo">
          <a href="/">
            <img src="<?php bloginfo('template_directory'); ?>/common/images/logo_gray.svg" alt="キタコイ">
          </a>
        </h1>
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
              <h1 class="fat-logo">
                <a href="/">
                  <img src="<?php bloginfo('template_directory'); ?>/common/images/logo_gray.svg" alt="キタコイ">
                </a>
              </h1>
            </div>
            <img src="<?php bloginfo('template_directory'); ?>/common/images/search.svg" alt="検索アイコン" class="icon_search">
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
    <div class="swiper">
      <div class="swiper-wrapper">
        <?php
          $loop = new WP_Query(array(
            'post_type' => 'post',
            'posts_per_page' => 4
          ));
        ?>
        <?php
          while ($loop->have_posts()) : $loop->the_post();
        ?>
        <div class="swiper-slide">
          <figure>
            <a href="<?php the_permalink(); ?>" class="photo_link">
              <?php echo get_the_post_thumbnail( $post_id, 'full', array( 'class' => 'photo' ) ); ?>
            </a>
          </figure>
          <div class="text-block">
            <div class="meta-block">
              <p><span class="date"><?php the_time('Y.m.d'); ?>｜</span></p>
              <?php the_category(); ?>
            </div>
            <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?= $post->post_title; ?>">
              <?php echo $post->post_title; ?>
            </a>
            <p class="readmore"><a href="<?php get_post(); ?>">Read more</a></p>
          </div>
        </div>
        <?php
        endwhile;
        wp_reset_query();
        ?>
      </div>
      <div class="swiper-pagination"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
    </div>
  </div>
</header>
<div class="flow_bnr pc">
  <div>
    <a href="https://www.otokucon.jp/hokkaido/" target="_blank">
      <img src="<?php bloginfo('template_directory'); ?>/common/images/bnr_hokkaido.png" alt="北海道結婚式プレゼント">
    </a>
  </div>
</div>
<div class="flow_bnr_sp sp">
  <div>
    <a href="https://www.otokucon.jp/hokkaido/" target="_blank">
      <img src="<?php bloginfo('template_directory'); ?>/common/images/fow_bnr_hokkaido_sp.png" alt="札幌結婚式プレゼント">
    </a>
  </div>
</div>
<main>
  <div class="contents">
    <section id="new">
      <div class="title">
        <h1>What's NEW</h1>
      </div>
      <p class="sub_title">新着記事</p>
      <div class="popular">
        <ul class="wpp-list">
          <?php if ( have_posts() ) : ?>
          <?php while ( have_posts() ) : the_post(); ?>
          <li>
            <a href="<?php the_permalink(); ?>">
              <div class="category">
                <span><?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?></span>
              </div>
              <div class="listImage">
                <?php if ( has_post_thumbnail() ): ?>
                  <?php echo the_post_thumbnail(); ?>
                <?php else: ?>
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/blank_img.jpg" alt="<?php get_the_title(); ?>">
                <?php endif; ?>
              </div>
              <p class="listTitle">
                <?php echo mb_substr( $post->post_title, 0, 24) . '…'; ?>
              </p>
              <p class="txt_01 pc">
                <?php echo wp_trim_words(get_the_content(), 45, '…' ); ?>
              </p>
            </a>
            <div class="tag_box pc">
              <?php
                $i = 0;
                $tags = get_the_tags();
              ?>
              <ul class="tag-list">
                <?php
                  if( $tags ){
                    foreach( $tags as $tag ) {
                      if( $i >= 3 ){
                        break;
                    }
                ?>
                <li>#<?php echo $tag->name; ?></li>
                <?php
                $i++;
                    }
                  }
                ?>
              </ul>
            </div>
            <p class="day">
              <span class="pc">記事公開日：<?php the_time('Y.m.d');?>／最終更新日：<?php the_modified_date('Y.m.d') ?></span>
              <span class="sp">記事公開日：<?php the_time('Y.m.d');?><br>
              最終更新日：<?php the_modified_date('Y.m.d') ?></span>
            </p>
          </li>
          <?php endwhile; ?>
          <?php else : ?>
          <div class="error">
            <p>お探しの記事は見つかりませんでした。</p>
          </div>
          <?php endif; ?>
        </ul>
      </div>
      <div class="more">
        <a href="/">
          <p>MORE</p>
        </a>
      </div>
    </section>
    <?php get_template_part('template/foot'); ?>
    <div id="bnr_otokucon">
      <div class="bnr_otokucon_box">
        <div>
          <a href="https://xn--t8j597j6jd.net/" target="_blank">
            <img src="<?php bloginfo('template_directory'); ?>/common/images/bnr_otokucon_pc.png" class="pc" alt="お得婚「結婚って、おもしろいらしい」">
            <img src="<?php bloginfo('template_directory'); ?>/common/images/bnr_otokucon_sp.png" class="sp" alt="お得婚「結婚って、おもしろいらしい」">
          </a>
        </div>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>

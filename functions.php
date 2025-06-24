<?php

  function post_has_archive( $args, $post_type ) {
    if ( 'post' == $post_type ) {
        $args['rewrite'] = true;
        $args['has_archive'] = 'news'; //スラッグ名
    }
    return $args;
  }
  add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );

  add_theme_support('post-thumbnails');


//レスポンシブなページネーションを作成する
function responsive_pagination($pages = '', $range = 4){
  $showitems = ($range * 2)+1;

  global $paged;
  if(empty($paged)) $paged = 1;

  //ページ情報の取得
  if($pages == '') {
    global $wp_query;
    $pages = $wp_query->max_num_pages;
    if(!$pages){
      $pages = 1;
    }
  }

  if(1 != $pages) {
    echo '<ul class="pagination" role="menubar" aria-label="Pagination">';
    //先頭へ
    echo '<li class="first"><a href="'.get_pagenum_link(1).'"><span>First</span></a></li>';
    //1つ戻る
    echo '<li class="previous"><a href="'.get_pagenum_link($paged - 1).'"><span>Previous</span></a></li>';
    //番号つきページ送りボタン
    for ($i=1; $i <= $pages; $i++)     {
      if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))       {
        echo ($paged == $i)? '<li class="current"><a>'.$i.'</a></li>':'<li><a href="'.get_pagenum_link($i).'" class="inactive" >'.$i.'</a></li>';
      }
    }
    //1つ進む
    echo '<li class="next"><a href="'.get_pagenum_link($paged + 1).'"><span>Next</span></a></li>';
    //最後尾へ
    echo '<li class="last"><a href="'.get_pagenum_link($pages).'"><span>Last</span></a></li>';
    echo '</ul>';
  }
}

  function add_slider_files() {
    //スタイルシートの読み込み
    wp_enqueue_style( 'swiper-style', 'https://unpkg.com/swiper/swiper-bundle.min.css');

    //JavaScript の読み込み
    wp_enqueue_script( 'swiper-js', 'https://unpkg.com/swiper/swiper-bundle.min.js', '', '', true);
  }
  add_action('wp_enqueue_scripts', 'add_slider_files');




  // 記事のPVを取得
function getPostViews($postID) {
  $count_key = 'post_views_count';
  $count = get_post_meta($postID, $count_key, true);
  if ($count=='') {
    delete_post_meta($postID, $count_key);
    add_post_meta($postID, $count_key, '0');
    return "0 View";
  }
  return $count.' Views';
}

// 記事のPVをカウントする
function setPostViews($postID) {
  $count_key = 'post_views_count';
  $count = get_post_meta($postID, $count_key, true);
  if ($count=='') {
    $count = 0;
    delete_post_meta($postID, $count_key);
    add_post_meta($postID, $count_key, '0');
  } else {
    $count++;
    update_post_meta($postID, $count_key, $count);
  }

  // デバッグ start
  // echo '';
  // echo 'console.log("postID: ' . $postID .'");';
  // echo 'console.log("カウント: ' . $count .'");';
  // echo '';
  // デバッグ end
}
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

  // 投稿表示数 //
  function news_posts_per_page($query)
  {
      if (is_admin() || !$query->is_main_query()) {
          return;
      }
      if ($query->is_front_page()) {
          $query->set('posts_per_page', '8');
      }
      if( $query->is_category() ) {
        $query->set('posts_per_page', 12);
      }
      if( $query->is_post_type_archive() ) {
        $query->set('posts_per_page', 10);
      }
  }
  add_action('pre_get_posts', 'news_posts_per_page');


  // 表示オプション
  function theme_setup() {
    add_theme_support('post-show');
  }
  add_action('after_setup_theme', 'theme_setup');

  //本文を読むのにかかる時間
  function get_time_to_content_read($content){
    $count = mb_strlen(strip_tags($content));
    if ($count == 0) {
      return 0;
    }
    $minutes = floor($count / 600) + 1;
    return $minutes;
  }

?>

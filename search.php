<?php get_header('search'); ?>

<div class="flow_bnr pc">
  <div>
    <a href="https://xn--t8j597j6jd.net/lp/ange_sapporo/" target="_blank">
      <img src="<?php bloginfo('template_directory'); ?>/common/images/flow_bnr_sapporo.png" alt="札幌結婚式プレゼント">
    </a>
  </div>
  <div>
    <a href="https://xn--t8j597j6jd.net/lp/hokkaido" target="_blank">
      <img src="<?php bloginfo('template_directory'); ?>/common/images/flow_bnr_other.png" alt="北海道結婚式プレゼント">
    </a>
  </div>
</div>

<div class="flow_bnr_sp sp">
  <div>
    <a href="https://xn--t8j597j6jd.net/lp/ange_sapporo/" target="_blank">
      <img src="<?php bloginfo('template_directory'); ?>/common/images/bnr_sapporo_sp.png" alt="札幌結婚式プレゼント">
    </a>
  </div>
  <div>
    <a href="https://xn--t8j597j6jd.net/lp/hokkaido" target="_blank">
      <img src="<?php bloginfo('template_directory'); ?>/common/images/bnr_other_sp.png" alt="北海道結婚式プレゼント">
    </a>
  </div>
</div>

<main>
  <div id="serch_wrap">
    <div id="catTtl" class="ttl sapporo_wedding">
      <div class="title sapporo">
        <h1 class="pc">SEARCH RESULTS</h1>
        <h1 class="sp">SEARCH<br>RESULTS</h1>
      </div>
      <p class="sub_title">
        検索結果
      </p>
    </div>
    <div class="popular">
      <ul class="wpp-list">
        <?php if(have_posts()) : ?>
        <?php
        if (isset($_GET['s']) && empty($_GET['s'])) {
        echo '検索キーワード未入力';
        }
        ?>
        <?php while(have_posts()):the_post() ?>
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
        <?php else: ?>
        <div>
          <p>申し訳ございません。<br />該当する記事がございません。</p>
        </div>
        <?php endif; ?>
      </ul>
    </div>
    <!--ページネーション-->
    <?php if (function_exists('responsive_pagination')) {
    responsive_pagination($additional_loop->max_num_pages);
    } ?>
  </div>
  <?php get_template_part('template/foot'); ?>
</main>

<?php get_footer(); ?>

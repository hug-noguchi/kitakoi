<?php get_header(); ?>
<style>
  @media screen and (min-width: 481px) {
    header nav li:nth-child(3) {
      border-bottom: 3px solid #4baaba;
      padding-bottom: 46px;
    }
  }
</style>
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
  <div id="category-ichiran">
    <div id="catTtl" class="ttl <?php echo get_the_category()[0]->slug; ?>">
      <div class="title hakodate">
        <h1 class="pc">HAKODATE WEDDING</h1>
        <h1 class="sp">HAKODATE<br>WEDDING</h1>
      </div>
      <p class="sub_title">
        函館・ウェディング
      </p>
    </div>
    <div class="popular">
      <ul class="wpp-list">
        <?php if(have_posts()): ?>
        <?php while(have_posts()):the_post(); ?>
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
        <?php endif; ?>
      </ul>
    </div>
    <?php if (function_exists("pagination")) {
      pagination($additional_loop->max_num_pages);
    } ?>
  </div>
  <?php get_template_part('template/foot'); ?>
</main>
<?php get_footer(); ?>

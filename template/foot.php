<div>
  <div id="ranking">
    <div class="heading">
      <div class="title">
        <h2>RANKING</h2>
      </div>
      <p class="sub_title">人気記事</p>
    </div>
    <div class="popular">
      <ul class="wpp-list new_list">
        <?php
          $args = array(
            'post_type' => 'post',
            'meta_key' => 'post_views_count',
            'orderby' => 'meta_value_num',
            'posts_per_page' => 4,
            'order'=>'DESC',
          );
          $the_view_query = new WP_Query( $args );
          if ($the_view_query->have_posts()):
            while($the_view_query->have_posts()): $the_view_query->the_post();
        ?>
        <li>
          <a href="<?php the_permalink(); ?>">
            <div class="category ranking_category">
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
            <p class="txt_01">
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
          <?php endwhile; ?>
          <?php endif; ?>
        </li>
        <?php wp_reset_postdata(); ?>
      </ul>
    </div>
  </div>
</div>

<div id="sns">
  <div class="sns_box">
    <div class="insta_box">
      <div class="icon_insta">
        <img src="<?php bloginfo('template_directory'); ?>/common/images/insta_white.svg">
      </div>
      <p>Instagram</p>
      <div><?php echo do_shortcode('[instagram-feed feed=3]'); ?></div>
    </div>
    <div class="tw_box">
      <div class="icon_tw">
        <img src="<?php bloginfo('template_directory'); ?>/common/images/tw_white.svg">
      </div>
      <p>Twitter</p>
      <a class="twitter-timeline" href="https://twitter.com/kita_koi?ref_src=twsrc%5Etfw" data-width="500" data-height="330">Tweets by kita_koi</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div>
  </div>
</div>

<div id="bnr">
  <ul class="bnr_box">
    <li>
      <a href="https://xn--t8j597j6jd.net/lp/ange_sapporo/" target="_blank">
        <img src="<?php bloginfo('template_directory'); ?>/common/images/bnr_sapporo.png">
      </a>
    </li>
    <li>
      <a href="https://xn--t8j597j6jd.net/lp/hokkaido" target="_blank">
        <img src="<?php bloginfo('template_directory'); ?>/common/images/bnr_other.png">
      </a>
    </li>
  </ul>
</div>

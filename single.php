<?php get_header('single'); ?>

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

<?php
    // 記事のビュー数を更新(ログイン中・クローラーは除外)
    if (!is_user_logged_in() && !is_robots()) {
      setPostViews(get_the_ID());
    }
  ?>

<main>
  <div id="single">
    <div id="wrapper" class="clearfix">
      <?php if(have_posts()):while(have_posts()):the_post(); ?>
      <article>
        <div>
          <div class="single-block">
            <p class="date" style="line-height: 1.2;">
              <span class="pc">記事公開日：<?php the_time('Y.m.d');?>／最終更新日：<?php the_modified_date('Y.m.d') ?>｜</span>
              <span class="sp">記事公開日：<?php the_time('Y.m.d');?><br>
              最終更新日：<?php the_modified_date('Y.m.d') ?>　</span>
              <?php the_category(); ?>
            </p>

            <div class="share">SHARE：
              <div>
                <a href="https://twitter.com/share?url=&text=<?php echo get_the_title();?>" target="_blank" rel="nofollow noopener">
                  <img src="<?php bloginfo('template_directory'); ?>/common/images/tw_white.svg" alt="Twitterアイコン">
                </a>
              </div>
            </div>
          </div>

          <h1><?php the_title(); ?></h1>

          <div class="read-time">
            <?php echo sprintf('読了予測：約%s分', get_time_to_content_read(get_the_content())); ?>
          </div>

          <div class="eyecatch">
            <?php if (has_post_thumbnail()) : ?>
              <?php the_post_thumbnail(); ?>
            <?php else : ?>
            <?php endif; ?>
          </div>

          <div class="content">
            <?php the_content(); ?>
          </div>

          <?php endwhile;else: ?>
          <?php endif; ?>
        </div>

        <?php
          $group_set = SCF::get( 'spot' );
          foreach ( $group_set as $field_name => $field_value ) {
        ?>
        <?php if(empty($group_set[0]['name'])):?>
          <?php else: ?>
          <div class="details">
            <?php if($field_value['name']):?>
            <h4><?php echo esc_html( $field_value['name']); ?></h4>
            <?php endif;?>
            <table>
            <?php if($field_value['map']):?>
            <tr>
              <th>MAP</th>
              <td>
              <a href="<?php echo esc_html( $field_value['map'] ); ?>" target="_blank">
                <?php echo esc_html( $field_value['map'] ); ?>
              </a>
              </td>
            </tr>
            <?php endif;?>
            <?php if($field_value['address']):?>
            <tr>
              <th>住所</th>
              <td>
                <?php echo esc_html( $field_value['address'] ); ?>
              </td>
            </tr>
            <?php endif;?>
            <?php if($field_value['time']):?>
            <tr>
              <th>営業時間</th>
              <td>
                <?php echo esc_html( $field_value['time'] ); ?>
              </td>
            </tr>
            <?php endif;?>
            <?php if($field_value['holiday']):?>
            <tr>
              <th>定休日</th>
              <td>
                <?php echo esc_html( $field_value['holiday'] ); ?>
              </td>
            </tr>
            <?php endif;?>
            <?php if($field_value['tel']):?>
            <tr>
              <th>TEL</th>
              <td>
                <?php echo esc_html( $field_value['tel'] ); ?>
              </td>
            </tr>
            <?php endif;?>

            <?php if($field_value['web']):?>
            <tr>
              <th>WEB</th>
              <td>
              <a href="<?php echo esc_html( $field_value['web'] ); ?>" target="_blank">
                <?php echo esc_html( $field_value['web'] ); ?>
              </a>
              </td>
            </tr>
            <?php endif;?>
            </table>
          </div>
        <?php endif;?>
        <?php } ?>
      </article>
    </div>

    <div id="kanren">
      <div class="heading">
        <div class="title">
          <h2>RELATED</h2>
        </div>
        <p class="sub_title">関連記事</p>
      </div>
      <?php
        $post_id = get_the_ID();
        $categories = get_the_category($post_id);
        $cat_ids = [];

        foreach ($categories as $category) :
          array_push($cat_ids, $category->term_id);
        endforeach;

        $args = [
          'post_type' => 'post',
          'posts_per_page' => '4',
          'category__in' => $cat_ids,
          'post__not_in' => [$post_id]
        ];

        $related_cats_query = new WP_Query($args);
      ?>

      <div class="related-posts">
        <?php if ($related_cats_query->have_posts()) : ?>
          <ul class="wpp-list">
            <?php while ($related_cats_query->have_posts()) : $related_cats_query->the_post(); ?>
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
            </li>
            <?php endwhile; ?>
          </ul>
        <?php else : ?>
          <p>関連記事はありません。</p>
        <?php
        endif;
        wp_reset_postdata(); ?>
      </div>
    </div>
    <?php get_template_part('template/foot'); ?>
  </div>
</main>

<?php get_footer(); ?>

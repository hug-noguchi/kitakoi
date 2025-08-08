<?php get_header(); ?>
<div class="flow_bnr pc">
  <div>
    <a href="https://www.otokucon.jp/hokkaido/" target="_blank">
      <img src="<?php bloginfo('template_directory'); ?>/common/images/bnr_hokkaido.png" alt="札幌結婚式プレゼント">
    </a>
  </div>
</div>
<div class="flow_bnr_sp sp">
  <div>
    <a href="https://www.otokucon.jp/hokkaido/" target="_blank">
      <img src="<?php bloginfo('template_directory'); ?>/common/images/fow_bnr_hokkaido_sp.png" alt="北海道結婚式プレゼント">
    </a>
  </div>
</div>
<main>
  <article class="contents">
    <section id="news">
      <div class="title">
        <h1>ALL ARTICLES</h1>
      </div>
      <p class="sub_title">記事一覧</p>
      <div class="popular">
        <ul class="news_list">
          <?php if ( have_posts() ) : ?>
          <?php while ( have_posts() ) : the_post(); ?>
          <li>
            <div class="news_left">
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
              </a>
            </div>
            <div class="news_right">
              <a href="<?php the_permalink(); ?>">
                <p class="listTitle">
                  <?php echo mb_substr( $post->post_title, 0, 24) . '…'; ?>
                </p>
                <p class="txt_01 pc">
                  <?php echo wp_trim_words(get_the_content(), 117, '…' ); ?>
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
            </div>
          </li>
          <?php endwhile; ?>
          <?php else : ?>
          <div class="error">
            <p>お探しの記事は見つかりませんでした。</p>
          </div>
          <?php endif; ?>
        </ul>
      </div>
      <!--ページネーション-->
      <?php if (function_exists('responsive_pagination')) {
        responsive_pagination($additional_loop->max_num_pages);
      } ?>
    </section>
  </article>
  <?php get_template_part('template/foot'); ?>
</main>
<?php get_footer(); ?>

<script>
// basic paging logic to demo the buttons
var pr = document.querySelector( '.paginate.left' );
var pl = document.querySelector( '.paginate.right' );

pr.onclick = slide.bind( this, -1 );
pl.onclick = slide.bind( this, 1 );

var index = 0, total = (20);

function slide(offset) {
  index = Math.min( Math.max( index + offset, 0 ), total - 1 );

  document.querySelector( '.counter' ).innerHTML = ( index + 1 ) + ' / ' + total;

  pr.setAttribute( 'data-state', index === 0 ? 'disabled' : '' );
  pl.setAttribute( 'data-state', index === total - 1 ? 'disabled' : '' );
}

slide(0);

$(function() {
    $(".A").click(function() {
        $(".B").toggleClass("C");
    });
});
</script>

</body>
</html>

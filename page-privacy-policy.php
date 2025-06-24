<?php get_header(); ?>

<style>
  .privacy {
    width: 1200px;
    margin: 0 auto;
    padding: 120px 0;
    position: relative;
  }
  .privacy_title {
    text-align: center;
  }
  .privacy_title::after {
    content: "";
    background: url(/wp-content/themes/kitakoi_new/common/images/icon_title.svg) no-repeat 0 0;
    background-size: 100%;
    width: 25px;
    height: 28px;
    position: absolute;
    top: 116px;
    right: 424px;
  }
  .sub_title {
    text-align: center;
    color: #4baaba;
    font-size: 15px;
    line-height: 2.6;
    letter-spacing: 0.1em;
    padding-bottom: 50px;
  }
  .privacy .lead {
    margin-bottom: 20px;
    line-height: 1.8;
  }
  dl {
    line-height: 1.8;
  }
  dt {
    font-size: 16px;
    padding-bottom: 8px;
  }
  dd {
    margin-bottom: 25px;
    font-size: 15px;
  }
  @media screen and (max-width: 480px) {
    .privacy {
      width: 90%;
      padding: 40px 0;
    }
    .privacy_title::after {
      top: 36px;
      right: -8px;
    }
    .sub_title {
      padding-bottom: 30px;
    }
    footer {
      padding: 0 20px;
    }
  }
</style>

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<?php
  $page_id = get_page_by_path('privacy-policy');
  $page = get_post( $page_id );
    echo $page -> post_content;
?>

<?php endwhile; endif;?>

<?php get_footer(); ?>

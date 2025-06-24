<?php get_header(); ?>

<style>
  .info {
    width: 1200px;
    margin: 0 auto;
    padding: 120px 0 300px;
    position: relative;
  }
  .info_title {
    text-align: center;
  }
  .info_title::after {
    content: "";
    background: url(/wp-content/themes/kitakoi_new/common/images/icon_title.svg) no-repeat 0 0;
    background-size: 100%;
    width: 25px;
    height: 28px;
    position: absolute;
    top: 116px;
    right: 372px;
  }
  .sub_title {
    text-align: center;
  }
  dl {
    width: 800px;
    margin: 0 auto;
    font-size: 15px;
  }
  dt {
    float: left;
    width: 20%;
    font-weight: bold;
    color: #4baaba;
    margin-bottom: 3%;
  }
  dd {
    float: left;
    width: 80%;
    margin-bottom: 3%;
  }
  dl a {
    color: #4baaba;
    border-bottom: 1px solid;
  }
  @media screen and (max-width: 480px) {
    .info {
      width: 90%;
      padding: 40px 0 260px;
    }
    .info_title::after {
      top: 36px;
      right: 36px;
    }
    .sub_title {
      padding-bottom: 30px;
    }
    dl {
      width: 100%;
      font-size: 0.8rem;
      line-height: 1.8;
    }
    dt {
      width: 19%;
    }
    footer {
      padding: 0 20px;
    }
  }
</style>

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<?php
  $page_id = get_page_by_path('info');
  $page = get_post( $page_id );
    echo $page -> post_content;
?>

<?php endwhile; endif;?>

<?php get_footer();

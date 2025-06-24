<?php get_header(); ?>

<style>
  #sitemap {
    width: 1200px;
    padding: 80px 0;
    margin: 0 auto;
  }
  .wsp-posts-title {
    display: none;
  }
  .wsp-container > .wsp-posts-list li {
    margin-bottom: 60px;
  }
  .wsp-container .wsp-posts-list .wsp-post {
    margin-bottom: 0;
  }
  .wsp-category-title a {
    color: #4baaba;
    font-size: 15px;
    line-height: 2.6;
    letter-spacing: 0.1em;
    padding-bottom: 50px;
  }
  .wsp-post a {
    font-size: 15px;
    line-height: 2;
    letter-spacing: 0.1em;
    padding-bottom: 50px;
  }
  @media screen and (max-width: 480px) {
    #sitemap {
      width: 100%;
      padding: 40px 20px 0;
    }
  }
</style>

<?php if(have_posts()): ?>
<?php while(have_posts()):the_post(); ?>
<div id="sitemap">
  <?php the_content(); ?>
</div>
<?php endwhile; ?>
<?php endif; ?>

<?php get_footer();

<?php get_header(); ?>

<!-- ここからコンテンツ -->

<main id="main" class="l-main">
        <section class="sec-content sec-case">
            <h2 class="common-title__center l-page__title"><span class="common-title__en">News</span><span class="arrow-icon"></span></h2>
    
            <section class="sec-child">
              <div class="l-container">
              <?php if (have_posts()) : ?>
      <article class="article">
    <?php while (have_posts()) : the_post();?>


      <header class="article-detail_header">
        <h1 class="article-detail_header__title title-head">
          <?php the_title(); ?>
        </h1>
        
      </header>



      <section class="article-detail_contents">
        <?php the_content(); ?>

      </section>

      <p class="article-detail_header__date">
          <?php the_time('Y.m.d'); ?>
        </p>
    <?php endwhile; ?>
      </article>
    <?php endif; ?>
            </div>
        </section>
        
    
          </section>
    


    </main>

<!-- ここまでコンテンツ -->

<?php get_footer(); ?>

<?php if (have_posts()) : ?>
      <article class="article">
    <?php while (have_posts()) : the_post();?>


      <header class="article-detail_header">
          <!-- <div class="article-title__wrapper">
              <h3 class="title-blue article-title"><span><?php the_title(); ?></span></h3>
          </div> -->
          <h2 class="title-head"><?php the_title(); ?></h2>
        
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
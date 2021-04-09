<?php if (have_posts()) : ?>
      <article class="article">
    <?php while (have_posts()) : the_post();?>


      <header class="article-detail_header">
          
          <h4 class="title-head__sub"><?php the_title(); ?></h4>
        
      </header>



      <section class="article-detail_contents">
        <?php the_content(); ?>

      </section>

      <p class="article-detail_header__date">
      <?php if($locale !== 'ja'):?>Last Updated : <?php else:?>最終更新日：<?php endif;?><?= get_the_modified_date('Y.m.d'); ?>
        </p>
    <?php endwhile; ?>
      </article>
    <?php endif; ?>
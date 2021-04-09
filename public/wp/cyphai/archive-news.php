<?php get_header(); ?>

<!-- ここからコンテンツ -->

<main id="main" class="l-main">
        <section class="sec-content sec-case">
            <section class="sec-child">
            <h2 class="title-head"><span><?php 
    switch($locale){
      case 'ja':
        echo 'ニュース';
        break;
      case 'fr_FR':
        echo 'Actualités';
        break;
      default:
        echo 'News';
        break;
    }
    ?></span></h2>
              <div class="l-container">
                <div class="block-inner l-container">
                    <div class="content-news__list">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); $terms = get_the_terms( get_the_ID(), 'news_cat'); ?>
              
                        <dl>
                          <dt><?php the_time('Y.m.d'); ?></dt>
                          <dd><span class="category"><?= esc_html($terms[0]->name); ?></span><a href="<?php the_permalink(); ?>"><span class="title"><?php the_title(); ?></span><br><span class="excerpt"><?php the_excerpt(); ?></span></a></dd>
                        </dl>
            
                        <?php  endwhile;  endif;?>
                    </div>
                    <div class="c-pagination">
                    <?php
                    if( function_exists('wp_pagenavi') ) {
                      wp_pagenavi();
                    }
                    ?>
                  </div>
                </div>
            </div>
        </section>
    
          </section>
    


    </main>

<!-- ここまでコンテンツ -->

<?php get_footer(); ?>

<?php get_header(); ?>

<!-- ここからコンテンツ -->

<main id="main" class="l-main">
        <section class="sec-content sec-case">
            <!-- <h2 class="common-title__center l-page__title"><span class="common-title__en">News</span><span class="arrow-icon"></span></h2> -->
            <section class="sec-child">
            <h2 class="title-head"><span>News</span></h2>
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
                    
                </div>
            </div>
        </section>
        <!-- <div class="pagination">
            <!-- <div class="wp-pagenavi">
              <a class="previouspostslink" rel="prev" href="#"><i class="fas fa-caret-left"></i></a>
              <span class="current">1</span>
              <a class="page larger" title="Page 2" href="#">2</a>
              <a class="nextpostslink" rel="next" href="#"><i class="fas fa-caret-right"></i></a>
            </div>
            <div class="wp-pagenavi" role="navigation">
          <span aria-current="page" class="current">1</span><a class="page larger" title="Page 2" href="#">2</a><a class="page larger" title="Page 3" href="#">3</a><a class="page larger" title="Page 4" href="#">4</a><a class="page larger" title="Page 5" href="#">5</a><span class="extend">...</span><a class="nextpostslink" rel="next" href="#"><i class="fas fa-caret-right"></i></a><a class="last" href="#">last »</a>
          </div></div> -->
    
          </section>
    


    </main>

<!-- ここまでコンテンツ -->

<?php get_footer(); ?>

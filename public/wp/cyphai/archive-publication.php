<?php get_header(); ?>

<!-- ここからコンテンツ -->

<main id="main" class="l-main">
        <section class="sec-content sec-case">
            <h2 class="common-title__center l-page__title"><span class="common-title__en">Publication</span><span class="arrow-icon"></span></h2>
    
            <section class="sec-child">
              <div class="l-container">
                <div class="block-inner l-container">
                  <h2 class="title-head">Publication</h2>
                  
                    <ul class="content-publication__list">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); $terms = get_the_terms( get_the_ID(), 'publication_cat'); ?>
                    <li>
                        <a href="<?php the_permalink(); ?>">
                        <div class="content-publication__img">
                            <figure>
                                <?php if(get_the_post_thumbnail_url()):?>
                                <img src="<?=get_the_post_thumbnail_url();?>" alt="">
                                <?php else:?>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/common/no_image.png" alt="">
                                <?php endif;?>
                            </figure>
                        </div>
                        <div class="content-publication__txt">
                            <h3 class="content-publication__title"><?php the_title(); ?></h3>
                            <div class="txt__sub">
                                <span class="category"><?= esc_html($terms[0]->name); ?></span>
                                <span class="time"><?php the_time('Y.m.d'); ?></span>
                            </div>
                        </div>
                        </a>
                    </li>
                    <?php  endwhile;  endif;?>
                    </ul>
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

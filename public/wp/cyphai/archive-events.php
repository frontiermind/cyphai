<?php get_header(); ?>

<!-- ここからコンテンツ -->

<main id="main" class="l-main">
        <section class="sec-content sec-case">
            
    
            <section class="sec-child">
              <div class="l-container">
                <div class="block-inner l-container">
                  <h2 class="title-head"><span>Events</span></h2>
                  <?php $cat_name = 'events_cat'?>

                    <?php get_template_part('module/article_list');?>
                    
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

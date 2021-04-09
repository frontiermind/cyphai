<?php get_header(); ?>

<!-- ここからコンテンツ -->

<main id="main" class="l-main">
        <section class="sec-content sec-case">
            
    
            <section class="sec-child">
              <div class="l-container">
                <div class="block-inner l-container">
                  <h2 class="title-head"><span><?php 
    switch($locale){
      case 'ja':
        echo 'イベント';
        break;
      case 'fr_FR':
        echo 'Événements';
        break;
      default:
        echo 'Events';
        break;
    }
    ?></span></h2>
                  <?php $cat_name = 'events_cat'?>

                    <?php get_template_part('module/article_list');?>
                    
                </div>
            </div>
        </section>
        
    
          </section>
    


    </main>

<!-- ここまでコンテンツ -->

<?php get_footer(); ?>

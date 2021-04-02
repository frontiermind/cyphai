<?php get_header(); ?>

<!-- ここからコンテンツ -->

<main id="main" class="l-main">
        <section class="sec-content sec-case">
            <!-- <h2 class="common-title__center l-page__title"><span class="common-title__en">News</span><span class="arrow-icon"></span></h2> -->

            <section class="sec-child">
            <!-- <h2 class="title-head"><span>Events</span></h2> -->
    
              <div class="l-container">
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
              <?php get_template_part('module/article');?>
              
            </div>
        </section>
        
    
          </section>
    


    </main>

<!-- ここまでコンテンツ -->

<?php get_footer(); ?>

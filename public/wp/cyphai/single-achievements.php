<?php get_header(); ?>

<!-- ここからコンテンツ -->

<main id="main" class="l-main">
        <section class="sec-content sec-case">
            <section class="sec-child">
    
              <div class="l-container">
              <h2 class="title-head"><span><?php 
    switch($locale){
      case 'ja':
        echo '研究成果';
        break;
      case 'fr_FR':
        echo 'Réalisations';
        break;
      default:
        echo 'Achievements';
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

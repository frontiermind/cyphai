<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

get_header();
?>

<main id="main" class="l-main">

<div class="mainvisual">
<div class="slider-wrapper-inner">
            <div class="box-slider">
                <ul id="slider">
                <li aria-hidden="true"><img class="u-sp-hide" src=<?php echo get_template_directory_uri(); ?>/images/index/slide_01.jpg" srcset=<?php echo get_template_directory_uri(); ?>/images/index/slide_01.jpg 1x,/images/index/slide_01@2x.jpg 2x" alt=""><img class="u-pc-hide" src=<?php echo get_template_directory_uri(); ?>/images/index/slide_sp_01.jpg" srcset=<?php echo get_template_directory_uri(); ?>/images/index/slide_sp_01.jpg 1x,/images/index/slide_sp_01@2x.jpg 2x" alt=""></li>
                <li aria-hidden="true"><img class="u-sp-hide" src=<?php echo get_template_directory_uri(); ?>/images/index/slide_02.jpg" srcset=<?php echo get_template_directory_uri(); ?>/images/index/slide_02.jpg 1x,/images/index/slide_02@2x.jpg 2x" alt=""><img class="u-pc-hide" src=<?php echo get_template_directory_uri(); ?>/images/index/slide_sp_02.jpg" srcset=<?php echo get_template_directory_uri(); ?>/images/index/slide_sp_02.jpg 1x,/images/index/slide_sp_02@2x.jpg 2x" alt=""></li>
                <li aria-hidden="true"><img class="u-sp-hide" src=<?php echo get_template_directory_uri(); ?>/images/index/slide_03.jpg" srcset=<?php echo get_template_directory_uri(); ?>/images/index/slide_03.jpg 1x,/images/index/slide_03@2x.jpg 2x" alt=""><img class="u-pc-hide" src=<?php echo get_template_directory_uri(); ?>/images/index/slide_sp_03.jpg" srcset=<?php echo get_template_directory_uri(); ?>/images/index/slide_sp_03.jpg 1x,/images/index/slide_sp_03@2x.jpg 2x" alt=""></li>
            </ul>
            </div>
        </div>
  
</div>

<section class="sec-content top-content u-bc-lightblue">

	<div class="top-content-news l-contents__wrapper">
	  <div class="top-title__wrapper">
		<h2 class="title-blue"><span><?php 
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
	  </div>
	  <div class="content-news__list">
	  <?php
      $args = array(
                'post_type' => 'news',
                'posts_per_page' => 30
              );
			  $myposts = get_posts($args);
			  $cats = get_the_category();
    ?>
    <?php if($myposts): ?>
    <?php foreach($myposts as $post) : setup_postdata($post); $terms = get_the_terms( get_the_ID(), 'news_cat');?>
    <?php if( $locale == get_post_meta( get_the_ID(), '_locale', true )):?>
                        <dl>
							<?php #var_dump(get_the_term_list( get_the_id(), 'news_cat'));?>
                          <dt><?php the_time('Y.m.d'); ?></dt>
                          <dd><span class="category"><?= esc_html($terms[0]->name); ?></span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dd>
                        </dl>
            
                        <?php endif; ?>
                        <?php  endforeach; endif;?>
                    </div>
	  <div class="c-btn c-btn__center">
		<a href="<?php echo $home_url; ?>news" class="btn"><?php 
    $top_newslist_txt = '';
    $locale === 'ja' ? $top_newslist_txt = 'もっと見る' : $top_newslist_txt = 'More';
    echo $top_newslist_txt;?></a>
	  </div>
	</div>
    
	<div class="top-content-links l-container">
	  <ul class="content-links-list flex-col flex-col_4">
		<li><a href="<?php 
    $bnr_url = '';
    $locale === 'ja' ? $bnr_url = 'https://www.jst.go.jp/' : $bnr_url = 'https://www.jst.go.jp/EN/';
    echo $bnr_url;
    ?>" target="_blank"><img src=<?php echo get_template_directory_uri(); ?>/images/index/bnr_jst.png" alt="JST"></a></li>
		<li><a href="<?php 
    $bnr_url = '';
    $locale === 'ja' ? $bnr_url = 'https://www.jst.go.jp/kisoken/crest/index.html' : $bnr_url = 'https://www.jst.go.jp/kisoken/crest/en/';
    echo $bnr_url;
    ?>" target="_blank"><img src=<?php echo get_template_directory_uri(); ?>/images/index/bnr_crest.png" alt="CREST"></a></li>
		<li><a href="<?php 
    $bnr_url = '';
    $locale === 'fr_FR' ? $bnr_url = 'https://anr.fr/fr/' : $bnr_url = 'https://anr.fr/';
    echo $bnr_url;
    ?>" target="_blank"><img src=<?php echo get_template_directory_uri(); ?>/images/index/bnr_anr.png" alt="ANR"></a></li>
	  </ul>
	</div>



</section>


</main>
<!-- / main -->

 

<!-- ここまでコンテンツ -->

<?php
get_footer();

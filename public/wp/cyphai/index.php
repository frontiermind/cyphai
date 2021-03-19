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
  <!-- <h2 class="common-title__center"><span class="common-title__en">CONTENTS</span><span class="arrow-icon"></span></h2> -->
  <h2 class="title-head">CONTENTS</h2>
  <div class="l-container">
	<div class="l-contents__wrapper">
	  <ul class="top-content-list">
		<li><a href="<?php echo esc_url(home_url('/')); ?>about">
		  <div class="top-content-list__txt">
			<h3 class="top-content-list__title">About this project</h3>
			<p>texttexttexttexttexttexttexttexttexttexttexttexttexttext...</p>
		  </div>
		</a></li>
		<li><a href="<?php echo esc_url(home_url('/')); ?>members">
		  <div class="top-content-list__txt">
			<h3 class="top-content-list__title">Members</h3>
			<p>texttexttexttexttexttexttexttexttexttexttexttexttexttext...</p>
		  </div></a></li>
		<li><a href="<?php echo esc_url(home_url('/')); ?>open">
		  <div class="top-content-list__txt">
			<h3 class="top-content-list__title">Open positions</h3>
			<p>texttexttexttexttexttexttexttexttexttexttexttexttexttext...</p>
		  </div></a></li>
		<li><a href="<?php echo esc_url(home_url('/')); ?>event"><div class="top-content-list__txt">
		  <h3 class="top-content-list__title">Event</h3>
		  <p>texttexttexttexttexttexttexttexttexttexttexttexttexttext...</p>
		</div></a></li>
	  </ul>
	</div>

	<div class="top-content-news l-contents__wrapper">
	  <!-- <h3 class="top-content-list__title"><span>news</span></h3> -->
	  <div class="top-title__wrapper">
		<h2 class="title-blue"><span>News</span></h2>
	  </div>
	  <div class="content-news__list">
	  <?php
      $args = array(
                'post_type' => 'news',
                'posts_per_page' => 5
              );
			  $myposts = get_posts($args);
			  $cats = get_the_category();
    ?>
    <?php if($myposts): ?>
    <?php foreach($myposts as $post) : setup_postdata($post); $terms = get_the_terms( get_the_ID(), 'news_cat');?>
                        <dl>
							<?php #var_dump(get_the_term_list( get_the_id(), 'news_cat'));?>
                          <dt><?php the_time('Y.m.d'); ?></dt>
                          <dd><span class="category"><?= esc_html($terms[0]->name); ?></span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dd>
                        </dl>
            
                        <?php  endforeach; endif;?>
                    </div>
	  <div class="c-btn c-btn__center">
		<a href="./news" class="btn">More</a>
	  </div>
	</div>

	<div class="top-content-links">
	  <ul class="content-links-list flex-col flex-col_4">
		<li><a href="#" target="_blank"><img src=<?php echo get_template_directory_uri(); ?>/images/index/bnr_sample.png" alt="バナーエリア"></a></li>
		<li><a href="#" target="_blank"><img src=<?php echo get_template_directory_uri(); ?>/images/index/bnr_sample.png" alt="バナーエリア"></a></li>
		<li><a href="#" target="_blank"><img src=<?php echo get_template_directory_uri(); ?>/images/index/bnr_sample.png" alt="バナーエリア"></a></li>
	  </ul>
	</div>

  </div>


</section>


</main>
<!-- / main -->

 

<!-- ここまでコンテンツ -->

<?php
get_footer();

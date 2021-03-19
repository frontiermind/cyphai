<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */
?><!doctype html>
<html <?php language_attributes(); ?> style="margin-top: 0 !important;">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
  <link href="//use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
  <link href="//fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
	<?php wp_head(); ?>
  <script src="<?php echo get_template_directory_uri(); ?>/js/script.min.js"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script>
    jQuery(function($){
  // ここに処理を書いていきます｡
  $('#slider').slick({ //{}を入れる
    autoplay: true, //「オプション名: 値」の形式で書く
    });
  });
  </script>
</head>

<body <?php body_class();  ?>>
<?php # wp_body_open(); 
  $page = get_post( get_the_ID() );
  $slug = $page->post_name;
?>
<div class="l-wrapper <?= $slug . ' ' . esc_html(get_post_type_object(get_post_type())->name);?>">

<header id="header" class="l-header">
        <div class="l-header-top">
          <div class="l-container">
            <ul class="l-header-subnavi">
              
              <li class="l-header-subnavi--en"><a href="#"><img class="subnavi-icon" src="<?php echo get_template_directory_uri(); ?>/images/common/icon_en_s.png" srcset="<?php echo get_template_directory_uri(); ?>/images/common/icon_en_s.png 1x,<?php echo get_template_directory_uri(); ?>/images/common/icon_en_s@2x.png 2x" alt="">English</a> | <a href="#"><img class="subnavi-icon" src="<?php echo get_template_directory_uri(); ?>/images/common/icon_ja_s.png" srcset="<?php echo get_template_directory_uri(); ?>/images/common/icon_ja_s.png 1x,<?php echo get_template_directory_uri(); ?>/images/common/icon_ja_s@2x.png 2x" alt=""> Japanese</a> | <a href="#"><img class="subnavi-icon" src="<?php echo get_template_directory_uri(); ?>/images/common/icon_fr_s.png" srcset="<?php echo get_template_directory_uri(); ?>/images/common/icon_fr_s.png 1x,<?php echo get_template_directory_uri(); ?>/images/common/icon_fr_s@2x.png 2x" alt="">	French</a></li>
              <li class="l-header-subnavi--news"><a href="<?php echo esc_url(home_url('/')); ?>news"><i class="far fa-newspaper"></i>NEWS</a></li>
              <li class="l-header-subnavi--news"><a href="<?php echo esc_url(home_url('/')); ?>contact"><i class="far fa-envelope"></i>CONTACT</a></li>
            </ul>
          </div>
        </div>
  
        <div class="js-header-sticky l-header-bottom">
          <div class="pc-nav-box">
            <div class="l-container">
              <h1 class="l-header__title"><a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/header/logo.png" srcset="<?php echo get_template_directory_uri(); ?>/images/header/logo.png 1x,<?php echo get_template_directory_uri(); ?>/images/header/logo@2x.png 2x" alt="CyPhAI"></a></h1>
  
              <ul class="l-header-sp-navi">
                <li class="en"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/common/icon_en_s.png" srcset="<?php echo get_template_directory_uri(); ?>/images/common/icon_en_s.png 1x,<?php echo get_template_directory_uri(); ?>/images/common/icon_en_s@2x.png 2x" alt=""></a></li>
                <li class="ja"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/common/icon_ja_s.png" srcset="<?php echo get_template_directory_uri(); ?>/images/common/icon_ja_s.png 1x,<?php echo get_template_directory_uri(); ?>/images/common/icon_ja_s@2x.png 2x" alt=""></a></li>
                <li class="fr"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/common/icon_fr_s.png" srcset="<?php echo get_template_directory_uri(); ?>/images/common/icon_fr_s.png 1x,<?php echo get_template_directory_uri(); ?>/images/common/icon_fr_s@2x.png 2x" alt=""></a></li>
                <li><a href="contact"><img src="<?php echo get_template_directory_uri(); ?>/images/common/icon_mail.png" srcset="<?php echo get_template_directory_uri(); ?>/images/common/icon_mail.png 1x,<?php echo get_template_directory_uri(); ?>/images/common/icon_mail@2x.png 2x" alt=""></a></li>
                <li id="js-menuToggle"><img src="<?php echo get_template_directory_uri(); ?>/images/common/icon_menu.png" srcset="<?php echo get_template_directory_uri(); ?>/images/common/icon_menu.png 1x,<?php echo get_template_directory_uri(); ?>/images/common/icon_menu@2x.png 2x" alt=""></li>
              </ul>
  
              <nav class="globalnav">
                <ul class="globalnav-list">
                  <li class="gnav-home"><a href="<?php echo esc_url(home_url('/')); ?>">Home<span></span></a></li>
                  <li class="gnav-about">
                    <a class="js-gnav-child gnav-child-btn" href="<?php echo esc_url(home_url('/')); ?>about">About<span></span></a>
                  </li>
                  <li class="gnav-members"><a href="<?php echo esc_url(home_url('/')); ?>members">Members<span></span></a></li>
                  <li class="gnav-event"><a href="<?php echo esc_url(home_url('/')); ?>event">Event<span></span></a></li>
                  <li class="gnav-open">
                    <a class="js-gnav-child gnav-child-btn" href="<?php echo esc_url(home_url('/')); ?>open">
                      Open position<span></span>
                    </a>
                      <div class="globalnav-child">
                        <ul class="globalnav-child__list">
                          <li><a href="<?php echo esc_url(home_url('/')); ?>open/#japan">internships in Japan</a></li>
                          <li><a href="<?php echo esc_url(home_url('/')); ?>open/#france">internships in France</a></li>
                        </ul>
                      </div>
  
                  </li>
              <li class="gnav-publication"><a href="<?php echo esc_url(home_url('/')); ?>publication">Publication</a></li>
              <li class="gnav-link"><a href="<?php echo esc_url(home_url('/')); ?>link">Link</a></li>
                </ul>
              </nav>
            </div>
          </div>
  
          <nav id="js-menu" class="sp-globalnav">
            <ul class="sp-globalnav-list">
              <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
              <li><a href="<?php echo esc_url(home_url('/')); ?>about">About</a></li>
              <li><a href="<?php echo esc_url(home_url('/')); ?>members">Members</a></li>
              <li class="gnav-event"><a href="<?php echo esc_url(home_url('/')); ?>event">Event<span></span></a></li>
              <li>
                <a class="js-chlid-btn child-btn" href="<?php echo esc_url(home_url('/')); ?>open">Open positions</a>
                <ul class="sp-globanav-child">
                  <li><a href="<?php echo esc_url(home_url('/')); ?>open/#japan">internships in Japan</a></li>
                  <li><a href="<?php echo esc_url(home_url('/')); ?>open/#france">internships in France</a></li>
                </ul>
              </li>
              <li><a href="<?php echo esc_url(home_url('/')); ?>link">Link</a></li>
            </ul>
          </nav>
  
        </div>
  
  
      </header>
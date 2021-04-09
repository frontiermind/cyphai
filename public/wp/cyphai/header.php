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

$home_url = esc_url(home_url('/'));
$locale = get_locale();

?><!doctype html>
<html  lang="<?php bloginfo('language'); ?>" style="margin-top: 0 !important;">
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
  <script>
    jQuery(function($){
  // ここに処理を書いていきます｡
  $('#slider').slick({ //{}を入れる
    autoplay: true, //「オプション名: 値」の形式で書く
    arrows: true,
    });
  });
  </script>
</head>

<body id="body" <?php body_class();  ?>>
<?php # wp_body_open(); 
  $page = get_post( get_the_ID() );
  $slug = $page->post_name;
?>
<div class="l-wrapper <?= $slug . ' ' . esc_html(get_post_type_object(get_post_type())->name);?>">

<!-- 以下英語ヘッダー -->
<?php if($locale === 'en_US'):?>
<header id="header" class="l-header">
        <div class="l-header-top">
          <div class="l-container">
            <ul class="l-header-subnavi">
              <?php echo do_shortcode( '[bogo]' ); ?>
              <li class="l-header-subnavi--news"><a href="<?php echo $home_url; ?>contact"><i class="far fa-envelope"></i>CONTACT</a></li>
            </ul>
           
          </div>
        </div>
  
        <div class="js-header-sticky l-header-bottom">
          <div class="pc-nav-box">
            <div class="l-container">
              <h1 class="l-header__title"><a href="<?php echo $home_url; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/header/logo.png" srcset="<?php echo get_template_directory_uri(); ?>/images/header/logo.png 1x,<?php echo get_template_directory_uri(); ?>/images/header/logo@2x.png 2x" alt="CyPhAI"></a></h1>
  
              <ul class="l-header-sp-navi">
               
              <?php echo do_shortcode( '[bogo]' ); ?>

                <li><a href="<?php echo $home_url; ?>contact"><img src="<?php echo get_template_directory_uri(); ?>/images/common/icon_mail.png" srcset="<?php echo get_template_directory_uri(); ?>/images/common/icon_mail.png 1x,<?php echo get_template_directory_uri(); ?>/images/common/icon_mail@2x.png 2x" alt=""></a></li>
                <li id="js-menuToggle"><img src="<?php echo get_template_directory_uri(); ?>/images/common/icon_menu.png" srcset="<?php echo get_template_directory_uri(); ?>/images/common/icon_menu.png 1x,<?php echo get_template_directory_uri(); ?>/images/common/icon_menu@2x.png 2x" alt=""></li>
              </ul>
  
              <nav class="globalnav">
                <ul class="globalnav-list">
                  <li class="gnav-home"><a href="<?php echo $home_url; ?>">Home<span></span></a></li>
                  <li class="gnav-about">
                    <a class="js-gnav-child gnav-child-btn" href="<?php echo $home_url; ?>about">About<span></span></a>
                  </li>
                  <li class="gnav-members"><a href="<?php echo $home_url; ?>members">Members<span></span></a></li>
                  <li class="gnav-event"><a href="<?php echo $home_url; ?>events">Events<span></span></a></li>
                  <li class="gnav-open">
                    <a href="<?php echo $home_url; ?>open">
                      Open positions<span></span>
                    </a>
                     
  
                  </li>
              <li class="gnav-achievements"><a href="<?php echo $home_url; ?>achievements">Achievements</a></li>
              
                </ul>
              </nav>
            </div>
          </div>
  
          <nav id="js-menu" class="sp-globalnav">
            <ul class="sp-globalnav-list">
              <li><a href="<?php echo $home_url; ?>">Home</a></li>
              <li><a href="<?php echo $home_url; ?>about">About</a></li>
              <li><a href="<?php echo $home_url; ?>members">Members</a></li>
              <li class="gnav-event"><a href="<?php echo $home_url; ?>events">Events<span></span></a></li>
              <li>
                <a href="<?php echo $home_url; ?>open">Open positions</a>
              
              </li>
              <li><a href="<?php echo $home_url; ?>achievements">Achievements</a></li>
            </ul>
          </nav>
  
        </div>
  
  
      </header>
      <?php endif;?>

      <!-- 以下日本語版ヘッダー -->
      <?php if($locale === 'ja'):?>
    <header id="header" class="l-header">
            <div class="l-header-top">
              <div class="l-container">
                <ul class="l-header-subnavi">
                  <?php echo do_shortcode( '[bogo]' ); ?>
                  <li class="l-header-subnavi--news"><a href="<?php echo $home_url; ?>contact"><i class="far fa-envelope"></i>お問い合わせ</a></li>
                </ul>
               
              </div>
            </div>
      
            <div class="js-header-sticky l-header-bottom">
              <div class="pc-nav-box">
                <div class="l-container">
                  <h1 class="l-header__title"><a href="<?php echo $home_url; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/header/logo.png" srcset="<?php echo get_template_directory_uri(); ?>/images/header/logo.png 1x,<?php echo get_template_directory_uri(); ?>/images/header/logo@2x.png 2x" alt="CyPhAI"></a></h1>
      
                  <ul class="l-header-sp-navi">
                    
                  <?php echo do_shortcode( '[bogo]' ); ?>

                    <li><a href="<?php echo $home_url; ?>contact"><img src="<?php echo get_template_directory_uri(); ?>/images/common/icon_mail.png" srcset="<?php echo get_template_directory_uri(); ?>/images/common/icon_mail.png 1x,<?php echo get_template_directory_uri(); ?>/images/common/icon_mail@2x.png 2x" alt=""></a></li>
                    <li id="js-menuToggle"><img src="<?php echo get_template_directory_uri(); ?>/images/common/icon_menu.png" srcset="<?php echo get_template_directory_uri(); ?>/images/common/icon_menu.png 1x,<?php echo get_template_directory_uri(); ?>/images/common/icon_menu@2x.png 2x" alt=""></li>
                  </ul>
      
                  <nav class="globalnav">
                    <ul class="globalnav-list">
                      <li class="gnav-home"><a href="<?php echo $home_url; ?>">ホーム<span></span></a></li>
                      <li class="gnav-about">
                        <a class="js-gnav-child gnav-child-btn" href="<?php echo $home_url; ?>about">プロジェクト概要<span></span></a>
                      </li>
                      <li class="gnav-members"><a href="<?php echo $home_url; ?>members">メンバー<span></span></a></li>
                      <li class="gnav-event"><a href="<?php echo $home_url; ?>events">イベント<span></span></a></li>
                      <li class="gnav-open">
                        <a href="<?php echo $home_url; ?>open">
                          メンバー募集<span></span>
                        </a>
                       
      
                      </li>
                  <li class="gnav-achievements"><a href="<?php echo $home_url; ?>achievements">研究成果</a></li>
                
                    </ul>
                  </nav>
                </div>
              </div>
      
              <nav id="js-menu" class="sp-globalnav">
                <ul class="sp-globalnav-list">
                  <li><a href="<?php echo $home_url; ?>">ホーム</a></li>
                  <li><a href="<?php echo $home_url; ?>about">プロジェクト概要</a></li>
                  <li><a href="<?php echo $home_url; ?>members">メンバー</a></li>
                  <li class="gnav-event"><a href="<?php echo $home_url; ?>events">イベント<span></span></a></li>
                  <li>
                    <a href="<?php echo $home_url; ?>open">メンバー募集</a>
                  
                  </li>
                  <li><a href="<?php echo $home_url; ?>achievements">研究成果</a></li>
                  
                </ul>
              </nav>
      
            </div>
      
      
          </header>
      <?php endif;?>

      <!-- 以下フランス語版ヘッダー -->
      <?php if($locale === 'fr_FR'):?>
    <header id="header" class="l-header">
            <div class="l-header-top">
              <div class="l-container">
                <ul class="l-header-subnavi">
                  <?php echo do_shortcode( '[bogo]' ); ?>
                  <li class="l-header-subnavi--news"><a href="<?php echo $home_url; ?>contact"><i class="far fa-envelope"></i>CONTACT</a></li>
                </ul>
             
              </div>
            </div>
      
            <div class="js-header-sticky l-header-bottom">
              <div class="pc-nav-box">
                <div class="l-container">
                  <h1 class="l-header__title"><a href="<?php echo $home_url; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/header/logo.png" srcset="<?php echo get_template_directory_uri(); ?>/images/header/logo.png 1x,<?php echo get_template_directory_uri(); ?>/images/header/logo@2x.png 2x" alt="CyPhAI"></a></h1>
      
                  <ul class="l-header-sp-navi">
                   
                  <?php echo do_shortcode( '[bogo]' ); ?>

                    <li><a href="<?php echo $home_url; ?>contact"><img src="<?php echo get_template_directory_uri(); ?>/images/common/icon_mail.png" srcset="<?php echo get_template_directory_uri(); ?>/images/common/icon_mail.png 1x,<?php echo get_template_directory_uri(); ?>/images/common/icon_mail@2x.png 2x" alt=""></a></li>
                    <li id="js-menuToggle"><img src="<?php echo get_template_directory_uri(); ?>/images/common/icon_menu.png" srcset="<?php echo get_template_directory_uri(); ?>/images/common/icon_menu.png 1x,<?php echo get_template_directory_uri(); ?>/images/common/icon_menu@2x.png 2x" alt=""></li>
                  </ul>
      
                  <nav class="globalnav">
                    <ul class="globalnav-list">
                      <li class="gnav-home"><a href="<?php echo $home_url; ?>">Accueil<span></span></a></li>
                      <li class="gnav-about">
                        <a class="js-gnav-child gnav-child-btn" href="<?php echo $home_url; ?>about">Aperçu du projet<span></span></a>
                      </li>
                      <li class="gnav-members"><a href="<?php echo $home_url; ?>members">Membres<span></span></a></li>
                      <li class="gnav-event"><a href="<?php echo $home_url; ?>events">Événements<span></span></a></li>
                      <li class="gnav-open">
                        <a href="<?php echo $home_url; ?>open">
                          Postes vacants<span></span>
                        </a>
                        
      
                      </li>
                  <li class="gnav-achievements"><a href="<?php echo $home_url; ?>achievements">Réalisations</a></li>
                 
                    </ul>
                  </nav>
                </div>
              </div>
      
              <nav id="js-menu" class="sp-globalnav">
                <ul class="sp-globalnav-list">
                  <li><a href="<?php echo $home_url; ?>">Accueil</a></li>
                  <li><a href="<?php echo $home_url; ?>about">Aperçu du projet</a></li>
                  <li><a href="<?php echo $home_url; ?>members">Membres</a></li>
                  <li class="gnav-event"><a href="<?php echo $home_url; ?>events">Événements<span></span></a></li>
                  <li>
                    <a href="<?php echo $home_url; ?>open">Postes vacants</a>
                 
                  </li>
                  <li><a href="<?php echo $home_url; ?>achievements">Réalisations</a></li>
                 
                </ul>
              </nav>
      
            </div>
      
      
          </header>
      <?php endif;?>

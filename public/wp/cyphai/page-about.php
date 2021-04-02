<?php
  /*
  Template Name: about
  */
  get_header();
?>

<!-- ここからコンテンツ -->
<?php if($locale !== "ja"):?>
<main id="main" class="l-main">
        <section class="sec-content sec-case">
            <!-- <h2 class="common-title__center l-page__title"><span class="common-title__en">About</span><span class="arrow-icon"></span></h2> -->
    
            <section class="sec-child">
              <div class="l-container">
                <div class="block-inner">
                  <h2 class="title-head"><span>About the project</span></h2>
                  <!-- <h4 class="title-blue"><span>About the project</span></h3> -->
                  <div class="filter-content">
                        <div class="l-container">
                          <figure><img src="<?php echo get_template_directory_uri(); ?>/images/about/about_01.png" alt=""></figure><p>Artificial intelligence (AI) and data sciences are revolutionizing information systems used for control and supervision of various devices (such as sensors, robots, IoT devices) with higher levels of autonomy and adaptability in uncertain and dynamically changing environments. Among such information systems are Cyber-Physical Systems (CPS) from which emerges a new generation of AI-intensive Cyber-Physical Systems (AI-CPS). Autonomous vehicles are examples to illustrate the synergy between CPS and AI. The physical processes in such a system are typically CPS, with vehicle hybrid dynamics, low-level engine control, and a high-level control loop where AI components are present in sensors, cameras, image and scene recognition modules that influence the coordination and decision making of the system to assure their autonomy. These modules are designed by training AI components (such as neural nets) that learn how to classify road conditions and react to them. </p>

                            <p>AI-CPS pose a number of design challenges. On one hand, AI techniques are “unpredictable” due to a lack of formal framework to provide safety guarantees. On the other hand, the existing CPS design methods, relying on rather fixed models (that is once a system is deployed, its structure and configuration are generally fixed), face a fundamental problem because AI-CPS are supposed to learn from experience and interactions with the environment, adapt and regulate their behaviors accordingly. It is imperative to ensure that their learning-enabled components work correctly because they may directly affect people’s lives and fortune. Self-driving car accidents caused by AI failures are striking real examples. In general, the outcomes of learning activities in AI components are not easily interpretable. When coupling CPS with AI, the increased heterogeneity in dynamics and behaviors can aggravate the reliability and explainability issues, if the learning activities are not properly formalized. </p>
                            
                            <p>"AI-intensive Cyber-Physical System CyPhAi" is a 5.5-year research project that tackles these problems on AI-CPS.  To achieve these objectives, we will combine formal methods from computer science with mathematical control theory, and we will use several tools from the field of functional analysis, differential equations, optimization, probability and statistics to solve our problems and establish mathematical rigor in our results. In particular we will develop mathematical concepts for measuring and sampling sets of AI-CPS behaviors, with respect to quantitative criteria (such as property satisfaction, control performance). These concepts are necessary for formal reasoning and extracting information from data, to learn hybrid processes and combine black-box (model-free and data-driven) and white box (model-based) approaches for validation, control, and online monitoring.</p>
                            
                            <p>The project consists of researchers in Japan (funded by JST) and France (funded by ANR).  The project is organized in 5 work packages that cover major problems in the design process: WP1-Learning for CPS, WP2-Learning within CPS, WP3-Validation of CPS and AI-CPS, WP4-Monitoring and Control for Enforcing Dependability and Performance constraints, WP5-Case Studies, Applications and Tools. </p>
                        </div>
                    <div class="filter-content__image">
                      <!-- <figure>
                        <img src=<?php echo get_template_directory_uri(); ?>/images/filter/pic_filter01.jpg" srcset=<?php echo get_template_directory_uri(); ?>/images/filter/pic_filter01.jpg 1x,/images/filter/pic_filter01@2x.jpg 2x" alt="">
                        <figcaption>フィルターは様々な分野で必要不可欠な存在</figcaption>
                      </figure> -->
                    </div>
                  </div>
                </div>
              </div>
            </section>
    
          </section>
    


    </main>
    <?php else:?>
      <main id="main" class="l-main">
        <section class="sec-content sec-case">
            <!-- <h2 class="common-title__center l-page__title"><span class="common-title__en">About</span><span class="arrow-icon"></span></h2> -->
    
            <section class="sec-child">
              <div class="l-container">
                <div class="block-inner">
                  <h2 class="title-head"><span>プロジェクト概要</span></h2>
                  <!-- <h4 class="title-blue"><span>About the project</span></h3> -->
                  <div class="filter-content">
                        <div class="l-container">
                          <figure><img src="<?php echo get_template_directory_uri(); ?>/images/about/about_01.png" alt=""></figure><p><strong>背景</strong>．人工知能 (AI) とデータ科学によって，センサー，ロボット，IoT 機器等の様々な機器を制御し管理するための情報システムは，より高度に自律的で，かつ不確実かつ動的に変化する環境にも適応可能なシステムへと大きく変化している．そのような情報システムの中でもサイバーフィジカルシステム (Cyber-Physical Systems; CPS) は <strong>AI 集約型 CPS</strong> (AI-intensive Cyber-Physical Systems;AI-CPS) へと変化を遂げつつある．自動運転車の近年の発展は，このような AI と CPS のシナジーを如実に物語る好例である．このようなシステムは (1) （その挙動が連続時間ダイナミクスとして記述され）車体の物理的挙動やエンジン制御を担う部分と，(2) （離散時間ダイナミクスとして記述され）全体的な挙動と意思決定に影響を与える高レベルの制御とを担う部分からなるハイブリッドシステム (HS) である．特に後者においてセンサ，カメラ，画像認識モジュール等には AI が用いられるようになっている．これらのコンポーネントは訓練されたニューラルネットワーク (NN) 等によって実現されており，道路状態の判断や状況に応じた意思決定が行われる．<br>AI-CPS の興隆によって CPS 設計における多くの課題が生じつつある．現状の機械学習に基づく Aの設計手法は，安全性を保証するための形式的な枠組みの研究が未熟なため，信頼性が低い．また，現在の CPS はデプロイ時に構成や設定を固定することが多いため，システムと環境との相互作用から学習を進め，環境に自らの振舞いを適合させることが期待されている AI-CPS の設計に向いていない．学習により設計されるコンポーネントが正しく動作することを保証する手法は，その誤動作が人命や財産に直接的に影響する場合があることを考えると，早急に研究を進めるべき課題である．一般に AI コンポーネントの学習結果は容易に解釈できず，また CPS を AI と組み合わせる際にはシステム全体の動作や振舞いが異種な部品の組み合わせで実現されるため，AI における「学習」の形式化なしには，信頼性や説明可能性に関する問題が困難となる．<br>これまでに研究されてきた「学習」を形式化するための手法は，連続時間ダイナミクスのみで記述されるシステムか離散時間ダイナミクスのみで記述されるシステムに対して研究されており，双方を含む HS に対する研究はアドホックな研究のみが少数行われている状況である． </p>
                            
                            <p class="u-mb-0"><strong>研究目的</strong>．以上に述べた課題の解決に加え，AI 研究の成果を現在の CPS 設計手法の改良に用いることを含めた，CPS と AI の組み合わせによる以下の研究の方向性を追究する．</p><ul>
  <li>モデル駆動設計手法とデータ駆動設計手法の組み合わせ．CPS 設計においてモデル駆動設計手法はシステムのホワイトボックスな数学的モデルを構築し自動的にシステムのデバッグ，検証，テスト，実装を行うことで信頼性を高めるための確立された手法であるが，AI-CPS ではモデル駆動な手法のみでは設計が困難であり，データ駆動手法が必要とされている．しかし，データ駆動で構築されたモデルは訓練データに存在するよく似たパターンを用いて予測をするブラックボックスであるため，モデル駆動設計で研究されてきた信頼性向上手法が適用できない．本研究では <strong>2 つの手法の長所を併せ持つグレーボックスな設計手法</strong>を研究する．</li>
<li>形式的な学習によって構築されるコンポーネントの開発．現在の AI 研究の成果を適用し，設計さ
れたシステムで用いることのできる効率的かつ安全性が保証されたヒューリスティクスを学習す
るための形式的な手法を研究する．</li>
</ul><p>上記目的の達成のため，本研究を以下の 5 つの work packages (WP) によって構成する．WP1: CPSのための機械学習; WP2: CPS における機械学習; WP3: CPS と AI-CPS の検証手法; WP4: システムの信頼性と性能を担保するためのモニタリングと制御手法; WP5: ケーススタディとアプリケーション・ツール構築．それぞれの WP において，情報科学分野で研究が進む形式手法と制御理論を組み合わせ，さらに単一のシステムとその挙動だけでなくシステムや挙動の集合を一度に扱うための数理的手法を研究する．これにより，AI-CPS の挙動の集合を量的な安全性基準（例えば安全性仕様の成否や制御における性能基準等）に基づいて評価したり確率分布からサンプリングしたりするための数学的基盤を確立する．この数学的基盤を形式的推論，ータからの情報抽出，データからの HS 記述の学習に用い，ブラックボックス的手法（モデル駆動設計）とホワイトボックス的手法（データ駆動設計）とを組み合わせた検証・制御・モニタリング手法に繋げる．</p>
                        </div>
                    <div class="filter-content__image">
                      <!-- <figure>
                        <img src=<?php echo get_template_directory_uri(); ?>/images/filter/pic_filter01.jpg" srcset=<?php echo get_template_directory_uri(); ?>/images/filter/pic_filter01.jpg 1x,/images/filter/pic_filter01@2x.jpg 2x" alt="">
                        <figcaption>フィルターは様々な分野で必要不可欠な存在</figcaption>
                      </figure> -->
                    </div>
                  </div>
                </div>
              </div>
            </section>
    
          </section>
    


    </main>
    <?php endif;?>
<!-- ここまでコンテンツ -->

<?php get_footer(); ?>

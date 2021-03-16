<?php
  /*
  Template Name: about
  */
  get_header();
?>

<!-- ここからコンテンツ -->

<main id="main" class="l-main">
        <section class="sec-content sec-case">
            <h2 class="common-title__center l-page__title"><span class="common-title__en">About</span><span class="arrow-icon"></span></h2>
    
            <section class="sec-child">
              <div class="l-container">
                <div class="block-inner">
                  <h2 class="title-head">About the project</h2>
                  <!-- <h3 class="title-blue"><span>About the project</span></h3> -->
                  <div class="filter-content">
                        <div class="l-container">
                          <figure><img src="<?php echo get_template_directory_uri(); ?>/images/about/about_01.png" alt=""></figure><p>Artificial intelligence (AI) and data sciences are revolutionizing information systems used for control and supervision of various devices (such as sensors, robots, IoT devices) with higher levels of autonomy and adaptability in uncertain and dynamically changing environments. Among such information systems are Cyber-Physical Systems (CPS) from which emerges a new generation of AI-intensive Cyber-Physical Systems (AI-CPS). Autonomous vehicles are examples to illustrate the synergy between CPS and AI. The physical processes in such a system are typically CPS, with vehicle hybrid dynamics, low-level engine control, and a high-level control loop where AI components are present in sensors, cameras, image and scene recognition modules that influence the coordination and decision making of the system to assure their autonomy. These modules are designed by training AI components (such as neural nets) that learn how to classify road conditions and react to them. </p>

                            <p>AI-CPS pose a number of design challenges. On one hand, AI techniques are “unpredictable” due to a lack of formal framework to provide safety guarantees. On the other hand, the existing CPS design methods, relying on rather fixed models (that is once a system is deployed, its structure and configuration are generally fixed), face a fundamental problem because AI-CPS are supposed to learn from experience and interactions with the environment, adapt and regulate their behaviors accordingly. It is imperative to ensure that their learning-enabled components work correctly because they may directly affect people’s lives and fortune. Self-driving car accidents caused by AI failures are striking real examples. In general, the outcomes of learning activities in AI components are not easily interpretable. When coupling CPS with AI, the increased heterogeneity in dynamics and behaviors can aggravate the reliability and explainability issues, if the learning activities are not properly formalized. </p>
                            
                            <p>"AI-intensive Cyber-Physical System CyPhAi" is a 5.5-year research project that tackles these problems on AI-CPS.  To achieve these objectives, we will combine formal methods from computer science with mathematical control theory, and we will use several tools from the field of functional analysis, differential equations, optimization, probability and statistics to solve our problems and establish mathematical rigor in our results. In particular we will develop mathematical concepts for measuring and sampling sets of AI-CPS behaviors, with respect to quantitative criteria (such as property satisfaction, control performance). These concepts are necessary for formal reasoning and extracting information from data, to learn hybrid processes and combine black-box (model-free and data-driven) and white box (model-based) approaches for validation, control, and online monitoring.</p>
                            
                            <p>The project consists of researchers in Japan (funded by JST) and France (funded by ANR).  The project is organized in 5 work packages that cover major problems in the design process: WP1-Learning for CPS, WP2-Learning within CPS, WP3-Validation of CPS and AI-CPS, WP4-Monitoring and Control for Enforcing Dependability and Performance constraints, WP5-Case Studies, Applications and Tools. </p>
                        </div>
                    <div class="filter-content__image">
                      <!-- <figure>
                        <img src="/images/filter/pic_filter01.jpg" srcset="/images/filter/pic_filter01.jpg 1x,/images/filter/pic_filter01@2x.jpg 2x" alt="">
                        <figcaption>フィルターは様々な分野で必要不可欠な存在</figcaption>
                      </figure> -->
                    </div>
                  </div>
                </div>
              </div>
            </section>
    
          </section>
    


    </main>

<!-- ここまでコンテンツ -->

<?php get_footer(); ?>

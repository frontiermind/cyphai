<ul class="content-article__list">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
global $cat_name; $terms = get_the_terms( get_the_ID(), $cat_name);?>
                    <li>
                        <a href="<?php the_permalink(); ?>">
                        <div class="content-article__img">
                            <figure>
                                <?php if(get_the_post_thumbnail_url()):?>
                                <img src="<?=get_the_post_thumbnail_url();?>" alt="">
                                <?php else:?>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/common/no_image.png" alt="">
                                <?php endif;?>
                            </figure>
                        </div>
                        <div class="content-article__txt">
                            <h3 class="content-article__title"><?php the_title(); ?></h3>
                            <div class="txt__sub">
                                <?php if(esc_html($terms[0]->name)):?>
                                    <p class="category">
                                        <span><?= esc_html($terms[0]->name); ?></span>
                                    </p>
                                <?php endif;?>
                                <p  class="time">
                                    <span><?php the_time('Y.m.d'); ?></span>
                                </p>
                            </div>
                        </div>
                        </a>
                    </li>
                <?php  endwhile;  endif;?>

                </ul>
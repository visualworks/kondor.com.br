<?php
global $themeple_config;
do_action('themeple_excecute_query_var_action','loop-single_portfolio_right');
//$metas = themeple_portfolio_custom_field(get_the_ID());
$metas = themeple_post_meta(get_the_ID());
$output = '';
?>


<?php

                        $used = themeple_post_meta(get_the_ID(), 'dynamic_top');
                        if(isset($used) && !empty($used) ){
                            $genDynamic = new GenerateDynamicTemplate($used);

                            $themeple_config['current_view'] = 'page';
                            $genDynamic->createView(); 
                            ?>
                            <section id="portfolio-single-widget-area-top">
                                
                                    <?php
                                    $genDynamic->display();
                                    ?>
                                
                            </section>   
                        <?php } ?>
<div class="row-fluid single_content">
    <div class="row-fluid">
            
            <div class="span4">
                <div class="row-fluid row-dynamic-el">
                    <div class="span12 about_project">
                        <?php echo do_shortcode(get_the_content() ) ?>
                       
                    </div>
                </div>
                <div class="row-fluid row-dynamic-el">
                   <div class="span12">
                    <ul class="single_portfolio_info single_side">
                        <?php   $op_metas = themeple_get_option('portfolio-meta');
                        
                            $nr_metas = count($op_metas);
                                
                        for($i = 0; $i < $nr_metas; $i++): ?>
                        
                            <li><span class="title"><?php echo $op_metas[$i]['meta'] ?></span><?php echo do_shortcode($metas['meta_'.($i+1)]) ?></li>
                        
                        <?php endfor; ?>
                            <li>
                                <span class="title"><?php _e('Share', 'themeple') ?></span>
                                <?php 
                                                       
                                                          $google_plus_shares = '<a href="https://plus.google.com/share?url='.get_permalink().'" target="_blank">'; 
                                                          $facebook_shares = '<a href="http://www.facebook.com/sharer.php?u='.get_permalink().'" target="_blank">';
                                                          $twitter_shares = '<a href="http://twitter.com/home?status='.get_the_title().' '.get_permalink().'" target="_blank">';
                                                          $linkedin_shares = '<a href="http://linkedin.com/shareArticle?mini=true&amp;url='.get_permalink().'&title='.get_the_title().'" target="_blank">';
                                                          $reddit_shares = '<a href="http://reddit.com/submit?url='.get_permalink().'&title='.get_the_title().'" target="_blank">';
                                                          $tumblr_shares = '<a href="http://www.tumblr.com/share/link?url='.get_permalink().'&name='.get_the_title().'&description='.get_the_content().'" target="_blank">';
                                                          $pinterest_shares ='<a href="http://pinterest.com/pin/create/button/?url='.get_permalink().'&description='.get_the_title().'&media='.wp_get_attachment_url(get_post_thumbnail_id()).'" target="_blank">';
                                                          $digg_shares ='<a href="http://www.digg.com/submit?url='.get_permalink().' " target="_blank">';
                                                          $mail_shares = '<a href="mailto:?subject='.get_the_title().'&body='.get_permalink().'">'; ?>

                                                    <ul class="shares">
                                                        
                                                        <?php $social_icons = themeple_get_option('social_icons');
                                                              

                                                         ?>       
                                                        <?php $i = 0; if(!empty($social_icons))  foreach($social_icons as $icon): if(isset($icon['social']) && $icon['sharebutton'] == 'yes' ): $i++; ?>
                                                                
                                                            <?php    $link_shares = ${$icon['social'].'_shares'}; ?>

                                                             <li class="<?php echo $icon['social'] ?>"><?php echo $link_shares; ?><i class="moon-<?php echo $icon['social'] ?>"></i></a></li>

                                                        <?php endif; if($i == 10) break; endforeach; ?>

                                                    </ul>
                            </li>
                        
                    </ul>
                           
                    <?php if(is_object(get_previous_post())): ?>
                        <a class="prev" href="<?php echo get_permalink(get_previous_post()->ID); ?>"><?php _e('Prev', 'themeple'); ?></a>
                    <?php endif; ?>
                    <?php if(is_object(get_next_post())): ?>
                        <a class="next" href="<?php echo get_permalink(get_next_post()->ID); ?>"><?php _e('Next', 'themeple'); ?></a>
                    <?php endif; ?>
                    
                </div>
                
            </div>
            </div>
            <div class="span8 slider_full">
            <?php $slider = new themeple_slideshow(get_the_ID(), 'flexslider');
                       
                                      if($slider && $slider->slide_number > 0 && themeple_post_meta(themeple_get_post_id(), '_slideshow_layout') == 'fixed'){
                          $slider->img_size = 'portfolio_side';
                                            $sliderHtml = $slider->render_slideshow();
                                            echo $sliderHtml;
                                      }
                       

             ?>
            </div>
        </div>

</div>
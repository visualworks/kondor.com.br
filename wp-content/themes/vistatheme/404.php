<?php

get_header();
$id = themeple_get_option('blogpage');
?>

<!-- Page Head -->
  <?php if(themeple_post_meta($id, 'page_header_bool') == 'yes'): 
            $extra_class = '';
            $extra_style = '';
            $font_color = themeple_post_meta($id, 'font_color');
            if(themeple_post_meta($id, 'header_type') == 'image'){
                $extra_style .= 'background-image:url('.themeple_post_meta($id, 'background_image').');background-repeat: no-repeat; ';
                $centered = themeple_post_meta($id, 'centered');
                if(isset($centered) && $centered == 'centered'){

                    $extra_style .= 'background-position:center; background-color:#f7f7f7;';
                    $extra_class .= ' colored_bg';

                }else{
                    $extra_style .= '-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;';
                    $extra_class .= ' background_image';
                }
                
            }else if(themeple_post_meta($id, 'header_type') == 'color'){
                $extra_class .= ' colored_bg';
                $extra_style .= ' background:'.themeple_post_meta($id, 'color_pick').';';
            }

           
    ?>
    <!-- Page Head -->
    <?php  ?>
   <div class="header_page <?php echo $extra_class ?>" style="<?php echo $extra_style ?>">
            
             <div class="container">
                <div class="row-fluid">
                    <div class="span6">
                        <h4 style="color:<?php echo $font_color ?>;"><?php _e('404 Not Found', 'themeple') ?></h4>
                    </div>
                    <div class="breadcrumbss">
                        
                        <ul class="page_parents pull-right">
                            <li><a href="<?php echo home_url() ?>" style="color:<?php echo $font_color ?>;">You are here: Home / </a></li>
                            
                            <?php for($i = count($page_parents) - 1; $i >= 0; $i-- ){ ?>

                            <li><a href="<?php echo get_permalink($page_parents[$i]) ?>" style="color:<?php echo $font_color ?>;"><?php echo get_the_title($page_parents[$i]) ?> </a></li>

                            <?php }  ?>
                            <li class="active"><a href="<?php echo get_permalink() ?>" style="color:<?php echo $font_color ?>;"><?php echo $title ?></a></li>

                        </ul>
                    </div>
                </div>
            </div>
            
    </div> 
   
    
    <?php endif; ?>
 


   
	    <section id="content">
	    	<div class="row-fluid row-dynamic-el" style=" margin-bottom:100px;">

                 <div class="container">

                      <div class="row-fluid">

                         <div class="row-fluid row-dynamic-el " style="">

                                 <div class="container">

                                       <div class="row-fluid">
                                                
                                          <div class="span12 dynamic_page_header not_found_error">

                                                    
                                                          <h1><?php _e('oops! 404 Error Page', 'themeple') ?></h1>
                                                          <div class="right_search_container">
                                                            <?php get_search_form(); ?>
                                                          </div>

                                                   
                                         </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                 </div>
               </div>

	    </section>
	
<?php
get_footer();


?>
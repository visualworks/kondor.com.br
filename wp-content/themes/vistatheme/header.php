<?php global $themeple_config; ?>

<!DOCTYPE html>

<html <?php language_attributes(); ?> class="css3transitions">
 
<head>

    <meta charset="<?php bloginfo( 'charset' ); ?>" />

    <?php  if (function_exists('themeple_favicon'))    { echo themeple_favicon(themeple_get_option('favicon')); } ?>

    <!-- Title -->

    <title><?php bloginfo('name'); ?> | <?php is_home() ? bloginfo('description') : wp_title(''); ?></title>

    <!-- Responsive Meta -->
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> 

    <!-- Pingback URL -->
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->

	<!--[if lt IE 9]>

	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>

	<![endif]-->

    <?php
    
    //Generated css from options
    include(THEMEPLE_BASE.'/template_inc/admin/register_styles.php'); 
    
    // Loaded all others styles and scripts.
    wp_head(); 	

    ?>

</head>

<!-- End of Header -->

<body  <?php body_class(); ?>>

<?php get_template_part('template_inc/menu', 'sticky'); ?>
<!-- Used for boxed layout -->
    <?php  
        $layout = themeple_get_option('overall_layout'); 
        if(( $layout == 'boxed' && !isset($_COOKIE['themeple_layout'])) || (isset($_COOKIE['themeple_layout']) && $_COOKIE['themeple_layout'] == 'boxed' )) { 
    ?>
<!-- Boxed Layout Wrapper -->
<div class="boxed_layout">

    <?php }  ?>
    

    <!-- Start Top Navigation -->
    <?php if( (themeple_get_option('top_widget') == 'yes' && !isset($_COOKIE['themeple_top_widget'])) || (isset($_COOKIE['themeple_top_widget']) && $_COOKIE['themeple_top_widget'] == 'yes') ): ?>
    <div class="top_nav">
        
        <div class="container">
            <div class="row-fluid">
                <div class="span8">
                    <div class="pull-left">
                        <?php dynamic_sidebar( "Top Header Left" ); ?>
                    </div>
                </div>
                <div class="span4">
                    <div class="pull-right">
                        <?php dynamic_sidebar( "Top Header Right" ); ?>
                    </div>
                </div>
               
            </div>
        </div>

    </div>
    <?php endif; ?>

    <!-- End of Top Navigation -->

    

    <!-- Page Background used for background images -->
    <div id="page-bg"><?php $bg_your_img = themeple_get_option('bg_your_img'); $bg_type = themeple_get_option('bg_type'); if(isset($bg_your_img) && $bg_your_img != '' && ($bg_type=='fixed' || isset($_COOKIE['themeple_background']))) echo '<img src="'.$bg_your_img.'" alt="" />' ?></div>
    
    <?php $header_class = get_selected_header(); ?>
    <?php if(isset($_COOKIE['themeple_header'])):
    	       $header_class = 'header_'.$_COOKIE['themeple_header'];
          endif; 
          $extra = '';
          if($header_class == 'header_3')
                $extra = 'background--dark';
    ?>

    <!-- Header BEGIN -->
    <div  class="header_wrapper <?php echo $header_class ?> <?php echo $extra ?>">
        <header id="header" class="">

            <div class="container">
        	   <div class="row-fluid">
                    <div class="span12">
                        
                    <?php if($header_class == 'header_5') : ?>
                          <div class="span4">
                    <?php endif; ?>

                        <!-- Logo -->
                        <?php if(!isset($css_class)) $css_class=''; ?>
                        <div id="logo" class="<?php echo $css_class ?>">
                            <?php echo themeple_logo() ?>
                            <span class="logo_desc"><?php echo themeple_get_option('desc_logo') ?></span>   
                        </div>
                        <!-- #logo END -->
    			       
                      <?php if($header_class == 'header_5') : ?>
                          </div><div class="span8"><?php dynamic_sidebar( "Header Right Widgetized" ); ?></div>
                      <?php endif; ?>    
                         

                        <!-- Search -->
                        <?php if($header_class != 'header_5'): ?>
                            <?php $right_search = themeple_get_option('right_search');

                                if($right_search == 'yes'): ?>

                                    <div class="header_search">
                                        <div class="right_search">
                                            <i class="moon-search-3"></i>
                                        </div>
                                        <div class="right_search_container"><?php get_search_form(); ?> </div> 
                                    </div>
                                <?php endif; ?>
                            <!-- End Search-->

                             <!-- Woocommerce Cart -->
                            <?php if(class_exists('Woocommerce')): ?>
                                        <?php get_template_part('template_inc/woocommerce','cart'); ?>
                            <?php endif; ?>
                        <?php endif; ?>
                        <!-- End Woocommerce Cart -->


                        <!-- Show for all header expect header 4 -->
    			         <?php if($header_class != 'header_5'): ?>
            			         
                                 <div id="navigation" class="nav_top pull-right  <?php echo $css_class ?>">
                                    <nav>
                                    <?php 
                                            $args = array("theme_location" => "main", "container" => false, "fallback_cb" => 'themeple_fallback_menu');
                                            wp_nav_menu($args);  
                                    ?>
                                    </nav>
                                </div><!-- #navigation -->
                                
    			         <?php endif; ?>
                         <!-- End custom menu here -->
    		    	     <a href="#" class="mobile_small_menu open"></a>
                    </div>
                </div>

                
              
            </div>
            

        </header>

         

        <?php if($header_class == 'header_5'): ?>
                            
                                 <div id="navigation" class="nav_top pull-right  <?php echo $css_class ?>">
                                    <div class="container"><div class="row-fluid"><div class="span12">
                                    <nav>
                                    <?php 
                                            $args = array("theme_location" => "main", "container" => false, "fallback_cb" => 'themeple_fallback_menu');
                                            wp_nav_menu($args);  
                                    ?>
                                    </nav>
                                     <!-- Woocommerce Cart -->
                                    <?php if(class_exists('Woocommerce')): ?>
                                                <?php get_template_part('template_inc/woocommerce','cart'); ?>
                                    <?php endif; ?>
                                    <?php $right_search = themeple_get_option('right_search');

                                        if($right_search == 'yes'): ?>

                                            <div class="header_search">
                                                <div class="right_search">
                                                    <i class="moon-search-3"></i>
                                                </div>
                                                <div class="right_search_container"><?php get_search_form(); ?> </div> 
                                            </div>
                                        <?php endif; ?>
                                    <!-- End Search-->

                                    

                                </div>
                            </div>

                                </div>

                            </div><!-- #navigation -->
                         
                <?php endif; ?>
       
        <div class="header_shadow"><span class="shadow1"></span></div>
       
        <!-- Responsive Menu -->
        <?php get_template_part('template_inc/menu', 'small'); ?>
        <!-- End Responsive Menu -->
    </div>
    <div class="top_wrapper">
    <?php if(themeple_post_meta(themeple_get_post_id(), 'page_creative_bool') == 'yes' && themeple_post_meta(themeple_get_post_id(), 'page_header_bool') == 'no'): ?>
    <!-- CREATIVE HEADER START -->
    <div class="creative_header">
        <div class="container">
                <div class="row-fluid">
                    <div class="span6"><h1><?php echo themeple_post_meta(themeple_get_post_id(), 'page_creative_big') ?></h1></div>
                    <div class="span6"><p><?php echo themeple_post_meta(themeple_get_post_id(), 'page_creative_desc') ?></p></div>
                </div>
        </div>
    </div>
    <!-- CREATIVE HEADER END -->
    <?php endif; ?>
    <?php get_template_part('template_inc/sliders_output'); ?>
<!-- .header -->
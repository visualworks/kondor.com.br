<?php

global $themeple_config;
$themeple_config['multi_entry_page'] = false;
$themeple_config['current_sidebar'] = themeple_get_option('single_post_sidebar_pos');
$spancontent = 12;
    if($themeple_config['current_sidebar'] == 'fullsize')
        $spancontent = 12;
    else
        $spancontent = 9;
get_header();
$themeple_config['current_view'] = 'blog';

    $highlight = themeple_post_meta(themeple_get_option('blogpage'), 'page_highlight');
    $title = get_the_title(themeple_get_option('blogpage'));
    $page_parents = page_parents();
    $blog_style = themeple_get_option('blog_style');
    $subtitle = themeple_post_meta(themeple_get_option('blogpage'), 'page_header_desc');
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
                        <h4 style="color:<?php echo $font_color ?>;"><?php echo $title ?></h4>
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

    <div class="container" id="blog">
        <div class="row">
    <?php if($themeple_config['current_sidebar'] == 'sidebar_left') get_sidebar() ?>   
        <div class="span<?php echo $spancontent ?>">

    

    <div class="posts_here">
    <?php
        get_template_part( 'template_inc/loop', 'index' );
    ?>
    </div> 

        <?php $name = themeple_post_meta(get_the_ID(), 'post_author_name'); if(!empty($name)): ?>
	    <div class="blog_post_author">
            <dl class="dl-horizontal">
                <dt>
                    <img src="<?php echo themeple_post_meta(get_the_ID(), 'post_author_img') ?>" alt="">
                </dt>
                <dd>
                    <h4><?php echo $name;  ?></h4>
                    
                    <p><?php echo themeple_post_meta(get_the_ID(), 'post_author_desc') ?></p>
                </dd>
            </dl>
        </div>
        <?php endif; ?>
        
        <?php
            $layout = themeple_post_meta(get_the_ID(), 'layout');

            if(!empty($layout)){
                $l = explode("-", $layout);
                if($l[0] == 'dynamic_template'){
                    $themeple_config['current_view'] = 'page';
                    $genDynamic = new GenerateDynamicTemplate($layout);
                    $genDynamic->createView(); 
                    echo  '<section id="post-single-widget-area">';
                                
                    $genDynamic->display();
                                
                    echo '</section>';
                }
            }
        ?>
       


        <?php comments_template( '/template_inc/comments.php');  ?>
	    <?php 

            $defaults = array(
                'before'           => '<p>',
                'after'            => '</p>',
                'link_before'      => '',
                'link_after'       => '',
                'next_or_number'   => 'number',
                'separator'        => ' ',
                'nextpagelink'     => __( 'Next' ),
                'previouspagelink' => __( 'Prev' ),
                'pagelink'         => '%',
                'echo'             => 1
            );
            wp_link_pages($defaults);

        ?>
        </div> 
  
<?php
    wp_reset_query();    
    $themeple_config['current_view'] = 'blog';
    if($themeple_config['current_sidebar'] == 'sidebar_right') get_sidebar();
?>
       
            </div>
    
</section>
<?php
    get_footer();


?>
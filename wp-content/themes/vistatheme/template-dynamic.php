<?php
global $themeple_config;
$post_id = themeple_get_post_id();
$used_template = themeple_post_meta($post_id);
$genDynamic = new GenerateDynamicTemplate($used_template['layout']);

$themeple_config['current_view'] = 'page';
$genDynamic->createView();
get_header();
do_action( 'themeple_excecute_query_var_action' , 'template-dynamic' );
    $extra_ = '';
    $themeple_config['current_sidebar'] = $genDynamic->layout;
    
    $spancontent = 12;
    if($themeple_config['current_sidebar'] == 'fullsize')
        $spancontent = 12;
    else{
        $spancontent = 9;
        $extra_ = 'sidebar_page';
    }
    ?>
    
<?php
            
            $title = get_the_title();
            $page_parents = page_parents();
            $blog_style = themeple_get_option('blog_style');
            
        ?>

    <?php if(themeple_post_meta(themeple_get_post_id(), 'page_header_bool') == 'yes'): 
            $extra_class = '';
            $extra_style = '';
            $font_color = themeple_post_meta(themeple_get_post_id(), 'font_color');
            if(themeple_post_meta(themeple_get_post_id(), 'header_type') == 'image'){
                $extra_style .= 'background-image:url('.themeple_post_meta(themeple_get_post_id(), 'background_image').');background-repeat: no-repeat; ';
                $centered = themeple_post_meta(themeple_get_post_id(), 'centered');
                if(isset($centered) && $centered == 'centered'){

                    $extra_style .= 'background-position:center; background-color:#f7f7f7;';
                    $extra_class .= ' colored_bg';

                }else{
                    $extra_style .= '-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;';
                    $extra_class .= ' background_image';
                }
                
            }else if(themeple_post_meta(themeple_get_post_id(), 'header_type') == 'color'){
                $extra_class .= ' colored_bg';
                $extra_style .= ' background:'.themeple_post_meta(themeple_get_post_id(), 'color_pick').';';
            }

           
    ?>
    <!-- Page Head -->
    <?php  ?>
   <div class="header_page <?php echo $extra_class ?> " style="<?php echo $extra_style ?>">
            
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
   
    <section id="content" class="<?php echo $extra_; ?> <?php echo $extra_ ?> page-<?php echo $genDynamic->template_type ?> sequentialchildren <?php if(get_option('section_first') == 'yes') echo 'section_first'; ?> <?php if(get_option('section_last') == 'yes') echo 'section_last'; ?>">
        <?php if(themeple_post_meta(themeple_get_post_id(), 'page_creative_bool') == 'yes' && themeple_post_meta(themeple_get_post_id(), 'page_header_bool') == 'yes'): ?>
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
        <?php if($spancontent == 9): ?>
		<div class="container">
	 <?php endif; ?>

            <div class="row-fluid">
        <?php if($themeple_config['current_sidebar'] == 'sidebar_left') get_sidebar() ?>
               
            
               <div class="span<?php echo $spancontent ?>">
               
        <?php
            $genDynamic->display();
        ?>
                
                </div>
             
        <?php if($themeple_config['current_sidebar'] == 'sidebar_right') get_sidebar() ?>
            </div>
         <?php if($spancontent == 9): ?>
	  	</div>
	  <?php endif; ?>
    </section>
<?php

get_footer();
    
?>
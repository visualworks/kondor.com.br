<?php

global $themeple_config;
    
    get_header();
    $extra_ = '';
    if(empty($themeple_config['current_portfolio']['portfolio_columns'])) $themeple_config['current_portfolio']['portfolio_columns'] = 3;
    $portfolio_layout = $themeple_config['current_portfolio']['portfolio_layout'];
    $show_type = $themeple_config['current_portfolio']['show_type'];
    $spancontent = 12;
    $themeple_config['current_sidebar'] = $portfolio_layout;
    if($portfolio_layout =='fullsize')
        $spancontent = 12;
    else{
        $spancontent = 9;
        $extra_ = 'sidebar_page';
    }
    $categoriesArray = "";
	if(isset($themeple_config['new_query']['tax_query'][0]['terms'])) 
        $categoriesArray = $themeple_config['new_query']['tax_query'][0]['terms'];
	$themeple_config['current_view'] = 'portfolio';
    
    $portfolio_columns = $themeple_config['current_portfolio']['portfolio_columns'];
	$args = array(
	
		'taxonomy'	=> 'portfolio_entries',
		'hide_empty'=> 0,
		'include'	=> $categoriesArray
	
	);
    $themeple_config['multi_entry_page'] = true;
	$categories = get_categories($args);
            
            $title = get_the_title();
            $page_parents = page_parents();
            $subtitle = themeple_post_meta(themeple_get_post_id(), 'page_header_desc');
            
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
    <section id="content" class="content_portfolio <?php echo $extra_ ?> layout-<?php echo $portfolio_layout ?>" style="background-color:<?php echo $themeple_config['current_portfolio']['portfolio_bg_color'] ?>;">
    	<div class="container">
        	<div class="row-fluid">
    <?php
    
    if(count($categories) > 0 && $themeple_config['current_portfolio']['show_type'] != 'masonry'){
        echo '<!-- Portfolio Filter --><nav id="portfolio-filter" class="span12">';
            echo '<span class="title">'.__('Filter', 'themeple').'</span><span class="div"></span>';
            echo '<ul class="">';
                echo '<li class="active all"><a href="#"  data-filter="*">'.__('View All', 'themeple').'</a></li>';
                
            foreach($categories as $cat):
                
                    echo '<li class="other"><a href="#" data-filter=".'.$cat->category_nicename.'">'.$cat->cat_name.'</a></li>';    
                
            endforeach;
            
            echo '</ul>';
            
        echo '</nav>';
    }
            echo '</div>';
    $grid = 'three-cols';
    switch($portfolio_columns){
        case '3':
            $grid = 'three-cols';
            break;
        case '2':
            $grid = 'two-cols';
            break;
        case '4':
            $grid = 'four-cols';
            break;
        case '1':
            $grid = 'one-cols';
            break;
    }
    ?>
        <div class="row-fluid">
        <?php if($portfolio_layout == 'sidebar_left') get_sidebar() ?>
            <section id="portfolio-preview-items" class="<?php echo $grid ?> span<?php echo $spancontent ?>">
            <?php
                if($show_type == 'normal_mode')
                    get_template_part('template_inc/loop', 'portfolio-grid');
                else if($show_type == 'list')
                    get_template_part('template_inc/loop', 'portfolio-list');
                else if($show_type == 'masonry')
                    get_template_part('template_inc/loop', 'portfolio-masonry');
                wp_reset_query();
                
            ?>
            </section>
        <?php if($portfolio_layout == 'sidebar_right') get_sidebar() ?>
<?php
    echo '</div></div></section>';
    get_footer();
?>
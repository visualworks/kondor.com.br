<?php

global $themeple_config;

    

    do_action( 'themeple_routing_template' , 'page' );

    $themeple_config['current_view'] = 'woocommerce';

    $meta = themeple_post_meta(themeple_get_post_id());

   
    if(isset($meta['layout']))

        $themeple_config['current_sidebar'] = $meta['layout'];

    if(!isset($themeple_config['current_sidebar']))
        $themeple_config['current_sidebar'] = 'fullsize';

    $spancontent = 12;

    if(isset($themeple_config['current_sidebar']) && $themeple_config['current_sidebar'] == 'fullsize')

        $spancontent = 12;

    elseif(isset($themeple_config['current_sidebar']) && ($themeple_config['current_sidebar'] == 'sidebar_left' || $themeple_config['current_sidebar'] == 'sidebar_right'))

        $spancontent = 9;

    get_header();

    

    

    ?>

    

        <?php

            

            $title = get_the_title(themeple_get_post_id() );

            $page_parents = page_parents();

            $subtitle = themeple_post_meta(themeple_get_post_id(), 'page_header_desc');
            $id = themeple_get_post_id();
        ?>

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

        

    

   <section id="content"  <?php if(themeple_post_meta(themeple_get_post_id(), 'page_header_bool') == 'no'): echo 'style=""'; endif; ?> >

        <div class="container <?php echo $themeple_config['current_sidebar'] ?>" id="woocommerce">

            <div class="row">

    <?php if(isset($themeple_config['current_sidebar']) && $themeple_config['current_sidebar'] == 'sidebar_left') get_sidebar() ?>   

        <div class="span<?php echo $spancontent ?>">

    <?php



            woocommerce_content();

    ?>



        </div>

<?php

    wp_reset_query();    

    

    if(isset($themeple_config['current_sidebar']) && $themeple_config['current_sidebar'] == 'sidebar_right') get_sidebar();

?>



            </div>

        </div>



</section>



    <?php

    get_footer();



?>
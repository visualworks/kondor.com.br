<?php



global $themeple_config;



do_action('themeple_excecute_query_var_action','loop-index');



$avatar_bool = themeple_get_option('avatar_bool');
if(isset($_COOKIE['authimg']) && !empty($_COOKIE['authimg']) )
    $avatar_bool = $_COOKIE['authimg'];


if (have_posts()) :



    $i = 0;



	while (have_posts()) : the_post();



        $grid_blog_columns = themeple_get_option('grid_blog_columns');
        if(isset($_COOKIE['masonry_cols']) && !empty($_COOKIE['masonry_cols']) )
            $grid_blog_columns = $_COOKIE['masonry_cols'];


        $i++;



        if( ($i % $grid_blog_columns) == 1 && $i != 1){

            echo '</div>';

            echo '<div class="row-fluid grid_row">';

        }

        if($i == 1){

            echo '<div class="row-fluid grid_row">';

        }



        $post_id    = get_the_ID();



        $title   	= get_the_title();



        $content 	= get_the_content();



        $content    = str_replace(']]>', ']]&gt;', apply_filters('the_content', $content ));



                



        $post_format = get_post_format($post_id);



        if(strlen($post_format) == 0)



            $post_format = 'standart';



        $count = 0;



        $comment_entries = get_comments(array( 'type'=> 'comment', 'post_id' => $post->ID ));



        if(count($comment_entries) > 0){



            foreach($comment_entries as $comment){



                if($comment->comment_approved)



                    $count++;



            }



        }

        $item_grid_class = 4;

        switch($grid_blog_columns){

            case "1": $item_grid_class = 12; break;

            case "2": $item_grid_class = 6; break;

            case "3": $item_grid_class = 4; break;

            case "4": $item_grid_class = 3; break;

        }

        ?>



        



        <article id="post-<?php echo the_ID(); ?>" <?php echo post_class('span'.$item_grid_class.' blog-article grid normal'); ?>>                    



           

	     <?php if($post_format == 'standart'){

			$icon_class="pencil";

		    }elseif($post_format == 'audio'){

		    	$icon_class="music";

		    }elseif($post_format == 'soundcloud'){

		    	$icon_class="music";

		    }elseif($post_format == 'video'){

		    	$icon_class="play";

		    }elseif($post_format == 'quote'){

		    	$icon_class="quote-left";

		    }elseif($post_format == 'gallery'){

		    	$icon_class="image";

		    }elseif($post_format == 'image'){

                $icon_class="images";

            }else

                $icon_class="pencil";





	     ?>

		 

					<?php if($post_format == 'audio' || $post_format == 'gallery' || $post_format == 'video' || get_post_thumbnail_id()): ?>

                                <div class="row-fluid">



                                    <div class="span12">



                                        <div class="media">

							                 

                                            <?php if($post_format == 'audio'){ ?>



                                                





                                                <?php echo do_shortcode('[soundcloud]'.get_the_excerpt().'[/soundcloud]'); ?>











                                            <?php }elseif($post_format == 'gallery'){ ?>



                                                  







                                                  <?php $slider = new themeple_slideshow(get_the_ID(), 'flexslider');



               



                                                  if($slider && $slider->slide_number > 0){



                                                        $slider->img_size = $grid_blog_columns.'_col_image';

                                                        $sliderHtml = $slider->render_slideshow();



                                                        echo $sliderHtml;



                                                  }?>











                                            <?php }elseif($post_format == 'video'){ ?>







                                               



                                                <?php $video = ""; if(themeple_backend_is_file( get_the_excerpt(), 'html5video'))



                                                {



                                                    $video = themeple_html5_video_embed(get_the_excerpt());



                                                }



                                                else if(strpos(get_the_excerpt(),'<iframe') !== false)



                                                {



                                                    $video = get_the_excerpt();



                                                }



                                                else



                                                {



                                                    global $wp_embed;



                                                    $video = $wp_embed->run_shortcode("[embed]".trim(get_the_excerpt())."[/embed]");



                                                }



                                                



                                                if(strpos($video, '<a') === 0)



                                                {



                                                    $video = '<iframe src="'.get_the_excerpt().'"></iframe>';



                                                } 



                                                echo $video;



                                                ?>

						  

							

							



					         

							

                                            <?php } elseif(get_post_thumbnail_id()){ ?>



                                           





                                               

                                                <img src="<?php echo themeple_image_by_id(get_post_thumbnail_id(), $grid_blog_columns.'_col_image', 'url') ?>" alt="">
                                                
                                            

                                            <?php } ?>
                                           
                                        </div>

                                    </div>

                                </div>

				    <?php endif; ?>

                                <div class="row-fluid">

                                    <div class="span12">

                                        <div class="content post_format_<?php echo $post_format ?>" >

                                             <?php $ex_class = ''; ?>

                                            <div class="top_c <?php echo $ex_class ?>">
                                                <h3><a href="<?php echo get_permalink() ?>"><?php echo get_the_title() ?></a></h3>
                                                
                                              
                                                    
                                                <?php $tags = get_the_category(); ?>
                                                 

                                            
                                                <ul class="info">
                                                  <li><?php echo get_the_date() ?></li>
                                               
                                                  <li><?php echo $tags[0]->name ?></li>
                                                  
                                                  <li><?php echo $count ?> <?php _e('Comments', 'themeple') ?></li>
                                                </ul>
                                            </div>
                                            <div class="blog-content">        
                                                        
                                                        <?php if($post_format == 'quote'){

                                                                echo '<div class="themeple_sc"><div class="themeple_blockquote">'.themeple_text_limit(get_the_content(), 22).'</div></div>';

                                                                }else{ ?>

                                                                <?php if(is_single()){ ?>

                                                                            <?php the_content() ?>

                                                                <?php }else{

                                                                            if($post_format == 'video' || $post_format == 'audio')

                                                                                echo themeple_content(25);

                                                                            else

                                                                                echo themeple_text_limit(get_the_excerpt(), 25);
                                                                            
                                                                            
                                                                            
                                                                } ?>

                                                                <?php } ?>
                                            </div>

                                        </div>

                                        

                                    </div>

                                </div>

               

        </article>









                            



                    



                



        



        



        <?php



        if($wp_query->found_posts == $i)

            echo '</div>';



    endwhile; ?>



    <div class="p_pagination">

    

        <?php wpbeginner_numeric_posts_nav(); ?>

        <div class="pull-right">

            <div class="nav-previous"><?php next_posts_link( 'Next Page' ); ?></div>

            <div class="nav-next"><?php previous_posts_link( 'Previous Page' ); ?></div>

        </div>

    </div>



<?php endif;







?>
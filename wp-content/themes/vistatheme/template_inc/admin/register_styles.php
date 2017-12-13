<?php

global $controller;

$options = $controller->options;

$styles = $options['themeple'];

if(isset($_COOKIE['themeple_skin'])){

	include(THEMEPLE_BASE.'/template_inc/admin/register_skins.php');

	if(is_array($predefined[$_COOKIE['themeple_skin']]) && count($predefined[$_COOKIE['themeple_skin']]) > 0 ){

		foreach($predefined[$_COOKIE['themeple_skin']] as $el_id => $value){

			$styles[$el_id] = $value;

		}

	}

}
if(isset($_COOKIE['themeple_color_skin'])){

  include(THEMEPLE_BASE.'/template_inc/admin/register_skins.php');

  if(is_array($skin[$_COOKIE['themeple_color_skin']]) && count($skin[$_COOKIE['themeple_color_skin']]) > 0 ){

    foreach($skin[$_COOKIE['themeple_color_skin']] as $el_id => $value){

      $styles[$el_id] = $value;

    }

  }

}

extract($styles);
if(isset($_COOKIE['themeple_pattern']) && $_COOKIE['themeple_pattern'] != '')
    $bg_img = $_COOKIE['themeple_pattern'];
?>



<style type="text/css">
  
	body{background: <?php echo $bg_color ?> 

	<?php if($bg_img != 'none' && $bg_your_img == '' && ((themeple_get_option('overall_layout') == 'boxed' && !isset($_COOKIE['themeple_layout'])) || (isset($_COOKIE['themeple_layout']) && $_COOKIE['themeple_layout'] == 'boxed' ))){ ?>
    
		url('<?php echo get_template_directory_uri(); ?>/themeple_framework/images/pattern/<?php echo $bg_img ?>.png') repeat;

	<?php } ?>

  <?php if($bg_your_img != '' && $bg_type == 'repeat'): ?>

    url('<?php echo $bg_your_img ?>') repeat;

  <?php endif; ?>

	}
  .boxed_layout{background: <?php echo $bg_color ?>;}

	input,button,select,textarea,body,span, aside .widget_twitter li,.ui-slider-tabs-list li a span, aside ul li a, nav .menu li ul.sub-menu li a, .skill_title, .masonry_filter ul li a{font-family: <?php if($font_page == 'standart') echo '"Helvetica Neue", Helvetica, Arial, sans-serif'; else echo $font_page ?>;  }
  input,button,select,textarea,body, aside .widget_twitter li, aside ul li a{ font-size: <?php echo $font_size_page ?>px; color:<?php echo $body_font_color ?>; font-weight:<?php echo $body_font_weight ?> }
	h1, h1 a{font-family: <?php if($font_headings == 'standart') echo '"Helvetica Neue", Helvetica, Arial, sans-serif'; else echo $font_headings ?>; color: <?php echo $font_color_1; ?>; font-size: <?php echo $font_size_1 ?>px}
  h2{font-family: <?php if($font_headings == 'standart') echo '"Helvetica Neue", Helvetica, Arial, sans-serif'; else echo $font_headings ?>; color: <?php echo $font_color_2; ?>; font-size: <?php echo $font_size_2 ?>px}
  h3, h3 a{font-family: <?php if($font_headings == 'standart') echo '"Helvetica Neue", Helvetica, Arial, sans-serif'; else echo $font_headings ?>; color: <?php echo $font_color_3; ?>; font-size: <?php echo $font_size_3 ?>px}
  h4, h4 a{font-family: <?php if($font_headings == 'standart') echo '"Helvetica Neue", Helvetica, Arial, sans-serif'; else echo $font_headings ?>; color: <?php echo $font_color_4; ?>; font-size: <?php echo $font_size_4 ?>px}
  h5, aside ul li a, h5 a{font-family: <?php if($font_headings == 'standart') echo '"Helvetica Neue", Helvetica, Arial, sans-serif'; else echo $font_headings ?>; color: <?php echo $font_color_5; ?>; font-size: <?php echo $font_size_5 ?>px}
  h6, .blog-article .info li{font-family: <?php if($font_headings == 'standart') echo '"Helvetica Neue", Helvetica, Arial, sans-serif'; else echo $font_headings ?>; color: <?php echo $font_color_6; ?>; font-size: <?php echo $font_size_6 ?>px}
  .social_subscribers > div .data .title, .single-post .tags_social span.share_title, #portfolio-filter .title, #portfolio-filter li a, .latest_blog_filter .header ul li a , .widget_price_filter .price_label, .row-dynamic-el .header h6,.themeple_sc .header h6, aside h6.widget-title, h6.el-title{color:<?php echo $font_color_6 ?>;}
  .social_subscribers > div .data .counter, aside .widget_most_popular dd a, .single-post .tags_social .shares li a, ul.products .product h5, .woocommerce-pagination ul li a, .tabbable.style_1 .nav-tabs li a, .btn-non-bg, .services_creative .wrapper .item .title, .accordion.style_1 .accordion-heading .accordion-toggle, .skill .skill_title{color:<?php echo $font_color_5 ?>;}
	.single_portfolio_info .shares li i{color:<?php echo $body_font_color ?>;}
  .contact_info_social .footer_social_icons i{color:<?php echo $body_font_color ?>;}


	
  nav .menu li a, .right_search i, .right_search_container .more, .header_wrapper .cart .cart_icon i, header#header .cart .cart_icon i, .sticky_menu .cart .cart_icon i, header#header .cart .content .cart_item .description .title, .sticky_menu .cart .content .cart_item .description .title{color:<?php echo $nav_font_color ?>;}
  nav .menu li ul.sub-menu li a, .widget_contact_details .address span > span, .widget_contact_details .phone span > span, .widget_contact_details .email span > span, .contact_info_social span > span{color:<?php echo $submenu_font_color ?>}
  nav .menu > li > ul.sub-menu, nav .menu > li > ul.sub-menu ul, .themeple_custom_menu_mega_menu{background:<?php echo $submenu_background_color ?>}
  nav .menu li > ul.sub-menu li{background-color:<?php echo $submenu_background_color ?>}
  nav .menu li ul.sub-menu li:hover>a, nav .menu li ul.sub-menu li li:hover>a{color:<?php echo $submenu_font_color_hover ?>;}
  nav .menu .sub-menu li.current-menu-item a, .side-nav .current_page_item a{color:<?php echo $base_color; ?>}

  .top_nav .social_widget li i:hover{color:<?php echo $base_color; ?>}
  .sticky_menu{background: <?php echo $header_bg_color ?>;}
  <?php
    $header_rgb = HexToRGB($header_bg_color); 
  ?>
  .header_1, .header_4, .header_5{background: <?php echo $header_bg_color ?>;}
  .header_2{background:rgba(<?php echo $header_rgb['r'] ?>, <?php echo $header_rgb['g'] ?>, <?php echo $header_rgb['b'] ?>, 0.9);}

  .top_nav, .top_nav #lang_sel ul ul li{background:<?php echo $topnav_background_color ?>; color: <?php echo $topnav_font_color ?>;}
  .top_nav, .top_nav #lang_sel ul ul li a, .top_nav a{color:<?php echo $topnav_font_color ?> !important;}
  
  .top_nav .little_icon i {color: <?php echo $topnav_icons_color ?>}

   .top_nav #lang_sel ul ul li {border: 1px solid <?php echo $topnav_separator_color; ?> ;}

  footer#footer .inner{background: <?php echo $footer_bg_color ?>; color: <?php echo $footer_font_color ?>;}
  #copyright{background: <?php echo $footer_copyright_bg ?>;}
  /** E1e1*/
  .tabbable.style_1 .nav-tabs{border-bottom:1px solid <?php echo $large_dividers_color ?>;}
  aside .widget-title-container:after, .el-title-container:after, .row-dynamic-el .header:after, .themeple_sc .header:after{background:<?php echo $large_dividers_color ?>;}
  .comment .comment_text, #respond input[type="text"], #respond textarea, aside #s, #woocommerce .with_thumbnails .attachment-shop_single, .coupon input, .shipping-calculator-form select, .shipping-calculator-form input[type='text'], .row-dynamic-el .pagination a,.row-fluid .pagination a, .services_creative .wrapper .item, .accordion.style_1 .accordion-group{border:1px solid <?php echo $large_dividers_color ?>}
  .tabbable.style_1 .nav-tabs li{border-bottom:1px solid <?php echo $large_dividers_color ?>; border-right:1px solid <?php echo $large_dividers_color ?>; border-top:1px solid <?php echo $large_dividers_color ?>;}
  .tab-content{border-bottom: 1px solid <?php echo $large_dividers_color ?>; border-left:1px solid <?php echo $large_dividers_color ?>; border-right:1px solid <?php echo $large_dividers_color ?>;}
  .tabbable.style_1 .nav-tabs li:first-child{border-left:1px solid <?php echo $large_dividers_color ?>;}
  .services_medium:after, .row-dynamic-el .pagination a,.row-fluid .pagination a, .themeple_sc .header .pagination a{background:<?php echo $large_dividers_color ?>;}
  .themeple_sc .header .pagination a{border:2px solid <?php echo $large_dividers_color ?>;}
  header#header .cart .content .cart_item, .sticky_menu .cart .content .cart_item, .header_wrapper .cart .content .cart_item{border-bottom:1px solid <?php echo $large_dividers_color ?>;}
  header#header .cart .cart_icon.cart_icon_active i, .header_wrapper .cart .cart_icon.cart_icon_active i ,.sticky_menu .cart .cart_icon.cart_icon_active i{color:<?php echo $base_color;?>}
  .code, .side-nav{border:1px solid <?php echo $large_dividers_color ?>;}
  .tabs-left .tab-content, .tabbable.tabs-left.style_1 .nav-tabs li, .contact_form input[type="text"], .contact_form select, .contact_form textarea {border:1px solid <?php echo $large_dividers_color ?> !important; }
  .divider__.solid_border, .widget_contact_details li, .side-nav li{border-bottom:1px solid <?php echo $large_dividers_color ?>;}
 
  

  /* E1e1e1 */

  .single-post .tags_social, #woocommerce .product .product_meta, .header_5_body .header_5 #navigation{border-top:1px solid <?php echo $more_dark_borders ?>;}
  aside .tagcloud a, .p_pagination .pagi a, .p_pagination .nav-previous a, .p_pagination .nav-next a, .single_content .prev, .single_content .next, .ordering-container .dropdown, .ordering-container .dropdown > li:hover > ul, .woocommerce-pagination ul li a, .woocommerce .widget_price_filter .price_slider_amount .button,.woocommerce-page .widget_price_filter .price_slider_amount .button, .single-product .prev, .single-product .next, .btn-non-bg, .services_medium_box .content_box{border:1px solid <?php echo $more_dark_borders ?>;}
  .quantity .minus, .quantity .qty, .quantity .plus{border-top:1px solid <?php echo $more_dark_borders ?>;border-left:1px solid <?php echo $more_dark_borders ?>;border-bottom:1px solid <?php echo $more_dark_borders ?>; border-right:0;}
  .quantity .plus{border-right:1px solid <?php echo $more_dark_borders ?>;}
   header#header .cart .content .cart_item img, .sticky_menu .cart .content .cart_item img, .blog_post_author{border:1px solid <?php echo $more_dark_borders; ?>}
   header#header .items .cart_item:last-child, .sticky_menu .items .cart_item:last-child, .header_5_body .header_5 #navigation{border-bottom:1px solid <?php echo $more_dark_borders; ?>;}
   
   /* Ebeb */
  .sidebar#widgetarea-sidebar, #portfolio-preview-items .portfolio-item, ul.products .product{border:1px solid <?php echo $other_borders ?>;}
   .blog-article .info, .product_list_widget li{border-bottom:1px solid <?php echo $other_borders ?>;}
   .woocommerce-pagination, .blog-article .info{border-top:1px solid <?php echo $other_borders ?>;}
   .woocommerce table.shop_table th,.woocommerce-page table.shop_table th,  {border-bottom:1px solid <?php echo $other_borders ?>;}
   .woocommerce-message, .woocommerce-info{border:1px solid <?php echo $other_borders;?>}
   .el_intro .divider, .skill, ul.default_list.check li:after{background:<?php echo $other_borders ?>;}
  .themeple_sc .themeple_blockquote{border-left:5px solid <?php echo $base_color ?>;}
  /* ebebeb */

  .header_1 nav li.current-menu-item a, footer .widget_most_popular ul li:hover a, #copyright .social_widget li:hover i, aside .widget ul li a:hover, .blog-article h1 a:hover, a.read_m, .single-post .tags_social .shares li a:hover, .comment_info ul li a:hover, #portfolio-filter ul li a:hover,#faq-filter ul li a:hover,.latest_blog_filter .header ul li a:hover , #portfolio-filter ul li.active a, #faq-filter ul li.active a,.latest_blog_filter .header ul li.active a, .portfolio-item .project h6, .portfolio-item .project h3 a:hover, .single_portfolio_info .shares li a:hover i, ul.products .product .price ins span, #woocommerce .product .price span, ul.products .product .price span, ul.products .product h5:hover, .product_list_widget li ins span, .product_list_widget li > .amount, .single-product .product .price span, .single-product .socials .shares li a:hover i, .tabbable.style_1 .nav-tabs li.active a, .star-rating span, .single-product .entry-summary .rating-container .star-rating, .services_medium i, .services_medium h6, a:hover, .el_intro h6, .plain_text .small_title, .services_creative .wrapper .item.selected i, .services_creative .wrapper .item.selected .title, .services_creative .wrapper .item:hover i, .services_creative .wrapper .item:hover .title, .single_testimonial h6, .one-staff .position, .one-staff .social_widget ul li:hover i, .services_media h4 a, .accordion.style_1 .accordion-heading.in_head .accordion-toggle, .textbar-container h6, .services_medium_box .icon_box i, .skill_title .big_percentage, ul.default_list.check li:before, .header_2 nav .menu li.current-menu-parent > a, .header_4 nav .menu li.current-menu-parent > a{color:<?php echo $base_color ?>}
  footer .widget_most_popular ul li:hover .img, footer .widget_flickr .flickr_badge_image:hover, aside .tagcloud a:hover, .p_pagination .pagi a:hover, .p_pagination .pagi a.selected, .p_pagination .nav-next a:hover, .p_pagination .nav-previous a:hover, .woocommerce-pagination ul li span.current, #woocommerce .product .with_thumbnails_container .with_thumbnails_carousel li:hover, #woocommerce .product .with_thumbnails_container .with_thumbnails_carousel li.flex-active-slide, .services_medium .icon_wrapper, .services_medium .icon_up, .services_creative .wrapper .item.selected, .services_creative .wrapper .item:hover, .services_medium_box .icon_box,  .services_medium_box:hover .content_box{border:1px solid <?php echo $base_color ?>;}
  .btn-non-bg:hover, .pagi ul li.selected a{border:1px solid <?php echo $base_color ?> !important;}
  aside .widget-title-container span, .el-title-container span, aside .tagcloud a:hover,  .p_pagination .pagi a:hover, .p_pagination .pagi a.selected, .p_pagination .nav-next a:hover, .p_pagination .nav-previous a:hover, #respond input[type="submit"], #portfolio-filter .div,#faq-filter .div, ul.products .product .onsale, .woocommerce-pagination ul li span.current, .woocommerce .widget_price_filter .ui-slider .ui-slider-handle,.woocommerce-page .widget_price_filter .ui-slider .ui-slider-handle, .ui-slider-tabs-list li.selected, .ui-slider-left-arrow, .ui-slider-right-arrow, .ui-slider-left-arrow.edge:hover, .ui-slider-right-arrow.edge:hover, .btn-system, #bbpress-forums .button.submit, .wpcf7-submit, .row-dynamic-el .header .colored_div, .themeple_sc .header .colored_div, .one-staff h4:after, .services_medium_box:hover .content_box, .news_slider .captionss .flex-caption, .featured_news .captionss p, .services_medium:hover .icon_wrapper{background:<?php echo $base_color ?>;}
  .btn-non-bg:hover, .pagi ul li.selected a{background:<?php echo $base_color ?> !important;}
  .masonry_filter ul li.active a, .masonry_filter ul li a:hover{color:<?php echo $base_color ?> !important;}
  .header_1 #navigation nav > ul > li > a:hover, .header_2 #navigation nav > ul > li > a:hover, .header_4 #navigation nav > ul > li > a:hover, .header_5 #navigation nav > ul > li > a:hover{color:<?php echo $base_color ?>;}
  .header_1 #navigation nav > ul > li.current-menu-parent > a, .header_2 #navigation nav > ul > li.current-menu-parent > a, .header_4 #navigation nav > ul > li.current-menu-parent > a, .header_5 #navigation nav > ul > li.current-menu-parent > a{color:<?php echo $base_color ?>;}
  textarea:focus, select:focus, input[type="text"]:focus, input[type="password"]:focus, input[type="datetime"]:focus, input[type="datetime-local"]:focus, input[type="date"]:focus, input[type="month"]:focus, input[type="time"]:focus, input[type="week"]:focus, input[type="number"]:focus, input[type="email"]:focus, input[type="url"]:focus, input[type="search"]:focus, input[type="tel"]:focus, input[type="color"]:focus, .uneditable-input:focus, #coupon_code:focus, .shipping-calculator-form select:focus  {border-color:<?php echo $base_color; ?> !important;}
  .checkout input[type='text'], #account_password, #account_password-2, #order_comments, .checkout_coupon input[type='text'], .edit_address_form input[type='text'], #customer_login input[type='password'], #customer_login input[type='email'], #myaccount input[type='password'], .payment_box, .woocommerce-error{border:1px solid  <?php echo $large_dividers_color ?>;}   
  select, footer select{border-color:<?php echo $large_dividers_color ?> !important;}
  
  nav .menu > li > ul.sub-menu, nav .menu > li > ul.sub-menu ul, .header_wrapper .cart .content, .sticky_menu .cart .content{border:1px solid <?php echo $large_dividers_color ?>}
  nav .menu li > ul.sub-menu li{border-bottom:1px solid <?php echo $large_dividers_color ?>;}
  nav .themeple_custom_menu_mega_menu{border:1px solid <?php echo $large_dividers_color ?>;}
  .right_search_container #s, .right_search_container .more{border:1px solid <?php echo $large_dividers_color ?> ;}
  .header_wrapper .cart .content .cart_item .description .amount, .header_wrapper .cart .content .subtotal .amount, .sticky_menu .cart .content .subtotal .amount, .sticky_menu .cart .content .cart_item .description .amount{color:<?php echo $base_color ?>;}
  .colore_div{background: <?php echo $base_color; ?>}
  .tweet_list dt{border:1px solid <?php echo $base_color ?>;}
  .tweet_list dt i{color:<?php echo $base_color ?>;}

  <?php
    $base = HexToRGB($base_color); 
  ?>
  .colored_second, .with_white_background{color: <?php echo $base_color ?> !important;}
  .with_colored_background{background:<?php echo $base_color ?> !important;}
  .header_page{border-bottom:1px solid <?php echo $page_header_b_bo ?>;}
   
   <?php 
        $base = HexToRGB($base_color);

        $new_color2 = colourBrightness($base_color, 0.03); ?>

   <?php $custom_css = themeple_get_option('custom_css'); 


   echo $custom_css;
    ?>

    .tpl2 .bg,  ul.products .product .links, .woocommerce .widget_price_filter .ui-slider .ui-slider-range, .woocommerce-page .widget_price_filter .ui-slider .ui-slider-range{background:rgba(<?php echo $base['r'] ?>, <?php echo $base['g'] ?>, <?php echo $base['b'] ?>, 0.76);}
     .portfolio-item .link, .portfolio-item .zoom{background-color:rgba(<?php echo $base['r'] ?>, <?php echo $base['g'] ?>, <?php echo $base['b'] ?>, 0.9);}
    
     <?php  if(themeple_get_option('responsive_layout') == 'no'){ ?>
     @media (max-width: 600px) {
      body {
        width:1246px;
      }
     } 
     <?php } ?>

</style>
    <?php

    $font = themeple_get_option('font_page');  
    $font_head = themeple_get_option('font_headings');
    $font_diff = themeple_get_option('font_headings_dif');

    ?>

 		<?php if($font == 'standart' || $font_head == 'standart'): ?>
        <style type="text/css">
       
        @font-face {
            font-family: 'Helvetica Neue';
            src: url('<?php echo get_stylesheet_directory_uri() ?>/css/Helvetica_Neue.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;

        }

        @font-face {
            font-family: 'Helvetica Neue';
            src: url('<?php echo get_stylesheet_directory_uri() ?>/css/Helvetica_Neue_Bold.ttf') format('truetype');
            font-weight: 600;
            font-style: normal;

        }

        </style>
    <?php endif; ?> 
	
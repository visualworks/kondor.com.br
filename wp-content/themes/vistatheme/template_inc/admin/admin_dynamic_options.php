<?php



/* RECENT PORTFOLIO  */



$elements[] = array(



	"dynamic" => "recent_portfolio",

	"name" => __("Featured Portfolio", 'themeple'),

	"type" => "layout_section",

	"id" => "dynamic_recent_portfolio",

	"removable" => "remove element",

	"default_size" => 12,

	"subelements" => array(



						



								array(    

					                                   "name"    => "Block Title:",

					                                   

					                                   "desc"    => "",

					                                   "id"      => "dynamic_title",

					                                   "std"     => "",

					                                   "type"    => "input_text"

						),


							/*array( 

									"id" => "desc_bool",

									"type" => "switchbutton",

									"name" => "Do you want Description in the left ?",

									"std" => "no"

								),

						array( 

									"id" => "desc_text",

									"type" => "textarea",

									"name" => "Description",

									"required" => array("desc_bool", "yes")

								),

						array( 

									"id" => "button_bool",

									"type" => "switchbutton",

									"name" => "Do you want Button?",

									"std" => "no",

									"required" => array("desc_bool", "yes")

								),


						array( 

									"id" => "button_text",

									"type" => "input_text",

									"name" => "Button Text",

									"required" => array("button_bool", "yes")

								),

						array( 

									"id" => "button_link",

									"type" => "input_text",

									"name" => "Button Link",

									"required" => array("button_bool", "yes")

								),*/
						

													array(    

                                                            "name"              => "Portfolio Style",

                                                         

                                                            "desc"              => "",

                                                            "id"                => "portfolio_style",

                                                            "type"              => "select",

                                                            "std"               => 'v1',

                                                            "no_first"          => true,

                                                            "subtype"           => array('First Version' => 'v1', 'Second Version' => 'v2')

                                                       ),

												  array(    

                                                            "name"              => "Show Description ?",

                                                            "desc"              => "",

                                                            'std'               => 'no',

                                                            "id"                => "portfolio_show_desc",

                                                            "type"              => "switchbutton",

                                                            "required"           => array('portfolio_style', 'v1')

                                                       ),

                                                  array(    

                                                            "name"              => "Select the way you want to show the items",

                                                 

                                                            "desc"              => "",

                                                            'std'               => 'normal_mode',

                                                            "no_first"          => true,

                                                            "id"                => "show_type",

                                                            "type"              => "select",

                                                            "subtype"           => array("Grid" => "normal_mode",  'Masonry' => 'masonry')

                                                       ),



								array(

									"name" => "Portfolio Rows",

									"id" => "rows",

									"type" => "select",
									
									"no_first" => true,

									"std" => '1',
									
									"subtype" => array("One Row" => '1', "Two Rows" => "2")

								),


								 array(

									"name" 	=> "Block Size:",

									"desc" 	=> "This mean that if you select 1/4 and you choose a 100% row, should be display 4 items. Be sure that items are in exact proporcion with the column percentage. For example you cant use a 1/4 with 66% column or 1/3 with 75% column ",

									"id" 	=> "dynamic_block_size",

									"type" 	=> "select",

									"no_first" => "true",

									"subtype" => array("1/4" => 4, '1/3' => 3, '1/2' => 2, '1/1' => 1)

								),



								array( 

									"id" => "dynamic_size",

									"type" => "hidden",

									"std" => 12

								),

								array( 

									"id" => "dynamic_from_where",

									"type" => "select",

									"name" => "Set featured Portfolio:",

									"no_first" => true,

									"subtype" => array("Show Portfolio from all categories" => "all_cat", "Select a specific Category" => "cat")

								),

								array( 

									"id" => "dynamic_cat",

									"type" => "select",

									"taxonomy" => "portfolio_entries",

									"name" => "Select the category:",

									"subtype" => "cat",

									"required" => array("dynamic_from_where", "cat")

								)



		)



);

$elements[] = array(



	"dynamic" => "fullwidth_portfolio",

	"name" => __("Fullwidth Portfolio", 'themeple'),

	"type" => "layout_section",

	"id" => "dynamic_fullwidth_port",

	"removable" => "remove element",

	"default_size" => 12,

	"subelements" => array(

			array( 

									"id" => "dynamic_size",

									"type" => "hidden",

									"std" => 12

			)

	)
);

/* RECENT PORTFOLIO END */

/* ---------------------------------------------------------- */

/* ---------------------------------------------------------- */

/* ---------------------------------------------------------- */

/* ---------------------------------------------------------- */

/* Recent News */

 

$elements[] =	array(	

				"dynamic"		=> 'recent_news',

				"name" 			=> __("Recent News", 'themeple'),

				"slug"			=> "",

				"type" 			=> "layout_section", 

				"id" 			=> "dynamic_recent_news", 

				"removable"  => 'remove element',

				"default_size" => 6,

				"nodescription" => true,

				'subelements' 	=> array(	

						

						



						array(    

					                                   "name"    => "Block Title:",

					                                   

					                                   "desc"    => "",

					                                   "id"      => "dynamic_title",

					                                   "std"     => "",

					                                   "type"    => "input_text"

						),

						 
								array(

									"name" => "Number of posts per row",

									"id" => "posts_per_page",

									"type" => "select",

									"no_first" => true,

									"std" => 1,

									"subtype" => array("1 Post" => 1, '2 Posts' => 2, '3 Posts' => 3, '4 Posts' => 4)

								),


								array(

									"name" => "Number of Rows",

									"id" => "nr_rows",

									"type" => "select",

									"no_first" => true,

									"std" => 1,

									"subtype" => array("One Row" => 1, 'Two Rows' => 2, 'Three Rows' => 3)

								),

						array( 

								"id" => "dynamic_size",

								"type" => "hidden",

								"std" => 12

								),

						array( 

									"id" => "dynamic_from_where",

									"type" => "select",

									"name" => "Set Headlines From Blog",

									"no_first" => true,

									"subtype" => array("Show headlines from all categories" => "all_cat", "Select a specific Category" => "cat")

								),

								array( 

									"id" => "dynamic_cat",

									"type" => "select",

									"name" => "Select the category:",

									"subtype" => "cat",

									"required" => array("dynamic_from_where", "cat")

								)

						

								

					   	

					            



				)

			);


/* ----------------------------------------------- */
/* ----------------------------------------------- */





/* LATEST BLOG */



$elements[] =	array(	

				"dynamic"		=> 'latest_blog',

				"name" 			=> __("Latest From Blog", 'themeple'),

				"slug"			=> "",

				"type" 			=> "layout_section", 

				"id" 			=> "dynamic_latest_blog", 

				"removable"  => 'remove element',

				"default_size" => 12,

				"nodescription" => true,

				'subelements' 	=> array(	

						

						



								array(    

					                                   "name"    => "Block Title:",

					                                   

					                                   "desc"    => "",

					                                   "id"      => "dynamic_title",

					                                   "std"     => "",

					                                   "type"    => "input_text"

						),


					
						array( 

								"id" => "dynamic_size",

								"type" => "hidden",

								"std" => 12

								),

						array( 

									"id" => "dynamic_from_where",

									"type" => "select",

									"name" => "Set Headlines From Blog",

									"no_first" => true,

									"subtype" => array("Show headlines from all categories" => "all_cat", "Select a specific Category" => "cat")

								),

								array( 

									"id" => "dynamic_cat",

									"type" => "select",

									"name" => "Select the category:",

									"subtype" => "cat",

									"required" => array("dynamic_from_where", "cat")

								),


						array( 

									"id" => "excerpt_bool",

									"type" => "switchbutton",

									"name" => "Do you want to show Post Excerpt?",

									"std" => "no"

								)



						

								

					   	

					            



				)

			);



/* LATEST BLOG END */

/* LATEST BLOG */



$elements[] =	array(	

				"dynamic"		=> 'latest_blog_filter',

				"name" 			=> __("Latest From Blog With Filter", 'themeple'),

				"slug"			=> "",

				"type" 			=> "layout_section", 

				"id" 			=> "dynamic_latest_blog_filter", 

				"removable"  => 'remove element',

				"default_size" => 12,

				"nodescription" => true,

				'subelements' 	=> array(	

						

						



								array(    

					                                   "name"    => "Block Title:",

					                                   

					                                   "desc"    => "",

					                                   "id"      => "dynamic_title",

					                                   "std"     => "",

					                                   "type"    => "input_text"

						),

								array(    

					                                   "name"    => "Number of posts Per Category:",

					                                   

					                                   "desc"    => "",

					                                   "id"      => "per_cat",

					                                   "std"     => "3",

					                                   "type"    => "input_text"

						),


					
						array( 

								"id" => "dynamic_size",

								"type" => "hidden",

								"std" => 12

								)

				)

			);



/* LATEST BLOG END */

/* HOME BLOG */

      $elements[] =	array(	

				"dynamic"		=> 'home_blog',

				"name" 			=> __("Full Blog", 'themeple'),

				"slug"			=> "",

				"type" 			=> "layout_section", 

				"id" 			=> "dynamic_home_blog", 

				"removable"  => 'remove element',

				"blank" 		=> true, 

				"default_size" => 12,

				"nodescription" => true,

				'subelements' 	=> array(	



							array(    

					                                   "name"    => "Block Title:",

					                                   

					                                   "desc"    => "",

					                                   "id"      => "dynamic_title",

					                                   "std"     => "",

					                                   "type"    => "input_text"

						),


							array(    

					                                   "name"    => "Style:",

					                                   "desc"    => "",

					                                   "id"      => "style",

					                                   "std"     => "index",

					                                   "subtype" => array('Normal' => 'index', 'Grid' => 'blog-grid'),

					                                   "type"    => "select"

						),


					        array( 

								"id" => "dynamic_size",

								"type" => "hidden",

								"std" => 12

								)





					)





	);			



/* END BLOG */

/* ---------------------------------------------------------- */

/* ---------------------------------------------------------- */



/** Home Portfolio Element **/
	  $elements[] =	array(	
					"dynamic"		=> 'home_portfolio',
					"name" 			=> __("Full Portfolio", 'themeple'),
					"slug"			=> "",
					"type" 			=> "layout_section", 
					"id" 			=> "dynamic_home_portfolio", 
					"removable"  => 'remove element',
					"blank" 		=> true, 
					"default_size" => 12,
					"nodescription" => true,
					'subelements' 	=> array(	

								array(
										"name" => "Nr of columns",
										"id" => "dynamic_columns",
										"type" => "select",
										"std" => "",
										"subtype" => array("One Column" => 1, "Two Columns" => 2, "Three Columns" => 3, "Four Columns" => 4)
										
									),
								array(
										"name" => "Portfolio Page",
										"id" => "portfolio_selected",
										"type" => "select",
										"std" => "",
										"subtype" => 'page'
										
									),

								array(
										"name" => "Style",
										"id" => "style",
										"type" => "select",
										"std" => "portfolio-grid",
										"subtype" => array("Grid" => 'portfolio-grid', 'Masonry' => 'portfolio-masonry')
										
									),

								
						        array( 
									"id" => "dynamic_size",
									"type" => "hidden",
									"std" => 12
									)


						)






		);			







/** End Home Portfolio Element **/



/* ---------------------------------------------------------- */

/* ---------------------------------------------------------- */

/* ---------------------------------------------------------- */

/* ---------------------------------------------------------- */

/* FAQ */

      $elements[] =	array(	

				"dynamic"		=> 'faq',

				"name" 			=> __("FAQ", 'themeple'),

				"slug"			=> "",

				"type" 			=> "layout_section", 

				"id" 			=> "dynamic_faq", 

				"removable"  => 'remove element',

				"blank" 		=> true, 

				"default_size" => 12,

				"nodescription" => true,

				'subelements' 	=> array(	



							

					        array( 

								"id" => "dynamic_size",

								"type" => "hidden",

								"std" => 12

								)





					)
 




	);			



/* END FAQ */

/* ---------------------------------------------------------- */

/* ---------------------------------------------------------- */



/* STAFF */



$elements[] =	array(	

				"dynamic"		=> 'staff',

				"name" 			=> __("Staff Member", 'themeple'),

				"slug"			=> "",

				"type" 			=> "layout_section", 

				"id" 			=> "dynamic_staff", 

				"removable"  => 'remove element',

				"blank" 		=> true, 

				"default_size" => 3,

				"nodescription" => true,

				'subelements' 	=> array(	

						

					





						array( "name" => "Select Staff Member",

								"desc" => "",

								"id" => "staff",

								

								"type" => "select",

								"subtype" => 'staff'),

						
						array( 

								"id" => "dynamic_size",

								"type" => "hidden",

								"std" => 3

								)		

					   	

					            



				)

			);



/* STAFF END */

/* ---------------------------------------------------------- */

/* ---------------------------------------------------------- */

/* STAFF Carousel */



$elements[] =	array(	

				"dynamic"		=> 'staff_carousel',

				"name" 			=> __("Staff Carousel", 'themeple'),

				"slug"			=> "",

				"type" 			=> "layout_section", 

				"id" 			=> "dynamic_staff_carousel", 

				"removable"  => 'remove element',

				"blank" 		=> true, 

				"default_size" => 12,

				"nodescription" => true,

				'subelements' 	=> array(	


						array( "name" => "Title",

								"desc" => "",

								"id" => "title",

								"type" => "input_text"),

						
						array( 

								"id" => "dynamic_size",

								"type" => "hidden",

								"std" => 12

								)		

					   	

					            



				)

			);



/* STAFF Carousel END */

/* Slideshow */



$elements[] =	array(	

				"dynamic"		=> 'slideshow',

				"name" 			=> __("Slideshow", 'themeple'),

				"slug"			=> "",

				"type" 			=> "layout_section", 

				"id" 			=> "dynamic_slideshow", 

				"removable"  => 'remove element',

				"blank" 		=> true, 

				"default_size" => 6,

				"nodescription" => true,

				'subelements' 	=> array(	

						

					


						array(
								"name" => "Title",

								"desc" => "Leave blank if you dont want title",

								"type" => 'input_text',

								"id"   => "title"
						),

						array(
								"name" => "Fullwidth",

								"desc" => "",

								"type" => 'switchbutton',

								"id"   => "fullwidth",

								"std"  => 'no'
						),

						array(	"name" 	=> "Which Content?",

								"desc" 	=> "Chosose a page or post. The content of that entry will be displayed. By default it will display the content of the current post or page that has the this template aplied to it.",

					            "id" 	=> "dynamic_which_post_page",

					            "type" 	=> "select",

								"slug"	=> "",

								"std"	=> "self",

								"no_first"=>true,

					            "subtype" => array('Display the content of this post/page'=>'self','Choose a post'=>'post','Choose a Page'=>'page')),

					    

					   	array(	

								"slug"	=> "",

								"name" 	=> "Select Page",

								"desc" 	=> "",

								"id" 	=> "dynamic_page_id",

								"type" 	=> "select",

								"subtype" => 'page',

								"required" => array('dynamic_which_post_page','page')

							),

							

						

						 array(	

								"slug"	=> "",

								"name" 	=> "Select Post",

								"desc" 	=> "",

								"id" 	=> "dynamic_post_id",

								"type" 	=> "select",

								"subtype" => 'post',

								"required" => array('dynamic_which_post_page','post')

							),

					

						array( 

								"id" => "dynamic_size",

								"type" => "hidden",

								"std" => 6

								)		

					   	

					            



				)

			);



/* SLIDESHOW END */

/* ---------------------------------------------------------- */

/* ---------------------------------------------------------- */

/* TESTIMONIAL SINGLE */





$elements[] = array(



	"dynamic" => "single_testimonial",

	"name" => __("Testimonial Single", 'themeple'),

	"type" => "layout_section",

	"id" => "single_testimonial",

	"removable" => "remove element",

	"default_size" => 12,

	"subelements" => array(



						

								array(    

					                                   "name"    => "Block Title:",

					                                   "desc"    => "",

					                                   "id"      => "title",

					                                   "std"     => "",

					                                   "type"    => "input_text"

						),

								array(    

					                                   "name"    => "Select one Testimonial Post:",

					                                   "desc"    => "",

					                                   "id"      => "testimon",

					                                   "std"     => "",

					                                   "type"    => "select",

					                                   "subtype" => 'testimonial'

						),


								array(    

					                                   "name"    => "Background Color:",

					                                   "desc"    => "",

					                                   "id"      => "background_color",

					                                   "std"     => "default",

					                                   "type"    => "colorpicker"

							),

								array(    

					                                   "name"    => "Border Color:",

					                                   "desc"    => "",

					                                   "id"      => "border_color",

					                                   "std"     => "default",

					                                   "type"    => "colorpicker"

							),
								array(    

					                                   "name"    => "Font Color:",

					                                   "desc"    => "",

					                                   "id"      => "font_color",

					                                   "std"     => "default",

					                                   "type"    => "colorpicker"

							),

								array( 

									"id" => "dynamic_size",

									"type" => "hidden",

									"std" => 12

								)



		)



);


/* TESTIMONIALS END */

/* TESTIMONIALS */





$elements[] = array(



	"dynamic" => "carousel_testimonial",

	"name" => __("Testimonial Carousel", 'themeple'),

	"type" => "layout_section",

	"id" => "simple_testimonial",

	"removable" => "remove element",

	"default_size" => 12,

	"subelements" => array(



						

								array(    

					                                   "name"    => "Block Title:",

					                                   

					                                   "desc"    => "",

					                                   "id"      => "title",

					                                   "std"     => "",

					                                   "type"    => "input_text"

						),

								array(    

					                                   "name"    => "Background Color:",

					                                   "desc"    => "",

					                                   "id"      => "background_color",

					                                   "std"     => "default",

					                                   "type"    => "colorpicker"

							),

								array(    

					                                   "name"    => "Border Color:",

					                                   "desc"    => "",

					                                   "id"      => "border_color",

					                                   "std"     => "default",

					                                   "type"    => "colorpicker"

							),
								array(    

					                                   "name"    => "Font Color:",

					                                   "desc"    => "",

					                                   "id"      => "font_color",

					                                   "std"     => "default",

					                                   "type"    => "colorpicker"

							),


								array( 

									"id" => "dynamic_size",

									"type" => "hidden",

									"std" => 12

								)



		)



);


/* TESTIMONIALS END */



/* CLIENTS */



$elements[] = array(



	"dynamic" => "clients",

	"name" => __("Clients", 'themeple'),

	"type" => "layout_section",

	"id" => "dynamic_clients",

	"removable" => "remove element",

	"default_size" => 12,

	"subelements" => array(



			

								array(    

					                                   "name"    => "Block Title:",

					                                   

					                                   "desc"    => "",

					                                   "id"      => "title",

					                                   "std"     => "",

					                                   "type"    => "input_text"

						),

						 
								array(    

					                                   "name"    => "Carousel",

					                                   

					                                   "desc"    => "",

					                                   "id"      => "carousel",

					                                   "std"     => "yes",

					                                   "type"    => "switchbutton"

						),
								


							

								array( 

								"id" => "dynamic_size",

								"type" => "hidden",

								"std" => 12

								)



		)



);



/* CLIENTS END */

/* ---------------------------------------------------------- */



$elements[] = array(



	"dynamic" => "divider",

	"name" => __("Divider", 'themeple'),

	"type" => "layout_section",

	"id" => "dynamic_divider",

	"removable" => "remove element",

	"default_size" => 12,

	"subelements" => array(

								array(

									"id" => "style",

									"name" => "Style",

									"type" => "select",

									"no_first" => true,

									"subtype" => array("Solid Border" => 'solid_border', 'Dotted Border' => 'dotted_border', "Diagonal Dotted" => 'diagonal_dotted', 'Light Shadow' => 'light_shadow', 'Big Shadow' => 'big_shadow')
								),

								array( 

								"id" => "dynamic_size",

								"type" => "hidden",

								"std" => 12

								)



		)



);




/* ---------------------------------------------------------- */

/* Content (Shortcodes) */
$elements[] =	array(	

				"dynamic"		=> 'only_content',

				"name" 			=> __("Content (Shortcodes)", 'themeple'),

				"slug"			=> "",

				"type" 			=> "layout_section", 

				"id" 			=> "dynamic_only_content", 

				"removable"  => 'remove element',

				"blank" 		=> true, 

				"default_size" => 6,

				"nodescription" => true,

				'subelements' 	=> array(	

						

						

								array(    

					                                   "name"    => "Block Title:",

					                                   

					                                   "desc"    => "",

					                                   "id"      => "dynamic_title",

					                                   "std"     => "",

					                                   "type"    => "input_text"

						),
								array(    

					                                   "name"    => "Content:",

					                                   

					                                   "desc"    => "",

					                                   "id"      => "content",

					                                   "std"     => "",

					                                   "type"    => "textarea"

						),

								array( 

								"id" => "dynamic_size",

								"type" => "hidden",

								"std" => 6

								)
				)
	);

/* End Content (Shortcodes) */


/* POST PAGE CONTENT */



$elements[] =	array(	

				"dynamic"		=> 'post_page_content',

				"name" 			=> __("Post/Page Content", 'themeple'),

				"slug"			=> "",

				"type" 			=> "layout_section", 

				"id" 			=> "dynamic_post_page", 

				"removable"  => 'remove element',

				"blank" 		=> true, 

				"default_size" => 6,

				"nodescription" => true,

				'subelements' 	=> array(	

						

						

								array(    

					                                   "name"    => "Block Title:",

					                                   

					                                   "desc"    => "",

					                                   "id"      => "dynamic_title",

					                                   "std"     => "",

					                                   "type"    => "input_text"

						),

						

					


						array(	"name" 	=> "Which Content?",

								"desc" 	=> "Chosose a page or post. The content of that entry will be displayed. By default it will display the content of the current post or page that has the this template aplied to it.",

					            "id" 	=> "dynamic_which_post_page",

					            "type" 	=> "select",

								"slug"	=> "",

								"std"	=> "self",

								"no_first"=>true,

					            "subtype" => array('Display the content of this post/page'=>'self','Choose a post'=>'post','Choose a Page'=>'page')),

					    

					   	array(	

								"slug"	=> "",

								"name" 	=> "Select Page",

								"desc" 	=> "",

								"id" 	=> "dynamic_page_id",

								"type" 	=> "select",

								"subtype" => 'page',

								"required" => array('dynamic_which_post_page','page')

							),

							

						

						 array(	

								"slug"	=> "",

								"name" 	=> "Select Post",

								"desc" 	=> "",

								"id" 	=> "dynamic_post_id",

								"type" 	=> "select",

								"subtype" => 'post',

								"required" => array('dynamic_which_post_page','post')

							),

						 array( 

								"id" => "dynamic_size",

								"type" => "hidden",

								"std" => 6

								)

					            



				)

			);



/* POST PAGE CONTENT END */

/* WIDGET */



$elements[] =	array(	

				"dynamic"		=> 'Widget',

				"name" 			=> __("Widget", 'themeple'),

				"slug"			=> "",

				"type" 			=> "layout_section", 

				"id" 			=> "dynamic_widget", 

				"removable"  => 'remove element',

				"blank" 		=> true, 

				"default_size" => 6,

				"nodescription" => true,

				'subelements' 	=> array(	

						

							





								array(    

					                                   "name"    => "Block Title:",

					                                   

					                                   "desc"    => "",

					                                   "id"      => "dynamic_title",

					                                   "std"     => "",

					                                   "type"    => "input_text"

						),

						
						 array(



						 		"name" 	=> "Sidebar Name: ",

								"desc" 	=> "Give a name to the sidebar that you want to create for this column. After you create it and save theme options, the new sidebar will be ready in the  <a href='widgets.php'>Appearance &raquo; Widgets</a>",

								"id" 	=> "dynamic_sidebar",

								"type" => "input_text"

								



						 	),

						

						 array( 

								"id" => "dynamic_size",

								"type" => "hidden",

								"std" => 6

								)

					            



				)

			);



/* WIDGET END */

/* ---------------------------------------------------------- */

/* ---------------------------------------------------------- */

/* CONTACT FORM */



$elements[] =	array(	

				"dynamic"		=> 'contact_form',

				"name" 			=> __("Contact Form", 'themeple'),

				"slug"			=> "",

				"type" 			=> "layout_section", 

				"id" 			=> "dynamic_contact", 

				"removable"  => 'remove element',

				"blank" 		=> true, 

				"default_size" => 6,

				"nodescription" => true,

				'subelements' 	=> array(	

						

							

						 array(    

					                                   "name"    => "Block Title:",

					                                   

					                                   "desc"    => "",

					                                   "id"      => "dynamic_title",

					                                   "std"     => "",

					                                   "type"    => "input_text"

						),

						

						 array(



						 		"name" 	=> "Description",

								"desc" 	=> "",

								"id" 	=> "desc",

								"type" => "textarea"

								



						 	),

						 array(



						 		"name" 	=> "Success Message",

								"desc" 	=> "Write the Message that you want to be displayed when the message has sent",

								"id" 	=> "dynamic_msg",

								"type" => "textarea"

								



						 	),



						 array(



						 		"name" 	=> "Submit Button Text",

								"desc" 	=> "",

								"id" 	=> "dynamic_submit",

								"type" => "input_text"

								



						 	),

						

						 array( 

								"id" => "dynamic_size",

								"type" => "hidden",

								"std" => 6

								)

					            



				)

			);



/* CONTACTFORM END */

/* ---------------------------------------------------------- */

/* ---------------------------------------------------------- */


/* GOOGLEMAP */



$elements[] =	array(	

				"dynamic"		=> 'google_map',

				"name" 			=> __("Google Map", 'themeple'),

				"slug"			=> "",

				"type" 			=> "layout_section", 

				"id" 			=> "dynamic_map", 

				"removable"  => 'remove element',

				"blank" 		=> true, 

				"default_size" => 12,

				"nodescription" => true,

				'subelements' 	=> array(	

						

							
						array(    

					                                   "name"    => "Block Title:",

					                                   

					                                   "desc"    => "",

					                                   "id"      => "dynamic_title",

					                                   "std"     => "",

					                                   "type"    => "input_text"

						),

		


						 array(



						 		"name" 	=> "Source",

								"desc" 	=> "Only the link",

								"id" 	=> "dynamic_src",

								"type" => "input_text"

								



						 	),



						array(

							"name" => "Full Width",

							"desc" => "Set the map in fullwidth mode",

							"id" => "map_fullwidth",

							"std"	=> "yes",

						    "type" => "switchbutton"


							),

						array(



						 		"name" 	=> "Map Height (px)",

								"desc" 	=> "",

								"std"   => "150",

								"id" 	=> "height",

								"type" => "input_text"

								



						 	),


						array(

								"name" 	=> "Content after the map",

								"desc" 	=> "",

								"id" 	=> "desc",

								"type" => "textarea"
						),

						 array( 

								"id" => "dynamic_size",

								"type" => "hidden",

								"std" => 12

								)

					            



				)

			);



/* GOOGLEMAP END */

/* ---------------------------------------------------------- */

/* ---------------------------------------------------------- */

/* Element Header */



$elements[] =	array(	

				"dynamic"		=> 'el_head',

				"name" 			=> __("Element Header", 'themeple'),

				"slug"			=> "",

				"type" 			=> "layout_section", 

				"id" 			=> "el_header", 

				"removable"  => 'remove element',

				"blank" 		=> true, 

				"default_size" => 12,

				"nodescription" => true,

				'subelements' 	=> array(	

						

							



						 array(    

					                                   "name"    => "Block Title:",

					                                   

					                                   "desc"    => "",

					                                   "id"      => "dynamic_title",

					                                   "std"     => "",

					                                   "type"    => "input_text"

						),

						 array(    

					                                   "name"    => "Do you want Pagination?",

					                                   "desc"    => "",

					                                   "id"      => "pagination_bool",

					                                   "std"     => "no",

					                                   "type"    => "switchbutton"
						),

						

						 array( 

								"id" => "dynamic_size",

								"type" => "hidden",

								"std" => 12

								)

					            



				)

			);



/* TEXTBAR END */



/* ---------------------------------------------------------- */

/* ---------------------------------------------------------- */

/* ---------------------------------------------------------- */

/* ---------------------------------------------------------- */

/* TEXTBAR */



$elements[] =	array(	

				"dynamic"		=> 'textbar',

				"name" 			=> __("Text Bar", 'themeple'),

				"slug"			=> "",

				"type" 			=> "layout_section", 

				"id" 			=> "text_bar", 

				"removable"  => 'remove element',

				"blank" 		=> true, 

				"default_size" => 12,

				"nodescription" => true,

				'subelements' 	=> array(	

						

							

						array(



						 		"name" 	=> "Small Title @ TOP",

								"desc" 	=> "",

								"id" 	=> "small_title",

								"type" => "input_text"

						 	),

						 array( 

								"name" => "Big Title ?",

								"id"	=> "big_title_bool",

								"type" => "switchbutton",

								"std"  => 'yes',

								"desc" => "Active if you want a big title to be shown in the intro"		

					),

					array(

								"name"  => "Big Title Content",

								"id"  => 'big_title',

								"type" => "textarea",

								"std"	=> '',

								"required" => array("big_title_bool", 'yes')
					),

					array(

						 		"name" 	=> "Big Title Font Family",

								"id" 	=> "big_title_font",

								"type" => "select",

								"std"  => 'default',

								"no_first" => true,

								"subtype" => 'selected_fonts',

								"required" => array('big_title_bool', 'yes')

						),

					array(

								"name"  => "Big Title Font Size (px)",

								"id"  => 'big_title_size',

								"type" => "input_text",

								"std"	=> '26',

								"required" => array("big_title_bool", 'yes')
					),

					array(

								"name"  => "Big Title Font Weight",

								"id"  => 'big_title_weight',

								"type" => "input_text",

								"std"	=> '400',

								"required" => array("big_title_bool", 'yes')
					),


					array(

								"name"  => "Big Title Font Lineheight (px)",

								"id"  => 'big_title_lineheight',

								"type" => "input_text",

								"std"	=> 'default',

								"required" => array("big_title_bool", 'yes')
					),
					    

						 array( 

								"name" => "First Button ?",

								"id"	=> "first_button_bool",

								"type" => "switchbutton",

								"std"  => 'no',

								"desc" => ""		

					),

					array(

								"name"  => "Button Title",

								"id"  => 'button1_title',

								"type" => "input_text",

								"std"	=> '',

								"required" => array("first_button_bool", 'yes')
					),

					array(

								"name"  => "Button Link",

								"id"  => 'button1_link',

								"type" => "input_text",

								"std"	=> '#',

								"required" => array("first_button_bool", 'yes')
					),

					array(

								"name"  => "Button Style",

								"id"  => 'button1_style',

								"type" => "select",

								"no_first" => true,

								"std"	=> 'btn-non-bg',

								"subtype" => array("Button With Border and transparent bg" => 'btn-non-bg', 'Colored BG' => 'btn-system'),

								"required" => array("first_button_bool", 'yes')
					),

					array( 

								"name" => "Another Button ?",

								"id"	=> "second_button_bool",

								"type" => "switchbutton",

								"std"  => 'no',

								"desc" => "",

								"required" => array("first_button_bool", 'yes')	

					),

					array(

								"name"  => "Button Title",

								"id"  => 'button2_title',

								"type" => "input_text",

								"std"	=> '',

								"required" => array("second_button_bool", 'yes')
					),

					array(

								"name"  => "Button Link",

								"id"  => 'button2_link',

								"type" => "input_text",

								"std"	=> '#',

								"required" => array("second_button_bool", 'yes')
					),

					array(

								"name"  => "Button Style",

								"id"  => 'button2_style',

								"type" => "select",

								"no_first" => true,

								"std"	=> 'btn-non-bg',

								"subtype" => array('Button With Border and transparent bg' => 'btn-non-bg', 'Colored BG' => 'btn-system'),

								"required" => array("second_button_bool", 'yes')
					),

					array(

								"name"  => "Overall Color",

								"id"  => 'color',

								"type" => "colorpicker",

								"std"	=> 'default'
					),

						 array( 

								"id" => "dynamic_size",

								"type" => "hidden",

								"std" => 12

								)

					            



				)

			);



/* TEXTBAR END */



/* ---------------------------------------------------------- */

/* ---------------------------------------------------------- */



/* PLAINTEXT */



$elements[] =	array(	

				"dynamic"		=> 'plain_text',

				"name" 			=> __("Plain Text", 'themeple'),

				"slug"			=> "",

				"type" 			=> "layout_section", 

				"id" 			=> "dynamic_plain", 

				"removable"  => 'remove element',

				"blank" 		=> true, 

				"default_size" => 6,

				"nodescription" => true,

				'subelements' 	=> array(	

						


						array(



						 		"name" 	=> "Element Hedear ?",

								"desc" 	=> "Activate if you want a default element heeader at the top of element",

								"id" 	=> "element_header_bool",

								"type" => "switchbutton",

								"std"  => 'no'

						 ),

						array(



						 		"name" 	=> "Element Title",

								"id" 	=> "element_title",

								"type" => "input_text",

								"std"  => '',

								"required" => array('element_header_bool', 'yes')

						 ),

						array(



						 		"name" 	=> "Small Title @ TOP ?",

								"desc" 	=> "Activate if you want a small title style at top of the element",

								"id" 	=> "small_title_bool",

								"type" => "switchbutton",

								"std"  => 'yes'

						 ),

						array(



						 		"name" 	=> "Small Title",

								"id" 	=> "small_title",

								"type" => "input_text",

								"std"  => '',

								"required" => array('small_title_bool', 'yes')

						 ),

						array(



						 		"name" 	=> "Big Title ?",

								"desc" 	=> "Activate if you want a Big Title",

								"id" 	=> "big_title_bool",

								"type" => "switchbutton",

								"std"  => 'yes'

						 ),

						array(



						 		"name" 	=> "Big Title",

								"id" 	=> "big_title",

								"type" => "input_text",

								"std"  => '',

								"required" => array('big_title_bool', 'yes')

						 ),

						array(



						 		"name" 	=> "Big Title Font Family",

								"id" 	=> "big_title_font",

								"type" => "select",

								"std"  => 'default',

								"no_first" => true,

								"subtype" => 'selected_fonts',

								"required" => array('big_title_bool', 'yes')

						 ),

						array(



						 		"name" 	=> "Big Title Font Size (px)",

								"id" 	=> "big_title_size",

								"type" => "input_text",

								"std"  => '26',

								"required" => array('big_title_bool', 'yes')

						 ),

						array(



						 		"name" 	=> "Big Title Font Weight",

								"id" 	=> "big_title_weight",

								"type" => "input_text",

								"std"  => '400',

								"required" => array('big_title_bool', 'yes')

						 ),

						array(



						 		"name" 	=> "Big Title Font color",

								"id" 	=> "big_title_color",

								"type" => "input_text",

								"std"  => 'default',

								"required" => array('big_title_bool', 'yes')

						 ),

						array(



						 		"name" 	=> "Big Title Lineheight",

								"id" 	=> "big_title_lineheight",

								"type" => "input_text",

								"std"  => 'default',

								"required" => array('big_title_bool', 'yes')

						 ),

						 array(



						 		"name" 	=> "Content",

								"desc" 	=> "Write a content here, you can add shortcodes too",

								"id" 	=> "content",

								"type" => "textarea"

								

						 ),	

						 array(



						 		"name" 	=> "Do you want button ?",

								"id" 	=> "button_bool",

								"type" => "switchbutton",

								"std"  => 'yes'

						 ),
						 
						 array(



						 		"name" 	=> "Button Title",

								"desc" 	=> "If you want a button at the bottom, write a button title here",

								"id" 	=> "button_title",

								"type" => "input_text",

								"required" => array("button_bool",'yes')

						 ),

						 array(



						 		"name" 	=> "Button Link",

								"desc" 	=> "",

								"id" 	=> "button_link",

								"type" => "input_text",

								"required" => array("button_bool",'yes')

						 ),

						 array(



						 		"name" 	=> "Button Style",

								"desc" 	=> "",

								"id" 	=> "button_style",

								"type" => "select",

								"no_first" => true,

								'subtype' => array("Simple" => 'btn-non-bg', 'Colored Skin' => 'btn-system'),

								"required" => array("button_bool",'yes')

						 ),
						 						 

						 array( 

								"id" => "dynamic_size",

								"type" => "hidden",

								"std" => 6

								)

				)            



				

			);



/* PLAINTEXT END */

/* ---------------------------------------------------------- */

/* ---------------------------------------------------------- */

/* TOGGLE */



$elements[] =	array(	

				"dynamic"		=> 'toggle',

				"name" 			=> __("Toggles", 'themeple'),

				"slug"			=> "",

				"type" 			=> "layout_section", 

				"id" 			=> "dynamic_toggle", 

				"removable"  => 'remove element',

				"blank" 		=> true, 

				"default_size" => 12,

				"nodescription" => true,

				'subelements' 	=> array(	

						

								array(    

					                                   "name"    => "Block Title:",

					                                   

					                                   "desc"    => "",

					                                   "id"      => "title",

					                                   "std"     => "",

					                                   "type"    => "input_text"

						),

						 array(    

		                    

		                    "type"              => "layout_section", 

		                    "desc" 				=> "",

		                    "id"                => "toggles", 

		                    "linktext"          => "Add another Toggle Element",

		                    "deletetext"   		=> "Remove Toggle Element",

		                    "blank"        		=> true,

		                    "subelements" 		=> array(



					                    		array(    

					                                   "name"    => "Title:",

					                                   

					                                   "desc"    => "",

					                                   "id"      => "title",

					                                   "std"     => "",

					                                   "type"    => "input_text"

												),

					                            array(    

						                               "name"    => "Content:",

						                                   

						                               "desc"    => "",

						                               "id"      => "desc",

						                               "std"     => "",

						                               "type"    => "textarea"

						                       )

					        )

					     ),



						

						 array( 

								"id" => "dynamic_size",

								"type" => "hidden",

								"std" => 12

								)

					            



				)

			);



/* TOGGLE END */

/* ---------------------------------------------------------- */

/* ---------------------------------------------------------- */




/* Services CREATIVE */



$elements[] =	array(	

				"dynamic"		=> 'services_creative',

				"name" 			=> __("Services Creative", 'themeple'),

				"slug"			=> "",

				"type" 			=> "layout_section", 

				"id" 			=> "dynamic_services_creative", 

				"removable"  => 'remove element',

				"blank" 		=> true, 

				"default_size" => 12,

				"nodescription" => true,

				'subelements' 	=> array(	



						array(    

		                    

		                    "type"              => "layout_section", 

		                    "desc" 				=> "",

		                    "id"                => "list", 

		                    "linktext"          => "Add another Element",

		                    "deletetext"   		=> "Remove Element",

		                    "blank"        		=> true,

		                    "subelements" 		=> array(



					                    		array(    

					                                   "name"    => "Title:",

					                                   "desc"    => "",

					                                   "id"      => "title",

					                                   "std"     => "",

					                                   "type"    => "input_text"
												),

												array(    

					                                   "name"    => "Icon:",

					                                   "desc"    => "",

					                                   "id"      => "icon",

					                                   "std"     => "",

					                                   "type"    => "iconset"
												),

												array(    

					                                   "name"    => "Upload Media:",

					                                   "desc"    => "",

					                                   "id"      => "media",

					                                   "std"     => "",

					                                   "btn_text" => 'Upload',

					                                   "type"    => "upload"
												)

					        )

					     ),



						

						 array( 

								"id" => "dynamic_size",

								"type" => "hidden",

								"std" => 12

						)

					            



				)

			);



/* SERVICES CREATIVE END */




/* Services Small */



$elements[] =	array(	

				"dynamic"		=> 'services_small',

				"name" 			=> __("Services Small", 'themeple'),

				"slug"			=> "",

				"type" 			=> "layout_section", 

				"id" 			=> "dynamic_services_small", 

				"removable"  => 'remove element',

				"blank" 		=> true, 

				"default_size" => 3,

				"nodescription" => true,

				'subelements' 	=> array(	

						

							

						 array(    

					                                   "name"    => "Title:",

					                                   

					                                   "desc"    => "",

					                                   "id"      => "title",

					                                   "std"     => "",

					                                   "type"    => "input_text"

						),


						 array(    

					                                   "name"    => "Do you want Icon?",

					                                   

					                                   "desc"    => "",

					                                   "id"      => "icon_bool",

					                                   "std"     => "yes",

					                                   "type"    => "switchbutton"

						),

						

						 array(    

					                                   "name"    => "Do you want predefined Icon?",

					                                   "desc"    => "",

					                                   "id"      => "icon_bool_pred",

					                                   "std"     => "yes",

					                                   "type"    => "switchbutton",

					                                   "required" => array('icon_bool', 'yes')

						),

						  
						  array(    

					                                   "name"    => "Upload Your Image",  

					                                   "desc"    => "",

					                                   "id"      => "upload_img",

					                                   "std"     => "",

					                                   "btn_text" => "Upload",

					                                   "type"    => "upload",

					                                   "required" => array("icon_bool_pred", 'no')

						),

						 array(    

					                                   "name"    => "Select Icon",               

					                                   "desc"    => "",

					                                   "id"      => "icon",

					                                   "std"     => "",

					                                   "type"    => "iconset",

					                                   "required" => array("icon_bool_pred", 'yes')

						),
 
						array(    

					                                   "name"    => "Icon Color",

					                                   "desc"    => "Leave Base to use the default skin color",

					                                   "id"      => "icon_color",

					                                   "std"     => "base",

					                                   "type"    => "colorpicker",

					                                   "required" => array("icon_bool_pred", 'yes')

						),


						array(	

									"slug"	=> "",

									"name" 	=> "Content Type",

									"desc" 	=> "Select the content type to be used",

									"id" 	=> "dynamic_content_type",

									"type" 	=> "select",



									"subtype" => array('Post' => 'post', 'Page' => 'page', 'Add Content here' => 'content')

								),



								array(	

									"slug"	=> "",

									"name" 	=> "Select the post",

									"desc" 	=> "",

									"id" 	=> "dynamic_post",

									"type" 	=> "select",

									"subtype" => 'post',

									"required" => array('dynamic_content_type','post')

								),



								array(	

									"slug"	=> "",

									"name" 	=> "Select the page",

									"desc" 	=> "",

									"id" 	=> "dynamic_page",

									"type" 	=> "select",

									"subtype" => 'page',

									"required" => array('dynamic_content_type','page')

								),





								array(	

									"slug"	=> "",

									"name" 	=> "Content",

									"desc" 	=> "",

									"id" 	=> "dynamic_content_content",

									"type" 	=> "textarea",

									"required" => array('dynamic_content_type','content')

								),


								


								array(	

									"slug"	=> "",

									"name" 	=> "Link",

									"desc" 	=> "",

									"id" 	=> "dynamic_content_link",

									"type" 	=> "input_text",

									"std" => "http://",

									"required" => array('dynamic_content_type','content')

								),


					








						

						 array( 

								"id" => "dynamic_size",

								"type" => "hidden",

								"std" => 3

						)

					            



				)

			);



/* SERVICES Small END */


/* ---------------------------------------------------------- */
/* ---------------------------------------------------------- */



/* ---------------------------------------------------------- */
/* Services Medium */



$elements[] =	array(	

				"dynamic"		=> 'services_medium',

				"name" 			=> __("Services Medium", 'themeple'),

				"slug"			=> "",

				"type" 			=> "layout_section", 

				"id" 			=> "dynamic_services_medium", 

				"removable"  => 'remove element',

				"blank" 		=> true, 

				"default_size" => 4,

				"nodescription" => true,

				'subelements' 	=> array(	

						

							

						 array(    

					                                   "name"    => "Title:",

					                                   

					                                   "desc"    => "",

					                                   "id"      => "title",

					                                   "std"     => "",

					                                   "type"    => "input_text"

						),


						 array(    

					                                   "name"    => "Do you want Icon?",

					                                   

					                                   "desc"    => "",

					                                   "id"      => "icon_bool",

					                                   "std"     => "yes",

					                                   "type"    => "switchbutton"

						),

						array(    

					                                   "name"    => "Do you want a predefined Icon?",

					                                   "desc"    => "",

					                                   "id"      => "icon_bool_pred",

					                                   "std"     => "yes",

					                                   "type"    => "switchbutton",

					                                   "required" => array("icon_bool", 'yes')

						),

						


						 array(    

					                                   "name"    => "Select Icon",

					                                   

					                                   "desc"    => "",

					                                   "id"      => "icon",

					                                   "std"     => "",

					                                   "type"    => "iconset",

					                                   "required" => array("icon_bool_pred", 'yes')

						),

						 array(    

					                                   "name"    => "Upload Icon",

					                                   

					                                   "desc"    => "",

					                                   "id"      => "icon_up",

					                                   "std"     => "",

					                                   "btn_text" => "Upload",

					                                   "type"    => "upload",

					                                   "required" => array("icon_bool_pred", 'no')

						),

						array(	

									"slug"	=> "",

									"name" 	=> "Content Type",

									"desc" 	=> "Select the content type to be used",

									"id" 	=> "dynamic_content_type",

									"type" 	=> "select",

									"subtype" => array('Post' => 'post', 'Page' => 'page', 'Add Content here' => 'content')

								),



								array(	

									"slug"	=> "",

									"name" 	=> "Select the post",

									"desc" 	=> "",

									"id" 	=> "dynamic_post",

									"type" 	=> "select",

									"subtype" => 'post',

									"required" => array('dynamic_content_type','post')

								),



								array(	

									"slug"	=> "",

									"name" 	=> "Select the page",

									"desc" 	=> "",

									"id" 	=> "dynamic_page",

									"type" 	=> "select",

									"subtype" => 'page',

									"required" => array('dynamic_content_type','page')

								),





								array(	

									"slug"	=> "",

									"name" 	=> "Content",

									"desc" 	=> "",

									"id" 	=> "dynamic_content_content",

									"type" 	=> "textarea",

									"required" => array('dynamic_content_type','content')

								),



								

								array(	

									"slug"	=> "",

									"name" 	=> "Link",

									"desc" 	=> "",

									"id" 	=> "dynamic_content_link",

									"type" 	=> "input_text",

									"std" => "http://",

									"required" => array('dynamic_content_type','content')

								),




						

						 array( 

								"id" => "dynamic_size",

								"type" => "hidden",

								"std" => 4

						)

					            



				)

			);



/* SERVICES MEDIUM END */

/* ---------------------------------------------------------- */

/* ---------------------------------------------------------- */

/* ---------------------------------------------------------- */
/* Services Medium BOX*/



$elements[] =	array(	

				"dynamic"		=> 'services_medium_box',

				"name" 			=> __("Services Medium Box", 'themeple'),

				"slug"			=> "",

				"type" 			=> "layout_section", 

				"id" 			=> "dynamic_services_medium_box", 

				"removable"  => 'remove element',

				"blank" 		=> true, 

				"default_size" => 4,

				"nodescription" => true,

				'subelements' 	=> array(	

						

							

						 array(    

					                                   "name"    => "Title:",

					                                   

					                                   "desc"    => "",

					                                   "id"      => "title",

					                                   "std"     => "",

					                                   "type"    => "input_text"

						),

						 array(    

					                                   "name"    => "Do you want Icon?",

					                                   

					                                   "desc"    => "",

					                                   "id"      => "icon_bool",

					                                   "std"     => "yes",

					                                   "type"    => "switchbutton"

						),

						array(    

					                                   "name"    => "Do you want a predefined Icon?",

					                                   "desc"    => "",

					                                   "id"      => "icon_bool_pred",

					                                   "std"     => "yes",

					                                   "type"    => "switchbutton",

					                                   "required" => array("icon_bool", 'yes')

						),

						


						 array(    

					                                   "name"    => "Select Icon",

					                                   

					                                   "desc"    => "",

					                                   "id"      => "icon",

					                                   "std"     => "",

					                                   "type"    => "iconset",

					                                   "required" => array("icon_bool_pred", 'yes')

						),

						 array(    

					                                   "name"    => "Upload Icon",

					                                   

					                                   "desc"    => "",

					                                   "id"      => "icon_up",

					                                   "std"     => "",

					                                   "btn_text" => "Upload",

					                                   "type"    => "upload",

					                                   "required" => array("icon_bool_pred", 'no')

						),

						array(	

									"slug"	=> "",

									"name" 	=> "Content Type",

									"desc" 	=> "Select the content type to be used",

									"id" 	=> "dynamic_content_type",

									"type" 	=> "select",

									"subtype" => array('Post' => 'post', 'Page' => 'page', 'Add Content here' => 'content')

								),



								array(	

									"slug"	=> "",

									"name" 	=> "Select the post",

									"desc" 	=> "",

									"id" 	=> "dynamic_post",

									"type" 	=> "select",

									"subtype" => 'post',

									"required" => array('dynamic_content_type','post')

								),



								array(	

									"slug"	=> "",

									"name" 	=> "Select the page",

									"desc" 	=> "",

									"id" 	=> "dynamic_page",

									"type" 	=> "select",

									"subtype" => 'page',

									"required" => array('dynamic_content_type','page')

								),





								array(	

									"slug"	=> "",

									"name" 	=> "Content",

									"desc" 	=> "",

									"id" 	=> "dynamic_content_content",

									"type" 	=> "textarea",

									"required" => array('dynamic_content_type','content')

								),



								

								array(	

									"slug"	=> "",

									"name" 	=> "Link",

									"desc" 	=> "",

									"id" 	=> "dynamic_content_link",

									"type" 	=> "input_text",

									"std" => "#",

									"required" => array('dynamic_content_type','content')

								),




						

						 array( 

								"id" => "dynamic_size",

								"type" => "hidden",

								"std" => 4

						)

					            



				)

			);



/* SERVICES MEDIUM END */

/* ---------------------------------------------------------- */

/* ---------------------------------------------------------- */


/* Services Media */



$elements[] =	array(	

				"dynamic"		=> 'services_media',

				"name" 			=> __("Services Media", 'themeple'),

				"slug"			=> "",

				"type" 			=> "layout_section", 

				"id" 			=> "dynamic_services_media", 

				"removable"  => 'remove element',

				"blank" 		=> true, 

				"default_size" => 4,

				"nodescription" => true,

				'subelements' 	=> array(	

						

							

						 array(    

					                                   "name"    => "Title:",

					                                   

					                                   "desc"    => "",

					                                   "id"      => "title",

					                                   "std"     => "",

					                                   "type"    => "input_text"

						),

					     array(    

					                                   "name"    => "Type of Media ?",

					                                   

					                                   "desc"    => "",

					                                   "id"      => "type",

					                                   "std"     => "",

					                                   "no_first" => true,

					                                   "type"    => "select",

					                                   "subtype" => array('Image' => 'img', 'Video' => 'video')

						),
						 array(    

					                                   "name"    => "Upload Photo",

					                                   

					                                   "desc"    => "",

					                                   "id"      => "photo",

					                                   "std"     => "",

					                                   "btn_text" => "Upload",

					                                   "type"    => "upload",

					                                   "required" => array("type", 'img')

						),

						 array(    

					                                   "name"    => "Video",

					                                   

					                                   "desc"    => "",

					                                   "id"      => "video",

					                                   "std"     => "",

					                                   "type"    => "input_text",

					                                   "required" => array("type", 'video')

						),

						 array(    

					                                   "name"    => "Description",

					                                   

					                                   "desc"    => "",

					                                   "id"      => "desc",

					                                   "std"     => "",

					                                   "type"    => "textarea"

						),
								array(	

									"slug"	=> "",

									"name" 	=> "Link",

									"desc" 	=> "",

									"id" 	=> "link",

									"type" 	=> "input_text",

									"std" => "#"

								),

						 array( 

								"id" => "dynamic_size",

								"type" => "hidden",

								"std" => 4

						)

					            



				)

			);



/* SERVICES Media END */

/* ---------------------------------------------------------- */
/* ---------------------------------------------------------- */


/* ---------------------------------------------------------- */
/* ---------------------------------------------------------- */

/* Media */



$elements[] =	array(	

				"dynamic"		=> 'media',

				"name" 			=> __("Media", 'themeple'),

				"slug"			=> "",

				"type" 			=> "layout_section", 

				"id" 			=> "dynamic_media", 

				"removable"  => 'remove element',

				"blank" 		=> true, 

				"default_size" => 6,

				"nodescription" => true,

				'subelements' 	=> array(	

						

							

						 array(    

					                                   "name"    => "Select type of media:",

					                                   

					                                   "desc"    => "",

					                                   "id"      => "type",

					                                   "std"     => "",

					                                   "no_first" => true,

					                                   "type"    => "select",

					                                   "subtype" => array('Image' => 'image', 'Video' => 'video', 'Slideshow' => "slideshow")

						),
						 array( 
						 		"name"    => "Image:",

								"id" => "image",

								"type" => "upload",

								"btn_text" => 'Upload',

								"required" => array("type", "image")
						),
						 array( 
						 		"name"    => "Video:",

								"id" => "video",

								"type" => "input_text",

								"std"	=> '',

								"required" => array("type", "video")
						),
						 array( 
						 		"name"    => "Slideshow:",

								"id" => "slideshow",

								"type" => "select",

								"subtype"	=> array('Select From Posts' => 'posts', "Select From Pages" => 'pages'),

								"required" => array("type", "slideshow")
						),
						 array( 
						 		"name"    => "Select Post:",

								"id" => "slideshow_post",

								"type" => "select",

								"no_first" => true,

								"subtype"	=> 'post',

								"required" => array("slideshow", "posts")
						),

						 array( 
						 		"name"    => "Select Page:",

								"id" => "slideshow_page",

								"type" => "select",

								"no_first" => true,

								"subtype"	=> 'page',

								"required" => array("slideshow", "pages")
						),

						 array( 
						 		"name"    => "Position Relative or Absolute ?",

								"id" => "position_css",

								"type" => "select",

								"no_first" => true,

								"std" => 'relative',

								"subtype" => array('Relative'=>'relative', 'Absolute' => 'absolute')

						),

						 array( 
						 		"name"    => "Position Left (px):",

								"id" => "left_pos",

								"type" => "input_text",

								'std' => '',

								'required' => array('position_css', 'absolute')
								
						),

						 array( 
						 		"name"    => "Position Right (px):",

								"id" => "right_pos",

								"type" => "input_text",

								'std' => '',

								'required' => array('position_css', 'absolute')
								
						),

						 array( 
						 		"name"    => "Position Top (px):",

								"id" => "top_pos",

								"type" => "input_text",

								'std' => '',

								'required' => array('position_css', 'absolute')
								
						),

						 array( 
						 		"name"    => "Position Bottom (px):",

								"id" => "bottom_pos",

								"type" => "input_text",

								'std' => '',

								'required' => array('position_css', 'absolute')
								
						),

						 array( 
						 		"name"    => "Width (px):",

								"id" => "width",

								"type" => "input_text",

								'std' => '',

								'required' => array('position_css', 'absolute')
								
						),

						 array( 
						 		"name"    => "Height (px):",

								"id" => "height",

								"type" => "input_text",

								'std' => '',

								'required' => array('position_css', 'absolute')
								
						),

						 array( 
						 		"name"    => "Alignment:",

								"id" => "alignment",

								"type" => "select",

								"no_first" => true,

								'std' => 'left',

								"subtype"	=> array("Left" => 'left', 'center' => 'center', 'Right' => 'right'),

								'required' => array('position_css', 'relative')
								
						),



						 array( 
						 		"name"    => "Specify Width (px):",

								"id" => "width",

								"type" => "input_text",

								

								"required"	=> array('alignment', 'center')

								
						),

						 array( 
						 		"name"    => "Animation",

								"id" => "animation",

								"type" => "select",

								"no_first" => true,

								"subtype" => array("Show From Left" =>  'left', 'Show From Right' => 'right', 'Show from Top' => 'top', 'Show From Bottom' => 'bottom', "None" => 'none'),

								
						),


						 array( 

								"id" => "dynamic_size",

								"type" => "hidden",

								"std" => 6

						)

					            



				)

			);



/* Media END */



/* TABS */



$elements[] =	array(	

				"dynamic"		=> 'tabs',

				"name" 			=> __("Tabs", 'themeple'),

				"slug"			=> "",

				"type" 			=> "layout_section", 

				"id" 			=> "dynamic_tabs", 

				"removable"  => 'remove element',

				"blank" 		=> true, 

				"default_size" => 6,

				"nodescription" => true,

				'subelements' 	=> array(	

						

								array(    

					                                   "name"    => "Block Title:",

					                                   "desc"    => "",

					                                   "id"      => "title",

					                                   "std"     => "",

					                                   "type"    => "input_text"

						),

							

							


						 array(    

		                    

		                    "type"              => "layout_section", 

		                    "desc" 				=> "",

		                    "id"                => "tabs", 

		                    "linktext"          => "Add another Tab Element",

		                    "deletetext"   		=> "Remove Tab Element",

		                    "blank"        		=> true,

		                    "subelements" 		=> array(



					                    		

					                    		array(    

					                                   "name"    => "Title:",

					                                   

					                                   "desc"    => "",

					                                   "id"      => "title",

					                                   "std"     => "",

					                                   "type"    => "input_text"

					                                   

												),

					                    		array(    

					                                   "name"    => "Do you want Icon before the title?",

					                                   

					                                   "desc"    => "",

					                                   "id"      => "icon_bool",

					                                   "std"     => "no",

					                                   "type"    => "switchbutton"

					                                   

												),

												array(    

					                                   "name"    => "Select Icon",

					                                   

					                                   "desc"    => "",

					                                   "id"      => "icon",

					                                   "std"     => "",

					                                   "type"    => "iconset",

					                                   "required" => array("icon_bool", 'yes')

												),

					                            array(    

						                               "name"    => "Content:",

						                                   

						                               "desc"    => "",

						                               "id"      => "desc",

						                               "std"     => "",

						                               "type"    => "textarea"

						                       )

					        )

					     ),



						

						 array( 

								"id" => "dynamic_size",

								"type" => "hidden",

								"std" => 6

								)

					            



				)

			);



/* TABS END */

/* ---------------------------------------------------------- */
/* CHART SKILLS */



$elements[] =	array(	

				"dynamic"		=> 'chart_skill',

				"name" 			=> __("Chart Skill", 'themeple'),

				"slug"			=> "",

				"type" 			=> "layout_section", 

				"id" 			=> "chart_skill", 

				"removable"  => 'remove element',

				"blank" 		=> true, 

				"default_size" => 3,

				"nodescription" => true,

				'subelements' 	=> array(	



						
						array(

									"name" => __("Percentage %", 'themeple'),

									"id" => "percent",

									"type" => "input_text",

									"std" => ""

									

								),

						array(
								"name" => "Do you want Icon or Text ?",
								
								'id' => 'type',
								
								"no_first" => true,
								
								'type' => 'select',

								'subtype' => array("Text" => 'text', "Icon" => 'icon')
							),

						array(
								"name" => "Text",
								
								'id' => 'text',
								
								'type' => 'input_text',

								'required' => array('type', 'text')
							),

						array(
								"name" => "Icon",
								
								'id' => 'icon',
								
								'type' => 'iconset',

								'required' => array('type', 'icon')
							),

						array(
								"name" => "Font Size",
								
								'id' => 'font_size',
								
								'type' => 'input_text',

								'std' => "50px"
							),

						array(
								"name" => "Color",
								
								'id' => 'color',
								
								'type' => 'colorpicker',

								'std' => "base"
							),

						 array( 

								"id" => "dynamic_size",

								"type" => "hidden",

								"std" => 3

								)

					            



				)

			);



/* CHART SKILLS END */

/*------------------------------------------ */
/* SKILLS */



$elements[] =	array(	

				"dynamic"		=> 'skills',

				"name" 			=> __("Skills", 'themeple'),

				"slug"			=> "",

				"type" 			=> "layout_section", 

				"id" 			=> "dynamic_skills", 

				"removable"  => 'remove element',

				"blank" 		=> true, 

				"default_size" => 6,

				"nodescription" => true,

				'subelements' 	=> array(	

						

						array(    

					                                   "name"    => "Block Title:",

					                                   

					                                   "desc"    => "",

					                                   "id"      => "title",

					                                   "std"     => "",

					                                   "type"    => "input_text"

						),


						 array(    

		                    

		                    "type"              => "layout_section", 

		                    "desc" 				=> "",

		                    "id"                => "skills", 

		                    "linktext"          => "Add another Tab Element",

		                    "deletetext"   		=> "Remove Tab Element",

		                    "blank"        		=> true,

		                    "subelements" 		=> array(



					                    		array(    

					                                   "name"    => "Title:",

					                                   

					                                   "desc"    => "",

					                                   "id"      => "title",

					                                   "std"     => "",

					                                   "type"    => "input_text"

												),

					                            array(    

						                               "name"    => "Percentage of the skill:",

						                               "desc"    => "",

						                               "id"      => "percentage_skill",

						                               "std"     => "",

						                               "type"    => "input_text"

						                       ),

					                            array(    

						                               "name"    => "Bar Color:",

						                               "desc"    => "If you want the skin color, please dont edit the 'base' string",

						                               "id"      => "color",

						                               "std"     => "base",

						                               "type"    => "colorpicker"

						                       )

					                           
					                      

					        )

					     ),



						

						 array( 

								"id" => "dynamic_size",

								"type" => "hidden",

								"std" => 6

								)

					            



				)

			);



/* SKILLS END */
/* ---------------------------------------------------------- */


/*------------------------------------------ */
/* Section Start */
$elements[] =	array(	

				"dynamic"		=> 'section_start',

				"name" 			=> __("Section Start", 'themeple'),

				"slug"			=> "",

				"type" 			=> "layout_section", 

				"id" 			=> "dynamic_section_start", 

				"removable"  => 'remove element',

				"blank" 		=> true, 

				"default_size" => 12,

				"nodescription" => true,

				"subelements" => array(

						array( 

								"name" => "Select the type of the background",

								"id" => 'bg_type',

								"type" => "select",

								"no_first" => true,

								"subtype" => array("Background Color" => 'bg_color', 'Image' => 'image', 'Video' => 'video'),

								"std" => "bg_color"

						),

						array( 

								"name" => "Video Webm source file",

								"id" => 'webm_video',

								"type" => "input_text",

								"required" => array('bg_type', 'video'),

								"std" => ""

						),

						array( 

								"name" => "Video mp4 source file",

								"id" => 'mp4_video',

								"type" => "input_text",

								"required" => array('bg_type', 'video'),

								"std" => ""

						),

						array( 

								"name" => "Background Color",

								"id" => 'bg_color',

								"type" => "input_text",

								"required" => array('bg_type', 'bg_color'),

								"std" => "#f5f5f5"

						),

						array( 

								"name" => "Background Image",

								"id" => 'image',

								"type" => "upload",

								"required" => array('bg_type', 'image'),

								"btn_text" => "Upload"

						),
 
						array( 

								"name" => "Do you want fixed image?",

								"id" => 'fixed_img',

								"type" => "switchbutton",

								"required" => array('bg_type', 'image'),

								"std" => "no"
						),


						array( 

								"name" => "Parallax BG?",

								"id" => 'parallax',

								"type" => "switchbutton",

								"required" => array('bg_type', 'image'),

								"std" => "no"
						),

						


						array( 

								"name" => "Padding From Top (px)",

								"id" => 'padding_top',

								"type" => "input_text",

								"std" => '55'

								

						),


						array( 

								"name" => "Padding From Top (px)",

								"id" => 'padding_bottom',

								"type" => "input_text",

								"std" => '55'		

						),


						array( 

								"name" => "Do you want inset shadow?",

								"id" => 'inset_shadow',

								"type" => "switchbutton",

								"std" => 'yes'
						),

						array( 

								"name" => "Inset Shadow Color",

								"id" => 'inset_shadow_color',

								"type" => "select",

								"no_first" => true,

								"std" => 'black',

								"subtype" => array("Black" => 'black', 'White' => 'white')
						),

						array( 

								"name" => "Inside Elements Nargin",

								"id" => 'inside_margin',

								"type" => "select",

								"std" => 'section_space_1',

								"no_first" => true,

								"subtype" => array("First Space (60px)" => "section_space_1", "Second Space (30px)" => "section_space_2", "Third Space (90px)" => "section_space_3")
						),


						array( 

								"name" => "Triangle Arrow @ TOP",

								"id" => 'top_triangle',

								"type" => "switchbutton",

								"std" => 'no'

						),

						array( 

								"name" => "Triangle Arrow @ Bottom",

								"id" => 'bottom_triangle',

								"type" => "switchbutton",

								"std" => 'no'

						),


						array( 

								"id" => "dynamic_size",

								"type" => "hidden",

								"std" => 12

						)


				)
);

/* Section Start End */
/*------------------------------------------ */
/* Section End */
$elements[] =	array(	

				"dynamic"		=> 'section_end',

				"name" 			=> __("Section End", 'themeple'),

				"slug"			=> "",

				"type" 			=> "layout_section", 

				"id" 			=> "dynamic_section_end", 

				"removable"  => 'remove element',

				"blank" 		=> true, 

				"default_size" => 12,

				"nodescription" => true,

				"subelements" => array(

					array( 

								"id" => "dynamic_size",

								"type" => "hidden",

								"std" => 12

						)

					
				)
);

/* Section End End */


/* Page Intro */
$elements[] =	array(	

				"dynamic"		=> 'page_intro',

				"name" 			=> __("Page Intro", 'themeple'),

				"slug"			=> "",

				"type" 			=> "layout_section", 

				"id" 			=> "page_intro", 

				"removable"  => 'remove element',

				"blank" 		=> true, 

				"default_size" => 12,

				"nodescription" => true,

				"subelements" => array(

					array( 

								"name" => "Title",

								"id"	=> "title",

								"type" => "input_text"		

					),

					array( 

								"name" => "Position ?",

								"id"	=> "position",

								"type" => "select",

								"no_first" => true,

								"std" => 'left',

								"subtype" => array("Centered" => "center", "Left" => "left", "Right" => "right")		

					),
					

					
					array( 

								"name" => "Do you want Image?",

								"id"	=> "img_bool",

								"type" => "switchbutton",

								"std"  => 'no'	

					),


					array( 

								"name" => "Image",

								"id"	=> "image",

								"type" => "upload",

								"btn_text" => 'Upload',

								"required" => array("img_bool", 'yes')		

					),


					array( 

								"id" => "dynamic_size",

								"type" => "hidden",

								"std" => 12

						)

					
				)
);

/* End Page Intro */



/* Page Header */
$elements[] =	array(	

				"dynamic"		=> 'el_introduction',

				"name" 			=> __("Elements Intro", 'themeple'),

				"slug"			=> "",

				"type" 			=> "layout_section", 

				"id" 			=> "el_introduction", 

				"removable"  => 'remove element',

				"blank" 		=> true, 

				"default_size" => 12,

				"nodescription" => true,

				"subelements" => array(

					array( 

								"name" => "Small Title @ TOP ?",

								"id"	=> "small_title_top_bool",

								"type" => "switchbutton",

								"std"  => 'no',

								"desc" => "Active if you want a smalla title at the top of the introduction"		

					),

					array(

								"name"  => "Small Title @ TOP Content",

								"id"  => 'small_title_top',

								"type" => "input_text",

								"std"	=> '',

								"required" => array("small_title_top_bool", 'yes')
					),

					array( 

								"name" => "Big Title ?",

								"id"	=> "big_title_bool",

								"type" => "switchbutton",

								"std"  => 'yes',

								"desc" => "Active if you want a big title to be shown in the intro"		

					),

					array(

								"name"  => "Big Title Content",

								"id"  => 'big_title',

								"type" => "textarea",

								"std"	=> '',

								"required" => array("big_title_bool", 'yes')
					),

					array(

						 		"name" 	=> "Big Title Font Family",

								"id" 	=> "big_title_font",

								"type" => "select",

								"std"  => 'default',

								"no_first" => true,

								"subtype" => 'selected_fonts',

								"required" => array('big_title_bool', 'yes')

						),

					array(

								"name"  => "Big Title Font Size (px)",

								"id"  => 'big_title_size',

								"type" => "input_text",

								"std"	=> '26',

								"required" => array("big_title_bool", 'yes')
					),

					array(

								"name"  => "Big Title Font Weight",

								"id"  => 'big_title_weight',

								"type" => "input_text",

								"std"	=> '400',

								"required" => array("big_title_bool", 'yes')
					),

					array(

								"name"  => "Big Title Font Color",

								"id"  => 'big_title_color',

								"type" => "colorpicker",

								"std"	=> 'default',

								"required" => array("big_title_bool", 'yes')
					),

					array(

								"name"  => "Big Title Font Lineheight (px)",

								"id"  => 'big_title_lineheight',

								"type" => "input_text",

								"std"	=> 'default',

								"required" => array("big_title_bool", 'yes')
					),


					array( 

								"name" => "Divider ?",

								"id"	=> "divider_bool",

								"type" => "switchbutton",

								"std"  => 'no',

								"desc" => "Active if you want a divider"		

					),

					array(

								"name"  => "Divider Color",

								"id"  => 'divider_color',

								"type" => "colorpicker",

								"std"	=> 'default',

								"required" => array("divider_bool", 'yes')
					),


					array( 

								"name" => "Small Title @ BOTTOM ?",

								"id"	=> "small_title_bottom_bool",

								"type" => "switchbutton",

								"std"  => 'no',

								"desc" => "Active if you want a small title after the big title"		

					),

					array(

								"name"  => "Small Title @ BOTTOM Content",

								"id"  => 'small_title_bottom',

								"type" => "input_text",

								"std"	=> '',

								"required" => array("small_title_bottom_bool", 'yes')
					),

					array( 

								"name" => "First Button ?",

								"id"	=> "first_button_bool",

								"type" => "switchbutton",

								"std"  => 'no',

								"desc" => ""		

					),

					array(

								"name"  => "Button Title",

								"id"  => 'button1_title',

								"type" => "input_text",

								"std"	=> '',

								"required" => array("first_button_bool", 'yes')
					),

					array(

								"name"  => "Button Link",

								"id"  => 'button1_link',

								"type" => "input_text",

								"std"	=> '#',

								"required" => array("first_button_bool", 'yes')
					),

					array(

								"name"  => "Button Border Color",

								"id"  => 'button1_bc',

								"type" => "colorpicker",

								"std"	=> 'default',

								"required" => array("first_button_bool", 'yes')
					),


					array( 

								"name" => "Another Button ?",

								"id"	=> "second_button_bool",

								"type" => "switchbutton",

								"std"  => 'no',

								"desc" => "",

								"required" => array("first_button_bool", 'yes')	

					),

					array(

								"name"  => "Button Title",

								"id"  => 'button2_title',

								"type" => "input_text",

								"std"	=> '',

								"required" => array("second_button_bool", 'yes')
					),

					array(

								"name"  => "Button Link",

								"id"  => 'button2_link',

								"type" => "input_text",

								"std"	=> '#',

								"required" => array("second_button_bool", 'yes')
					),

					array(

								"name"  => "Button Border Color",

								"id"  => 'button2_bc',

								"type" => "colorpicker",

								"std"	=> 'default',

								"required" => array("second_button_bool", 'yes')
					),


					
					array( 

								"id" => "dynamic_size",

								"type" => "hidden",

								"std" => 12

						)

					
				)
);

/* End Page Header */

/* CountDown */
$elements[] =	array(	

				"dynamic"		=> 'countdown',

				"name" 			=> __("Countdown", 'themeple'),

				"slug"			=> "",

				"type" 			=> "layout_section", 

				"id" 			=> "countdown", 

				"removable"  => 'remove element',

				"blank" 		=> true, 

				"default_size" => 12,

				"nodescription" => true,

				"subelements" => array(
					
					array( 

								"name" => "Year",

								"id"	=> "year",

								"type" => "input_text"		

					),

					array( 

								"name" => "Month",

								"id"	=> "month",

								"type" => "select",

							       "subtype" => array("1" => 1, "2" => 2, "3" => 3, "4" => 4, "5" => 5, "6" => 6, "7" => 7, "8" => 8, "9" => 9, "10" => 10, "11" => 11, "12" => 12)		

					),	

					array( 

								"name" => "Day",

								"id"	=> "day",

								"type" => "input_text"		

					),

					array(

								"name" => "Font Color",

								"id" => "fontcolor",

								"type" => "select",

								"subtype" => array("white" => 'white' , "black" => 'black')

					),
					
					array( 

								"id" => "dynamic_size",

								"type" => "hidden",

								"std" => 12

						)


					
				)
);

/* End CountDown */

/** Price Lists **/
$elements[] =	array(	

				"dynamic"		=> 'price_list',

				"name" 			=> __("Price List", 'themeple'),

				"slug"			=> "",

				"type" 			=> "layout_section", 

				"id" 			=> "price_list", 

				"removable"  => 'remove element',

				"blank" 		=> true, 

				"default_size" => 3,

				"nodescription" => true,

				'subelements' 	=> array(	

						

						array(

									"name" => "Title",

									"id" => "title",

									"type" => "input_text",

									"std" => ""

									

								),
						array(

									"name" => "Title Font Color",

									"id" => "title_color",

									"type" => "input_text",

									"std" => ""

									

								),


						array(

									"name" => "Price",

									"id" => "price",

									"type" => "input_text",

									"std" => ""

									

								),

				

						array(

									"name" => "Currency",

									"id" => "currency",

									"type" => "input_text",

									"std" => "$"

									

								),
                        
					array(

							       "name" => "Price Font Color",
							       
							       "id" => "price_color",

							       "type" => "input_text",

								   "std" => ""

							),

						array(

							       "name" => "Period",
							       
							       "id" => "period",

							       "type" => "input_text",

								   "std" => ""

							),


						array(

							       "name" => "Period Font Color",
							       
							       "id" => "period_color",

							       "type" => "input_text",

								   "std" => "#f1663a"

							),


						array(

									"name" => "Button Tittle",

									"id" => "button_title",

									"type" => "input_text",

									"std" => ""

									

								),
                        
						array(

									"name" => "Button Link",

									"id" => "button_link",

									"type" => "input_text",

									"std" => ""

									

								),



						array(
							       "name" => "Highlight this price table",

									"id" => "highlight_table",

									"type" => "switchbutton",

									"std" => "yes"

						),

						array(
							       "name" => "First Color for highlight table",

									"id" => "first_color",

									"type" => "input_text",

									"std" => ""

						     ),

						array(
							       "name" => "Second Color for highlight table",

									"id" => "second_color",

									"type" => "input_text",

									"std" => ""

						     ),

						  array( 

								"id" => "dynamic_size",

								"type" => "hidden",

								"std" => 3

								),
						  array(
						  	    "name" => "Block Title",
						  	    "id" => "dynamic_title",
						  	    "type" => "input_text"


						  	),

						  	 array(    

		                    

		                    "type"              => "layout_section", 

		                    "desc" 				=> "",

		                    "id"                => "lists", 

		                    "linktext"          => "Add another list",

		                    "deletetext"   		=> "Remove list Element",

		                    "blank"        		=> true,

		                    "subelements" 		=> array(



					                    		array(    

					                                   "name"    => "List Name",

					                                   

					                                   "desc"    => "",

					                                   "id"      => "list_name",

					                                   "std"     => "",

					                                   "type"    => "input_text"

												)

												

					                         

					        )

					     )



					            



				)

			);



/* Price Lists END */



?>
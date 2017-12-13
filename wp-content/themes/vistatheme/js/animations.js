

		jQuery(function($) {		

	

		$.fn.themeple_waypoints = function(options_passed)
		{
			if(! $('html').is('.css3transitions')) return;

			var defaults = { offset: '85%' , triggerOnce: !0},
				options  = $.extend({}, defaults, options_passed);

			return this.each(function()
			{
				var element = $(this);

				setTimeout(function()
				{
					element.waypoint(function(direction)
					{
					 	$(this).addClass('start_animation').trigger('start_animation');

					}, options );

				},100)
			});
		}; 
		
		$('.animate_onoffset').themeple_waypoints();
		


		$.fn.great_gallery = function(options)
		{
			return this.each(function()
			{
				var container = $(this), elements = container.find('.item');


				//trigger displaying of thumbnails
				container.on('start_animation', function()
				{
					elements.each(function(i)
					{
						var element = $(this);
						setTimeout(function(){ element.addClass('start_animation') }, (i * 150));
					});
				});
			});
				
		};

		$.fn.recent_portfolio = function(options)
		{
			return this.each(function()
			{
				var container = $(this), elements = container.find('img');


				//trigger displaying of thumbnails
				container.on('start_animation', function()
				{
					elements.each(function(i)
					{
						var element = $(this);
						setTimeout(function(){ element.addClass('start_animation') }, (i * 100));
					});
				});
			});
				
		};
		$.fn.chart_skill = function(options)
		{
			
			return this.each(function()
			{
				var container = $(this), elements = container.find('.chart');


				//trigger displaying of thumbnails
				container.on('start_animation', function()
				{
					elements.each(function(i)
					{
						var $chart = $(this);
				
						var color = $(this).data('color');
						var color2 = $(this).data('color2');
						
						
							$chart.easyPieChart({
					        	lineWidth: 7, 
					        	size: 210,
					        	trackColor: "rgba(247,247,247,1)",
					        	scaleColor: false,
					        	barColor: color,
					        	barColor2: color2,
					        	animate:2000
					    	});
						
						
					});
				});
			});	
		}

		$.fn.counters = function(options)
		{
			
			return this.each(function()
			{
				var container = $(this), elements = container.find('.count_to .timer');


				//trigger displaying of thumbnails
				container.on('start_animation', function()
				{
					elements.each(function(i)
					{
						var $count = $(this);
						
						$count.countTo();
						
						
						
					});
				});
			});	


					


		
				
		};
		
		$.fn.services_medium = function(options)
		{
			return this.each(function()
			{
				var container = $(this), elements = container.find('.icon_wrapper');


				//trigger displaying of thumbnails
				container.on('start_animation', function()
				{
					elements.each(function(i)
					{
						var element = $(this);
						setTimeout(function(){ element.addClass('start_animation') }, (i * 250));
					});
				});
			});
				
		};


		$.fn.plain_text = function(options)
		{
			return this.each(function()
			{
				var container = $(this), elements = container.find('.plain_text');


				//trigger displaying of thumbnails
				container.on('start_animation', function()
				{
					elements.each(function(i)
					{
						var element = $(this);
						setTimeout(function(){ element.addClass('start_animation') }, (i * 250));
					});
				});
			});
				
		};


		$.fn.images_blocks = function(options)
		{
			return this.each(function()
			{
				var container = $(this), elements = container.find('.media > .media_animation');


				//trigger displaying of thumbnails
				container.on('start_animation', function()
				{
					elements.each(function(i)
					{
						var element = $(this);
						setTimeout(function(){ element.addClass('start_animation') }, (i * 250));
					});
				});
			});
				
		};

		$.fn.skills = function(options)
		{
			return this.each(function()
			{
				var container = $(this), 
					
					elements = container.find('.skill');


				//trigger displaying of thumbnails
				container.on('start_animation', function()
				{
					
					elements.each(function(i)
					{
						var element = $(this),
						percentage = $(this).data('percentage'),
						element = element.find('.prog');

						
						setTimeout(function(){ element.css('width', percentage+'%'); element.addClass('start_animation') }, (i * 250));

					});
				});
			});
				
		};



		if($.fn.great_gallery)
		{
			$('.great_gallery').great_gallery();
		}

		if($.fn.recent_portfolio) 
		{
			$('.recent_portfolio').recent_portfolio();
		}

		if($.fn.services_medium)
		{
			$('.services_medium').services_medium();
		}

		if($.fn.images_blocks)
		{
			$('.row-dynamic-el').images_blocks();
		}

		if($.fn.skills)
		{
			$('.row-dynamic-el').skills();
			$('.single_content').skills();
			$('aside').skills();
		}
			
		if($.fn.chart_skill)
		{
			$('.row-dynamic-el').chart_skill();

		}	
				
		if($.fn.counters)
		{
			$('.row-dynamic-el').counters();

		}

		if($.fn.plain_text)
		{
			$('.row-dynamic-el').plain_text();

		}

			
			
		


		
	});




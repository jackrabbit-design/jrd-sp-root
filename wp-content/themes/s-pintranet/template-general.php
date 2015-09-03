<?
/* Template Name: General */
get_header(); the_post(); ?>

	<div id="pagetitle">
        <div class="wrap">
            <h1><? the_title() ?></h1>
        </div>
    </div>

    <?php get_template_part('secondary-menu'); ?>


	<div id="main">
		<div id="maincontent">
			<?php if(have_rows('content')){
				while(have_rows('content')){ the_row();
					if(get_row_layout() == 'tabbed-content'){ ?>
						<?php if( have_rows('tabs')){ ?>
							<div class="wrap">
								<nav class="tabs-select">
									<span>Tap to Select</span>
									<ul class="">
										<?php $tabcount = 0; while( have_rows('tabs') ): the_row();
											// vars
											$tabname = get_sub_field('tab-name');
											$tabcount++;
											?>
											<li><a href="#tab<?php echo $tabcount; ?>"><?php echo $tabname; ?></a></li>
										<?php endwhile; ?>
									</ul>
								</nav>
								<div class="tab-container">
									<?php $tabcount = 0; while( have_rows('tabs') ): the_row(); $tabcount++; ?>
									    <div class="tab-content" id="tab<?php echo $tabcount; ?>">
									    	<div class="tabarticledisplay">
					                            <!-- <h4>OCTOBER 2, 2015   |   REGIONAL NEWS</h4> -->
					                            <h2><?php the_sub_field('tab-title'); ?></h2>
					                            <p class="excerpt">
					                                <?php echo strip_tags(get_sub_field('tab-excerpt')); ?>
					                            </p>
				                                <?php the_sub_field('tab-content'); ?>
					                        </div>

					                        <div class="tabsidebar">
					                            <img src="<?php $img = get_sub_field('image'); echo $img['sizes']['general-side'] ?>" alt="" / >
					                            <p><?php the_sub_field('caption'); ?></p>
					                        </div>
									    </div>
									<?php endwhile; ?>
								</div>
							</div>
							<div class="clear"></div>
							<div class="homespace">&nbsp;</div>
						<?php } ?>
					<?php }elseif(get_row_layout() == 'documents'){ ?>
						<div class="wrap">
			                <table id="doctable" class="sortable" cellspacing="0" width="100%">
			                    <thead>
			                        <tr>
			                            <th class="docth10">Date</th>
			                            <th class="docth70">Document Title</th>
			                            <th class="docth10">Type</th>
			                            <th class="docth10">Download</th>
			                        </tr>
			                    </thead>
			                    <tbody>
									<?php while(have_rows('docs')){ the_row(); ?>
				                        <tr>
				                            <td class="table10"><?php the_sub_field('date'); ?></td>
				                            <td class="table70"><?php the_sub_field('doc-title'); ?></td>
				                            <td class="table10"><?php the_sub_field('doc-type'); ?></td>
				                            <td class="table10"><a href="<?php $dl = get_sub_field('download'); echo $dl['url'] ?>" download class="exmore">Download</a></td>
				                        </tr>
									<?php } ?>
			                    </tbody>
			                </table>
		                </div>
						<div class="clear"></div>
						<div class="homespace">&nbsp;</div>

					<?php }elseif(get_row_layout() == 'text_columns'){
						$i = 1; ?>
						<div class="wrap">
							<?php while(have_rows('columns')){ the_row();
								if($i == 1){ $class="leftcol"; }
								if($i == 2){ $class="centercol"; }
								if($i == 3){ $class="rightcol"; }
								$img = get_sub_field('image');
							?>
				            	<div class="<?php echo $class ?>">
				            		<div class="colfloatleft">
					                    <h2><?php the_sub_field('title'); ?></h2>
					                </div>
					                <div class="colfloatright">
				            			<img src="<?php echo $img['sizes']['three-col'] ?>" alt="" />
				            		</div>
				            		<div class="colfloatleft">
					                    <p><?php the_sub_field('text'); ?></p>
				                	</div>
				                </div>

]							<?php $i++; } ?>
						</div>
						<div class="clear"></div>
						<div class="homespace">&nbsp;</div>
					<?php }elseif(get_row_layout() == 'featured_video'){ ?>
						<div class="wrap">
				            <div class="wrap">
					            <div id="featured">
					            	<div class="featureright">
						                <img src="/ui/images/videoimg.png" alt="" />
						            </div>
					                <div class="featureleft">
						                <h3><?php the_sub_field('subtitle'); ?></h3>
						                <h2><?php the_sub_field('title'); ?></h2>
						                <p><?php the_sub_field('description'); ?></p>
					                	<a href="#" class="learnmore">Learn More</a>
						            </div>

						    	</div>
			           		</div>
			           	</div>
					<?php } ?>
				<?php } ?>
			<?php } ?>
		</div>
	</div>







<!--

	    		<?php get_template_part('employee-blurb'); ?>
	    	<!--	<div class="homespacer"></div>
	        	<div class="wrap">
		            <div id="featured">

		            	<div class="featureright">
		                    <img src="/ui/images/featuredimg.png" alt="" />
		                </div>
		                <div class="featureleft">
			                <h3>Featured</h3>
			                <h2>Featured content title lorem ipsum postquam filet erat et cetera</h2>
			                <p>Praesent velit elit, semper nec efficitur at, vestibulum vel ante. Pellentesque suscipit nec libero id. Proin blandit dolor arcu, volutpat pellentesque mauris lobortis nec. Aliquam vitae lobortis justo. Sed eu ante nisl, ut hendrerit felis.</p>
			                <a href="#" class="learnmore">Learn More</a>
		                </div>
		            </div>
	       		 </div>
	       	</div>-->

    		<script>
                  // TABS TO SELECT
				    var newSelection = '';
				    $('.tabs-select span').click(function(){
				        $(this).parent().toggleClass('open');
				    })
				    $(".tabs-select ul li:first a").addClass('current');
				    $(".tab-content:first").show();
				    $(".tabs-select ul li a").click(function(e){
				        if($(this).hasClass('current')){
				        } else {
				            $(".tabs-select li a").removeClass("current");
				            $(this).addClass("current");
				            var portfolioItems = $('.tabs-select ul li a.current').text();
							var activeTab = $(this).attr("href"); //Find the rel attribute value to identify the active tab + content
				            $(this).parent().parent().parent('nav').removeClass('open');
				            $('.tabs-select > span').html(portfolioItems);
							$(".tab-content").hide(); //Hide all tab content
				            $(activeTab).fadeIn(); //Fade in the active content

				        };
				        e.preventDefault();
				    });
				$('a.current').trigger('click');
            </script>

<? get_footer(); ?>

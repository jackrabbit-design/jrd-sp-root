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
					                            <img src="ui/images/mediaimage.png" alt="" / >
					                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris consectetur erat dolor.</p>
					                        </div>
									    </div>
									<?php endwhile; ?>
								</div>
							</div>
						<?php } ?>
					<?php } ?>
				<?php } ?>
			<?php } ?>
		</div>
	</div>








	           <!-- <div id="maincontent">
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
		                        <tr>
		                            <td class="table10">July 1, 2015</td>
		                            <td class="table70">Lorem Ipsum Document Title</td>
		                            <td class="table10">.DOC</td>
		                            <td class="table10"><a href="#" class="exmore">Download</a></td>
		                        </tr>
		                        <tr>
		                            <td class="table10">June 17, 2015</td>
		                            <td class="table70">Consectetur adipiscing Document Title</td>
		                            <td class="table10">.PDF</td>
		                            <td class="table10"><a href="#" class="exmore">Download</a></td>
		                        </tr>
		                        <tr>
		                            <td class="table10">July 1, 2015</td>
		                            <td class="table70">Lorem Ipsum Document Title</td>
		                            <td class="table10">.XLS</td>
		                            <td class="table10"><a href="#" class="exmore">Download</a></td>
		                        </tr>
		                        <tr>
		                            <td class="table10">June 17, 2015</td>
		                            <td class="table70">Consectetur adipiscing Document Title</td>
		                            <td class="table10">.PDF</td>
		                            <td class="table10"><a href="#" class="exmore">Download</a></td>
		                        </tr>
		                        <tr>
		                            <td class="table10">July 1, 2015</td>
		                            <td class="table10">Lorem Ipsum Document Title</td>
		                            <td class="table70">.PDF</td>
		                            <td class="table10"><a href="#" class="exmore">Download</a></td>
		                        </tr>
		                        <tr>
		                            <td class="table10">June 17, 2015</td>
		                            <td class="table10">Consectetur adipiscing Document Title</td>
		                            <td class="table70">.PDF</td>
		                            <td class="table10"><a href="#" class="exmore">Download</a></td>
		                        </tr>
		                    </tbody>
		                </table>
	                </div>
	            </div>
	            <div id="maincontent">
	            	<div class="wrap">
		            	<div class="leftcol">
		            		<div class="colfloatleft">
			                    <h2>Headline 1 of column 1</h2>
			                </div>
			                <div class="colfloatright">
		            			<img src="ui/images/wideoffice.png" alt="" />
		            		</div>
		            		<div class="colfloatleft">
			                    <p>Praesent velit elit, semper nec efficitur at, vestibulum vel ante. Pellentesque suscipit nec libero id. Proin blandit dolor arcu, volutpat pellentesque mauris lobortis nec.</p>
		                	</div>
		                </div>
		                <div class="centercol">
		            		<div class="colfloatleft">
			                    <h2>Lorem ipsum headline 2</h2>
			                </div>
			                <div class="colfloatright">
		            		</div>
		            		<div class="colfloatleft">
			                    <p>Aecenas eleifend, metus in condimentum tincidunt, lectus lorem imperdiet turpis, in aliquam ante massa quis neque. ullam mollis ipsum vel turpis euismod aliquet. Nunc ut lorem ac odio tincidunt commodo.</p>
			                    <p>Aliquam vitae lobortis justo. Sed eu ante nisl, ut hendrerit felis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam elementum risus velit, vitae adipiscing nisi. Aliquam erat volutpat.</p>
			                </div>
		                 </div>
		                <div class="rightcol">
		            		<div class="colfloatleft">
		            			<h2>Headline 3 pellentesque Sagittis Ultricies Sapien</h2>
		            		</div>
		            		<div class="colfloatright">
		            			<img src="ui/images/wideoffice.png" alt="" />
		            		</div>
		            		<div class="colfloatleft">
			                    <p>Praesent velit elit, semper nec efficitur at, vestibulum vel ante. Pellentesque suscipit nec libero id. Proin blandit dolor arcu, volutpat pellentesque mauris lobortis nec.</p>
			                </div>
		                </div>
		         		<div class="clear"></div>
		            	<div class="homespace">&nbsp;</div>
		            	</div>
			            <div class="wrap">
				            <div id="featured">
				            	<div class="featureright">
					                <img src="ui/images/videoimg.png" alt="" />
					            </div>
				                <div class="featureleft">
					                <h3>Featured Video</h3>
					                <h2>Featured video title lorem ipsum postquam</h2>
					                <p>Praesent velit elit, semper nec efficitur at, vestibulum vel ante. Pellentesque suscipit nec libero id. Proin blandit dolor arcu, volutpat pellentesque mauris lobortis nec. Aliquam vitae lobortis justo. Sed eu ante nisl, ut hendrerit felis. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
				                	<a href="#" class="learnmore">Learn More</a>
					            </div>

					    	</div>
		           		</div>
		           	</div>
		        </div>-->
	    		<?php get_template_part('employee-blurb'); ?>
	    	<!--	<div class="homespacer"></div>
	        	<div class="wrap">
		            <div id="featured">

		            	<div class="featureright">
		                    <img src="ui/images/featuredimg.png" alt="" />
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

<? /* Template Name: Calendar */ get_header(); the_post(); ?>

<div id="pagetitle">
    <div class="wrap">
        <h1><? the_title() ?></h1>
    </div>
</div>

<?php include (TEMPLATEPATH . '/secondary-menu.php'); ?>

<? $parent = $post->post_parent; ?>


<div id="main">
    <div class="wrap">
        <div id="calcontent">
         <div class="calright">

               <?php echo apply_filters('the_content','[events_calendar long_events=0 full=1]'); ?>

                <ul class="legend">
                	<li><img src="<?php bloginfo('url'); ?>/ui/images/company-event.png" />Company Event</li>
                	<li><img src="<?php bloginfo('url'); ?>/ui/images/meeting.png" />Meeting</li>
                	<li><img src="<?php bloginfo('url'); ?>/ui/images/birthday.png" />Birthday</li>
                	<li><img src="<?php bloginfo('url'); ?>/ui/images/anniversary.png" />Anniversary</li>
                </ul>
                <ul class="caloption">
                	<li><a href="#" class="exmore">select all</a></li>
                	<li><a href="#" class="exmore">select none</a></li>
                </ul>
            </div>
            <div class="calleft">

                <?php
                query_posts('post_type=event&posts_per_page=4&post_status=future');
                if(have_posts()){ while(have_posts()){ the_post();
                    printr($post);
                    ?>
                	<div class="event">
                    	<h4 class="company-event uppercase">Company Event</h4>
                        <h4 class="uppercase">OCTOBER 2, 2015   |   Braintree, MA</h4>
                        <h2><?php the_title(); ?></h2>
                        <?php the_excerpt(); ?>
                        <ul>
    						<li><a href="<?php the_permalink() ?>" class="calmore">Read More</a></li>
    						<li><a href="#" class="exmore">Register</a></li>
    						<li><a href="#" class="exmore">Add to Calendar</a></li>
    						<li><a href="#" class="exmore">Contact</a></li>
    					</ul>
    				</div>
                <?php }} wp_reset_query(); ?>
				<a href="#" class="exmore">Load more events</a>
            </div>
		</div>
	</div>
</div>

<? get_footer(); ?>

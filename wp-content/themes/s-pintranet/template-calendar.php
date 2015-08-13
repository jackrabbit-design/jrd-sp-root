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
                query_posts(array(
                    'post_type' => array('event'),
                    'orderby' => 'meta_value',
                    'meta_key' => '_event_start_date',
                    'order' => 'ASC'
                ));
                if(have_posts()){ while(have_posts()){ the_post();
                    $cst = get_post_custom();
                    $date = strtoupper(date('F j, Y', strtotime($cst['_event_start_date'][0])));
                    $cat = get_the_terms($post->ID,'event-categories');
                    if(in_array($cat[0]->term_id,array(20,21))){
                        $pro = get_field('user_profile');
                        $link = get_permalink($pro);
                        $linkText = 'View Profile';
                    }else{
                        $link = get_permalink();
                        $linkText = 'Read More';
                    }
                    $catName = $cat[0]->name;
                    ?>
                	<div class="event">
                    	<h4 class="company-event uppercase"><?php echo $catName; ?></h4>
                        <h4 class="uppercase"><?php echo $date ?>   |   Braintree, MA</h4>
                        <h2><?php the_title(); ?></h2>
                        <p><?php the_excerpt(); ?></p>
                        <ul>
    						<li><a href="<?php echo $link ?>" class="calmore"><?php echo $linkText; ?></a></li>
    						<li><a href="#" class="exmore">Register</a></li>
    						<li><a href="#" class="exmore">Add to Calendar</a></li>
    						<li><a href="#" class="exmore">Contact</a></li>
    					</ul>
    				</div>
                <?php }} wp_reset_query(); ?>
				<a href="#" class="exmore">Load more events</a>
                <?php printr(get_post(168)) ?>
            </div>
		</div>
	</div>
</div>

<? get_footer(); ?>

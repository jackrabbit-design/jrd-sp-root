<? /* Template Name: Calendar */ get_header(); the_post(); ?>

<div id="pagetitle">
    <div class="wrap">
        <h1><? the_title() ?></h1>
    </div>
</div>

<?php get_template_part('secondary-menu'); ?>

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

                $EM_Events = EM_Events::get( array(
                    'scope'=>'future',
                    'limit'=>4,
                    'offset' => (isset($_GET['pg']) ? ($_GET['pg'] - 1) * 4 : 0)
                ));

                foreach($EM_Events as $event){
                    $post = get_post($event->ID); setup_postdata($post);
                    $cst = get_post_custom();
                    $date = strtoupper(date('F j, Y', strtotime($event->event_start_date)));
                    $cat = get_the_terms($event->ID,'event-categories');
                    if(in_array($cat[0]->term_id,array(20,21))){
                        $pro = get_field('user_profile');
                        $link = get_permalink($pro);
                        $linkText = 'View Profile';
                    }else{
                        $link = get_permalink();
                        $linkText = 'Read More';
                    }
                    ?>
                	<div class="event">
                    	<h4 class="<?php echo $cat[0]->slug ?> uppercase"><?php echo $cat[0]->name; ?></h4>
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
                <?php } wp_reset_postdata(); ?>
				<a href="#" class="exmore">Load more events</a>
            </div>
		</div>
	</div>
</div>

<? get_footer(); ?>

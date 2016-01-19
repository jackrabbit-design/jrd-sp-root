<?
/* Template Name: Executive */
get_header(); the_post(); ?>

		<div id="pagetitle">
            <div class="wrap">
                <h1>Events on <?php echo get_the_date('F j, Y' ); ?></h1>
            </div>
        </div>

		<?php get_template_part('secondary-menu'); ?>






        <div id="main">
            <div class="wrap">

	            <div id="comcontent">

	            	<?php if ( have_posts() ) : ?>


                    <header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
			// Start the Loop.
			foreach($wp_query->posts as $post):

                $post = get_post($post->ID); setup_postdata($post);
                $cst = get_post_custom();
                $date = strtoupper(date('F j, Y', strtotime($post->event_start_date)));
                $caldate = date('d/m/Y', strtotime($post->event_start_date));
                $cat = get_the_terms($post->ID,'event-categories');
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
                        <?php if(!in_array($cat[0]->term_id,array(20,21))){ ?>
                            <li><a href="#" class="exmore">Register</a></li>
                        <?php } ?>
                        <li>
                            <script type="text/javascript" src="https://addevent.com/libs/atc/1.6.1/atc.min.js"></script>
                            <a href="<?php the_permalink() ?>" title="Add to Calendar" class="addeventatc">
                                Add to Calendar
                                <span class="start"><?= $caldate ?></span>
                                <span class="end"><?= $caldate ?></span>
                                <span class="timezone">America/New_York</span>
                                <span class="title"><?php echo $cat[0]->name . ' - ' . get_the_title(); ?></span>
                                <span class="description"><?= strip_tags(get_the_excerpt()) ?></span>
                                <span class="organizer"><? bloginfo('name') ?></span>
                                <span class="organizer_email">info@spconinc.com</span>
                                <span class="all_day_event">true</span>
                                <span class="date_format">DD/MM/YYYY</span>
                            </a>
                        </li>
                        <?php if(get_field('contact_link')){ ?>
                            <li><a href="<?php the_field('contact_link') ?>" class="exmore">Contact</a></li>
                        <?php } ?>
                    </ul>
                </div>

            <?php endforeach;

			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
				'next_text'          => __( 'Next page', 'twentyfifteen' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
			) );

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'content', 'none' );

		endif;
		?>

            </div>
        </div>
    </div>
    <?php wp_reset_query(); ?>

<? get_footer(); ?>

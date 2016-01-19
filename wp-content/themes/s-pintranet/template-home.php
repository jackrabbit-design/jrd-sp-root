<?php
/* Template Name: Home */
get_header(); the_post();
?>

		<div id="homebanner">
			<div class="wrap">
				<h6><?php the_field('we_are_text'); ?></h6>
				<div class="more">
					<a href="<?php the_field('read_more_link'); ?>"><?php the_field('read_more_text'); ?></a>
				</div>
			</div>
		</div>

        <?php get_template_part('secondary-menu'); ?>

		<div id="main">
			<div class="bgtest">
				 <div class="wrap clearfix">
					 <?php $ASheader = get_field('andy_steve_header'); $p = get_field('andy_&_steve_post'); $post = get_post($p); setup_postdata($post); ?>
					<div class="previewh1">

						<h3><?php echo $ASheader ?></h3>
                        <h4><?php the_date(); ?></h4>
                        <h2><?php echo get_the_title(); ?> </h2>
                        <p><?php echo strip_tags(get_the_excerpt()) ?></p>
                         <a href="<?php the_permalink(); ?>" class="readmore">Read More</a>
           		 	</div>
                    <div class="previewh1">
						<?php
							if ( has_post_thumbnail() ) {
								the_post_thumbnail( 'full' );
							}
							?>
                    </div>
					<?php wp_reset_postdata(); ?>
                </div>
            </div>
            <div class="wrap clearfix">
	            <div class="midline">
					<?php $p = get_field('featured_update_post'); $post = get_post($p); setup_postdata($post); ?>
	                <div class="previewh">
						<h3>Featured Update</h3>
                        <h4><?php the_date(); ?></h4>
                        <h2><?php echo get_the_title( ); ?> </h2>
                        <p><?php echo strip_tags(get_the_excerpt()) ?></p>
                         <a href="<?php the_permalink(); ?>" class="readmore">Read More</a>
	                </div>
					<?php wp_reset_postdata(); ?>
	                <div class="previewh">
	                <?php $p = get_field('company_news_post'); $post = get_post($p); setup_postdata($post); ?>
						<h3>Company News</h3>
                        <h4><?php the_date(); ?></h4>
                        <h2><?php echo get_the_title( ); ?> </h2>
                        <p><?php echo strip_tags(get_the_excerpt()) ?></p>
                         <a href="<?php the_permalink(); ?>" class="readmore">Read More</a>
	                </div>
	                <?php wp_reset_postdata(); ?>
	            </div>
            </div>

            <?php get_template_part('employee-blurb'); ?>


        </div>

<?php get_footer(); ?>

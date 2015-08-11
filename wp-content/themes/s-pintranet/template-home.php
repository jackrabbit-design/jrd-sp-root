<?php
/* Template Name: Home */
get_header(); the_post();
?>

		<div id="homebanner">
			<div class="wrap">
				<h6>We are client-focused, hard working, integrity-filled, loyal, and professional.</h6>
				<div class="more">
					<a href="#">Read More</a>
				</div>
			</div>
		</div>

        <?php get_template_part('secondary-menu'); ?>

		<div id="main">
			<div class="bgtest">
				 <div class="wrap clearfix">
					<div class="previewh1">
						<?php
						    $args = array(
						        'posts_per_page' => 1,
						        'post_type' => 'news',
						        'tax_query' => array(
						            array(
						                'taxonomy' => 'news-types',
						                'field' => 'slug',
						                'terms' => array(
						                    'from-andy-steve'
						                )
						            )
						        )
						    );
						    query_posts( $args ); while ( have_posts() ): the_post();
						?>

						<h3><?php $wp_query->query_vars['taxonomy_name'];?></h3>
                        <h4><?php the_date(); ?></h4>
                        <h2><?php echo get_the_title( $ID ); ?> </h2>
                        <p><?php echo strip_tags(get_the_excerpt()) ?></p>
                         <a href="<?php the_permalink(); ?>" class="readmore">Read More</a>
                    <?php endwhile; ?>
           		 	</div>
                    <div class="previewh1">
						<?php
							if ( has_post_thumbnail() ) {
								the_post_thumbnail( 'full' );
							}
							?>
                    </div>
                </div>
            </div>
            <div class="wrap clearfix">
	            <div class="midline">
	                <div class="previewh">
	                	<?php
					    $args = array(
					        'posts_per_page' => 1,
					        'post_type' => 'news',
					        'tax_query' => array(
					            array(
					                'taxonomy' => 'news-types',
					                'field' => 'slug',
					                'terms' => array(
					                    'featured-update'
					                )
					            )
					        )
					    );
					    query_posts( $args ); while ( have_posts() ): the_post();
					?>
					<?php $term =	$wp_query->queried_object;
							echo '<h3>'.$term->name.'</h3>';?>
                        <h4><?php the_date(); ?></h4>
                        <h2><?php echo get_the_title( $ID ); ?> </h2>
                        <p><?php echo strip_tags(get_the_excerpt()) ?></p>
                         <a href="<?php the_permalink(); ?>" class="readmore">Read More</a>
	                </div>
	                <?php endwhile; ?>
	                <div class="previewh">
	                	<?php
					    $args = array(
					        'posts_per_page' => 1,
					        'post_type' => 'news',
					        'tax_query' => array(
					            array(
					                'taxonomy' => 'news-types',
					                'field' => 'slug',
					                'terms' => array(
					                    'company-news'
					                )
					            )
					        )
					    );
					    query_posts( $args ); while ( have_posts() ): the_post();
					?>
					<?php $term =	$wp_query->queried_object;
							echo '<h3>'.$term->name.'</h3>';?>
                        <h4><?php the_date(); ?></h4>
                        <h2><?php echo get_the_title( $ID ); ?> </h2>
                        <p><?php echo strip_tags(get_the_excerpt()) ?></p>
                         <a href="<?php the_permalink(); ?>" class="readmore">Read More</a>
	                </div>
	                <?php endwhile; ?>
	            </div>
            </div>

            <?php get_template_part('employee-blurb'); ?>


        </div>

<?php get_footer(); ?>

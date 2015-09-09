<?
/* Template Name: Executive */
get_header(); the_post(); ?>

		<div id="pagetitle">
            <div class="wrap">
                <h1><? the_title() ?></h1>
            </div>
        </div>

		<?php get_template_part('secondary-menu'); ?>
    





        <div id="main">
            <div id="wrap">

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
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'content', get_post_format() );

			// End the loop.
			endwhile;

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
    <?php } wp_reset_query(); ?>

<? get_footer(); ?>

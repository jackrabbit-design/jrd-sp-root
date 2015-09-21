<?
/* Template Name: Media Overview */
get_header(); ?>

		<div id="pagetitle">
            <div class="wrap">
                <h1>Search Results</h1>
            </div>
        </div>

        <?php get_template_part('secondary-menu'); ?>


    <?php if(have_posts()){ ?>
        <div id="main">
            <div class="wrap">

	            <div id="comcontent">
					<h2 class="results"><?php echo $wp_query->post_count ?> results found for "<? echo get_query_var('s'); ?>".</h2>

	                <?php while(have_posts()){ the_post();
	                    $terms = get_the_terms($post->ID, 'news-types');
	                    $ts = ''; $i = 1;
						if($terms){
		                    foreach($terms as $t){
		                        $ts .= '<a href="'.get_term_link($t->term_id, $t->taxonomy).'">' . $t->name . '</a>' . ($i++ < count($terms) ? ', ' : '');
		                    }
						};
	                    $link = (get_field('external_link') ? get_field('external_link') . '" target="_blank' : get_permalink());
	                ?>
	                    <div class="preview">
	                        <h4><?php if($ts){ ?>
	                                <?php echo $ts ?> |
	                            <?php } ?>
	                            <?php echo get_the_date('F j, Y' ); ?>
	                        </h4>
	                        <h2><a href="<?= $link ?>"><?php the_title() ?></a></h2>

	                        <p><?php echo strip_tags(get_the_excerpt()) ?></p>
	                        <p><a href="<?= $link; ?>" class="exmore">Read More</a></p>
	                    </div>
	                <?php } ?>
	                <div class="load-more">
	                    <? next_posts_link('Load More News');  ?>
	                </div>
	            </div>
	        </div>
	    </div>
	<?php }else{ ?>
		<div id="main">
			<div class="wrap">
				<div id="comcontent">
					<h2 class="results"><?php echo $wp_query->post_count ?> results found for "<? echo get_query_var('s'); ?>".</h2>
				</div>
			</div>
		</div>
	<?php } wp_reset_query(); ?>

<? get_footer(); ?>

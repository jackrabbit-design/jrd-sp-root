<?php
/* Template Name: Company News */
get_header(); the_post(); ?>

		<div id="pagetitle">
            <div class="wrap">
                <h1><? the_title() ?></h1>
            </div>
        </div>

        <?php include (TEMPLATEPATH . '/secondary-menu.php'); ?>





    <?php
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args = array(
        'post_type' => 'news',
        'posts_per_page' => '8',
        'paged' => $paged,
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
    ?>

    <?php query_posts($args); if(have_posts()){ ?>
        <div id="main">
            <div id="wrap">

	            <div id="comcontent">

                <?php while(have_posts()){ the_post();
                    $topics = get_the_terms($post->ID, 'topic');
                    $types = get_the_terms($post->ID, 'type');
                    $terms = array_merge($topics,$types);
                    $ts = ''; $i = 1;
                    foreach($terms as $t){
                        $ts .= $t->name . ($i++ < count($terms) ? ', ' : '');
                    }
                    $link = (get_field('external_link') ? get_field('external_link') . '" target="_blank' : get_permalink());
                ?>
                    <div class="preview">
                    	 <?php echo '<h3>'.$term.'</h3>';?>
                        <h4><?php if($ts){ ?>
                                <i><?php echo $ts ?></i> |
                            <?php } ?>
                            <?php echo get_the_date('F j, Y' ); ?>
                        </h4>
                        <h2><a href="<?= $link ?>"><?php the_title() ?></a></h2>

                        <p><?php echo strip_tags(get_the_excerpt()) ?></p>
                        <p><a href="<?= $link; ?>" class="exmore">Read More</a></p>
                    </div>
                <?php } ?>
                <div class="load-more">
                    <? next_posts_link('LOADING MORE...');  ?>
                </div>
            </div>
        </div>
    </div>
    <?php } wp_reset_query(); ?>

<? get_footer(); ?>

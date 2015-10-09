<? get_header(); the_post(); ?>

        <div id="pagetitle">
            <div class="wrap">
                <?php
                $title = get_the_title();
                if($post->post_type == 'topic') $title = 'Employee Exchange';
                ?>
                <h1><? echo $title ?></h1>
            </div>
        </div>

        <?php get_template_part('secondary-menu'); ?>

        <? $parent = $post->post_parent; ?>


	    <div class="main">
	        <div class="wrap">
	            <div class="comcontent">
	                <? the_content(); ?>
	            </div>
	        </div>
	    </div>

<? get_footer(); ?>

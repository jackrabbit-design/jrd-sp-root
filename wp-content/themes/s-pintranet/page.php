<? get_header(); the_post(); ?>
   
        <div id="pagetitle">
            <div class="wrap">
                <h1><? the_title() ?></h1>
            </div>         
        </div>
        
        <?php include (TEMPLATEPATH . '/secondary-menu.php'); ?>

        <? $parent = $post->post_parent; ?>

 
	    <div class="main">
	        <div class="wrap">
	            <div class="comcontent">
	                        <? the_content(); ?>
	            </div>
	        </div>
	    </div>

<? get_footer(); ?>
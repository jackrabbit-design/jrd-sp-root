<?php

/**
 * Single Topic Content Part
 *
 * @package bbPress
 * @subpackage Theme
 */

?>

<div id="bbpress-forums">

	<?php // bbp_breadcrumb(); ?>

	<?php do_action( 'bbp_template_before_single_topic' ); ?>

	<?php // bbp_topic_tag_list(); ?>

	<?php // bbp_single_topic_description(); ?>

	<?php if ( bbp_show_lead_topic() ) : ?>

		<?php bbp_get_template_part( 'content', 'single-topic-lead' ); ?>

	<?php endif; ?>

	<?php if ( bbp_has_replies() ) : ?>

		<?php bbp_get_template_part( 'pagination', 'replies' ); ?>

		<?php bbp_get_template_part( 'loop',       'replies' ); ?>

		<?php bbp_get_template_part( 'pagination', 'replies' ); ?>

	<?php endif; ?>

	<?php bbp_get_template_part( 'form', 'reply' ); ?>


	<?php do_action( 'bbp_template_after_single_topic' ); ?>

</div>

<? /*

        <div id="main">
            <div class="wrap">
            	<div class="intro clearfix">
	            	<a href="exhange.html" class="exmore">&lt; Back to message board</a>
	            	<h2>Quisque feugiat elit non blandit viverra. Maecenas vel nibh feugiat, varius nunc vel, sagittis dolor.</h2>
	            	<p>Vestibulum tincidunt est a erat porttitor ultricies. Donec leo neque, mattis nec massa ut, posuere viverra mi. Nullam sed mi dapibus, ultrices sem ut, pellentesque lectus. In hac habitasse platea dictumst. Nullam ullamcorper euismod ligula. Sed scelerisque tristique enim at faucibus. </p>
		            <div class="postinfo">
		            	<div class="poster">
		            		<img src="../ui/images/posterimg.png" align="left"/>
		            		<p><a href="profile.html">Laura Bryant</a><br/>
		            		Posted on 3/4/2015 at 3:33pm.</p>
		            	</div>
		        		<div class="postreply">
		            		<a href="#" class="replybtn">Reply</a>
		            	</div>
	            	</div>
        		</div>
        		<div class="replies clearfix">
        			<p>Vestibulum tincidunt est a erat porttitor ultricies. Donec leo neque, mattis nec massa ut, posuere viverra mi. Nullam sed mi dapibus, ultrices sem ut, pellentesque lectus. In hac habitasse platea dictumst. Nullam ullamcorper euismod ligula. Sed scelerisque tristique enim at faucibus. </p>
        			<div class="poster">
	            		<img src="../ui/images/posterimg.png" align="left"/>
	            		<p><a href="profile.html">Laura Bryant</a><br/>
	            		Posted on 3/4/2015 at 3:33pm.</p>
		            </div>
        		</div>
        		<div class="postdivider"></div>
        		<div class="replies clearfix">
        			<p>Maecenas ornare non arcu vitae pharetra. Sed quis justo ex. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam dapibus elit libero, non dapibus arcu vulputate at. Nam in est eu risus dictum viverra quis eget enim.</p>
        			<div class="poster">
	            		<img src="../ui/images/posterimg.png" align="left"/>
	            		<p><a href="profile.html">Laura Bryant</a><br/>
	            		Posted on 3/4/2015 at 3:33pm.</p>
		            </div>
        		</div>
        		<div class="postdivider"></div>
        		<div class="replies last clearfix">
        			<p>Integer mollis, quam ut maximus rutrum, massa velit aliquam nunc, in ultricies purus leo sit amet risus. Praesent neque augue, facilisis nec tempus eu, blandit a nisl. In ac augue ex. Morbi sodales convallis leo, sed sodales dui sagittis nec. In quis suscipit velit. Quisque sapien lectus, finibus vel nulla gravida, porta egestas diam. Sed rutrum lorem tellus, posuere blandit mi porttitor non. Vivamus diam felis, mollis quis volutpat non, elementum.</p>
        			<div class="poster">
	            		<img src="../ui/images/posterimg.png" align="left"/>
	            		<p><a href="profile.html">Laura Bryant</a><br/>
	            		Posted on 3/4/2015 at 3:33pm.</p>
		            </div>
        		</div>
        		<div class="postcloser"></div>
	       		<div>
	                <ul class="tablenav">
	                	<li><a href="#">1</a></li>
	                	<li><a href="#" class="currentpage">2</a></li>
	                	<li><a href="#">3</a></li>
	                	<li><a href="#">4</a></li>
	                	<li><a href="#">5</a></li>
	                	<li><a href="#">></a></li>
	                </ul>
	            </div>
	            <textarea class="textreply clearfix">

	            </textarea>
	            <a href="#" class="replybtn">Post Reply</a>
	        </div>
	        <div class="divider">&nbsp;</div>
        </div>

*/ ?>

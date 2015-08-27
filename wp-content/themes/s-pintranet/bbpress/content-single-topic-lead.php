<?php

/**
 * Single Topic Lead Content Part
 *
 * @package bbPress
 * @subpackage Theme
 */

?>

<?php do_action( 'bbp_template_before_lead_topic' ); ?>


<div class="intro clearfix">
	<a href="exhange.html" class="exmore">&lt; Back to message board</a>
	<h2><?php bbp_topic_title(); ?></h2>

	<?php do_action( 'bbp_theme_before_topic_content' ); ?>
	<?php bbp_topic_content(); ?>
	<?php do_action( 'bbp_theme_after_topic_content' ); ?>

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

<?php do_action( 'bbp_template_after_lead_topic' ); ?>

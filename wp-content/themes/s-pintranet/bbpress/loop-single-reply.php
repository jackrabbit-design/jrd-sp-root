<?php

/**
 * Replies Loop - Single Reply
 *
 * @package bbPress
 * @subpackage Theme
 */

?>

<div class="replies clearfix">
	<?php do_action( 'bbp_theme_before_reply_content' ); ?>

	<?php bbp_reply_content(); ?>

	<?php do_action( 'bbp_theme_after_reply_content' ); ?>
	<div class="poster">
		<img src="../ui/images/posterimg.png" align="left"/>
		<p><a href="profile.html">Laura Bryant</a><br/>
			<?php bbp_reply_post_date(); ?>
		Posted on 3/4/2015 at 3:33pm.</p>
	</div>
</div>
<div class="postdivider"></div>

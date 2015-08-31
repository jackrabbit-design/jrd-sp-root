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

		<?php $auth = get_userdata(bbp_get_reply_author_id())->ID; ?>
		<?php $pro = get_field('associated_profile',"user_{$auth}") ?>

		<?php if($pic = get_field('photo',$pro)){ ?>
			<div class="circle"><a href="<?php echo get_permalink($pro) ?>">
				<img src="<?php echo $pic['sizes']['pro-pic'] ?>" alt="<?php the_title(); ?>" align="left" />
			</a></div>
		<?php } ?>

		<p><a href="<?php echo get_permalink($pro) ?>"><?php echo get_the_title($pro) ?></a><br/>

		<?php $date = bbp_get_topic_post_date();
		$cDate = DateTime::createFromFormat('F j, Y \a\t g:ia',$date);
		?>
		Posted on <?php echo $cDate->format('n/j/Y \a\t g:ia') ?>.</p>
	</div>
</div>
<div class="postdivider"></div>

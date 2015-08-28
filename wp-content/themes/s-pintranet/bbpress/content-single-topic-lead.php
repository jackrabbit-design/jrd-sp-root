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
	<a href="<?php echo get_permalink(151); ?>" class="exmore">&lt; Back to message board</a>
	<h2><?php bbp_topic_title(); ?></h2>

	<?php do_action( 'bbp_theme_before_topic_content' ); ?>
	<?php bbp_topic_content(); ?>
	<?php do_action( 'bbp_theme_after_topic_content' ); ?>

	<div class="postinfo">
		<div class="poster">

			<?php $auth = get_userdata(bbp_get_topic_author_id())->ID; ?>
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
		<div class="postreply">
			<a href="#" class="replybtn">Reply</a>
		</div>
	</div>
</div>

<?php do_action( 'bbp_template_after_lead_topic' ); ?>

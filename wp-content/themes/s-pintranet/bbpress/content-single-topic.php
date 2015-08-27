<?php

/**
 * Single Topic Content Part
 *
 * @package bbPress
 * @subpackage Theme
 */

?>

	<?php /*// bbp_breadcrumb(); ?>

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


	<?php do_action( 'bbp_template_after_single_topic' ); */?>




<div id="main">
    <div class="wrap">
    	<?php bbp_get_template_part('content','single-topic-lead'); ?>

		<?php if ( bbp_has_replies() ) : ?>

			<?php bbp_get_template_part( 'pagination', 'replies' ); ?>

			<?php bbp_get_template_part( 'loop',       'replies' ); ?>

			<?php bbp_get_template_part( 'pagination', 'replies' ); ?>

		<?php endif; ?>


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

		<?php bbp_get_template_part( 'form', 'reply' ); ?>

        <textarea class="textreply clearfix">

        </textarea>
        <a href="#" class="replybtn">Post Reply</a>
    </div>
    <div class="divider">&nbsp;</div>
</div>

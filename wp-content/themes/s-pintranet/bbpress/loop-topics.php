<?php

/**
 * Topics Loop
 *
 * @package bbPress
 * @subpackage Theme
 */

?>

<?php do_action( 'bbp_template_before_topics_loop' ); ?>

<table id="messagetable" class="sortable" cellspacing="0" width="100%">
	<thead>
		<tr>
			<th class="messageth60">Topics</th>
			<th class="messageth15">Posted By</th>
			<th class="messageth10">Posts</th>
			<th class="messageth15">Last Activity</th>

		</tr>
	</thead>

	<tbody>
		<?php while ( bbp_topics() ) : bbp_the_topic(); ?>

			<?php bbp_get_template_part( 'loop', 'single-topic' ); ?>

		<?php endwhile; ?>

	</tbody>

</table>


<?php do_action( 'bbp_template_after_topics_loop' ); ?>

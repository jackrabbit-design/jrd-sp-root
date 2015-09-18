<?php

/**
 * Search Content Part
 *
 * @package bbPress
 * @subpackage Theme
 */

?>

<div id="main">

	<div style="height:20px;"></div>

	<?php bbp_set_query_name( bbp_get_search_rewrite_id() ); ?>

	<?php do_action( 'bbp_template_before_search' ); ?>

	<?php if ( bbp_allow_search() ) : ?>
			<?php bbp_get_template_part( 'form', 'search' ); ?>
	<?php endif; ?>

	<?php bbp_get_template_part( 'form', 'topic' ); ?>

	<?php if ( bbp_has_search_results() ) : ?>

		<table id="messagetable" class="sortable" cellspacing="0" width="100%">
			<thead>
				<tr>
					<th class="messageth60">Topic</th>
					<th class="messageth15">Posted By</th>
					<th class="messageth10">Posts</th>
					<th class="messageth15">Last Activity</th>

				</tr>
			</thead>

			<tbody>

		 <?php bbp_get_template_part( 'loop',       'search' ); ?>

	 </tbody>

  </table>

		 <?php bbp_get_template_part( 'pagination', 'search' ); ?>


	<?php else : ?>

		<div class="wrap"><p style="padding-top:20px;">No results could be find. Try searching again.</p></div>


	<?php endif; ?>

	<?php do_action( 'bbp_template_after_search_results' ); ?>

</div>

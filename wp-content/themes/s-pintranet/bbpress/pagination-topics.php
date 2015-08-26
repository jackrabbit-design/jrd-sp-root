<?php

/**
 * Pagination for pages of topics (when viewing a forum)
 *
 * @package bbPress
 * @subpackage Theme
 */

?>

<?php do_action( 'bbp_template_before_pagination_loop' ); ?>

<div class="bbp-pagination">
	<div class="bbp-pagination-count">

		<?php bbp_forum_pagination_count(); ?>

	</div>

	<div class="bbp-pagination-links">

		<?php bbp_forum_pagination_links(); ?>

	</div>
</div>

<ul class="tablenav">
	<li><a href="#">1</a></li>
	<li><a href="#" class="currentpage">2</a></li>
	<li><a href="#">3</a></li>
	<li><a href="#">4</a></li>
	<li><a href="#">5</a></li>
	<li><a href="#">></a></li>
</ul>


<?php do_action( 'bbp_template_after_pagination_loop' ); ?>

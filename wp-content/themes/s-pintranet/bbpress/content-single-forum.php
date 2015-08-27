<?php

/**
 * Single Forum Content Part
 *
 * @package bbPress
 * @subpackage Theme
 */

?>
<div id="main">
	<div class="wrap">

		<p class="openp">Vestibulum tincidunt est a erat porttitor ultricies. Donec leo neque, mattis nec massa ut, posuere viverra mi. Nullam sed mi dapibus, ultrices sem ut, pellentesque lectus. In hac habitasse platea dictumst. Nullam ullamcorper euismod ligula. Sed scelerisque tristique enim at faucibus. </p>
	</div>

	<?php do_action( 'bbp_template_before_single_forum' ); ?>

	<?php if ( bbp_allow_search() ) : ?>
			<?php bbp_get_template_part( 'form', 'search' ); ?>
	<?php endif; ?>

	<?php bbp_get_template_part( 'form', 'topic' ); ?>

	<?php if ( !bbp_is_forum_category() && bbp_has_topics() ) : ?>

		<?php bbp_get_template_part( 'loop',       'topics'    ); ?>

		<?php bbp_get_template_part( 'pagination', 'topics'    ); ?>


	<?php endif; ?>

	<?php do_action( 'bbp_template_after_single_forum' ); ?>

</div>

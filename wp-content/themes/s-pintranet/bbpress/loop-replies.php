<?php

/**
 * Replies Loop
 *
 * @package bbPress
 * @subpackage Theme
 */

?>

<?php do_action( 'bbp_template_before_replies_loop' ); ?>

	<?php while ( bbp_replies() ) : bbp_the_reply(); ?>

		<?php bbp_get_template_part( 'loop', 'single-reply' ); ?>

	<?php endwhile; ?>

<?php do_action( 'bbp_template_after_replies_loop' ); ?>

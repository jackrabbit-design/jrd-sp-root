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

		<div class="openp">
            <?php echo bbp_forum_content(); ?>
        </div>
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

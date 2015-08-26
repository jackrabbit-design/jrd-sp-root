<?php

/**
 * Template Name: bbPress - Forums (Index)
 *
 * @package bbPress
 * @subpackage Theme
 */

get_header(); ?>

	<div id="pagetitle">
		<div class="wrap">
			<h1><? the_title() ?></h1>
		</div>
	</div>

	<?php include (TEMPLATEPATH . '/secondary-menu.php'); ?>

    <div id="main">
        <div class="wrap">

        	<p class="openp">Vestibulum tincidunt est a erat porttitor ultricies. Donec leo neque, mattis nec massa ut, posuere viverra mi. Nullam sed mi dapibus, ultrices sem ut, pellentesque lectus. In hac habitasse platea dictumst. Nullam ullamcorper euismod ligula. Sed scelerisque tristique enim at faucibus. </p>
        </div>

		<?php do_action( 'bbp_before_main_content' ); ?>

		<?php do_action( 'bbp_template_notices' ); ?>

		<?php the_post(); ?>

		<?php bbp_get_template_part( 'content', 'archive-forum' ); ?>

		<?php do_action( 'bbp_after_main_content' ); ?>

		<div class="divider">&nbsp;</div>
	</div>


<?php get_footer(); ?>

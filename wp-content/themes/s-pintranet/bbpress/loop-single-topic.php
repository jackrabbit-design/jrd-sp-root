<?php

/**
 * Topics Loop - Single
 *
 * @package bbPress
 * @subpackage Theme
 */

?>
<?php $date = bbp_get_reply_post_date();
$cDate = DateTime::createFromFormat('F j, Y \a\t g:ia',$date);
if($replies = bbp_get_all_child_ids($post->ID, 'reply')){
    $reply = $replies[0];
    $post = get_post($reply);
    setup_postdata($post);
    $date = $post->post_modified;
    $cDate = DateTime::createFromFormat('Y-m-d H:i:s',$date);
    wp_reset_postdata();
}

?>

<tr>
	<td class="message60">
		<p><a class="bbp-topic-permalink" href="<?php bbp_topic_permalink(); ?>"><?php bbp_topic_title(); ?></a></p>
		<p><?php bbp_topic_excerpt(); ?></p>
	</td>
	<?php $auth = get_userdata(bbp_get_topic_author_id())->ID; ?>
	<?php $pro = get_field('associated_profile',"user_{$auth}") ?>
	<td class="message15"><p><a href="<?php echo get_permalink($pro) ?>"><?php echo get_the_title($pro) ?></a></p></td>
	<td class="message10"><?php bbp_show_lead_topic() ? bbp_topic_reply_count() : bbp_topic_post_count(); ?></td>
	<td class="message15"><?php echo $cDate->format('n/j/Y \a\t g:ia') ?></td>
</tr>

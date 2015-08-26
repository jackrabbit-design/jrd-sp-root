<?php

/**
 * Search
 *
 * @package bbPress
 * @subpackage Theme
 */

?>


<div class="wrap clearfix">
    <form class="msgsearch" role="search" method="get" action="<?php bbp_search_url(); ?>">
        <ul>
            <li>
                <input tabindex="<?php bbp_tab_index(); ?>" type="text" value="<?php echo esc_attr( bbp_get_search_terms() ); ?>" name="bbp_search" id="bbp_search" />
				<input type="hidden" name="action" value="bbp-search-request" />
            </li>
            <li><img src="<?php bloginfo('url') ?>/ui/images/dropdown.png" width="18" /></li>
            <li class="exmore">Clear search</li>
        </ul>
    </form>
    <div class="newpost">
        <a href="" class="newpost">Start New Topic</a>
    </div>
</div>

<? /* Template Name: Calendar */ get_header(); the_post(); ?>

<div id="pagetitle">
    <div class="wrap">
        <h1><? the_title() ?></h1>
    </div>
</div>

<?php include (TEMPLATEPATH . '/secondary-menu.php'); ?>

<? $parent = $post->post_parent; ?>


<div id="main">
    <div class="wrap">
        <div id="calcontent">
         <div class="calright">

               <?php echo apply_filters('the_content','[events_calendar long_events=0 full=1]'); ?>

                <table class="caltable" cellspacing="0">
                	<thead>
                		<tr>
                			<th class="calth" colspan="7"><a href="#" class="leftbtn"><img src="<?php bloginfo('url'); ?>/ui/images/mobilearrow.png"/><img src="<?php bloginfo('url'); ?>/ui/images/mobilearrowhover.png"/></a>OCT 2015<a href="#" class="rightbtn"><img src="<?php bloginfo('url'); ?>/ui/images/mobilearrow.png"/><img src="<?php bloginfo('url'); ?>/ui/images/mobilearrowhover.png"/></a></th>
                		</tr>
                	</thead>
                	<tbody>
                		<tr class="daynames">
                			<td>sun</td>
                			<td>mon</td>
                			<td>tue</td>
                			<td>wed</td>
                			<td>thu</td>
                			<td>fri</td>
                			<td>sat</td>
                		</tr>
                		<tr class="daynum">
                			<td>27</td>
                			<td>28</td>
                			<td>29</td>
                			<td>30</td>
                			<td>1</td>
                			<td class="eventday">2</td>
                			<td class="eventday">3</td>
                		</tr>
                		<tr class="daynum">
                			<td>4</td>
                			<td>5</td>
                			<td class="eventday">6</td>
                			<td>7</td>
                			<td class="eventday">8</td>
                			<td>9</td>
                			<td class="eventday">10</td>
                		</tr>
                		<tr class="daynum">
                			<td>11</td>
                			<td>12</td>
                			<td>13</td>
                			<td>14</td>
                			<td class="currentday">15</td>
                			<td>16</td>
                			<td>17</td>
                		</tr>
                		<tr class="daynum">
                			<td>18</td>
                			<td class="eventday">19</td>
                			<td>20</td>
                			<td>21</td>
                			<td>22</td>
                			<td>23</td>
                			<td>24</td>
                		</tr>
                		<tr class="daynum">
                			<td>25</td>
                			<td>26</td>
                			<td class="eventday">27</td>
                			<td class="eventday">28</td>
                			<td class="eventday">29</td>
                			<td>30</td>
                			<td>31</td>
                		</tr>
                	</tbody>
                </table>
                <ul class="legend">
                	<li><img src="<?php bloginfo('url'); ?>/ui/images/company-event.png" />Company Event</li>
                	<li><img src="<?php bloginfo('url'); ?>/ui/images/meeting.png" />Meeting</li>
                	<li><img src="<?php bloginfo('url'); ?>/ui/images/birthday.png" />Birthday</li>
                	<li><img src="<?php bloginfo('url'); ?>/ui/images/anniversary.png" />Anniversary</li>
                </ul>
                <ul class="caloption">
                	<li><a href="#" class="exmore">select all</a></li>
                	<li><a href="#" class="exmore">select none</a></li>
                </ul>
            </div>
            <div class="calleft">
            	<div class="event">
                	<h4 class="company-event uppercase">Company Event</h4>
                    <h4 class="uppercase">OCTOBER 2, 2015   |   Braintree, MA</h4>
                    <h2>2015 Cerner Southeast Regional User Group (SeRUG)</h2>
                    <p>Vestibulum non diam vitae massa efficitur scelerisque. Donec laoreet congue ligula, quis malesuada elit rutrum id. curabitur sagittis auctor.</p>
                    <ul>
						<li><a href="#" class="calmore">Read More</a></li>
						<li><a href="#" class="exmore">Register</a></li>
						<li><a href="#" class="exmore">Add to Calendar</a></li>
						<li><a href="#" class="exmore">Contact</a></li>
					</ul>
				</div>
				<div class="event">
                	<h4 class="birthday uppercase">Birthday</h4>
                    <h4 class="uppercase">OCTOBER 3, 2015</h4>
                    <h2>Mary Jo’s Whittaker’s Birthday</h2>
                    <p>Vestibulum non diam vitae massa efficitur scelerisque. Donec laoreet congue ligula, quis malesuada elit rutrum id. curabitur sagittis auctor.</p>
                    <ul>
						<li><a href="#" class="calmore">Read More</a></li>
						<li><a href="#" class="exmore">Add to Calendar</a></li>
						<li><a href="#" class="exmore">Contact</a></li>
					</ul>
				</div>
				<div class="event">
                	<h4 class="anniversary uppercase">Anniversary</h4>
                    <h4 class="uppercase">OCTOBER 6, 2015</h4>
                    <h2>James Johnson’s 13th Work Anniversary</h2>
                    <p>Vestibulum non diam vitae massa efficitur scelerisque. Donec laoreet congue ligula, quis malesuada elit rutrum id. curabitur sagittis auctor.</p>
                    <ul>
						<li><a href="#" class="calmore">Read More</a></li>
						<li><a href="#" class="exmore">Add to Calendar</a></li>
						<li><a href="#" class="exmore">Contact</a></li>
					</ul>
				</div>
				<div class="event">
                	<h4 class="meeting uppercase">Meeting</h4>
                    <h4 class="uppercase">OCTOBER 8, 2015   |   Braintree, MA</h4>
                    <h2>2015 Cerner Southeast Regional User Group (SeRUG)</h2>
                    <p>Vestibulum non diam vitae massa efficitur scelerisque. Donec laoreet congue ligula, quis malesuada elit rutrum id. curabitur sagittis auctor.</p>
                    <ul>
						<li><a href="#" class="calmore">Read More</a></li>
						<li><a href="#" class="exmore">Register</a></li>
						<li><a href="#" class="exmore">Add to Calendar</a></li>
						<li><a href="#" class="exmore">Contact</a></li>
					</ul>
				</div>
				<a href="#" class="exmore">Load more events</a>
            </div>
		</div>
	</div>
</div>

<? get_footer(); ?>

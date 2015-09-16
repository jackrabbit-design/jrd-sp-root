<?php acf_form_head(); get_header(); the_post(); global $user; $me = get_field('associated_user'); ?>

    <?php if(isset($_GET['edit']) && $user == $me['ID']){
        get_template_part('profile-edit');
    }else{ ?>

        <div id="pagetitle">
            <div class="wrap">
                <h1><?php the_title(); ?></h1>
                <h4><?php the_field('job_title'); ?></h4>
                <div class="more">
                    <?php if($resume = get_field('resume')){ ?>
                        <a href="<?php echo $resume['url'] ?>" download>View R&eacute;sum&eacute;</a>
                    <?php } ?>
                    <?php if($user == $me['ID']){
                        echo '<a href="'.the_permalink().'?edit" style="margin-left:10px">Edit Profile</a>';
                    }
                    ?>
                </div>

            </div>
            <div class="gradbot"></div>
        </div>

        <div id="main">
        	<div class="wrap">
            	<div class="profile clearfix">
            		<div class="profileimg">
                        <?php if($pic = get_field('photo')){ ?>
                			<div class="circle">
                			    <img src="<?php echo $pic['sizes']['pro-pic'] ?>" alt="<?php the_title(); ?>" />
                			</div>
                        <?php } ?>
    				</div>
            		<div class="profileinfo">
    	        		<ul>
    	        			<li class="outterli">
    	        				<ul>
    	        					<li class="heading icon-envelope">Email</li>
    	        					<li class="profield"><a href="mailto:<?php the_field('email'); ?>">Send Email</a></li>
    	        				</ul>
    	        			</li>
    	        			<li class="outterli">
    	        				<ul>
    	        					<li class="heading icon-phone">Phone Number</li>
    	        					<li class="profield"><?php the_field('phone_number'); ?></li>
    	        				</ul>
    	        			</li>
    	        			<li class="outterli">
    	        				<ul>
    	        					<li class="heading icon-im">IM</li>
    	        					<li class="profield"><?php the_field('im'); ?></li>
    	        				</ul>
    	        			</li>
    	        		</ul>
    	        		<ul>
    	        			<li class="outterli">
    	        				<ul>
    	        					<li class="heading icon-gift">Birthday</li>
    	        					<li class="profield"><?php the_field('birthday'); ?></li>
    	        				</ul>
    	        			</li>
    	        			<li class="outterli">
    	        				<ul>
    	        					<li class="heading icon-anniversary">Anniversary</li>
    	        					<li class="profield"><?php the_field('anniversary'); ?></li>
    	        				</ul>
    	        			</li>
    	        			<li class="outterli">
    	        				<ul>
    	        					<li class="heading icon-location">Location</li>
    	        					<li class="profield"><?php the_field('location'); ?></li>
    	        				</ul>
    	        			</li>
    	        		</ul>
    	        	</div>
            	</div>
        	</div>
        	<div class="wrap clearfix">
        		<div class="articledisplay">
        			<?php the_field('bio'); ?>

    			</div>
    			<div class="sidebar empquote">
    				<blockquote><?php the_field('quote'); ?>&rdquo;</blockquote>
    			</div>
                <a href="<?php echo get_permalink(11) ?>" class="exmore articleback">&lt; Back to All</a>
        	</div>
        </div>
    <?php } ?>

<? get_footer(); ?>

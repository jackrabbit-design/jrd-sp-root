<?php if($spot = get_field('employee_spotlight')){ ?>
	<div class="spacer"></div>
	<div id="employeeblurb">
		<div class="employeeblurbleft">
			<div class="employeeblurbright">
				<div class="wrap clearfix">
					<div class="employeelayout">
						<div class="employeecenter">
							<?php if($pic = get_field('photo', $spot)){ ?>
	                			<div class="employeeimg">
									<div class="circle">
		                			    <img src="<?php echo $pic['sizes']['pro-pic'] ?>" alt="<?php the_title(); ?>" />
									</div>
	                			</div>
	                        <?php } ?>
							<div class="employeeinfo">
								<h3>Employee Spotlight</h3>
								<h5><?php echo get_the_title($spot) ?></h5>
								<h4><?php the_field('job_title',$spot) ?></h4>
							</div>
							<div class="employeetext">
								<p>&ldquo;<?php the_field('spotlight_quote'); ?>&rdquo;</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php } ?>

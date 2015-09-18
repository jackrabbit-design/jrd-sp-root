<? /* Template Name: Projects */ get_header(); the_post(); ?>

        <div id="pagetitle">
            <div class="wrap">
                <h1><?php if(isset($_GET['pm'])) echo get_the_title($_GET['pm']) . '\'s '; ?><? the_title() ?></h1>
            </div>
        </div>

        <?php get_template_part('secondary-menu'); ?>

        <? $parent = $post->post_parent; ?>


	    <div class="main">
	        <div class="wrap">
                <p class="openp"><?php the_field('intro_text'); ?></p>

                <?php if(have_rows('projects')){ ?>

                    <table id="projtable" class="sortable" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th class="projth20">Client</th>
                                <th class="projth20"> Location</th>
                                <th class="projth50">Project</th>
                                <th class="projth20">Project Manager</th>

                            </tr>
                        </thead>

                        <!--<tfoot>
                            <tr>
                                <th>Client</th>
                                <th>Location</th>
                                <th>Project</th>
                                <th>Project Manager</th>

                            </tr>
                        </tfoot>-->
                        <tbody>
                            <?php while(have_rows('projects')){ the_row();
                                $pm = get_sub_field('project_manager');
                                if(isset($_GET['pm']) && $_GET['pm'] != $pm) continue;
                                ?>
                                <tr>
                                    <td class="capitalize table20">
                                        <?php if($url = get_sub_field('client_url')){ ?>
                                            <a href="<?php echo $url ?>" class="exmore"><?php the_sub_field('client_name'); ?></a>
                                        <?php }else{ ?>
                                            <?php the_sub_field('client_name'); ?>
                                        <?php } ?>
                                    </td>
                                    <td class="table20"><?php the_sub_field('project_location'); ?></td>
                                    <td class="table50"><span class="projname"><?php the_sub_field('project_name'); ?></td>
                                    <td class="table20">
                                        <?php if($pm){ ?>
                                            <p><a href="<?php echo get_permalink($pm) ?>" class="exmore"><?php echo get_the_title($pm) ?></a></p>
                                            <p><a href="?pm=<?php echo $pm ?>" class="exmore">View Projects</a></p>
                                        <?php } ?>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                <?php } ?>
	        </div>
	    </div>

<? get_footer(); ?>

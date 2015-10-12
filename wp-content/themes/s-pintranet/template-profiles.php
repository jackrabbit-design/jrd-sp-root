<? /* Template Name: Profiles */ get_header(); the_post(); ?>

        <div id="pagetitle">
            <div class="wrap">
                <h1><? the_title() ?></h1>
            </div>
        </div>

        <?php get_template_part('secondary-menu'); ?>

        <? $parent = $post->post_parent; ?>


        <div id="main">
            <div class="wrap employees">
                <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                query_posts(array(
                    'post_type' => 'profile',
                    'posts_per_page' => '-1',
                    'paged' => $paged,
                    'orderby' => 'name',
                    'order' => 'ASC'
                )); if(have_posts()){ ?>
                    <table id="projtable" class="sortable" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th class="projth20">Name</th>
                                <th class="projth20">Title</th>
                                <th class="projth20">Location</th>
                                <th class="projth20">Contact</th>

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
                            <?php while(have_posts()){ the_post(); ?>
                                <tr>
                                    <td class="capitalize table20">
                                        <a href="<?php the_permalink() ?>" class="exmore"><?php the_title(); ?></a>
                                        <?php if(get_current_user_id() == get_field('associated_user')['ID']) echo '<small>(YOU)</small>'; ?>
                                    </td>
                                    <td class="table20"><?php the_field('job_title'); ?></td>

                                    <td class="table20"><?php the_field('location'); ?></td>
                                    <td class="table20">
                                        <?php if(get_field('email')){ ?>
                                            <li class="heading icon-envelope"><a href="mailto:<?php the_field('email'); ?>">Send Email</a></li>
                                        <?php } if(get_field('im')){ ?>
                                            <li class="heading icon-im"><a href="aim:goim?screenname=<?php echo str_replace(' ','',get_field('im')); ?>"><?php the_field('im'); ?></a></li>
                                        <?php } ?>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <div id="loader" class="clearfix">
                        <div class="replybtnprev" style="float:left;"><?php previous_posts_link('&lsaquo; Previous'); echo '</div> <div class="replybtnprev" style="float:right;">'; next_posts_link('Next &rsaquo;'); ?>
                    </div>
                <?php } wp_reset_query(); ?>
            </div>
        </div>


<? get_footer(); ?>

<? /* Template Name: Profiles */ get_header(); the_post(); ?>

        <div id="pagetitle">
            <div class="wrap">
                <h1><? the_title() ?></h1>
            </div>
        </div>

        <?php get_template_part('secondary-menu'); ?>

        <? $parent = $post->post_parent; ?>


        <div id="main">
            <div class="wrap">
                <?php query_posts(array(
                    'post_type' => 'profile',
                    'posts_per_page' => '-1'
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
                                    <td class="capitalize table20"><a href="<?php the_permalink() ?>" class="exmore"><?php the_title(); ?></a></td>
                                    <td class="table20"><?php the_field('job_title'); ?></td>

                                    <td class="table20"><?php the_field('location'); ?></td>
                                    <td class="table20">
                                        <li class="heading icon-envelope"><a href="mailto:<?php the_field('email'); ?>">Send Email</a></li>
                                        <li class="heading icon-im"><?php the_field('im'); ?></li>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                <?php } wp_reset_query(); ?>
            </div>
        </div>


<? get_footer(); ?>

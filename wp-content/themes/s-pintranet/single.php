<?php
if(get_field('external_link')){
    wp_redirect(get_field('external_link'));
    exit;
}
get_header(); the_post(); ?>

<div id="pagetitle">
            <div class="wrap">
        <h1><?php the_title() ?></h1>
    </div>
</div>

<?php get_template_part('secondary-menu'); ?>
    
<div id="main">
    <div class="wrap clearfix">

        <div class="articledisplay">

            <?php $parent = $post->post_parent; ?>

            <h4><?php if($ts){ ?>
                <i><?php echo $ts ?></i> |
                <?php } ?>
                <?php echo get_the_date('F j, Y' ); ?>
           </h4>

            <h2><?php the_title(); ?></h2>

            <?php the_content(); ?>



        </div>

        <div class="sidebar">

            <?php if(has_post_thumbnail()){ ?>
                <?php $feat = wp_get_attachment_image_src(get_post_thumbnail_id(), ($parent == 13 ? 'team' : 'feat')); $feat = $feat[0]; ?>
                <img src="<?= $feat ?>" class="img-responsive" alt="<? the_title() ?>">
            <?php } ?>
            <a href="<?= get_permalink($parent) ?>"><?= get_the_title($parent); ?></a>

            <p><?php the_field('subtitle_text') ?></p>

        </div>
    </div>
</div>


<?php get_footer(); ?>

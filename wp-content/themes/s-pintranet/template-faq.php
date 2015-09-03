<? /* Template Name: FAQs */ get_header(); the_post(); ?>

        <div id="pagetitle">
            <div class="wrap">
                <h1><? the_title() ?></h1>
            </div>
        </div>

        <?php include (TEMPLATEPATH . '/secondary-menu.php'); ?>

        <? $parent = $post->post_parent; ?>


        <div id="main">
            <div class="faqwrap">
                <div class="accordion">
                    <dl>
                        <?php $i = 1; while(have_rows('faqs')){ the_row(); ?>
                            <dt>
                                <a href="#accordion<?php echo $i; ?>" aria-expanded="false" aria-controls="accordion<?php echo $i; ?>" class="accordion-title accordionTitle js-accordionTrigger"><?php echo strip_tags(get_sub_field('question')); ?></a>
                            </dt>
                            <dd class="accordion-content accordionItem is-collapsed" id="accordion<?php echo $i; ?>" aria-hidden="true">
                                <?php the_sub_field('answer'); ?>
                            </dd>
                        <?php $i++; } ?>
                    </dl>
                </div>
            </div>
        </div>

<? get_footer(); ?>

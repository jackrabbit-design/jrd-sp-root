<div id="pagetitle">
    <div class="wrap">
        <h1><?php the_title(); ?></h1>
        <h4>Edit Profile</h4>
    </div>
    <div class="gradbot"></div>
</div>

<div id="main">
    <div class="wrap">

        <div id="edit">

            <?
                $args = array(
                    'post_id' => $post->ID,
                    'field_groups' => array( 262 ),
                    'submit_value' => 'Submit Changes',
                    'return' => '%post_url%',
                    'uploader' => 'basic'
                );

                acf_form( $args );
            ?>

        </div>

    </div>

</div>

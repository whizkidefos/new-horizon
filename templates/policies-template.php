<?php /* Template Name: Policies Template */ ?>

<?php get_header(); ?>

<section class="custom-page-template-header">
    <div class="uk-container">
        <h1 class="uk-text-center"><?php the_title(); ?></h1>
    </div>
</section>

<section class="uk-text-center custom-page-template-body">
    <div class="uk-container">
        <!-- <hr class="centered-divider" /> -->
        
        <?php
            $args = array(
                'post_type' => 'post'
            );

            $post_query = new WP_Query($args);

            if($post_query->have_posts() ) {
                while($post_query->have_posts() ) {
                    $post_query->the_post();
                    ?>
                        <div class="uk-child-with-expand@s uk-grid-match" uk-grid>
                            <div class="uk-card uk-card-default uk-card-body uk-width-1-2@m">
                                <h3 class="uk-card-title color-blue"><?php the_title(); ?></h3>
                                <p><?php echo wp_trim_words( get_the_content(), 40, '...' ); ?></p>
                                <a href="<?php the_permalink(); ?>" class="uk-button uk-button-secondary nav-cta">Read More</a>
                            </div>
                        </div>
                   
                    <?php
                    }
                }
        ?>

 
        
    </div>
</section>

<?php get_template_part('/components/benefits'); ?>

<?php get_template_part('/components/our-numbers'); ?>

<?php get_footer(); ?>
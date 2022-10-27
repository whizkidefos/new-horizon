<?php /* Template Name: Custom Page Template */ ?>

<?php get_header(); ?>

<section class="custom-page-template-header">
    <div class="uk-container">
        <h1 class="uk-text-center"><?php the_title(); ?></h1>
    </div>
</section>

<section class="uk-text-center custom-page-template-body">
    <div class="uk-container uk-container-small">
        <hr class="centered-divider" />
        <article>
            <?php the_content(); ?>
        </article>
    </div>
</section>

<?php get_template_part('/components/benefits'); ?>

<?php get_template_part('/components/our-numbers'); ?>

<?php get_footer(); ?>
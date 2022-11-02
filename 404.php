<?php /* Template Name: Default Page Template */ ?>

<?php get_header(); ?>

<section class="page-header">
    <div class="uk-container">
        <h1 class="uk-text-center"><?php the_title(); ?></h1>
    </div>
</section>

<section class="uk-text-center page-body">
    <div class="uk-container uk-container-small">
        <hr class="centered-divider" />
        <article>
            <h1>404</h1>
            <h4>Page not found!</h4>
            <p>You've ventured into uncharted territory. However, we've got ya. Use the navigation about to find your way around, or click <a href='/'>here</a> to return home.</p>
        </article>
    </div>
</section>

<?php get_template_part('/components/benefits'); ?>

<?php get_footer(); ?>
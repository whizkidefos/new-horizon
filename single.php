<?php get_header(); ?>

<section class="page-header">
    <div class="uk-container">
        <h1 class="uk-text-center"><?php the_title(); ?></h1>
    </div>
</section>

<section class="page-body">
    <div class="uk-container uk-container-small">
        <hr class="centered-divider" />
        <article>

            <?php the_content(); ?>

        </article>
    </div>
</section>

<?php get_template_part('/components/benefits'); ?>

<?php get_footer(); ?>
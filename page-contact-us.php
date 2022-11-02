<?php /* Template Name: Default Page Template */ ?>

<?php get_header(); ?>

<section class="page-header">
    <div class="uk-container">
        <h1 class="uk-text-center"><?php the_title(); ?></h1>
    </div>
</section>

<section class="page-body">
    <div class="uk-container uk-container-small">
        <!-- <hr class="centered-divider" /> -->
        <article>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


            <?php the_content(); ?>

            <?php endwhile; else : ?>
                <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
        </article>
    </div>
</section>

<?php get_template_part('/components/benefits'); ?>

<?php get_footer(); ?>
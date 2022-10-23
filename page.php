<?php get_header(); ?>

    <section>
        <header>
            <div class='uk-container'>
                <h1><?php the_title(); ?></h1>
            </div>
        </header>
    
        <article class='uk-container'>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


            <?php the_content(); ?>

        <?php endwhile; else : ?>
            <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>
        </article>

    </section>

<?php get_footer(); ?>
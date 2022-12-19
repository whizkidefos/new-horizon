<?php /* Template Name: Default Page Template */ ?>

<?php get_header(); ?>

<section class="page-header">
    <div class="uk-container">
        <h1 class="uk-text-center"><?php the_title(); ?></h1>
    </div>
</section>

<section class="page-body">
    <div class="uk-container uk-container-small">
        <!--<article>
            <//?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


            <//?php the_content(); ?>

            <//?php endwhile; else : ?>
                <p><//?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <//?php endif; ?>
        </article>-->

        <article class="dbs-check-container">
            <div class="uk-card uk-card-default uk-card-body">
                <div class="uk-alert-primary dbs-success-alert" uk-alert>
                    <a class="uk-alert-close" uk-close></a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                </div>
                <br>
                <form class="uk-form dbs-check-form" id="dbsCheckForm">
                    <div class="uk-margin">
                        <label for="applicantForename">Forename</label>
                        <input type="text" name='applicantForename' id="applicantForename" class="uk-input" placeholder='Your name' required>
                    </div>
                    <div class="uk-margin">
                        <label for="applicantSurname">Surname</label>
                        <input type="text" name='applicantSurname' id="applicantSurname" class="uk-input" placeholder="Your surname" required>
                    </div>
                    <div class="uk-margin">
                        <label for="applicantEmailAddress">Email Address</label>
                        <input type="text" name='applicantEmailAddress' id="applicantEmailAddress" class="uk-input" placeholder="Your email address" required>
                    </div>
                    <div class="uk-margin">
                        <label for="organisationId">Organisation ID</label>
                        <input type="text" name='organisationId' id="organisationId" class="uk-input" value="909" required>
                    </div>
                    <div class="uk-margin">
                        <label for="agency">Agency</label>
                        <input type="text" name='agency' id="agency" class="uk-input" value="New Horizon Healthcare Services" required>
                    </div>
                    <div class="uk-margin">
                        <label for="positionId">Position ID</label>
                        <input type="text" name='positionId' id="positionId" class="uk-input" value="NHHS21A07" required>
                    </div>
                    <div class="uk-margin">
                        <label for="internalReference">Internal Reference</label>
                        <input type="text" name='internalReference' id="internalReference" class="uk-input" value="NHHS909" required>
                    </div>
                    <button type="submit" class="uk-button uk-button-secondary uk-width-1-1" id="submitDBSData">Submit</button>
                </form>
            </div>
        </article>
    </div>
</section>

<!-- <//?php get_template_part('/components/benefits'); ?> -->

<?php get_template_part('/components/reviews'); ?>

<?php get_footer(); ?>
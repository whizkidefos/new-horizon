<?php get_header(); ?>

<?php get_template_part('/components/banner'); ?>

<section class="our-staff">
    <div class="uk-container">
        <h3 class="callout-h3 uk-text-center">Our Staff</h3>
        <div class="uk-child-width-1-2@s uk-child-width-1-4@m uk-grid-match" uk-grid>
            <div>
                <div class="custom-icon-box">
                    <i class="fa-solid fa-heart"></i>
                    <h4>Carers</h4>
                </div>
            </div>
            <div>
                <div class="custom-icon-box">
                    <i class="fa-solid fa-notes-medical"></i>
                    <h4>Healthcare Assistants</h4>
                </div>
            </div>
            <div>
                <div class="custom-icon-box">
                    <i class="fa-solid fa-user-nurse"></i>
                    <h4>Nurses</h4>
                </div>
            </div>
            <div>
                <div class="custom-icon-box">
                    <i class="fa-solid fa-user-doctor"></i>
                    <h4>Doctors</h4>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_template_part('/components/our-vision'); ?>

<?php get_template_part('/components/our-info'); ?>

<?php get_footer(); ?>
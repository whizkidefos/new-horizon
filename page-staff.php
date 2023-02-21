<?php /* Template Name: Staff Page Template */ ?>

<?php get_header(); ?>

<section class="staff-page-header">
    <div class="uk-container">
        <h1 class="uk-text-center"><?php the_title(); ?></h1>
    </div>
</section>

<section class="staff-page-body">
    <div class="uk-container">
        <article class="staff-info-box">
            <i class="fa-solid fa-notes-medical"></i>
            <h4>Healthcare Assistants</h4>
            <p>
                HCA’s are vital to the physical health and psychological wellbeing of patients. You are key and will be responsible for aiding patients every day. You will help with activities such as providing personal care, observing and mobilising patients and will work under the supervision of nurses and senior staff in healthcare settings.

                As a HCA registered with NHHS you will be able to receive job opportunities to suit you.
            </p>
        </article>

        <article class="staff-info-box">
            <i class="fa-solid fa-user-nurse"></i>
            <h4>Nurses</h4>
            <p>
            Nurses of each and every speciality are welcomed at New Horizon Healthcare Services. We work to provide nurses to care homes and hospital settings. As a nurse you will be responsible for caring for patients, administering medications, recording observations and maintaining a safe clinical environment. We recognise the key role of nurses within the healthcare sector and are here to encourage and provide you with competitive rates and new working opportunities More hours, temporary shift work or more clinical experience? As a nurse registered with NHHS you will be able to receive job opportunities to suit you.
            </p>
        </article>

        <!--<article class="staff-info-box">
            <i class="fa-solid fa-user-doctor"></i>
            <h4>Doctors</h4>
            <p>
            Here at New Horizon Healthcare Services we recognise the dedication and hardwork of doctors in the healthcare sector. As a Doctor you will be responsible for examining, diagnosing and treating patients. We welcome doctors with experience in all specialties with full GMC registration.

            Whether your focus is extra hours or more clinical experience we will work with you to fulfill your best potential. Register with New Horizon Healthcare Services and you will be able to receive job opportunities to suit you.
            </p>
        </article>-->

        <article class="staff-info-box">
            <i class="fa-solid fa-heart"></i>
            <h4>Carers</h4>
            <p>
            Carers have a diverse and essential role within our communities. Here at New Horizon Healthcare Services we commend our carers and work to provide you with job opportunities to suit you. We aim to match carers to care home and nursing home settings in North Wales and North West England. As a carer you will provide supervision, companionship, mobility assistance, personal care as well as daily communication with patients and relatives. Register as a carer with New Horizon and you will be able to receive job opportunities to suit you.
            </p>
        </article>
    </div>
</section>

<?php get_template_part('/components/benefits'); ?>

<?php get_footer(); ?>
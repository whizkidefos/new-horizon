<?php

/**
 * Disable a specific day of the week
 *
 * @link https://wpforms.com/developers/customize-the-date-time-field-date-options/
 */

function wpf_limit_date_picker_disable_specific_weekday() {
    ?>
    <script type="text/javascript">
        var d = new Date();
 
        // Only apply to the form ID 420 and the field ID 1
        window.wpforms_73_71 = window.wpforms_73_71 || {};
        window.wpforms_73_72 = window.wpforms_73_72 || {};
        window.wpforms_73_71.datepicker = {
            disableMobile: true,
            // Don't allow users to pick specific day of the week
            disable: [
                function(date) {
                    // return true to disable
                    // 1 = Monday; 2 = Tuesday; 3 = Wednesday; 4 = Thursday; 5 = Friday; 6 = Saturday; 0 = Sunday
                    return (date.getDay() === 0 || date.getDay() === 2 || date.getDay() === 3 || date.getDay() === 4 || date.getDay() === 5 || date.getDay() === 6 || date.getDay() === 7);
                }
            ]
        }

        window.wpforms_73_72.datepicker = {
            disableMobile: true,
            // Don't allow users to pick specific day of the week
            disable: [
                function(date) {
                    // return true to disable
                    // 1 = Monday; 2 = Tuesday; 3 = Wednesday; 4 = Thursday; 5 = Friday; 6 = Saturday; 0 = Sunday
                    return (date.getDay() === 1 || date.getDay() === 2 || date.getDay() === 3 || date.getDay() === 4 || date.getDay() === 5 || date.getDay() === 6 );
                }
            ]
        }
    </script>
    <?php
}

add_action( 'wpforms_wp_footer_end', 'wpf_limit_date_picker_disable_specific_weekday', 10 );
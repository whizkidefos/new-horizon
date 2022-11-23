<?php
/**
 * This will fire at the very end of a (successful) form entry.
 *
 * @link  https://wpforms.com/developers/wpforms_process_complete/
 *
 * @param array  $fields    Sanitized entry field values/properties.
 * @param array  $entry     Original $_POST global.
 * @param array  $form_data Form data and settings.
 * @param int    $entry_id  Entry ID. Will return 0 if entry storage is disabled or using WPForms Lite.
 */
 
function wpf_dev_process_complete( $fields, $entry, $form_data, $entry_id ) {
      
    // Optional, you can limit to specific forms. Below, we restrict output to
    // form #5.
    if ( absint( $form_data[ 'id' ] ) !== 140 ) {
        return;
    }
     
    // Get the full entry object
    $entry = wpforms()->entry->get( $entry_id );
 
    // Fields are in JSON, so we decode to an array
    $entry_fields = json_decode( $entry->fields, true );
 
    // Check to see if user selected 'yes' for callback
    if($entry_fields[6][ 'value' ] === 'Yes') {
        // Set the hidden field to 'Needs Callback' to filter through entries
        $entry_fields[7][ 'value' ] = 'Needs Callback';
    }
 
    // Convert back to json
    $entry_fields = json_encode( $entry_fields );
 
    // Save changes
    wpforms()->entry->update( $entry_id, array( 'fields' => $entry_fields ), '', '', array( 'cap' => false ) );
 
}

/**
 * Integrate WPForms with Disclosure services
 *
 * @author Efosa Igbinehi
 * @link https://www.iefosa.me/
 * 
 * @param array $fields
 * @param array $entry
 * @param array $form_data
 * @param int $entry_id
 */
function disclosure_services_connector( $fields, $entry, $form_data, $entry_id ) {

	// Limit to Form ID = 123
	if( 140 != $form_data['id'] )
		return;

	$api_url = 'https://clientapi.test.disclosureservices.com';
	$body = array(
		'applicantForename'                 => $fields['1']['value'],
		'applicantSurname'                  => $fields['2']['value'],
        'applicantEmailAddress'             => $fields['3']['value'],
		'organisationId'                    => $fields['4']['value'],
		'agency'                            => $fields['5']['value'],
		'positionId'                        => $fields['6']['value'],
		'internalReference'                 => $fields['7']['value'],
	);
	$request = wp_remote_post( $api_url, array( 'body' => $body ) );
	
}
add_action( 'wpforms_process_complete', 'disclosure_services_connector', 10, 4 );
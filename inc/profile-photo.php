<?php

/**
 * Ultimate Member 2.0 - Customization
 * Description: Allow everyone to upload profile registration pages.
 */
add_filter("um_user_pre_updating_files_array","um_custom_user_pre_updating_files_array", 10, 1);
function um_custom_user_pre_updating_files_array( $arr_files ){
   
   if( is_array( $arr_files ) ){
      foreach( $arr_files as $key => $details ){
           if( $key == "userphoto" ){
                 unset( $arr_files[ $key ] );
                  $arr_files[ "profile_photo" ] = $details;
           } 
      } 
   }   
 
   return $arr_files;
}

add_filter("um_allow_frontend_image_uploads","um_custom_allow_frontend_image_uploads",10, 3);
function um_custom_allow_frontend_image_uploads( $allowed, $user_id, $key ){
  
  if( $key == "profile_photo" ){
       return true;  
  }
 
  return $allowed; // false
}
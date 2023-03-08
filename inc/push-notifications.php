<?php

// Replace with your Firebase API key
define('FIREBASE_API_KEY', 'AIzaSyDlAVVZwcwEbiN2WSFlHRVcKPvel1zXj6E');

// Replace with your custom post type
define('CUSTOM_POST_TYPE', 'sh4_shift');

// Add a hook for publish_{post_type} action
add_action('publish_' . CUSTOM_POST_TYPE, 'send_push_notification', 10, 2);

// Define a function that sends a push notification using FCM API
function send_push_notification($ID, $post) {
  // Get the post title and permalink
  $title = $post->post_title;
  $link = get_permalink($ID);

  // Prepare the notification data
  $notification = array(
    'title' => $title,
    'body' => 'A new shift has been published',
    'icon' => 'https://newhorizonhealthcareservices.co.uk/wp-content/uploads/2022/10/new-horizon-logo-e1671692918399.png',
    'click_action' => $link
  );

  // Prepare the topic or token of the recipients
  // You can use /topics/{topic} for subscribing users to a topic
  // Or use an array of tokens for specific users
  $to = '/topics/' . CUSTOM_POST_TYPE;

  // Prepare the FCM API request headers and body
  $headers = array(
    'Authorization: key=' . FIREBASE_API_KEY,
    'Content-Type: application/json'
  );
  
  $fields = array(
    'to' => $to,
    'notification' => $notification,
    'priority' => 'high'
  );

  // Send the FCM API request using curl
  $ch = curl_init();
  
  curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
  
curl_setopt($ch, CURLOPT_POST, true);
  
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  
curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
  
curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
  
$result=curl_exec($ch);
  
curl_close($ch);

}
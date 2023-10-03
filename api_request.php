<?php
  $api_url = 'https://api.bluelytics.com.ar/v2/latest'; 

  $response = file_get_contents($api_url);

  $data = json_decode($response, true);
?>

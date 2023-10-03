<?php
  $api_url = 'https://api.bluelytics.com.ar/v2/latest'; 
  // Realiza una solicitud GET a la API
  $response = file_get_contents($api_url);

  // Decodifica la respuesta JSON en un arreglo asociativo
  $data = json_decode($response, true);
?>

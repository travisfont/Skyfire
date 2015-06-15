<?php

require_once('googlePlaces.php');

$apiKey       = 'NoTrEalKeytwlFfiWZfAJ9_WVoKM1_abc13';
$googlePlaces = new googlePlaces($apiKey);
$googlePlaces->setQuery('GNC, 33065, USA');
$results = $googlePlaces->Search();

echo '<pre>';
print_r($results);
#print_r($googlePlaces->error);

#formatted_phone_number
#website
#rating

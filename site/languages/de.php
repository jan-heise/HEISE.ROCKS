<?php

$kirby = kirby();
$site = $kirby->site();

return [
  'code' => 'de',
  'default' => true,
  'direction' => 'ltr',
  'locale' => 'de_DE.utf-8',
  'name' => 'Deutsch',
  'url' => '/', // Using the root URL for the default language will disable automatic language detection.
  'translations' => []
];

<?php
// This file declares a CSS theme for CiviCRM.

return [
  'name' => 'toronto',
  'title' => 'toronto theme',
  'prefix' => null,
  'url_callback' => '_toronto_civicrm_css_url',
  'search_order' => [
    'toronto',
    '_fallback_',
  ],
  'excludes' => [
    'bootstrap',
  ],
];

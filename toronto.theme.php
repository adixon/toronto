<?php
// This file declares a CSS theme for CiviCRM.

return [
  'name' => 'toronto',
  'title' => 'toronto theme',
  'prefix' => null,
  'url_callback' => '\\Civi\\Core\\Themes\\Resolvers::simple',
  'search_order' => [
    'toronto',
    '_fallback_',
  ],
  'excludes' => [
    'bootstrap',
  ],
];

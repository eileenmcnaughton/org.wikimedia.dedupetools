<?php
// This file declares an Angular module which can be autoloaded
// in CiviCRM. See also:
// http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_angularModules

return array (
  'js' => 
  array (
    0 => 'ang/dedupetools.js',
    1 => 'ang/dedupetools/*.js',
    2 => 'ang/dedupetools/*/*.js',
  ),
  'css' => 
  array (
    0 => 'ang/dedupetools.css',
  ),
  'partials' => 
  array (
    0 => 'ang/dedupetools',
  ),
  'requires' => 
  array (
    0 => 'crmUi',
    1 => 'crmUtil',
    2 => 'ngRoute',
  ),
  'settings' => 
  array (
  ),
);
<?php
/**************************************************
  Coppermine Plugin - jQuery UI
 *************************************************
  Copyright (c) 2017 Dan Paulat
 *************************************************
  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.
 ***************************************************/

if (!defined('IN_COPPERMINE')) die('Not in Coppermine...');

$thisplugin->add_action('page_start', 'jquery_ui_plugin_page_start');
$thisplugin->add_filter('page_meta', 'jquery_ui_plugin_page_meta');

function jquery_ui_plugin_page_start()
{
    global $JS;

    $JS['includes'][] = '//ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js';
}

function jquery_ui_plugin_page_meta($var)
{
    global $LINEBREAK;
    $var = '<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/base/jquery-ui.css" type="text/css" />' . $LINEBREAK . $var;
    return $var;
}

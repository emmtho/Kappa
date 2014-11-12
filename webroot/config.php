<?php
/**
 * Config-file for Kappa. Change settings here to affect installation.
 *
 */

/**
 * Set the error reporting.
 *
 */
error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors 
ini_set('output_buffering', 0);   // Do not buffer outputs, write directly


/**
 * Define Kappa paths.
 *
 */
define('KAPPA_INSTALL_PATH', __DIR__ . '/..');
define('KAPPA_THEME_PATH', KAPPA_INSTALL_PATH . '/theme/render.php');


/**
 * Include bootstrapping functions.
 *
 */
include(KAPPA_INSTALL_PATH . '/src/bootstrap.php');


/**
 * Start the session.
 *
 */
session_name(preg_replace('/[^a-z\d]/i', '', __DIR__));
session_start();


/**
 * Create the Kappa variable.
 *
 */
$kappa = array();


/**
 * Site wide settings.
 *
 */
$kappa['lang']         = 'sv';
$kappa['title_append'] = ' | Kappa en webbtemplate';

$kappa['header'] = <<<EOD
<img class='sitelogo' src='img/anax.png' alt='Kappa Logo'/>
<span class='sitetitle'>Kappa webbtemplate</span>
<span class='siteslogan'>Återanvändbara moduler för webbutveckling med PHP</span>
EOD;

$kappa['footer'] = <<<EOD
<footer><span class='sitefooter'>Copyright (c) Emma Thorén (emmtho9518@gmail.com) | <a href='https://github.com/mosbth/Anax-base'>Anax på GitHub</a> | <a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a></span></footer>
EOD;

$kappa["menu"] = array(
  'me'  => array('text'=>'Me',  'url'=>'index.php'),
  "source" => array("text" => "Källkod", "url" => "source.php"),
  "dice" => array("text" => "Tärning", "url" => "dice.php"),
  "slideshow" => array("text" => "Slideshow", "url" => "slideshow.php")
);

/**
 * Theme related settings.
 *
 */
//$kappa['stylesheet'] = 'css/style.css';
$kappa['stylesheets'] = array('css/style.css');
$kappa['favicon']    = 'favicon.ico';



/**
 * Settings for JavaScript.
 *
 */
$kappa['modernizr'] = 'js/modernizr.js';
$kappa['jquery'] = '//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js';
//$kappa['jquery'] = null; // To disable jQuery
$kappa['javascript_include'] = array();
//$kappa['javascript_include'] = array('js/main.js'); // To add extra javascript files



/**
 * Google analytics.
 *
 */
$kappa['google_analytics'] = 'UA-22093351-1'; // Set to null to disable google analytics
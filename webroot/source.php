<?php 
/**
 * This is a Kappa pagecontroller.
 *
 */
// Include the essential config-file which also creates the $kappa variable with its defaults.
include(__DIR__.'/config.php'); 


// Add style for csource
$kappa['stylesheets'][] = 'css/source.css';


// Create the object to display sourcecode
//$source = new CSource();
$source = new CSource(array('secure_dir' => '..', 'base_dir' => '..'));


// Do it and store it all in variables in the Kappa container.
$kappa['title'] = "Visa källkod";

$kappa['main'] = "<h1>Visa källkod</h1>\n" . $source->View();


// Finally, leave it all to the rendering phase of Kappa.
include(KAPPA_THEME_PATH);
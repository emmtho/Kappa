<?php 
/**
 * This is a Kappa pagecontroller.
 *
 */
// Include the essential config-file which also creates the $Kappa variable with its defaults.
include(__DIR__.'/config.php'); 



// Do it and store it all in variables in the Kappa container.
$kappa['title'] = "404";
$kappa['header'] = "";
$kappa['main'] = "This is a Kappa 404. Document is not here.";
$kappa['footer'] = "";

// Send the 404 header 
header("HTTP/1.0 404 Not Found");


// Finally, leave it all to the rendering phase of Kappa.
include(KAPPA_THEME_PATH);
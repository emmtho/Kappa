<?php 
/**
 * This is a Kappa pagecontroller.
 *
 */
// Include the essential config-file which also creates the $kappa variable with its defaults.
include(__DIR__.'/config.php'); 
 
 
// Do it and store it all in variables in the Kappa container.
$kappa['title'] = "Hello World";
 
$kappa['header'] = <<<EOD
<img class='sitelogo' src='img/anax.png' alt='Anax Logo'/>
<span class='sitetitle'>Kappa webbtemplate</span>
<span class='siteslogan'>Återanvändbara moduler för webbutveckling med PHP</span>
EOD;
 
$kappa['main'] = <<<EOD
<h1>Hej Världen</h1>
<p>Detta är en exempelsida som visar hur Kappa ser ut och fungerar.</p>
EOD;
 
$kappa['footer'] = <<<EOD
<footer><span class='sitefooter'>Copyright (c) Mikael Roos (me@mikaelroos.se) | <a href='https://github.com/mosbth/Anax-base'>Anax på GitHub</a> | <a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a></span></footer>
EOD;
 
 
// Finally, leave it all to the rendering phase of Kappa.
include(KAPPA_THEME_PATH);
<?php
/**
 * Bootstrapping functions, essential and needed for Kappa to work together with some common helpers. 
 *
 */

/**
 * Default exception handler.
 *
 */
function myExceptionHandler($exception) {
  echo "Kappa: Uncaught exception: <p>" . $exception->getMessage() . "</p><pre>" . $exception->getTraceAsString(), "</pre>";
}
set_exception_handler('myExceptionHandler');



/**
 * Autoloader for classes.
 *
 */
function myAutoloader($class) {
  $path = KAPPA_INSTALL_PATH . "/src/{$class}/{$class}.php";
  if(is_file($path)) {
    include($path);
  }
}
spl_autoload_register('myAutoloader');



/**
 * Dumpp all contents of a variabel.
 *
 * @param mixed $a as the variabel/array/object to dump.
 */
function dump($a) {
  echo '<pre>' . print_r($a, 1) . '</pre>';
}
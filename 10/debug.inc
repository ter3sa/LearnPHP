<?php
/*
 *	Author: Teresa Chin
 *
 *	Script to turn on debugging
 *  global boolean $debug variable
 */
/*
 * To display PHP error messages, PHP must be configured to display_errors.
 * the following code queries the option and ensures that it is set on.
 * if debug is true, ensure all error reporting and debugging code is turned on.
 */
global $debug;	// debug turns on error messages and dumps of variables

// Turn on debugging information if debug=1 is set via GET variable
// Call function once at the beginning of the main script to initialize
function debug_init() {
  global $debug;

  if (isset($_GET['debug'])) {
    if ($_GET['debug'] == '1') {
      $debug = true;
    }
  }
  // ensure that debug information is turned on.
  if ($debug) {
    $display_errors = ini_get('display_errors');
    if ( $display_errors == false ) {
      ini_set ('display_errors', 1);
      error_reporting(E_ALL | E_STRICT);
    } else {
      error_reporting(E_ALL | E_STRICT);
    }
  }
}

// call this to put out debug messages that can be turned off by $debug
function debug_msg($msg) {
    global $debug;
    if ($debug) { print "DEBUG:".$msg; }
}
?>

<?php
/*
 *	Book reference: Script 7.9 event.php of "PHP for Web" 
 *  derived from script described in the book by Larry Ullman
 *	Exploration of passing an array days via $_POST
 *
 *	Author: Teresa Chin
 *
 *	Modifications:
 *  7.9 Original script event.php as described in the book.
 */
/*
 * To display PHP error messages, PHP must be configured to display_errors.
 * the following code queries the option and ensures that it is set on.
 * if debug is true, ensure all error reporting and debugging code is turned on.
 */
$debug = true;	// debug turns on error messages and dumps of variables
if ($debug) {
	$display_errors = ini_get('display_errors');
	if ( $display_errors == false ) { 
		ini_set ('display_errors', 1);
		error_reporting(E_ALL | E_STRICT);	
	} else {
		error_reporting(E_ALL | E_STRICT);	
	}
}
?>

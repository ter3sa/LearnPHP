<!DOCTYPE html PUBLIC "-//W3C/DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Handle Form Data</title>
</head>
<body>
<h1>Handle Form</h1>
<?php
/*
 *	Book reference: Script 4.x of "PHP for Web"
 *	Investigating round() function
 *	Author: Teresa Chin
 *
 *	round( number, precision, mode);
 *	Book says that the round() function sometimes rounds up and sometimes
 *	rounds down.
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
		print "<p>display_errors is false. ";
		ini_set ('display_errors', 1);
		print "set display_errors ON.</p>";
		error_reporting(E_ALL | E_STRICT);	
	} else {
		print "<p>display_errors is true.</p>";
		error_reporting(E_ALL | E_STRICT);	
	}
}
$var = round(.4);
print "<p>round(.4) = $var</p>";
$var = round(.5);
print "<p>round(.5) = $var</p>";
$var = round(.6);
print "<p>round(.6) = $var</p>";
$var = round(.04);
print "<p>round(.04) = $var</p>";
$var = round(.05,1);
print "<p>round(.05,1) = $var</p>";
$var = round(.05,1);
print "<p>round(.05,1) = $var</p>";
$var = round(.005,2);
print "<p>round(.005,2) = $var</p>";
?>
</body>
</html>

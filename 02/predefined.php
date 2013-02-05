<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>PHP predefined variables</title>
</head>
<body>
<h1>Predefined Variables</h1>
<!-- The <pre> tag ensures that the output from print_r() will be formatted nicely -->
<pre>
<?php
/*
 *	Author: Teresa Chin
 *
 *	PHP script to display predefined PHP variable $_SERVER
 */
// PHP must be configured to display_errors.
$var = ini_get('display_errors');
if ( $var == "" ) { // if display_errors is off, returns null string.
	$var = 'OFF';
}
print "<p>display_errors = " . $var ;
print "</p>\n";
if ( $var == 'OFF' ) { // if display_errors is off returns null string.
	ini_set ('display_errors', 1);
	print "<p>set display_errors ON</p>\n";
	}
// script 2.1 - Predefined PHP variables
// Print out $_SERVER variable
print '$_SERVER'."\n";
print_r($_SERVER);
?>
<!-- This is an HTML comment. -->
</pre
</body>
</html>

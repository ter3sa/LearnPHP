<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>PHP Template</title>
</head>
<body>
<h1>Testing</h1>
<?php
/*
 *	This PHP template file is derived from
 *	Book reference: Script 1.5 of "PHP for Web"
 *	Created by: Larry Ullman
 *	Modified by Teresa Chin
 *	Modifications:
 *	1. added place holders for TITLE and PHP CODE.
 *	2. query and set the display_error setting for PHP.
 *
 * To display PHP error messages, PHP must be configured to display_errors.
 * the following code queries the option and ensures that it is set on.
 */
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
/* INSERT PHP CODE HERE */
?>
<!-- This is an HTML comment. -->
</body>
</html>

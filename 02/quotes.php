<!DOCTYPE html PUBLIC "-//W3C/DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Quotes</title>
</head>
<body>
<h1>Quotes</h1>
<pre>
<?php
/*
 *	Author: Teresa Chin
 *
 *	Script 2.4 quotes.php : understand about quoting strings
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
/*
 * Single or double quotes don't matter when intializing variables.
 */
$first_name = 'Teresa';
$last_name = "Chin";
// Single or double quotation marks DO MATTER here.
$name1 = '$first_name $last_name';
$name2 = "$first_name $last_name";
print "<h1>Assignment with Single Quotes</h1><p>name1 is $name1 <br />";
print "[ single quotes prevent variable replacement.]";
print "<h1>Assignment with Double Quotes</h1><p>name2 is $name2 <br />";

// Single or double quotation marks DO MATTER here when using print statement
print "<h1>print with Double Quotes</h1><p>name1 is $name1 <br />";
print '<h1>print with Single Quotes</h1><p>name1 is $name1 <br />';
?>
<!-- This is an HTML comment. -->
</pre
</body>
</html>

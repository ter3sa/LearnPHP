<!DOCTYPE html PUBLIC "-//W3C/DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>PHP Variables</title>
</head>
<body>
<h1>PHP Variables</h1>
<pre>
<?php
/*
 *	Author: Teresa Chin
 *
 *	PHP script 2.2 to display various PHP variables
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
// script 2.2 - PHP variables
$string = "A simple string"; // string variable
$a_number = 1;	// integer value
$float1 = .1; // double value
$float2 = .2; // another double
// indexed array
$veggie = array (
1 => 'carrots',
2 => 'cucumber',
3 => 'beans',
4 => 'celery',
5 => 'peas'
);
// associative array: keys are not numbers
$meals = array (
'breakfast' => "cereal",
'snack1'    => "milk & cookies",
'lunch'     => "pasta",
'snack2'    => "apple",
'dinner'    => "chicken & rice"
);
print "string = $string<br />";
print "integer $a_number<br />";
print "float1 = $float1<br />";
print "float2 = $float2<br />";
$f3 = $float1 + $float2; // sum of doubles
print "sum of floats = $f3<br />";
print 'can\'t use print function to print array \'$veggie\'</br />';
print "it will just print ";
print $veggie;
print '<br />use print_r($veggie) indexed array and here\'s what you get <br />';
print_r($veggie);
print '<br />use print_r($meals) associative array and here\'s what you get <br />';
print_r($meals);
?>
<!-- This is an HTML comment. -->
</pre
</body>
</html>

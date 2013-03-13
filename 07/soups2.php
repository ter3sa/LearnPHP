<!DOCTYPE html PUBLIC "-//W3C/DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>No Soup for You!</title>
</head>
<body>
<h1>Mmm..soups</h1>
<?php // Script 7.2a soups2.php
/*
 * To display PHP error messages, PHP must be configured to display_errors.
 * the following code queries the option and ensures that it is set on.
 * if debug is true, ensure all error reporting and debugging code is turned on.
 */
$debug = false;	// debug turns on error messages and dumps of variables
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

// create an array

$soups = array (
'Monday'	=> 'Clam Chowder',
'Tuesday'	=> 'White Chicken Chili',
'Wednesday'	=> 'Vegetarian'
);

// define additional groups of soups
$soups2 = array (
	'Thursday' => 'Chicken Noodle',
	'Friday'	=> 'Tomato',
	'Saturday'	=> 'Cream of Broccoli'
);

$soups3 = array (
	'Sunday'	=> 'Wonton'
);

print "<p>";
print_r ($soups);
print "</p>";

// Count how many elements in the original $soups array
print "<p>The soups array originally had ".count($soups)." elements.</p>";

// Add 3 more elements to the array.
$soups['Thursday'] = "Chicken Noodle";
$soups['Friday'] = "Tomato";
$soups['Saturday'] = "Cream of Broccoli";

$soups = array_merge( $soups, $soups2);

print '<p>After adding 3 soups, array now has '.count($soups).' elements.</p>';
// Print contents of array
print "<p>";
print_r($soups);
print "</p>";

// sizeof() is an alias to count() function.
$soups = $soups + $soups3;
print '<p>After adding another soup, array now has '.sizeof($soups).' elements.</p>';

// Print contents of array
print "<p>";
print_r($soups);
print "</p>";

?>
</body>
</html>

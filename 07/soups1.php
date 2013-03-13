<!DOCTYPE html PUBLIC "-//W3C/DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>No Soup for You!</title>
</head>
<body>
<h1>Mmm..soups</h1>
<?php // Script 7.1 soups1.php
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

// create an array

$soups = array (
'Monday'	=> 'Clam Chowder',
'Tuesday'	=> 'White Chicken Chili',
'Wednesday'	=> 'Vegetarian'
);

print "<p>$soups</p>";
print "<p>";
print_r ($soups);
print "</p>";
// note that var_dump() provides a more detailed description of data.
print "<p>";
var_dump ($soups);
print "</p>";
?>
</body>
</html>

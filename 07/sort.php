<!DOCTYPE html PUBLIC "-//W3C/DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>My Little Gradebook</title>
</head>
<body>
<?php 
/*
 * Script 7.5 sort.php
 * An exploration of functions to sort arrays.
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

// Create Arrays
$grades = array(
	'Richard' => 95,
	'Sherwood' => 82,
	'Toni' => 98,
	'Franz' => 87,
	'Melissa' => 75,
	'Roddy' => 85
);

print '<p>Originally the array looks like this: <br />';
foreach ($grades as $student => $grade) {
	print "$student: $grade<br />\n";
}
print '</p>';

// Sort using arsort()
print '<p>After sorting by value using arsort() the array looks like this: <br />';
arsort($grades);
foreach ($grades as $student => $grade) {
	print "$student: $grade<br />\n";
}
print '</p>';

// Sort student names using ksort()
print '<p>After sorting by value using ksort() the array looks like this: <br />';
ksort($grades);
foreach ($grades as $student => $grade) {
	print "$student: $grade<br />\n";
}
print '</p>';
?>
</body>
</html>

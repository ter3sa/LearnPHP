<!DOCTYPE html PUBLIC "-//W3C/DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Larry Ullman Books and Chapters</title>
</head>
<body>
<h1>Some of Larry Ullman's Books and Chapters</h1>
<?php // Script 7.4 books.php
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

// create an first array
$phpvqs = array (
1	=> 'Getting Started with PHP',
'Variables',
'HTML Forms and PHP',
'Using Numbers'
);

// create second array
$phpadv = array (
1 => 'Advanced PHP Techniques',
'Developing Web Applications',
'Advanced Database Concepts',
'Security Techniques');

// create third array
$phpmysql = array (
1 => 'Introduction to PHP',
'Programming with PHP',
'Creating Dynamic Web Sites',
'Introduction to MySQL');

// Create multidimensional array
$books = array (
'PHP VQS'	=> $phpvqs,
'PHP Advanced VQP' => $phpadv,
'PHP and MySQL VQP' => $phpmysql
);

// Print name of third chapter of first book
print "<p>The third chapter of my first book is <i>{$books['PHP VQS'][3]}</i>.</p>";
// First chapter of second book
print "<p>The first chapter of my second book is <i>{$books['PHP Advanced VQP'][1]}</i>.</p>";
// Fourth chapter of fourth book
print "<p>The fourth chapter of my fourth book is <i>{$books['PHP and MySQL VQP'][4]}</i>.</p>";

// Use foreach to examine arrays
foreach ($books as $title => $chapters ) {
	print "<p>$title";
	foreach ($chapters as $number => $chapter) {
		print "<br />Chapter $number is $chapter";
	}
}
print "<p>Dump of multidimensional array.</p>";
print "<pre>";
print_r($books);
print "</pre>";
?>
</body>
</html>

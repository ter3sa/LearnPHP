<!DOCTYPE html PUBLIC "-//W3C/DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Borrowed</title>
</head>
<body>
<h1>Items Borrowed from the Library</h1>
<?php // Script 7.x library.php
/*
 *	Script 7.x library.php
 *	Author: Teresa Chin
 *
 *	PHP script to display a multidimensional array
 *  In this case the different kinds of media that can be borrowed
 *	from the library.
 *  There are all kinds of media that can be borrowed from the library
 *  including: books, ebooks, magazines, cds, dvds, audiobooks.
 */
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

// Books from the library
$books = array (
'Fancy Nancy',
'Storytelling through Animation',
'Illuminated Pixels',
'Modern Javascript',
'Beginning Arduino'
);

// Ebooks from the library
$ebooks = array (
'Angels and Demons',
'Great Food, All Day Long'
);

// magazines from the library
$mags = array (
'Cooks Illustrated',
'Canadian Living');

$cds = array (
'Singable Songs for the Very Young',
'Baby Beluga'
);

$dvds = array (
'Gran Torino',
'Pride and Prejudice'
);

$vhs = array (
'101 Dalmations'
);

$videos = array_merge($dvds,$vhs);

// Create multidimensional array
$borrowed = array (
'books'	=> $books,
'ebooks' => $ebooks,
'magazines' => $mags,
'cd' => $cds,
'video' => $videos
);

// Use foreach to examine arrays
$count = 0; // running count of items borrowed
foreach ($borrowed as $type => $items ) {
	print "<p>$type";
	foreach ($items as $number => $item) {
		$count += 1;
		print "<br />$count: $item";
	}
}
print "<p>Dump of borrowed items.</p>";
print "<pre>";
print_r($borrowed);
print "</pre>";
?>
</body>
</html>

<!DOCTYPE html PUBLIC "-//W3C/DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Greetings!</title>
</head>
<body>
<?php
/*
 *	Book reference: Script 3.7 of "PHP for Web"
 *	Handle input data from "hello.html" in $_GET array
 *	Author: Teresa Chin
 *
 *	Echo information from feedback form, includes the following data:
 *	name 	 = name of person is passed via the URL
 */
$debug = false;
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
if ($debug) {
	print '<p>Dump $_REQUEST: '; 
	var_dump($_REQUEST);
	print "</p>";
	print '<p>Dump $_GET: '; 
	var_dump($_GET);
	print "</p>";
}
$name = $_GET['name'];
print "<p>Hello, <span style=\"font-weight: bold;\">$name</span>!</p>";
?>
</body>
</html>

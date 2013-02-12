<!DOCTYPE html PUBLIC "-//W3C/DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Handle Hello Data</title>
</head>
<body>
<h1>Process Hello Form 2</h1>
<?php
/*
 *	Book reference: Script 3.7 of "PHP for Web"
 *	Handle input data from "hello2.html" in $_GET array
 *	Author: Teresa Chin
 *
 *	Echo information from feedback form, includes the following data:
 *	first 	 = first name of person filling out the form
 *	last 	 = last name of person filling out the form
 *	email 	 = email address
 *	favnum 	 = favourite number 
 *	favcolor = favourite color 
 */
/*
 * To display PHP error messages, PHP must be configured to display_errors.
 * the following code queries the option and ensures that it is set on.
 * if debug is true, ensure all error reporting and debugging code is turned on.
 */
$debug = (boolean) $_GET['debug'];	// debug turns on error messages and dumps of variables
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
/*
 * Note: Currently, there is no checking in the form for no input submissions
 * It is possible to get errors if no input is submitted.
 */
$name = $_GET['first'].' '.$_GET['last'];
$email = $_GET['email'];
$favnum = $_GET['favnum'];
$favcolor = $_GET['favcolor'];
print "<p>This is, $name." . "<br />";
print "email is $email.<br />";
print "favourite number is $favnum.<br />";
print "favourite color is $favcolor.</p>";
?>
</body>
</html>

<!DOCTYPE html PUBLIC "-//W3C/DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Contact Form</title>
</head>
<body>
<h1>Hello</h1>
<?php
/*
 *	Book reference: Script 3.x of "PHP for Web"
 *	Handle input data from "contact.html" in $_POST array
 *	Author: Teresa Chin
 *
 *	Echo information from feedback form, includes the following data:
 *	first 	 = name of person filling out the form (includes title)
 *	last 	 = name of person filling out the form (includes title)
 *	email 	 = email address
 *	services = { 'design','maintenance','front-end','programming' }
 *	problem	 = text description
 */
/*
 * To display PHP error messages, PHP must be configured to display_errors.
 * the following code queries the option and ensures that it is set on.
 * if debug is true, ensure all error reporting and debugging code is turned on.
 */
$debug = $_POST['debug']; // debug turns on error messages and dumps of variables
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
	print '<p>Dump $_POST: '; 
	var_dump($_POST);
	print "</p>";
}
/*
 * Note: Currently, there is no checking in the form for no input submissions
 * It is possible to get errors if no input is submitted.
 */
$source = $_POST['form_page'];	// hidden field
$name = $_POST['firstn'].' '.$_POST['lastn'];
$email = $_POST['email'];
$services = $_POST['services'];
/*
 * Added stripslashes in case there are escaped quotes
 */
$problem = stripslashes($_POST['problem']);
if ($debug) {
	print "script is called from $source."; // hidden field
	print "<pre>";
	print 'Raw problem: ';
	print $_POST['problem'];
	print "</pre>";
}
print "<p>Hello, <span style=\"font-weight: bold;\">$name</span>;<br />";
if ( $problem == "" )
	print "<p>Great! You have no problem. It's nice to hear from you.</p>";
else {
	print "<p>Thank you for sharing your problems.<pre>$problem</pre></p>";
	if ($email == "") {
		print "<p>I'm sorry I can't respond. I don't have your email address. Please try again.</p>";
	} else {
		print "<p>I will contact you at $email shortly.</p>";
	}
}
?>
</body>
</html>

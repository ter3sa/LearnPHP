<!DOCTYPE html PUBLIC "-//W3C/DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Handle Form Data</title>
</head>
<body>
<h1>Handle Form</h1>
<?php
/*
 *	Book reference: Script 3.x of "PHP for Web"
 *	Handle input data from "feedback.html" in $_POST array
 *	Author: Teresa Chin
 *
 *	Echo information from feedback form, includes the following data:
 *	name 	 = name of person filling out the form (includes title)
 *	email 	 = email address
 *	response = one of following ratings { 'excellent','okay','boring' }
 *	comments = string of comments
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
$name = $_POST['title'].' '.$_POST['name'];
$email = $_POST['email'];
$response = $_POST['response'];
/*
 * Added stripslashes in case there are escaped quotes
 */
$comments = stripslashes($_POST['comments']);
if ($debug) {
	print "script is called from $source."; // hidden field
	print "<pre>";
	print 'Raw comments: ';
	print $_POST['comments'];
	print "</pre>";
}
print "<p>Thank you, $name, for your response.<br />";
print "You rated the form as \"$response\".<p>";
if ( $comments == "" )
	print "<p>You had no comments.</p>";
else
	print "<p>Thank you for your comments<pre>$comments</pre></p>";
?>
</body>
</html>

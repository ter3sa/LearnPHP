<!DOCTYPE html PUBLIC "-//W3C/DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Add an Event</title>
</head>
<body>
<?php
/*
 *	Book reference: Script 7.9 event.php of "PHP for Web" 
 *  derived from script described in the book by Larry Ullman
 *	Exploration of passing an array days via $_POST
 *
 *	Author: Teresa Chin
 *
 *	Modifications:
 *  7.9 Original script event.php as described in the book.
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

$expected_source = "event.html";
$source = $_POST['form_page'];	// hidden field
if ($source != $expected_source) {
	die ("Something is amiss; not called from $expected_source");
}
$foundproblem = false; // flag any problems

if ($debug) {
	print_r($_POST);
}

if (empty($_POST['name'])) {
	$foundproblem = true;
	print "<p>Please specify the name of an event.";
} else {
	print "<p>You want to add an event called <b>{$_POST['name']}</b><br />which takes place on: <br />";
}

if (isset($_POST['days']) AND is_array($_POST['days'])) {
	foreach ($_POST['days'] as $day) {
		print "$day<br />\n";
	}
} else {
	$foundproblem = true;
	print "<p>Please select at least one weekday for this event. ";
}
if ($foundproblem) {
	print "<p>Encountered a problem. Please <a href=\"$expected_source\">try again</a>.";
}

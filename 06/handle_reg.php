<!DOCTYPE html PUBLIC "-//W3C/DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Registration</title>
	<style type="text/css" media="screen">
		.error {color: red;}
		.red { color: red; }
		.yellow { color: yellow; }
		.green { color: green; }
		.blue { color: blue; }
	</style>
</head>
<body>
<h1>Registration Results</h1>
<?php
/*
 *	Book reference: Script 6.11 of "PHP for Web" 
 *  Validate form data from register.html
 *
 *	Author: Teresa Chin
 *
 *	Modifications:
 *	1. Using if conditionals and the empty() function
 *		check if email address and password were provided.
 *	2. Use isset() to detect if a checkbox variable was set
 *	3. Use if-else to validate birth year.
 *	4. Validate data by comparing values
 *	Script 6.6 - change year validation routine uses both multiple
 *		nested conditions.
 *		Also terms of agreement is now validated.
 *	Script 6.7 - multiline if-elseif-else conditional
 *		validates that a submitted color has an allowed value
 *		and is used to determine what type of color the selection is.
 *	Script 6.8 - rewrite color validation using switch statement.
 *	Script 6.10 - write favourite color in the selected color
 *	Script 6.11 - added changes for $birthday
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

//	Track progress of validation, assume all is well until something bad is detected.
$okay = TRUE;

/*
 * Script 6.2 variables (values passed via POST method) from register.html
 *	$source		= hidden field - name of form
 *	email = email address
 *  password = password
 *  confirm 	= confirmed password
 *	year		= birth year
 *	color		= favourite color (from selected list)
 *	terms		= agree to terms
 */

if ($debug) {
	print '<p>Dump $_REQUEST: '; 
	var_dump($_REQUEST);
	print "</p>";
	print '<p>Dump $_POST: '; 
	var_dump($_POST);
	print "</p>";
}

$expected_source = "register.html";
$source = $_POST['form_page'];	// hidden field
if ($source != $expected_source) {
	$okay = FALSE;
	die ("Something is amiss; not called from $expected_source");
}

/* fail if no email address is provided */
if (empty($_POST['email'])) {
	print '<p class="error">Please enter your email address.</p>';
	$okay = FALSE;
} else {
	$email = $_POST['email'];
}

/* fail if no password is provided */
if (empty($_POST['password'])) {
	print '<p class="error">Please enter your password.</p>';
	$okay = FALSE;
} else {
	$passwd = trim($_POST['password']);
}

/* fail if no confirm password is provided */
if (empty($_POST['confirm'])) {
	print '<p class="error">Please confirm your password, by entering it again.</p>';
	$okay = FALSE;
} else {
	$confirm = trim($_POST['confirm']);
}
// Check the two passwords for equality
if ($okay && $confirm != $passwd) {
	print '<p class="error">Your confirmed password does not match the original password.</p>';
	$okay = FALSE;
}

// validate the year
$current_year = (integer) date("Y");
if ($debug) {
	print "Currrent year is $current_year.";
}
if (is_numeric($_POST['year']) AND (strlen($_POST['year']) == 4) ) {
	// Check that they were born before current year
	if ( $_POST['year'] < $current_year ) {
		$age = $current_year - $_POST['year'];	// calculate age this year
	} else {
		print '<p class="error">Either you entered your birth year wrong or you come from the future.</p>';
		$okay = FALSE;
	}
		
} else {
	print '<p class="error">Please enter the year you were born as four digits.</p>';
	$okay = FALSE;
}

if (empty($_POST['month'])) {
	print '<p class="error">Please select the month of your birthday.</p>';
	$okay = FALSE;
} else {
	$month = sprintf("%02d", $_POST['month']);
}
if (empty($_POST['day'])) {
	print '<p class="error">Please select the date of birth.</p>';
	$okay = FALSE;
} else {
	$day = sprintf("%02d", $_POST['day']);
}
if ($okay) {
	$birthday = $month."/".$day."/".$_POST['year'];
	if ($debug)
		print $birthday;
}

// Validate the terms 
if (!isset($_POST['terms'])) {
	print '<p class="error">You must accept the terms.</p>';
	$okay = FALSE;
} 

// Validate the color
$color = $_POST['color'];
if (empty($color)) {
	print '<p class="error">Please select your favourite colour.</p>';
	$okay = FALSE;
}

switch ($color) {
	case 'red':
		$color_type = 'primary';
		break;
	case 'yellow':
		$color_type = 'primary';
		break;
	case 'green':
		$color_type = 'secondary';
		break;
	case 'blue':
		$color_type = 'primary';
		break;
	default:
		print '<p class="error">Please select your favourite colour.</p>';
		$okay = FALSE;
		break;
} // end of switch

// If there were no errors, print a success message.
if ($okay) {
	print "<p>You have been sucessfully registered (but not really).</p>";
	print "<p>You will turn $age this year. Your birthday is $birthday</p>";
	print "<p>Your favourite <span class=\"".$color."\">colour</span> is a $color_type colour.</p>";
}
?>
</body>
</html>

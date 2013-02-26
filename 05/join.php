<!DOCTYPE html PUBLIC "-//W3C/DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Join List</title>
</head>
<body>
<?php
/*
 *	Book reference: Script 5.8 of "PHP for Web" - join.php
 *  Add contact information from form "joinlist.html".
 *  Check contact information for validity before adding to list.
 *
 *  This script receives 4 variables from the $_POST array
 *	form_page = name of form, confirm input from form
 *	first_name, last_name
 *	email = email address
 *
 *	Author: Teresa Chin
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

/*
 * Script 5.8 variables (values passed via POST method)
 * Limited safety measures taken on input values.
 * 	trim extra space from names
 *	ensure no html tag in names
 *  ensure email conforms somewhat to email address structure
 *		<name>@<domain>
 *	if email is invalid or suspicious, don't add to list
 */
$first_name = trim(strip_tags($_POST['first_name']));
$last_name = trim(strip_tags($_POST['last_name']));
$email = $_POST['email'];
$suspicious = false;	// assume okay until a problem is found

$source = $_POST['form_page'];	// hidden field
if ($source != "joinlist.html") {
	$suspicious = true;
	die ("Something is amiss; not called from joinlist.html");
}
/*
 * if "<script>" or "<SCRIPT>" is detected - don't process it.
 * strstr(haystack, needle, before_needle) searches for needle in haystack
 *	  returns first instance or string before needle.
 * stristr() same as strstr() except case independent
 */
$scriptclean = stristr($email, "<script>", TRUE);
	if ($scriptclean === false) {
		if ($debug) print "stristr says email is clean of scripts.<br />";
    } else {
		if ($debug) {
			print "stristr found <script>.<br />";
		}
		$suspicious = true;
	}
/*
 * if @ is not in email address - bad address
 */
$ename = strstr($email, '@',true);
$domain = strstr($email, '@');
$domain = substr($domain,1);
if ($debug) {
	print "ename = $ename<br />";
	print "domain = $domain<br />";
}
if ($ename === false) $suspicious = true;
if ($ename == "" ) $suspicious = true;
if ($domain == "") $suspicious = true;
	
// Check for embedded HTML tags
$possible_tag = strstr($email, '<'); 
if ($possible_tag != "" && $possible_tag != false ) $suspicious = true;
$possible_tag = strstr($domain, '<'); 
if ($possible_tag != "" && $possible_tag != false ) $suspicious = true;
/*
 * format values before printing
 */
$name = $first_name . ' ' . $last_name;
$email = trim(strip_tags($ename)).'@'.trim(strip_tags($domain));
/*
 * process posting data to be safer to send back to browser
 */
if ($suspicious) {
	print "<div><p>Sorry contact, $name, will not be added to list.<br />";
	print "&nbsp;&nbsp;email address:&nbsp;";
	print htmlentities($email);
	print "</p></div>";
} else {
	print "<div><p>$name &lt;$email&gt; will be added to the list.</p></div>";
}

?>
</body>
</html>

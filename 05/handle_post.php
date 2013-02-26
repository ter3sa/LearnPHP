<!DOCTYPE html PUBLIC "-//W3C/DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Handle Post</title>
</head>
<body>
<h1>Handle Posting</h1>
<?php
/*
 *	Book reference: Script 5.7 of "PHP for Web" - handle_post.php
 *  Explore strings in PHP, using form "posting.html".
 *	Pass information to another script thanks.php
 *  Count words and trim posting to 50 characters.
 *
 *  This script receives 5 variables from the $_POST array
 *	form_page = name of form
 *	first_name, last_name
 *	email = email address
 * 	posting = content to be posted
 *
 *	process the posting text to be safe when sent back to browser
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
 * Script 5.3 variables (values passed via POST method)
 * Limited safety measures taken on input values.
 */
$first_name = trim(strip_tags($_POST['first_name']));
$last_name = trim(strip_tags($_POST['last_name']));
$email = $_POST['email'];
$raw_posting = trim($_POST['posting']);
$posting = nl2br($raw_posting); //use nl2br() to preserve newlines as breaks in html
$source = $_POST['form_page'];	// hidden field
if ($source != "posting.html") {
	die ("Something is amiss; not called from posting.html");
}
/*
 * Don't dump posting because it may contain javascript code,
 * i.e. tried <script>alert("hello")</script> which caused a popup window
 * Converting to HTML entities; disables the execution of the
 * scripts and html tags by the browser.
 */
$safe_post = htmlentities($_POST['posting']);
if ($debug) {
	print 'htmlentities(_POST[posting])=<br />';
	var_dump($safe_post);
}
/*
 * if "<script>" or "<SCRIPT>" is detected - don't process it.
 * strstr(haystack, needle, before_needle) searches for needle in haystack
 *	  returns first instance or string before needle.
 * stristr() same as strstr() except case independent
 */
$script_detected = false;	// script detected in posting
$scriptclean_posting = stristr($raw_posting, "<script>", TRUE);
	if ($scriptclean_posting === false) {
		if ($debug) print "stristr says posting is clean.<br />";
    } else {
		if ($debug) {
			print "stristr found <script>.<br />";
			print "clean_posting: $scriptclean_posting<br />";
		}
		$posting = nl2br($scriptclean_posting);
		$script_detected = true;
	}
/*
 * format values before printing
 */
$name = $first_name . ' ' . $last_name;
/*
 * process posting data to be safer to send back to browser
 */
if ($script_detected) {
	print "<p>Script detected in original posting.<br />";
	print "Original contained a script: $safe_post</p>";
}

// Get word count (from raw_posting and not nl2br(posting)
$words = str_word_count($raw_posting);

/* Disable truncation of posting to 50 characters
$posting = substr($posting, 0, 50);
*/

// replace 'badword' words
$badword = "badword";
$replacement = "****";
$posting = str_ireplace($badword, $replacement, $posting);

// Print a message
print "<div>Thank you, $name, for your posting:";
print "<p>$posting</p>";
print "<p>($words words)</p></div>";
/*
 * Disable following urlencode() code in final version of handle_post.php
 *
$name = urlencode($name);
$email = urlencode($_POST['email']);
print '<p>Click <a href="thanks.php?name=' . $name . '&email='. $email .'">here</a> to continue.</p>';
*/
?>
</body>
</html>

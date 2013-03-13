<!DOCTYPE html PUBLIC "-//W3C/DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>I Have This Sorted Out</title>
</head>
<body>
<?php
/*
 *	Book reference: Script 7.7a of "PHP for Web" 
 *  derived from script described in the book by Larry Ullman
 *	Exploration of explode() and implode()
 *
 *	Author: Teresa Chin
 *
 *	Modifications:
 *  7.7 Original script as described in the book.
 *	7.7a - modified to use foreach loop instead of implode()
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

$expected_source = "list.html";
$source = $_POST['form_page'];	// hidden field
if ($source != $expected_source) {
	die ("Something is amiss; not called from $expected_source");
}
// If list is empty, prompt again for list of words and exit.
if ($_POST['words'] == "" ) {
	print '<p>Did not find your list of words. <a href='.$expected_source.'>Please try again.</a>';
	exit(1);
}

$words_array = explode(' ', $_POST['words']);
if ($debug) {
	// observe original list of words
	print_r($words_array);
}
sort($words_array);
if ($debug) {
	print "<p>Sorted</p>";
	// observe sorted list of words (changes to key-value association not impt)
	print_r($words_array);
}
// Script 7.7a - replace implode() with foreach loop
// replace $string_words = implode('<br />', $words_array); with foreach
$string_words = "";
$separator = '<br />';
foreach ( $words_array as $i => $word ) {
	$string_words .= $word . $separator;
}
print "<p>An alphabetized version of your list is: <br />$string_words</p>";
?>
</body>
</html>

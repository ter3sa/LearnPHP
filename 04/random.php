<!DOCTYPE html PUBLIC "-//W3C/DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Lucky Numbers</title>
<style type="text/css" media="screen">
	.number { font-weight: bold; }
</style>
</head>
<body>
<h1>Lucky Numbers</h1>
<?php
/*
 *	Book reference: Script 4.6 of "PHP for Web" - random.php
 *	Random Numbers, investigation of rand() function.
 *	Author: Teresa Chin
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
/*
 * Script 4.6 variables
 *	3 random numbers
 */
$n1 = rand (1, 99);
$n2 = rand (1, 99);
$n3 = rand (1, 99);

/*
 * Print out numbers
 */
print "<p>Your lucky numbers are:<br />$n1</br />$n2<br />$n3</p>";
$n1 = mt_rand (1, 99);
$n2 = mt_rand (1, 99);
$n3 = mt_rand (1, 99);
print "<p>Your lucky numbers are:<br />$n1</br />$n2<br />$n3</p>";
?>
</body>
</html>

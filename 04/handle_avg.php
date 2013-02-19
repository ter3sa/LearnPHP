<!DOCTYPE html PUBLIC "-//W3C/DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Handle Form Data</title>
<style type="text/css" media="screen">
	.number { font-weight: bold; }
</style>
</head>
<body>
<h1>Calculate Average</h1>
<?php
/*
 *	Book reference: Script 4.7 of "PHP for Web" - handle_avg.php
 *	Handle input data from "average.html"
 *	Author: Teresa Chin
 *
 *	Calculate purchase pricing, values from $_POST array
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
 * Script 4.7 variables
 */
$marks = array ( 0, 0, 0, 0, 0, 0, 0, 0);
$i = 0;
$count = 0;
$marks[$i++] = $_POST['mark1'];
$marks[$i++] = $_POST['mark2'];
$marks[$i++] = $_POST['mark3'];
$marks[$i++] = $_POST['mark4'];
$marks[$i++] = $_POST['mark5'];
$marks[$i++] = $_POST['mark6'];
$marks[$i++] = $_POST['mark7'];
$marks[$i++] = $_POST['mark8'];
$count = count($marks);
if ($debug)	{
	print_r($marks);
	print $i;
	print "count = $count";
}
$total = 0;
for ($i = 0; $i < $count; $i++) {
	$total += $marks[$i];
}
$avg = $total/$count;
$avg = number_format($avg, 2);
print "<p>Your average mark is $avg.</p>";
?>
</body>
</html>

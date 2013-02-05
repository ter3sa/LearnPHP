<!DOCTYPE html PUBLIC "-//W3C/DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>More Variables</title>
</head>
<body>
<h1>More Variables</h1>
<pre>
<?php
/*
 *	Author: Teresa Chin
 *
 *	PHP script 2.3 to display various PHP variables
 */
// If debugging, configure PHP to display_errors.
$debug = 0;
if ( $debug == 1 ) {
	$var = ini_get('display_errors');
	if ( $var == "" ) { // if display_errors is off, returns null string.
		$var = 'OFF';
	}
	print "<p>display_errors = " . $var ;
	print "</p>\n";
	if ( $var == 'OFF' ) { // if display_errors is off returns null string.
		ini_set ('display_errors', 1);
		print "<p>set display_errors ON</p>\n";
		}
	}
// script 2.3 - More variables
// Address of the CN Tower
$title = "CN Tower";
$street = "301 Front Street West";
$city = "Toronto";
$province = "ONTARIO";
$postal_code = "M5V 2T6";
$map="http://maps.google.ca/maps?f=q&source=s_q&hl=en&geocode=&q=CN+Tower,+Front+Street+West,+Toronto,+ON&aq=0&oq=CN+Tower&sll=43.656877,-79.32085&sspn=0.498765,1.034088&vpsrc=6&ie=UTF8&hq=CN+Tower,+Front+Street+West,+Toronto,+ON&ll=43.644802,-79.387078&spn=0.01559,0.032315&t=m&z=15&iwloc=A";
$link = "cntower.ca";
print "<h2>$title</h2>";
// Print the address
print "<p>The address of the $title is<br />$street<br />$city, $province<br />$postal_code</p>";
print "Here's a link to the <a href=\"$map\" title=\"CN Tower\" alt=\"google map for CN Tower\">google map</a><br />"; 
print "For more information visit <a href=\"http://$link\">$link</a>.";
?>
<!-- This is an HTML comment. -->
</pre
</body>
</html>

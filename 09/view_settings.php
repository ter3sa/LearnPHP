<?php
/* Script 9.2 - view_settings.php
 * Chapter 9 - exploring cookies and sessions [PHP for the Web]
 * Modifications:
 * 	9.2 - script from book - sets CSS values passed by cookies
 */
?>
<!DOCTYPE html PUBLIC "-//W3C/DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>View Your Settings</title>
	<style type="text/css">
		body {
<?php // read styling information from cookies
// Font Size
if (isset($_COOKIE['font_size'])) {
	$fontsize = htmlentities($_COOKIE['font_size']);
} else {
	$fontsize = "medium"; // default 
}
print "\t\nfont-size: ". $fontsize . ";";
// Font Color
if (isset($_COOKIE['font_color'])) {
	$fontcolor = htmlentities($_COOKIE['font_color']);
} else {
	$fontcolor = "000"; // default
}
print "\t\ncolor: #". $fontcolor . ";";
?>
		}
	</style>
</head>
<body>
<p><a href="customize.php">Customize Your Settings</a></p>
<p><a href="reset.php">Reset Your Settings</a></p>

<h1>Effect of Styling Choices</h1>
<?php print "<p>font-size: ".$fontsize.';<br />'; ?>
<?php print "color: ".$fontcolor.';</p>'; ?>
<p> yadda yadda yadda. saying nothing; writing nothing
12345 yadda yadda. saying nothing; writing nothing
33333 yadda yadda. saying nothing; writing nothing
44444 yadda yadda. saying nothing; writing nothing
55555 yadda yadda. saying nothing; writing nothing
blah blah blah
THE END.</p>
</body>
</html>

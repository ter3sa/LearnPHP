<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>STATIC becomes DYNAMIC</title>
</head>
<body>
<h1>Example HTML5 File</h1>
<p>This file was created January 30, 2013.</p>
<p>You are reading this file at this <span style="color: orange;">moment</span> in time.</p>
<?php
/*
 * Created by Teresa Chin
 * A PHP script to demonstrate how a static HTML file
 * can become dynamic with PHP code added to it.
 * In this example the date is printed at the time the file is retrieved.
 */
print "<p>which happens to be:  <span style=\"color: orange;\">" ;
print date("l, F j, Y H:i");
print "</span></p>";
?>
</body>
</html>

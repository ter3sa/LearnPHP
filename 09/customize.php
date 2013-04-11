<?php
ob_start();	// buffer output
/* Chapter 9 - Exploring Cookies & Sessions
 * Script 9.10 - customize.php
 * Allow a user to select font size and color preferences
 * and store information in a cookie.
 *
 * Modifications:
 *	9.1 - initial design to display and handle form
 *  9.9 - apply user's preferences
 *  9.10 - make form sticky by reflecting current user selections
 *  9.0a - added code to check peferences stored in the cookie
 */
// include code to turn on debugging code
include("templates/debug.php");
print '<h1>Customize Your Settings</h1>';

// flag any problems
$problem = FALSE; // initially, no problems
$errmsg = "";	// no error messages.
$fontsize = ""; // default font-size if none specified
$fontcolor = ""; // default font-color if none specified
// Check if preferences were saved in a cookie.
// read styling information from cookies
$debug = true; // turn on debugging code to print info from cookies
// Font Size
if (isset($_COOKIE['font_size'])) {
	$fontsize = htmlentities($_COOKIE['font_size']);
  if ($debug) {
    print "DEBUG: cookie font-size: ". $fontsize . ";";
  }
}
// Font Color
if (isset($_COOKIE['font_color'])) {
	$fontcolor = htmlentities($_COOKIE['font_color']);
  if ($debug) {
    print "DEBUG cookie font-color: ". $fontcolor . ";";
  }
}

// Check if the form has been submitted and handle data
if ( isset($_POST['font_size'], $_POST['font_color'])) {
	// Check for valid values
	if ( empty($_POST['font_size']) ) {
		$problem = TRUE;
		$errmsg = '<p class="error">Please enter a font size.</p>';
	} else {
    $fontsize = $_POST['font_size'];
  }
	if ( empty($_POST['font_color']) ) {
		$problem = TRUE;
		$errmsg .= '<p class="error">Please enter a font color!</p>';
	} else {
    $fontcolor = $_POST['font_color'];
  }
	if ( $problem ) {
		$errmsg .= '<p class="error">Please try again.</p>';
	} else {
		// Send the cookies;
		setcookie('font_size', $_POST['font_size'], 0 , '');
		setcookie('font_color', $_POST['font_color'], 0 , '');
        $fontsize = $_POST['font_size'];
        $fontcolor = $_POST['font_color'];
		// Message to be printed later.
		$msg = '<p>Your settings have been entered! Click <a href="view_settings.php">here</a> to see them in action.</p>';
	} 
}
// End of handle form information.
?>
<!--Display the form-->
<!DOCTYPE html PUBLIC "-//W3C/DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Customize Your Settings</title>
<?php // Script 9.9 - apply user's preferences before cookies are read.
	// print CSS styling information in the page head section
  if ( $fontsize != "" && $fontcolor != "" ) {
    print '<style type="text/css">body { font-size:' . $fontsize . '; color: #'. $fontcolor . ';}</style>';
  }
  print '</head> <body>';
  // If the cookies were sent, print a message.
if (isset($msg)) {
	print $msg;
} else {
	// there was a problem.
	print $errmsg;
}
// Script 9.10 - identify current style choices in form
// print 'selected="selected"' for the chosen option
?>
<p>Use this form to set your preferences.</p>
<form action="customize.php" method="POST">
<select name="font_size" /> 
	<option value="">Font Size</option>
	<option value="xx-small" <?php if ($fontsize == 'xx-small') { print 'selected="selected"'; }?>  >xx-small</option>
	<option value="x-small" <?php if ($fontsize == 'x-small') { print 'selected="selected"'; }?> >x-small</option>
	<option value="small" <?php if ($fontsize == 'small') { print 'selected="selected"'; }?> >small</option>
	<option value="medium" <?php if ($fontsize == 'medium') { print 'selected="selected"';}?> >medium</option>
	<option value="large" <?php if ($fontsize == 'large') { print 'selected="selected"'; }?> >large</option>
</select>
<select name="font_color" />
	<option value="">Font Color</option>
	<option value="999" <?php if ($fontcolor == '999') print 'selected="selected"';?> >Gray</option>
	<option value="0c0" <?php if ($fontcolor == '0c0') print 'selected="selected"';?> >Green</option>
	<option value="c00" <?php if ($fontcolor == 'c00') print 'selected="selected"';?> >Red</option>
	<option value="00f" <?php if ($fontcolor == '00f') print 'selected="selected"';?> >Blue</option>
	<option value="000" <?php if ($fontcolor == '000') print 'selected="selected"';?> >Black</option>
</select>
<input type="submit" name="submit" value="Set My Preferences" />
</form>
</body>
</html>
<?php ob_flush(); // flush output buffer ?>

<!DOCTYPE html PUBLIC "-//W3C/DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Sticky text Inputs</title>
</head>
<body>
<?php // Script 10.3 - sticky1.php
/* Define a function to make sticky text fields
 *
 * Modifications:
 * 10.2 - function make_text_input ( $field_name, $label )
 *        where: $field_name = name of the form field
 *               $label      = label for the form field
 * 10.3 - add a third argument that defines a default value
 *               $size  = specifies the width of the text field
 *
 * Note: empty action attribute in form tag means same script is
 *       responsible for processing the data.
 */

function make_text_input ( $field_name, $label , $size = 20) {
  print '<p><label>' . $label . ': ';
  print '<input type="text" name="' . $field_name . '" size=' . $size . '"';
  if ( isset($_POST[$field_name])) {
      print ' value="'. htmlspecialchars($_POST[$field_name]) . '" ';
  }
  print ' /></label></p>';
} // End of make_text_input() function.
?>

<!--Display the form-->
<form action="" method="post">
  <?php make_text_input('first_name', "First Name");
    make_text_input('last_name', "Last Name", 30);
    make_text_input( 'email', "Email Address", 50);
  ?>
<input type="submit" name="submit" value="Register!"></form>
</body>
</html>

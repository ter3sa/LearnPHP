<!DOCTYPE html PUBLIC "-//W3C/DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <style>.error { color: red;}</style>
	<title>Cost Calculator</title>
</head>
<body>
<?php // Script 10.5 - calculator.php
/* A script that displays a form and defines a function that
 * calculates the cost of quantity * price and
 * formats the result ready to be printed.
 *
 * Modification History:
 * 10.4 - calculate_total($quantity, $price)
 *        where: $quantity = amount
 *               $price    = price in expressed as dollars
 * 10.5 - modified to include taxes (exploring global variables)
 */
// 10.5 - add tax information (global variable)
$tax = 8.75;

function calculate_total($quantity, $price) {
  // 10.5 - add tax information (global variable)
  global $tax;

  $total = $quantity * $price;
  $taxrate = $tax/100 + 1;  // calculate taxes.
  $total = $total * $taxrate;
  $total = number_format( $total, 2); // format with 2 decimal points
  return $total;
} // End of function.

include "debug.inc";
debug_init();

print '<h1>Calculate total cost</h1>';
if ($_SERVER['REQUEST_METHOD'] == "POST" ) {
  // validate the data before using it to compute the total
  if ( is_numeric($_POST['quantity']) AND is_numeric($_POST['price']) ) {
    // calculate the total
    $total = calculate_total($_POST['quantity'], $_POST['price']);
    print "<p>Your total comes to <span style=\"font-weight: bold;\">$$total</span>, including the $tax percent tax rate.</p>";
  } else {
    // problem values cannot be used to calculate, prompt to enter data
    print '<p class="error">Please enter numbers in the form below.</p>';
  }
}

// figure out if function names are case insensitive.
DEBUG_MSG("defined lowercase function, called uppercase function");
debug_msg("called lowercase function.");
?>
<!--Display the form-->
<form action="" method="post">
  <p><label>Enter quantity: </label><input type="text" name="quantity" size="10" /></p>
  <p><label>Unit price: </label><input type="text" name="price" size="10" /></p>
<input type="submit" name="submit" value="Calculate" /></form>
</body>
</html>

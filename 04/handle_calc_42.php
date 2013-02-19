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
<h1>Handle Calculations</h1>
<?php
/*
 *	Book reference: Script 4.3 of "PHP for Web"
 *	Handle input data from "calculator.html" in $_POST array
 *	Author: Teresa Chin
 *
 *	Calculate purchase pricing, values from $_POST array
 *	price	= cost per unit
 *  quantity = number of units
 *  discount = discount
 *  tax		= percentage tax being charged
 *  shipping = method  of shipping {low budget, medium, expensive }
 * 	payments = number of payments to be made
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
if ($debug) {
	print '<p>Dump $_REQUEST: '; 
	var_dump($_REQUEST);
	print "</p>";
	print '<p>Dump $_POST: '; 
	var_dump($_POST);
	print "</p>";
}
/*
 * Script 4.3 variables
 *	price	= cost per unit
 *  quantity = number of units
 *  discount = discount (percentage);
 *  tax		= percentage tax being charged
 *  shipping = cost of shipping, a price representing {low , medium, expensive }
 *  payments = number of installment payments to be made
 *  total = total calculated cost of purchase
 */
$price = $_POST['price'];
$quantity = $_POST['quantity'];
$discount = $_POST['discount'];
$tax = $_POST['tax'];
$shipping = $_POST['shipping'];
$payments = $_POST['payments'];
$total = 0;
/*
 * Note: Currently, there is no checking in the form for no input submissions
 * It is possible to get errors if no input is submitted.
 */
$source = $_POST['form_page'];	// hidden field
if ($debug) {
	print "script is called from $source."; // hidden field
	print "<pre>";
		print "processing...";
	print "</pre>";
}
$total = $price * $quantity;
$total_before_shipping = number_format($total,2);	// $total before shipping
$total = $total + $shipping;
$total_plus_shipping = number_format($total, 2);	// $total plus shipping
$total = $total - $discount;
$total_less_discount = number_format($total, 2);	// $total before taxes
$taxrate = $tax/100;	// express tax as a percentage
$taxes = $total * $taxrate;	// taxes
$taxrate = 1 + $taxrate;
$total = $total * $taxrate;
if ($debug)	print "taxrate = $taxrate";
if ($debug)	print "cost = \$$total (after tax)";
if ($payments > 0)	// avoid divide by zero
	$monthly = $total / $payments;
else
	$monthly = $total;
/*
 * format values before printing
 */
$total = number_format($total, 2);
$monthly = number_format($monthly, 2);
$discount = number_format($discount,2);
$taxes = number_format($taxes, 2);
print "<p>You have selected to purchase: <br /><span class=\"number\">$quantity</span> widgets(s) at $<span class=\"number\">$price</span> price each,\t";
print " $<span class=\"number\">$total_before_shipping</span><br />";
print "Shipping cost:&nbsp;&nbsp;<span class=\"number\">$shipping</span><br />";
print "Price plus shipping $<span class=\"number\">$total_plus_shipping</span><br />";
print "Less your discount $<span class=\"number\">$discount</span><br />";
print "Subtotal before taxes: $<span class=\"number\">$total_less_discount</span><br />";
print "<span class=\"number\">$tax</span> percent tax rate;";
print " taxes:\t$<span class=\"number\">$taxes</span><br />";
print " the total cost is\t$<span class=\"number\">$total</span><br />Divided over <span class=\"number\">$payments</span> monthly payments, that would be $<span class=\"number\">$monthly</span> each.</p>";
?>
<p>Thank you for your purchase.</p>
</body>
</html>

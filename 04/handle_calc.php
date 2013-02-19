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
 *	Book reference: Script 4.4 of "PHP for Web"
 *	Handle input data from "calculator.html" in $_POST array
 *	Author: Teresa Chin
 *
 *	Calculate purchase pricing, values from $_POST array
 *	price	= cost per unit
 *  quantity = number of units
 *  discount = discount
 *  tax		= percentage tax being charged
 *  shipping = method  of shipping {low cost, medium cost, expensive }
 *  payments = number of payments to be made
 *
 *	Modified to use setlocale() 
 *	and locale related money formatting money_format()
 *
 *	Use operation precedence to reduce the number of calculations.
 *	Use auto-increment operands
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
if ($debug) {
	print '<p>Dump $_REQUEST: '; 
	var_dump($_REQUEST);
	print "</p>";
	print '<p>Dump $_POST: '; 
	var_dump($_POST);
	print "</p>";
}
/*
 * Set locale for monetary values
 */
$locale = "en_CA.UTF-8";// English-Canadian locale
//$locale = "en_GB.UTF-8";// English-Great Britain locale
//$locale = "en_DK.UTF-8";// English-Denmark locale: replaces use of decimals and commas.
//$locale = "en_US.UTF-8";// US locale
$moneyfmt = "%=*(#10.2i";	// currency format to be used with money_format()
if ($debug) {
	echo setlocale(LC_ALL, '0');
}
$gotlocale = setlocale(LC_MONETARY, $locale);
if ($debug) {
	print "<p>setlocale $locale = $gotlocale</p>";
	print_r(localeconv());
}

/*
 * Script 4.3 variables
 *	price	= cost per unit
 *  quantity = number of units
 *  discount = discount - price to subtract;
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
$total_before_shipping = money_format($moneyfmt,$total); // $total before shipping
$total = $price * $quantity + $shipping - $discount;
$total_less_discount = money_format($moneyfmt,$total); // $total before taxes
$taxrate = $tax/100;
$taxes = $total * $taxrate;	// taxes
if ($debug)	print "taxrate = $taxrate";
/* use auto increment for $taxrate = 1 + ($tax/100) */
$taxrate++;
if ($debug)	print "taxrate = $taxrate";
$total *= $taxrate;
if ($debug)	print "cost = \$$total (after tax)";
if ($payments > 0)	// avoid divide by zero
	$monthly = $total / $payments;
else
	$monthly = $total;
/*
 * format values before printing
 */
$total = money_format($moneyfmt,$total);
$monthly = money_format($moneyfmt,$monthly);
$discount = money_format($moneyfmt,-$discount);
$taxes = money_format($moneyfmt,$taxes);
$shipping = money_format($moneyfmt,$shipping);
$fmt = "%'--25s%'-20s%30s%15s";
$tmpstring = "";
$tmpstring = sprintf("<p>You have selected to purchase: <br /><span class=\"number\">%s</span> widgets(s) at $<span class=\"number\">%s</span> each,<br />", $quantity, $price);
print  $tmpstring;
printf ($fmt, "Cost of widgets is ","-- $<span class=\"number\">",$total_before_shipping,"</span><br />");
printf ($fmt, "Add shipping cost: ","- $<span class=\"number\">",$shipping, "</span><br />");
printf ($fmt, "Less your discount: ","$<span class=\"number\">",$discount, "</span><br />");
printf ($fmt, "Subtotal before taxes: ","$<span class=\"number\">",$total_less_discount, "</span><br />");
print "<span class=\"number\">$tax</span> percent tax rate;<br />";
printf ($fmt, " Taxes: -----------"," $<span class=\"number\">",$taxes,"</span><br />");
printf ($fmt, " The TOTAL cost is ","$<span class=\"number\">",$total,"</span><br />");
printf ($fmt, "Divided over ","<span class=\"number\">",$payments,"</span> monthly payments,<br />");
printf ($fmt, "that would be ","$<span class=\"number\">",$monthly,"</span> each month.</p>");
?>
<p>Thank you for your purchase.</p>
</body>
</html>

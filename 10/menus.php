<!DOCTYPE html PUBLIC "-//W3C/DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Date Menus</title>
</head>
<body>
<?php // Script 10.6 - menus.php
/*
 * make_date_menus($starting_year, $number_years = 10)
 *         generate month, day, and year pull down menus for a form
 *
 * Modification History:
 * 10.1 - original script
 * 10.6 - script modified to have 2 arguments
 *        $starting_year = year to start menu options
 *        $number_years  = number of year options to list
 */
function make_date_menus($starting_year, $number_years = 10) {

  $months = array (
    1 => "January",
    2 => "February",
    3 => "March",
    4 => "April",
    5 => "May",
    6 => "June",
    7 => "July",
    8 => "August",
    9 => "September",
    10 => "October",
    11 => "November",
    12 => "December"
    );
  // generate menu for months
  print '<select name="month" />';
  foreach ($months as $key => $value) {
      print "<option value=\"{$key}\">{$value}</option>";
  }
  print '</select>';

  // menu for days of month
  print '<select name="day" />';
    for ($day = 1; $day <= 31; $day++ ) {
      print "<option value=\"{$day}\">{$day}</option>";
    }
  print '</select>';

  // menu for year, select current year or any of the next 10 years?
  if (is_numeric($starting_year)) {
     $start = $starting_year;
  } else {
    $start = date("Y"); // current year
  }
  print '<select name="year" />';
    for ($year = $start; $year< $start+$number_years; $year++ ) {
      print "<option value=\"{$year}\">{$year}</option>";
    }
  print '</select>';
} // End of make_date_menus() function
?>
<p>Select a date.</p>
<form action="" method="post">
  <p>no arguments <?php make_date_menus(); ?></p>
  <p>one argument <?php make_date_menus(1970); ?></p>
  <p>two arguments <?php make_date_menus(2000, 20); ?></p>
</form>
</body>
</html>

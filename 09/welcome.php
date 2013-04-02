<?php // Script 9.14 - welcome.php
/*
 * The welcome page to greet the user after they have logged in.
 * Modifications:
 *	Script 8.14 - original welcome.php script
 *	Script 9.7	- adding session management 
 *  Script 9.11 - modified to print logged in time as a double quoted string.
 *  Script 9.14 - Use a custom session name
 */
define('TITLE', 'Welcome to the J.D. Salinger Fan Club!');
include('templates/header.html');
// Script 9.7 - access session values
session_name('VisitJDSClub');
session_start();
if ( isset($_SESSION['email'] ) ) {
	$email = $_SESSION['email'];
} else {
	$email = "";
}
if ( isset($_SESSION['loggedin'] ) ) {
	$loggedin = $_SESSION['loggedin'];
} else {
	$loggedin = (int) FALSE;
}
print '<h2>Welcome to the J.D. Salinger Fan Club!</h2>';
// Print a greeting
print "<p>Hello ".$email."!</p>";

// Set the current timezone
date_default_timezone_set('America/Toronto');

// Print how long they've been logged in
//print '<p>You have been logged in since ' . date("g:i a", $loggedin) . '</p>';
// Modification for script version 9.11
$elapsed_time = date("g:i a", $loggedin);
print "<p>You have been logged in since $elapsed_time </p>";

// Make a logout link
print '<p><a href="logout.php">Click here to logout</a>';

include('templates/footer.html');
?>

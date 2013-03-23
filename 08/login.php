<?php // Script 8.x - login.php
/* This page lets people log into the site
 * Modifications:
 * Script 8.8 - login.php
 * Script 8.13 - modify login to redirect user to another page using the header() function.
 */
// Set the page title and include the header file
define ('TITLE', 'Login');
include("templates/header.html");
include("templates/debug.php");
// Print some introductory text:
print '<h2>Login Form</h2>
	<p>Users who are logged in can take advantage of certain features like this that and the other thing.</p>';
// Check if the form has been submitted;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	// Process or Handle the form:
	if ( (!empty($_POST['email'])) && (!empty($_POST['password'])) ) {
		if ( (strtolower($_POST['email']) == 'me@example.com') && ($_POST['password'] == 'testpass') ) { // Correct!
			// original: print '<p>You are logged in!<br />Now you can blah, blah, blah,...</p>';
			// Redirect the user to the "Welcome" page!
			ob_end_clean(); // Destroy the buffer!
			header ("Location: welcome.php");
			exit();
		} else { // Incorrect!
			print '<p>The submitted email address and password do not match those on file!<br />Go back and try again.</p>';
		}
	} else { // Forgot a field.
		print '<p>Please make sure you enter both the email address and a password!<br />Go back and try again.</p>';
	}
} else { // GET request method
	// Display the form
	print '<form action="login.php" method="POST"><p>Email Address: <input type="text" name="email" size="30" /></p><p>Password: <input type="password" name="password" size="20" /></p>
<p><input type="submit" name="submit" value="Log In!" /></p></form>';
}
include("templates/footer.html");
?>

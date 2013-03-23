<?php // Script 8.9 - register.php
/* This page gathers information to register people for the site
 * Modifications:
 * 8.9 	- Explores the "sticky" features of forms
 * 8.9a - modified to used nested conditionals for password checking.
 * 8.10 - Use mail functionality in PHP script
 */
// Set the page title and include the header file
define ('TITLE', 'Register');
include("templates/header.html");
include("templates/debug.php");
// Print some introductory text:
print '<h2>Registration Form</h2>
	<p>Register so that you can take advantage of certain features like this, that and the other thing.</p>';
// Add some CSS for error messages
print '<style type="text/css" media="screen">.error { color: red; }</style>';
// flag problems to print error messages
$problem = FALSE; // no problems
// flag successfully registered
$registered = FALSE;
// Check if the form has been submitted;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	// Process or Handle the form:
	$problem = FALSE; // No problems so far
	// Check for each value...
	if ( empty($_POST['first_name']) ) {
		$problem = TRUE;
		print '<p class="error">Please enter your first name!</p>';
	}
	if ( empty($_POST['last_name']) ) {
		$problem = TRUE;
		print '<p class="error">Please enter your last name!</p>';
	}
	if ( empty($_POST['email']) || (substr_count($_POST['email'], '@') !=1) ) {
		$problem = TRUE;
		print '<p class="error">Please enter your email address!</p>';
	}
	if ( empty($_POST['password1']) ) {
		$problem = TRUE;
		print '<p class="error">Please enter a password!</p>';
		$passwd = "";
	} else {
		$passwd = trim($_POST['password1']);
		/* fail if no confirm password is provided */
		if ( empty($_POST['confirm']) ) {
			print '<p class="error">Please confirm your password, by entering it again.</p>';
			$problem = TRUE;
			$confirm = "";
		} else {
			$confirm = trim($_POST['confirm']);
			// Check the two passwords for equality
			if ($confirm != $passwd) {
				print '<p class="error">Your confirmed password does not match the original password.</p>';
				$problem = TRUE;
			}
		}
	}

	if ( !$problem ) {
		// No problems
		print '<p>You are now registered!<br />Okay, not really registered but...</p>';
		
		// Send the email:
		$body = "Thank you for registering with the J.D. Salinger fan Club! Your password is '($passwd)'.";
		mail($_POST['email'], 'Registration Confirmation', $body, 'From: teresa@localhost');
		// Clear the posted values:
		$_POST = array();
		$registered = TRUE; // successfully registered
	} else {
		// problems detected please try filling out form again.
		print '<p class="error">Please try again.</p>';
	}
} // End of handle form information.
// Create the form.
if (!$registered) {
?>
<!--Display the form-->
<form action="register.php" method="POST">
<p>First Name: <input type="text" name="first_name" size="20" value="<?php if (isset($_POST['first_name'])) { print htmlspecialchars($_POST['first_name']); } ?>" /></p>
<p>Last Name: <input type="text" name="last_name" size="20" value="<?php if (isset($_POST['last_name'])) { print htmlspecialchars($_POST['last_name']); } ?>" /></p>
<p>Email Address: <input type="text" name="email" size="30" value="<?php if (isset($_POST['email'])) { print htmlspecialchars($_POST['email']); } ?>" /></p>
<p>Password: <input type="password" name="password1" size="20" value="<?php if (isset($_POST['password1'])) { print htmlspecialchars($_POST['password1']); } ?>" /></p>
<p>Confirm Password: <input type="password" name="confirm" size="20" value="<?php if (isset($_POST['confirm'])) { print htmlspecialchars($_POST['confirm']); } ?>" /></p>
<p><input type="submit" name="submit" value="Register" /></p></form>
</form>
<?php
} // end display form
include("templates/footer.html");
?>

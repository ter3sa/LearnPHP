<?php // Script 9.8 - logout.php
/**
 *  Script 9.8  - Delete the session data
 *  Script 9.13 - Use a custom session name
 */
define('TITLE', 'Logout');
include('templates/header.html');
include('templates/debug.php');
session_name('VisitJDSClub'); // script 9.13 different Session name
session_start();
$_SESSION = array(); // reset the session data
// Delete the session cookie to completely remove session.
if (ini_get("session.use_cookies")) {
      $params = session_get_cookie_params();
      if ($debug) var_dump($params);
      $previous_session = session_name();
      if ($debug) print "<p>session_name returns $previous_session</p>";
          setcookie($previous_session, '', time() - 60*60*12,
                  $params["path"], $params["domain"],
                          $params["secure"], $params["httponly"]
                              );
}
$done = session_destroy();
if ($debug) {
  print "<p>[debug] session_destroy returns $done</p>";
}
print "<h2>Welcome to the J.D. Salinger Fan Club!</h2>";
print "<p>You are now logged out.</p>";
print "<p>Thank you for using this site. We hope you enjoyed your visit.<br />";
include('templates/footer.html');
?>

Chapter 9 PHP for the Web -- Maintaining state
----------------------------------------------
Review and Pursue responses by Teresa Chin

Review
------
1. Where does a cookie store data? Where does a session store data?
   Which is generally more secure?
    A cookie stores data in a file found on the same machine as the browser.
    A session stores data in a file found on the server.
    Session data is considered more secure since data is not transferred over
    the network.

2. name two debugging techniques when trying to solve issues involving cookies.
    Use firebug (or relevant debugger) in the browser to detect and
    inspect the cookies. Or use PHP code to retrieve and inspect the
    cookie values.

3. How do the path and domain arguments to the setcookie() function affect
   the accessibility of the cookie?
    The path and domain arguments affect where the cookie data is available.
    If a path is specified then the cookie data is effective in that directory
    and sub-directories. If a domain is specified, then the cookie data is
    only available to that domain or subdomain.
 
4. How do you delete a cookie?
    A cookie is deleted by setting the value of the cookie to FALSE or a null
    string.  The expiry time can also be set to a time that has already past.
    Ensuring all other arguments are the same as when the cookie was set,
    will ensure correct instance of the cookie is deleted.

5. What function must every page call if it needs to assign or access session data?
    To use session data, must start page with session_start();

6. Why do sessions also use cookies (by default)?
    In order to share session data, the session id must be shared among
    the php scripts that make up a site, therefore the session ID is stored
    in a cookie to be available to scripts that are running as part of the site.


Pursue
------
1. Install the Firebug extension for Firefox.

2. Look up the PHP manual page for setcookie() function.
   Review the information and user comments there for 
   added instructions on cookies.

3. Rewrite customize.php so that the script also applies the user's
   preferences. Hint: You need to take into account the fact that the
   cookies aren't available immediately after they've been set.
   Instead, you would write the CSS code using the $_POST values after
   the form has been submitted, the cookie values upon first arriving
   at the page (if the cookies exist), and the default values otherwise.
	--> See customize.php script version 9.9

4. Make the form in customize.php sticky, so that it reflects the
   user's current choices.
   --> See customize.php Script 9.10
          reset.php Script 9.4
          view_settings.php Script 9.2

5. Rewrite welcome.php so that the print statement that greets the user
   by email address uses double quotation marks.
   --> copy of files from chapter 8, files marked with '*' are modified for Chapter 9
    css/2.css
    index.php
   *login.php - Script 9.6
   *logout.php - Script 9.8
    register.php
    templates/debug.php
    templates/footer.html
    templates/header.html
   *welcome.php - Script 9.7

6. For an added challenge, rewrite welcome.php so that the print statement
   that indicates how long the user has been logged in also uses double
   quotation marks. Hint: You'll need to use a variable.
   --> See welcome.php Script 9.11

7. Rewrite the last three scripts so that the session uses a custom name.
   --> See final versions of login.php, logout.php and welcome.php
      modified with calls to session_name('VisitJDSClub');


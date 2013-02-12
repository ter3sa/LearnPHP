Chapter 3 - HTML Forms and PHP
------------------------------
Review and Pursue execises - responses by Teresa Chin

REVIEW
1. The action attribute in a form specifies the URL of the script on the server
   that will process the data collected in the form.

2. A form's method attribute specifies the protocol being used to transfer
   information that is collected in the form, it can be either GET or POST.
   The POST method is more secure because using the GET method data is
   transferred via name=value pairs that are visible in the URL.
   GET method URLs can be bookmarked and saved.
   
3. If using the GET method; data is passed in the $_GET predefined variable.
   If using the POS meethod; data is passed via the $_POST variable.
   Data is also available via the $_REQUEST variable.

4. If a form is not run through an URL address the php script that is specified
   in the action attribute will not be properly interpreted as a PHP script.
   Instead of being interpreted the script is served revealing the contents of
   the PHP script.

5. Sometimes even though "display_errors" is set to be true, a PHP script can
   fail run because of syntax errors, there are no error messages displayed
   and only a "blank white screen". Need to check level of error messages being
   reported and/or error messages may be directed only to the error log (not to the screen). Problems that can cause a blank white screen include: missing semi-colon, missing quotes for strings.
   
   It is not secure to enable display_error on live sites because sometimes
   information is exposed in error messages that compromise the security
   of the system; i.e. reveals script paths and location of files, version of code.

PURSUE
- See feedback.html and handle_form.php
  Set $debug to true to enable all error reporting.
- See hello.html & hello.php
5. Experiment with the hello.html and the hello.php pages to send different values, including numbers to the PHP script through the URL.
6. Create a variation on hello.html that sends multiple name=value paris to a PHP script. Have the PHP script then print all the received values.
7. If you're the inquisitive type, and don't mind waiting for answeers, try passing more coplicated values to a page through the URL. Try using spaces and pucntuation to see what happens.
8. Create a new HTML form that performa a task you envision yourself needing (or a lighterweight version of that functionality). Then create the PHP script that handles the form printing just the received data.
 

Chapter 8 - Creating Web Applications
Review and Pursue responses by Teresa Chin 
Review
------
1. What is the difference between include() and required()?

	Both functions perform the same function, i.e. replace the function call		with the content of the specified file. The difference is in
	the handling of the error when the specified file does not exist. 
	The include() function will fail with a warning, but execution
	will continue, but the function require() will fail with warnings
	and cause the process to terminate.

2. Why can you put PHP code into an included file even when it uses
   an .html extension?
	The PHP code in the included file will be interpreted because it
	is included in the parent file as if it were part of the parent
	PHP script and any code within PHP tags will be appropriately
	recognized and interpreted as PHP and any code outside of the PHP
	tags will be interpreted as HTML.

3. What are the differences between relative and absolute references
   to a file?

	Relative paths will continue to work as long as the same tree structure
	of files is established wherever the files are placed.
	Absolute references to a file refer to a specific location that must
	exist in order for the reference to work. An absolute file cannot move or
	change location; otherwise the reference will fail.

4. How do you define a constant? Are constant names case-sensitive or
   case-insensitive? How do you check if a constant has been defined?
	A constant is established by using the define() function, which assigns a
	label to a value, i.e. define( string label, value);
	Constants are case-sensitive because you can use upper and lowercase
	letters, but by convention, constant values are normally defined using
	uppercase letters.
	
5. What is the epoch? What is a timestamp?
	The epoch is defined as January 1, 1970.
	A timestamp is the number of seconds since the epoch.

6. What is the significance of $_SERVER['REQUEST_METHOD']?

	The request method defines how information is accessed from the page,
	i.e. GET (read), HEAD, POST (form), PUT.

7. How do you have a form element "remember" previously submitted values?
	Place the previously submitted values (from the $_POST array)
	into the value attribue of the the input tag, when the form is displayed.
	
8. How can you see a PHP error that occurs within a form element
   (e.g. when presetting a form's element's value)?
	The PHP error will be embedded and displayed in the HTML code.

9. What does the "headers already sent" error mean?
   How can it be prevented?
	The "headers already sent" error means that output data has already been sent by the server
	to the browser and the operation being requested is not possible.
	To prevent this error, control when data is sent to the browser by using functions
	to turn on buffering using ob_start() and other functions to inspect and flush
	data to the browser.

Pursue
------
1. Create a new prototype design for this chapter's examples, and then
   create new header and footer files. View any of the site's pages again
   (you should not need to change any of the PHP scripts).
	--> See css/2.css and changes to templates/header.html and templates/footer.html

2. Change the parameters to the date() function in header.html to
   display the date and/or time in a different manner.
	--> Changed date format to also print out the timezone

3. Rewrite the password conditionals found in register.php as a nested
   pair of conditionals. Hint: See chapter 6 for examples.
	-->see version 8.9a (or greater) register.php

4. If you're using PHP 5.2 or later, check out the PHP manual pages
   for the "Filter" extension. Then incorporate the filter_var() function
   to validate the email address in register.php.
	-->see version 8.11 of register.php

5. Change the subject and body of the email sent upon (pseudo-) registration
   to something more interesting and informative.

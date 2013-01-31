Review for Chapter 1 - Teresa's review notes

1. What is HTML?  What is XHTML?  Name two differences.
	HTML is "Hyper Text Markup Language" which is the language used to describe content for a webpage. XHTML is "eXentsible Hyper Text Markup Language" which is similar to HTML, but has stricter requirements like:
 (a) XHTML tags must be in lowercase and attributes must be quoted
 (b) singular tags like <br>, <hr>, <img>, <input> which don't have a closing tag, must be ended with "/>" i.e. <br/>, <hr/>,...

2. What encoding is in your text editor or IDE?
   Does that match the encoding of the generated HTML pages?
	I am using the vi editor, which allows for encoding to be set to utf8.
	my webpages are also encoded in utf8.

3. What is CSS and what is it used for?
	Cascading Style Sheets (CSS) are used to add styling to the content of webpages. This is the colours, decoration, and layout that make a web page pretty.

4. What file extension should php scripts have for your particular server?
	My local server uses .php extensions.

5. What is meant by the "Web root directory"?
	This is the root directory for the website where files will be served
	by the web server.

6. How do you test PHP scripts?
   What happens when PHP scripts are not run through a URL?
	Load PHP scripts on the server and invoke them by requesting their URL (i.e. their http address) via the webserver. If you don't run PHP code through the server, they don't get interpreted and thus you see the code and not the results.

7. Name two ways comments can be added to PHP code. Identify some ways you would use comments.

	Comments can be added by prefixing with "/*" and suffixing with "*/".
or comments can be added before the end of a line by prefixing with "//" (double slash). Comments are used to describe the intent of the code and important facts about the code that you wish to remember and pass along to another programmer. Information that typically is documented in comments are the purpose of parameters, variables and return values. Important fixes that correct bugs, etc. Comments often serve as the only documentation for some pieces of code.


Responses to Chapter1::Pursue

1. I have two local servers on my Ubuntu machine
   a) Native Ubuntu 12.04 apache2 server runs with PHP 5.3.10-1ubuntu3.5
   b) XAMPP package 1.7.4 runs with PHP version 5.3.5
   This was confirmed by running the phpinfo.php script, i.e. <?php phpinfo();?>

2. static.html and dynamic.php  is a sample of a static HTML page converted
   to use PHP to display dynamic information.

3. template.php is a skeleton for building PHP scripts

4. template.php contains a query for the state of display_errors PHP option 
   and sets it on for debugging purposes.

5. Use the php manual (http://www.php.net/) to check syntax and information on new PHP functions. Checked out the date() function.

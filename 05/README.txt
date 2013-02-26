Chapter 5 - Strings
Review and Pursue - reponses by Teresa Chin

REVIEW
------
1. How do you create a string?
   A string is created when you use single quotes or double quotes to enclose a collection of characters.

2. What are the differences between using single and double quotations marks?
   A string defined in single quotes is defined exactly by the characters enclosed between the quotes; there are no substitutions. A string defined in double quotes will replace PHP variables used within the string with the value of the variables.

3. What is the concatenation operator? What is the concatenation assignment operator?
	The concatenation operator is the period character. The concatenation assignment operator is ".=" which will assign to the variable the concatenation of the variable with the expression in the statement.
	i.e. "$stringvar .= $expr;" is interpreted as "$stringvar = $stringvar . $expr;"

4. What is the impact of having a newline in a string printed to the browser?
   How do you convert a newline character to a break tag?
	A newline in a string printeded to the browser is interpreted as whitespace character in HTML. In PHP, to convert a newline to a break tag, use the function nl2br().

5. What problems can occur when HTML is entered into form elements whose values
   will later be printed back to the Web browser? What steps can be taken to
   sanctify submitted form data?
	If user input is contains embedded HTML code, it may contain malicious code (javascript scripts) that might be executed when interpreted by the browser.
To avoid problems, the data should be processed and stripped of html tags to avoid the problem and disable the potentially malicious code.

6. What function makes data safe to pass in a URL?
	urlencode() translates problematic characters so that they are safe to use in a URL.
	
7. How do you escape problematic characters within a string?
   What happens if you do not escape them?
	To escape characters in a string, preceed them with "\" (a backslash).
	If not escaped properly, they will not be printed or recognized as
	the desired character and in this case the string will be prematurely
	terminated and the remainder of the string will cause syntax errors.

8. The characters in a string are indexed beginning at what number?
	Characters in a string are indexed starting at 0 (zero).

9. What does the trim() function do?
	trim($string[,$whitespace_char_list]) strips whitespace characters
	from the beginning and ending of the given string.
	The second optional argument is a string of characters that define
	what is considered to be a the whitespace character.


PURSUE
------
1. Look up the PHP manual page for one of the new functions mentioned in this
   chapter. Use the links on that page to examine a couple of other string-related function PHP has.
	Read about htmlspecialchars(), htmlentities(), urlencode(), strip_tags(), strstr(), strpos()

2. check out the PHP manual for substr() function. Read other examples
   to get a better sense of how substr() can be used.
	string substr($string, $start [, $length])
	is a function that returns a substring of a given string as specified by
	the parameters:
		start (of the string) and
		length (of the string, an optional parameter)

3. Write the thanks.php script that goes along with Script 5.5
   Revisit hello.php script from chapter 3 (script 3.7)
	See posting.html & handle_post.php
	See thanks.php

4. Rewrite the print stmt in the final version of handle_post.php (script 5.7)
   so that it uses single quotation marks and concatenation instead of double
   quotation marks.
	See handle_post.php

5. Creat another HTML form for taking string values. Then create the PHP
   script that receives the form data, addresses any HTML or PHP code, manipulates the data in some way, and prints out the results.
	See joinlist.html & join.php

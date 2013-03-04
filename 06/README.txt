Chapter 6 - Control Structures
Review & Pursue responses written by Teresa Chin

Review
------
1. Why is it important to have a user confirm their password during the registration process?
	To ensure that the user knows exactly the string being submitted to the password field
	and can duplicate the string when needed.

2. What is the basic structure of an if conditional in PHP?
	if (condition) {
		statement(s);
	}

   An if-else conditional?

	if (condition) {
		statements;
	} else {
		statements;
	}

  An if-elseif?

	if (condition) {
		statements;
	} elseif (condition) {
		statements;
	}

  And if-elseif-else?

	if (condition) {
		statements;
	} elseif (condition) {
		statements;
	} else {
		statements;
	}

3. What are the differences between the empty() and isset() functions?
	empty() identifies a variable has having values empty values like 0 or empty strings.
	whereas isset() can be used to identify a variable set to any value (including empty), but
	is helpful to identify a variable that has not been set to any value.

4. What is the assignment operator? What is the equality operator?
	The assignment operator is one equal sign: '='
	The equality operator is double equal signs: '=='

5. Without knowing anythin about $var, will the following conitional be TRUE or FALSE? Why?
	if ($var = 'donut') { ... }
	The statement above will evaluate to TRUE because the assignment
	operation is always TRUE.

6. What to these operators mean?
	&&	- means the previous expresion must evaluate to TRUE and next expression
			must also evaluate to true for the whole statement to evaluate
			to TRUE. (LOGICAL AND)
	|| 	- means if the previous expression evaluates to false the next
			expression must evaluate to true. If the previous expression
			evaluates to true, the next expression does not need to be
			evaluated. (LOGICAL OR)
	!	- means LOGICAL NOT opperand, meaning the opposite boolean value
			of the next expressions, i.e. !true means false and
			!false means true.

7. What is the syntax of a switch conditional?
	switch ($var) {
		case 'value':
			statements;
			break;
		case 'value2':
			statements;
			break;
		/* repeated case blocks for as many values as needed */
		default:
			statements;
			break;
	} //close of switch
   When is a switch most commonly used?
	A switch is most commonly used when matching various values of a single
	variable.
	

Pursue
------
1. Check out the PHP manual's pages for the vaious operators.

2. Rewrite handle_reg.php so that it uses a variable for the current year,
	instead of hard-coding that value.

3. For debugging purposes, add code to the beginning of the handle_reg.php
	script that prints ou the values of the received variables. Hint: There's
	a short and a long way to do this.
	--> See version final version of handle_reg.php (set $debug = TRUE)

4. Rewrite one of the versions of handle_reg.php so that it prints the user's
	favourite color selection in the user's favorite color.  Hint. You'll
	want to use CSS and concatenation.
	--> See version final version of handle_reg.php

5. Update handle_reg.php so that i validates the user's birthday by
	looking at the three individual form elements: month, day, and year.
	Creat a vaiable that represents the user's birthday in the format
	XX/DD/YYYY (again, you'll use concatenation for this.)
	--> See version 6.11 of handle_reg.php


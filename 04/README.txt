Chapter 4 - Using Numbers
Review and Pursue notes by Teresa Chin

REVIEW
------
1. Four primary arithmetic operators are:
	+ (addition),
	- (subtraction),
	* (multiplication)
	/ (division)

2. The variable "$$total" could be interpreted as a complex variables (although it did not seem to fail for me). To avoid the problem, escape the first dollar sign or separate the first dollar sign from the variable with some CSS tags.

3. A form must be handled via a URL otherwise the PHP script used to interpret the results will not be interpreted.

4. The function number_format(number, decimal_places) can used to format
   numbers to be printed.
   The second parameter can be used to specify the number of decimals to
   to display.

5. Operator precedence determines the order in which the arithmetic operations
   are performed. This will determine the result when different arithmetic
   operation are combined in a computation.

6. Incremental operators (++) add one to a variable's value.
   Decremental operators (--) decrease a variable's value by one.

7. Arithmetic assignment operators are: +=, -=, *=, and /=.
   These operators perform an arithmetic operation on a variable and
   save the result back in the variable; i.e. $var += $value is the same as
   $var = $var + $value


PURSUE
------
4.1	- calculator.html
4.2 - handle_calc_42.php [earlier version]
	  uses number_format() to format values for printing
4.3 - handle_calc_43.php [another version]
	  uses setlocale() and money_format() to print the price values.
4.4 - handle_calc.php  [ final version ]
	  uses incremental operators and arithmetic assignment operators.

4.5	- round.php
	  a script that just experiments with round() function.

4.6 - random.php
	  Takes input from a form and calculates something and gives it back.

4.7	average.html & handle_avg.php
	- a form and script to handle calculating the average of marks
	from 8 subjects. (was thinking about report cards...)

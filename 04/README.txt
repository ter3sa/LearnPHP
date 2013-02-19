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

5. What is the importance of operator precedence?

6. What are incremental and decremental operators?

7. What are the arithmetic assignment operators?


PURSUE
------
4.1	- calculator.html
4.2 - handle_calc.php
	  uses number_format() to format values for printing
4.3 - handle_calc.php
	  uses setlocale() and money_format() to print the price values.

2. Create another HTML form for taking numeric values. Then create the PHP script that recieves the form data, performs some calculations, formats the values and prints the results.

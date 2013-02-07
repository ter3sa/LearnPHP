These are the review and pursue exercises for Chapter 2 of "PHP for Web"
Self Study PHP GTA Group
Notes about PHP Variables by Teresa Chin

Review
1. $_SERVER is an example of a predefined PHP variable
2. All PHP variables start with $ (dollar symbol)
3. Alphabetic characters are allowed after the $, but not numbers.
   Alphanumeric letters are allowed otherwise and the underscore character.
4. Variable names are case-sensitive
5. A scalar variable is a numeric quantity that can be used to measure or count.   Integers and decimal numbers (type float or double) are scalar quantities.
   As clarified by Peter Meth, in PHP the function is_scalar() can be used
   to determine whether a variable is scalar or not.
   Only more complex types like arrays, objects, and resources are
   considered not scalar. Simple types like: string and and boolean are
   considered scalar, too. See changes to variables.php to investigate.
   PHP manual reference for data types:
   http://www.php.net/manual/en/language.types.intro.php
   PHP reference http://www.php.net/manual/en/function.is-scalar.php
6. The assignment operator is the equal sign, "=", similar to other languages.
7. The most often used debugging technique is to print out the contents
   of variables used in the program.  This is done using variations of
   the print function.
8. Both single quotes and double quotes can be used to define strings.
   Using single quotes does not allow interpretation (substitution) of variables
   that are mentioned in the string, the string is defined exactly as
   specified.
   Using double quotes allows for the replacement of variables with their
   values in the definition of the string.

Pursue
1. See variables.php for different types of variables.
2. See variables2.php which was modified to output links for CN Tower.

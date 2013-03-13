Chapter 7 - Using Arrays
Review & Pursue responses by Teresa Chin

Review
------
1. What is the difference between an indexed array and an associative array?
	An indexed array is an array with numbers as keys.
	An associative array is an array with strings as the keys.

2. When should you use quotation marks for an array's key value?
   When shouldn't you?
	Use quotation marks when the key is a string value.
	Don't use quotation marks when the key is a constant, number or variable.

3. How do you print a specific array element?
   How do you print every element in an array?
	Use square brackets and specify the key for the specific array element.
	To print every element in an array, use print_r() or dump_var() functions
	or use a foreach loop or for loop.

4. What happens if you don't use the square brackets when adding an element
   to an array?
	You reset the whole array.

5. What function returns the number of elements in an array?
	count() or sizeof() can return the number of elements in an array.

6. When must you use curly brackets for printing array elements?
	Use curly brackets to avoid parse errors when referencing array elements
	of an associative array with double quotation marks.

7. What is the difference between the sort() and asort() functions?
   Between sort() and rsort()?
	sort() sorts by value but does not perserve the key value associations.
	asort() sorts by value and maintains the key-value relationships.
	sort() sorts values in ascending order whereas rsort() sorts in reverse
	(descending order).

8. What is the syntax for explode()? For implode()?
	explode($separator, $string [,$limit]) returns an array of elements found in
		$string where each element is separated from the next
		as defined by the $separator string. The optional parameter $limit
		specifies the max number of elements returned in the array.
		If no $limit is specified, all elements are returned.

	implode($glue, $array) returns a concatenation of array elements
		separated by the string described by $glue


Pursue
------
1. Check out the PHP manual pages for array-related functions. Look into some
   of the other available array functions. In particular I'd recommend
   familiarizing yourelf with array_key_exists(), array_search() and in_array()
	array_key_exists( $key, $search_array )
	    returns boolean value whether the key exists in the array.
	array_search( $needle, $haystack [, $strict])
		returns key if the $needle value is found in the array.
	in_array( $needle, $haystack [, $strict])
		returns boolean whether the $needle value is found in the array $haystack

2. Rewrite soups2.php so that it displays the number of elements in the array
   without using a separate variable. Hint: You'll need to concatenate the
   count() function call into the print statement.
	--> see soups2.php

3. Create another script that creates and displays a multidimensional array.
	--> see library.php

4  Rewrite list.php so that it uses foreach instead of implode(), but still
   prints each sorted word on its own line in the browser. Also add some form
   validation so that it only attempts to parse and sort the string if it has a value.
   --> see version 7.7a of list.php

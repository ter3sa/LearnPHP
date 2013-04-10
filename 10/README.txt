Chapter 10 - Creating Functions
===============================
Review and Pursue responses for Teresa Chin

Review
------
1. What is the basic syntax of a user-defined function?

   A user-defined function is introduced using the keyword 'function'
   followed by the function name and then arguments in parentheses
   and followed by the definition of the body of the function enclosed in
   braces, "{ }". As follows:
     function function_name ([$argument1, $argument2 , $argument3, ..]) {
        // body of the function is a collection of statements
        // which may or may not include a return statement.
     }

2. What naming rules must your own functions abide by?
    
   PHP function names begins with a letter and is followed
   by any combination of alphanumeric characters and underscore characters.
   Function names are case insensitive, i.e. both upper and lower case letters
   map to the same letter. Although not recommended, it is possible to
   define a function name in uppercase and call it in lowercase and it
   will resolve to the same function.

3. What naming rules must your own function arguments abide by?

   Arguments follow the same rules as variable names in PHP:
   begins with a dollar sign ($), alphanumeric, underscores are allowed.
   Variable names are case sensitive, i.e. upper and lower case letters
   are distinct characters.

4. How do you provide a default value for a function's argument?

   A default value can be specified when defining a functions's arguments.
   Wherever there is a default value defined, if no argument is specified
   when the function is invoked, the default value will be used.

5. In the example code in the "Understnding Variable Scope" section of
   the chapter, why does the code use "\$n"? What would happen if the
   the backslash wasn't there?

   The backslash is used to escape the dollar sign so that the special
   character ($) will be printed and not interpreted as part of a variable name.
   If the dollar sign is not escaped the variable $n will be substituted
   twice in the double quoted string ,"\$n equals $n" , and the output would
   say "1 equals 1" which is true but not very helpful debugging information.

6. What is variable scope? What scope does a function argument variable have?
   
   Variable scope is the realm of the program where a variable is visible
   and effective. The scope can be defined as global, i.e. being available and
   accessible within the whole program (inside and outside of functions) or
   local which limits the accessibility to within the current function.

7. What scope does a variable in an included file have?

   The scope of a variable in an included file is the scope defined
   wherever the included code is expanded.
   For example, if a file is included inside a function, then the variables
   are local to the function. If included outside a function then
   the variables may be of global scope in the main script.
   See checking_scope.php for an example.

Pursue
------
1. Make the function in menus.php take arguments to indiciate the starting
   year and the number of years to generate. Make the later argument have a
   have a default value. Then rewrite the function body so that it uses these
   values in the year for loop.
    --> See menus.php Script 10.6

2. Rewrite the make_text_input() function so that it can be told whether to
   look for an existing value in either  $_POST or $_GET.
    --> See sticky3.php Script 10.7

3. Create a variation on the make_text_input() function that can create
   a text input or a password input, depending upon how the function
   is called.
    --> See sticky4.php Script 10.8

4. Come up with a idea for, create, and use your own custom function.
    --> See debug.inc debugging functions to turn on and off debugging
        information via GET parameter supplied 
